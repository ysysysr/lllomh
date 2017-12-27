<?php
define('InEmpireCMSGd',TRUE);
/**   
* 功能:生成缩略图   
*/   
class CreatMiniature    
{    
    //公共变量    
    var $srcFile="";        //原图    
    var $echoType;          //输出图片类型，link--不保存为文件；file--保存为文件    
    var $im="";             //临时变量    
    var $srcW="";           //原图宽    
    var $srcH="";           //原图高    

/*
	//使用说明
    include("gd.php");
    $cm=new CreatMiniature();
    $cm->SetVar("6.png","file");
    //$cm->Distortion("dis_bei.jpg",300,500);//变形的
    //$cm->Prorate("pro_bei.jpg",150,200);//按比例以宽高为基准
    // $cm->Cut("cut_bei.png",160,120);//剪切
    $cm->BackFill("fill_bei.jpg",150,200);//缩放填充背景
*/
   

    //设置变量及初始化    
    function SetVar($srcFile,$echoType)    
    {    
        if (!file_exists($srcFile)){    
            echo '源图片文件不存在!';    
            exit();    
        }    
        $this->srcFile=$srcFile;    
        $this->echoType=$echoType;    

        $info = "";    
        $data = GetImageSize($this->srcFile,$info);    
        switch ($data[2])     
        {    
         case 1:    
           if(!function_exists("imagecreatefromgif")){    
            echo "你的GD库不能使用GIF格式的图片，请使用Jpeg或PNG格式！<a href='javascript:go(-1);'>返回</a>";    
            exit();    
           }    
           $this->im = ImageCreateFromGIF($this->srcFile);    
           break;    
        case 2:    
          if(!function_exists("imagecreatefromjpeg")){    
           echo "你的GD库不能使用jpeg格式的图片，请使用其它格式的图片！<a href='javascript:go(-1);'>返回</a>";    
           exit();    
          }    
          $this->im = ImageCreateFromJpeg($this->srcFile);        
          break;    
        case 3:    
          $this->im = ImageCreateFromPNG($this->srcFile);        
          break;    
      }    
      $this->srcW=ImageSX($this->im);    
      $this->srcH=ImageSY($this->im);     
    }    

    //生成扭曲型缩图    
    function Distortion($toFile,$toW,$toH)    
    {    
        $cImg=$this->CreatImage($this->im,$toW,$toH,0,0,0,0,$this->srcW,$this->srcH);    
        return $this->EchoImage($cImg,$toFile);    
        ImageDestroy($cImg);    
    }      

    //生成按比例缩放的缩图    
    function Prorate($toFile,$toW,$toH)    
    {    

        $toWH=$toW/$toH;    
        $srcWH=$this->srcW/$this->srcH;    
        if($toWH<=$srcWH)    
        {    
            $ftoW=$toW;    
            $ftoH=$ftoW*($this->srcH/$this->srcW);    
        }    
        else   
        {    
              $ftoH=$toH;    
              $ftoW=$ftoH*($this->srcW/$this->srcH);    
        }    
        if($this->srcW>$toW||$this->srcH>$toH)    
        {    
            $cImg=$this->CreatImage($this->im,$ftoW,$ftoH,0,0,0,0,$this->srcW,$this->srcH);    
            return $this->EchoImage($cImg,$toFile);    
            ImageDestroy($cImg);    
        }    
        else   
        {    
            $cImg=$this->CreatImage($this->im,$this->srcW,$this->srcH,0,0,0,0,$this->srcW,$this->srcH);    
            return $this->EchoImage($cImg,$toFile);    
            ImageDestroy($cImg);    
        }    
    }    
    //生成最小裁剪后的缩图    
    function Cut($toFile,$toW,$toH)    
    {    
          $toWH=$toW/$toH;    
          $srcWH=$this->srcW/$this->srcH;    
          if($toWH<=$srcWH)    
          {    
               $ctoH=$toH;    
               $ctoW=$ctoH*($this->srcW/$this->srcH);    
          }    
          else   
          {    
              $ctoW=$toW;    
              $ctoH=$ctoW*($this->srcH/$this->srcW);    
          }     
        $allImg=$this->CreatImage($this->im,$ctoW,$ctoH,0,0,0,0,$this->srcW,$this->srcH);    
        $cImg=$this->CreatImage($allImg,$toW,$toH,0,0,($ctoW-$toW)/2,($ctoH-$toH)/2,$toW,$toH);    
        return $this->EchoImage($cImg,$toFile);    
        ImageDestroy($cImg);    
        ImageDestroy($allImg);    
    }    

