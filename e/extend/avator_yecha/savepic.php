<?php
require("../../class/connect.php");
require("../../class/q_functions.php");
require("../../class/db_sql.php");
require("../../member/class/user.php");
$link=db_connect();
$empire=new mysqlquery();
$editor=1;
eCheckCloseMods('member');//关闭模块
$user=islogin();
$r=ReturnUserInfo($user[userid]);
$addr=$empire->fetch1("select * from {$dbtbpre}enewsmemberadd where userid='$user[userid]' limit 1");
//生成头像
$rs = array();
$userid=$addr[userid];
$username=$user[username];
$filepass=0;
switch($_GET['action']){

	//上传临时图片
	case 'uploadtmp':
		$file = 'uploadtmp.jpg';
		@move_uploaded_file($_FILES['Filedata']['tmp_name'], $file);
		$rs['status'] = 1;
		$rs['url'] = './php/' . $file;
	break;

	//上传切头像
	case 'uploadavatar':
		$input = file_get_contents('php://input');
		$data = explode('--------------------', $input);
		@file_put_contents('../../../d/file/avator/user'.$userid.'_avator.jpg', $data[0]); //180x180
		//原图 @file_put_contents('../../../d/file/avator/yt_user'.$userid.'_avator.jpg', $data[1]); 
		makethumb('../../../d/file/avator/user'.$userid.'_avator.jpg','../../../d/file/avator/user'.$userid.'_avator.jpg',180,180,1);
		makethumb('../../../d/file/avator/user'.$userid.'_avator.jpg','../../../d/file/avator/user'.$userid.'_avator100x100.jpg',100,100,1);
		makethumb('../../../d/file/avator/user'.$userid.'_avator.jpg','../../../d/file/avator/user'.$userid.'_avator50x50.jpg',50,50,1);
		makethumb('../../../d/file/avator/user'.$userid.'_avator.jpg','../../../d/file/avator/user'.$userid.'_avator20x20.jpg',20,20,1);
		//写入数据库
		$avatorurl="/d/file/avator/user".$userid."_avator.jpg";
		$filename="user".$userid."_avator.jpg";
		$empire->query("update {$dbtbpre}enewsmemberadd set userpic='$avatorurl' where userid='$userid'");
		$filesize=abs(filesize('../../../d/file/avator/user'.$userid.'_avator.jpg'));
		$tx=$empire->fetch1("select * from {$dbtbpre}enewsfile_member where filename='$filename' limit 1");
		$filetime=strtotime("now");
		if (empty($tx[fileid])){
			$empire->query("insert into {$dbtbpre}enewsfile_member(filename,filesize,adduser,path,filetime,no,type,id,cjid,onclick,fpath,modtype) values('$filename','$filesize','[EditInfo]$username','avator','$filetime','Member[userpic]','1','1','0','0','2','6')"); 
			} else{
			$empire->query("update {$dbtbpre}enewsfile_member set filesize='$filesize',filetime='$filetime' where filename='$filename'"); 
		}
		
		$rs['status'] = 1;
	break;

	default:
		$rs['status'] = -1;
}

print json_encode($rs);


function makethumb($srcfile,$dir,$thumbwidth,$thumbheight,$ratio=0)
{ 
 //判断文件是否存在 
if (!file_exists($srcfile))return false;
 //生成新的同名文件，但目录不同 
$imgname=explode('/',$srcfile); 
$arrcount=count($imgname); 
$dstfile = $dir; 
//缩略图大小 
$tow = $thumbwidth; 
$toh = $thumbheight;   
 //获取图片信息 
    $im =''; 
    if($data = getimagesize($srcfile)) { 
        if($data[2] == 1) { 
            $make_max = 0;//gif不处理 
            if(function_exists("imagecreatefromgif")) { 
                $im = imagecreatefromgif($srcfile); 
            } 
        } elseif($data[2] == 2) { 
            if(function_exists("imagecreatefromjpeg")) { 
                $im = imagecreatefromjpeg($srcfile); 
            } 
        } elseif($data[2] == 3) { 
            if(function_exists("imagecreatefrompng")) { 
                $im = imagecreatefrompng($srcfile); 
            } 
        } 
    } 
    if(!$im) return ''; 
    $srcw = imagesx($im); 
    $srch = imagesy($im); 
    $towh = $tow/$toh; 
    $srcwh = $srcw/$srch; 
    if($towh <= $srcwh){ 
        $ftow = $tow; 
        $ftoh = $ftow*($srch/$srcw); 
    } else { 
        $ftoh = $toh; 
        $ftow = $ftoh*($srcw/$srch); 
    } 
    if($ratio){ 
        $ftow = $tow; 
        $ftoh = $toh; 
    } 
    //缩小图片 
    if($srcw > $tow || $srch > $toh || $ratio) { 
        if(function_exists("imagecreatetruecolor") && function_exists("imagecopyresampled") && @$ni = imagecreatetruecolor($ftow, $ftoh)) { 
            imagecopyresampled($ni, $im, 0, 0, 0, 0, $ftow, $ftoh, $srcw, $srch); 
        } elseif(function_exists("imagecreate") && function_exists("imagecopyresized") && @$ni = imagecreate($ftow, $ftoh)) { 
            imagecopyresized($ni, $im, 0, 0, 0, 0, $ftow, $ftoh, $srcw, $srch); 
        } else { 
            return ''; 
        } 
        if(function_exists('imagejpeg')) { 
            imagejpeg($ni, $dstfile); 
        } elseif(function_exists('imagepng')) { 
            imagepng($ni, $dstfile); 
        } 
    }else { 
        //小于尺寸直接复制 
    copy($srcfile,$dstfile); 
    } 
    imagedestroy($im); 
    if(!file_exists($dstfile)) { 
        return ''; 
    } else { 
        return $dstfile; 
    } 
}
?>