    //生成背景填充的缩图    
    function BackFill($toFile,$toW,$toH,$bk1=255,$bk2=255,$bk3=255)    
    {    
        $toWH=$toW/$toH;    
        $srcWH=$this->srcW/$this->srcH;    
        if($toWH<=$srcWH)    
        {    
            $ftoW=$toW;    
            $ftoH=$ftoW*($this->srcH/$this->srcW);    
        }    
        else   
        {    
              $ftoH=$toH;    
              $ftoW=$ftoH*($this->srcW/$this->srcH);    
        }    
        if(function_exists("imagecreatetruecolor"))    
        {    
            @$cImg=ImageCreateTrueColor($toW,$toH);    
            if(!$cImg)    
            {    
                $cImg=ImageCreate($toW,$toH);    
            }    
        }    
        else   
        {    
            $cImg=ImageCreate($toW,$toH);    
        }    
        $backcolor = imagecolorallocate($cImg, $bk1, $bk2, $bk3);        //填充的背景颜色    
        ImageFilledRectangle($cImg,0,0,$toW,$toH,$backcolor);    
        if($this->srcW>$toW||$this->srcH>$toH)    
        {         
            $proImg=$this->CreatImage($this->im,$ftoW,$ftoH,0,0,0,0,$this->srcW,$this->srcH);    
             if($ftoW<$toW)    
             {    
                 ImageCopy($cImg,$proImg,($toW-$ftoW)/2,0,0,0,$ftoW,$ftoH);    
             }    
             else if($ftoH<$toH)    
             {    
                 ImageCopy($cImg,$proImg,0,($toH-$ftoH)/2,0,0,$ftoW,$ftoH);    
             }    
             else   
             {    
                 ImageCopy($cImg,$proImg,0,0,0,0,$ftoW,$ftoH);    
             }    
        }    
        else   
        {    
             ImageCopyMerge($cImg,$this->im,($toW-$ftoW)/2,($toH-$ftoH)/2,0,0,$ftoW,$ftoH,100);    
        }    
        return $this->EchoImage($cImg,$toFile);    
        ImageDestroy($cImg);    
    }    

    function CreatImage($img,$creatW,$creatH,$dstX,$dstY,$srcX,$srcY,$srcImgW,$srcImgH)    
    {    
        if(function_exists("imagecreatetruecolor"))    
        {    
            @$creatImg = ImageCreateTrueColor($creatW,$creatH);    
            if($creatImg)     
                ImageCopyResampled($creatImg,$img,$dstX,$dstY,$srcX,$srcY,$creatW,$creatH,$srcImgW,$srcImgH);    
            else   
            {    
                $creatImg=ImageCreate($creatW,$creatH);    
                ImageCopyResized($creatImg,$img,$dstX,$dstY,$srcX,$srcY,$creatW,$creatH,$srcImgW,$srcImgH);    
            }    
         }    
         else   
         {    
            $creatImg=ImageCreate($creatW,$creatH);    
            ImageCopyResized($creatImg,$img,$dstX,$dstY,$srcX,$srcY,$creatW,$creatH,$srcImgW,$srcImgH);    
         }    
         return $creatImg;    
    }       

    //输出图片，link---只输出，不保存文件。file--保存为文件    
    function EchoImage($img,$to_File)    
    {    
        switch($this->echoType)    
        {    
            case "link":    
                if(function_exists('imagejpeg')) return ImageJpeg($img);    
                else return ImagePNG($img);    
                break;    
            case "file":    
                if(function_exists('imagejpeg')) return ImageJpeg($img,$to_File);    
                else return ImagePNG($img,$to_File);    
                break;    
        }    
    }    
}    

//原文件,新文件,宽度,高度,维持比例
function ResizeImage($big_image_name, $new_name, $max_width = 400, $max_height = 400, $resize = 1)
{
	$returnr['file']='';
	$returnr['filetype']='';
    if($temp_img_type = @getimagesize($big_image_name)) {preg_match('/\/([a-z]+)$/i', $temp_img_type[mime], $tpn); $img_type = $tpn[1];}
    else {preg_match('/\.([a-z]+)$/i', $big_image_name, $tpn); $img_type = $tpn[1];}
    $all_type = array(
        "jpg"   => array("exn"=>".jpg"),
        "gif"   => array("exn"=>".gif"),
        "jpeg"  => array("exn"=>".jpg"),
        "png"   => array("exn"=>".png"),
        "wbmp"  => array("exn"=>".wbmp")
    );
	
    $func_exname = $all_type[$img_type]['exn'];

    $cm=new CreatMiniature();
	$cm->SetVar($big_image_name,"file");
    
	//剪切图片，小图不够的自动放大
	if($resize==1)
	{
		$cm->Cut($new_name.$func_exname,$max_width,$max_height);
    }
	//按比例缩放图片以 宽 或者 高 为基准
	elseif($resize==2)
	{
		$cm->Prorate($new_name.$func_exname,$max_width,$max_height);
    }
	//缩放图片指定大小空白区填充背景颜色
	elseif($resize==3)
	{
		$cm->BackFill($new_name.$func_exname,$max_width,$max_height,255,255,255);
	}	
	//$resize==0 缩放变形
	else
	{
		$cm->Distortion($new_name.$func_exname,$max_width,$max_height);
	}
	$returnr['file']=$new_name.$func_exname;
	$returnr['filetype']=$func_exname;
	return $returnr; 
}

/* 
* 功能：图片加水印 (水印支持图片或文字) 
* 参数： 
*      $groundImage    背景图片，即需要加水印的图片，暂只支持GIF,JPG,PNG格式； 
*      $waterPos        水印位置，有10种状态，0为随机位置； 
*                        1为顶端居左，2为顶端居中，3为顶端居右； 
*                        4为中部居左，5为中部居中，6为中部居右； 
*                        7为底端居左，8为底端居中，9为底端居右； 
*      $waterImage        图片水印，即作为水印的图片，暂只支持GIF,JPG,PNG格式； 
*      $waterText        文字水印，即把文字作为为水印，支持ASCII码，不支持中文； 
*      $textFont        文字大小，值为1、2、3、4或5，默认为5； 
*      $textColor        文字颜色，值为十六进制颜色值，默认为#FF0000(红色)； 
* 
* 注意：Support GD 2.0，Support FreeType、GIF Read、GIF Create、JPG 、PNG 
*      $waterImage 和 $waterText 最好不要同时使用，选其中之一即可，优先使用 $waterImage。 
*      当$waterImage有效时，参数$waterString、$stringFont、$stringColor均不生效。 
*      加水印后的图片的文件名和 $groundImage 一样。 
*/ 
function imageWaterMark($groundImage,$waterPos=0,$waterImage="",$waterText="",$textFont=5,$textColor="#FF0000",$myfontpath="../data/mask/cour.ttf",$w_pct,$w_quality){
	global $fun_r,$editor;
	if($editor==1){$a='../';}
	elseif($editor==2){$a='../../';}
	elseif($editor==3){$a='../../../';}
	else{$a='';}
	$waterImage=$waterImage?$a.$waterImage:'';
	$myfontpath=$myfontpath?$a.$myfontpath:'';
    $isWaterImage = FALSE; 
    $formatMsg = $fun_r['synotdotype']; 

    //读取水印文件 
    if(!empty($waterImage) && file_exists($waterImage)) 
    { 
        $isWaterImage = TRUE; 
        $water_info = getimagesize($waterImage); 
        $water_w    = $water_info[0];//取得水印图片的宽 
        $water_h    = $water_info[1];//取得水印图片的高 

        switch($water_info[2])//取得水印图片的格式 
        { 
            case 1:$water_im = imagecreatefromgif($waterImage);break; 
            case 2:$water_im = imagecreatefromjpeg($waterImage);break; 
            case 3:$water_im = imagecreatefrompng($waterImage);break; 
            default:echo $formatMsg;return ""; 
        } 
    } 

    //读取背景图片 
    if(!empty($groundImage) && file_exists($groundImage)) 
    { 
        $ground_info = getimagesize($groundImage); 
        $ground_w    = $ground_info[0];//取得背景图片的宽 
        $ground_h    = $ground_info[1];//取得背景图片的高 

        switch($ground_info[2])//取得背景图片的格式 
        { 
            case 1:$ground_im = imagecreatefromgif($groundImage);break; 
            case 2:$ground_im = imagecreatefromjpeg($groundImage);break; 
            case 3:$ground_im = imagecreatefrompng($groundImage);break; 
            default:echo $formatMsg;return ""; 
        } 
    } 
    else 
    { 
        echo $fun_r['synotdoimg'];
		return "";
    } 

    //水印位置 
    if($isWaterImage)//图片水印 
    { 
        $w = $water_w; 
        $h = $water_h; 
        $label = "图片的"; 
    } 
    else//文字水印 
    { 
        $temp = imagettfbbox(ceil($textFont*2.5),0,$myfontpath,$waterText);//取得使用 TrueType 字体的文本的范围 
        $w = $temp[2] - $temp[6]; 
        $h = $temp[3] - $temp[7]; 
        unset($temp); 
        $label = "文字区域"; 
    } 
    if( ($ground_w<$w) || ($ground_h<$h) ) 
    { 
        echo $fun_r['sytoosmall']; 
        return ''; 
    } 
    switch($waterPos) 
    { 
        case 0://随机 
            $posX = rand(0,($ground_w - $w)); 
            $posY = rand(0,($ground_h - $h)); 
            break; 
        case 1://1为顶端居左 
            $posX = 0; 
            $posY = 0; 
            break; 
        case 2://2为顶端居中 
            $posX = ($ground_w - $w) / 2; 
            $posY = 0; 
            break; 
        case 3://3为顶端居右 
            $posX = $ground_w - $w; 
            $posY = 0; 
            break; 
        case 4://4为中部居左 
            $posX = 0; 
            $posY = ($ground_h - $h) / 2; 
            break; 
        case 5://5为中部居中 
            $posX = ($ground_w - $w) / 2; 
            $posY = ($ground_h - $h) / 2; 
            break; 
        case 6://6为中部居右 
            $posX = $ground_w - $w; 
            $posY = ($ground_h - $h) / 2; 
            break; 
        case 7://7为底端居左 
            $posX = 0; 
            $posY = $ground_h - $h; 
            break; 
        case 8://8为底端居中 
            $posX = ($ground_w - $w) / 2; 
            $posY = $ground_h - $h; 
            break; 
        case 9://9为底端居右 
            $posX = $ground_w - $w; 
            $posY = $ground_h - $h; 
            break; 
        default://随机 
            $posX = rand(0,($ground_w - $w)); 
            $posY = rand(0,($ground_h - $h)); 
            break;     
    } 

    //设定图像的混色模式 
    imagealphablending($ground_im, true); 

    if($isWaterImage)//图片水印 
    {
		if($water_info[2]==3)
		{
			imagecopy($ground_im, $water_im, $posX, $posY, 0, 0, $water_w,$water_h);//拷贝水印到目标文件
		}
		else
		{
			imagecopymerge($ground_im, $water_im, $posX, $posY, 0, 0, $water_w,$water_h,$w_pct);//拷贝水印到目标文件
		}
    } 
    else//文字水印 
    { 
        if( !empty($textColor) && (strlen($textColor)==7) ) 
        { 
            $R = hexdec(substr($textColor,1,2)); 
            $G = hexdec(substr($textColor,3,2)); 
            $B = hexdec(substr($textColor,5)); 
        } 
        else 
        { 
            echo $fun_r['synotfontcolor'];
			return "";
        } 
        imagestring ( $ground_im, $textFont, $posX, $posY, $waterText, imagecolorallocate($ground_im, $R, $G, $B));         
    } 

    //生成水印后的图片 
    @unlink($groundImage); 
    switch($ground_info[2])//取得背景图片的格式 
    { 
        case 1:imagegif($ground_im,$groundImage);break; 
        case 2:imagejpeg($ground_im,$groundImage,$w_quality);break; 
        case 3:imagepng($ground_im,$groundImage);break; 
        default:echo $formatMsg;return ""; 
    } 

    //释放内存 
    if(isset($water_info)) unset($water_info); 
    if(isset($water_im)) imagedestroy($water_im); 
    unset($ground_info); 
    imagedestroy($ground_im); 
}
?>