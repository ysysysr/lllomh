<?php
//---------------------------用户自定义标签函数文件
function user_time($tm,$num) {
if($num==1){
   $tm =  strtotime($tm);                        //将输入的时间时间截化
} 
   $cur_tm = time(); $dif = $cur_tm-$tm;
   $pds = array('秒','分钟','小时','天','周','个月','年');
   $lngh = array(1,60,3600,86400,604800,2630880,31570560);
   for($v = sizeof($lngh)-1; ($v >= 0)&&(($no = $dif/$lngh[$v])<=1); $v--); if($v < 0) $v = 0; $_tm = $cur_tm-($dif%$lngh[$v]);
   $no = floor($no); 
   //如果要把格式改成"X分钟 前"的话,请把%d%s改成%d %s
   $x=sprintf("%d%s",$no,$pds[$v]);
   return $x."前";
}
      
	  
function user_otherlink($limit=5){
	global $dbtbpre,$empire,$navinfor,$class_r;
    if($navinfor[infotags]){
    	$classid=(int)$classid;
        $limit=(int)$limit;
        $tbname=$class_r[$navinfor[classid]][tbname];
        $tagarr=explode(",",$navinfor[infotags]);
        $arr=array();
        $num=ceil($limit/count($tagarr));
        foreach($tagarr as $k=>$v){
			if(count($tagarr)==$k+1){
				$num=$limit-count($arr);
			}else{
				if($i<$num){
					$num=ceil(($limit-count($arr))/count($tagarr));
				}		
			}
            $t=$empire->fetch1("select tagid,num from {$dbtbpre}enewstags where tagname='$v'");
			if($t[tagid]){
				$sql=$empire->query("select id from {$dbtbpre}enewstagsdata where tagid=$t[tagid]");
				$i=0;
				while($s=$empire->fetch($sql)){
					if(in_array($s[id],$arr)||$s[id]==$navinfor[id]){
						continue;
					}else{
						$arr[]=$s[id];
						$i++;
					}
					if($i==$num){
						break;
					}
					if(count($arr)==$limit){
						break 2;
					}
				}
				if($t[num]>$num){
					$linshi=$t[tagid];
				}
			} 
        }
        if(count($arr)>0){
			$inid=implode(",",$arr);
			if(count($arr)<$limit&&$linshi){
				$sql=$empire->query("select id from {$dbtbpre}enewstagsdata where tagid=$linshi and id not in($inid)");
				while($s=$empire->fetch($sql)){
					$arr[]=$s[id];
					if(count($arr)==$limit){
						break;
					}
				}
			}
			$inid=implode(",",$arr);
			$str="";
			$news=$empire->query("select id,title,titleurl,titlepic from {$dbtbpre}ecms_{$tbname} where id in($inid)");
			while($n=$empire->fetch($news)){
				$str.='<li><a href="'.$n[titleurl].'"><img data-original="'.sys_ResizeImg($n[titlepic]?$n[titlepic]:'/skin/ecms009/images/random/titlepic/'.rand(1,15).'.jpg',240,180,1).'" class="thumb"/>'.$n[title].'</a></li>';
			}	
		}
        return $str;
   	}
}



function User_tags(){
	global $dbtbpre,$empire;
	$zm=$empire->query("select infozm from {$dbtbpre}enewstags group by infozm order by infozm asc");
	$html='';
	$allzm='';
	while($z=$empire->fetch($zm)){
		$infozm='<span class="title">'.$z[infozm].'</span>';
		$allzm.='<a href="#'.$z[infozm].'">'.$z[infozm].'</a>';
		$sql=$empire->query("select tagname from {$dbtbpre}enewstags where infozm='$z[infozm]'");
		$str='';
		while($s=$empire->fetch($sql)){
			$str.='<a href="/e/tags/?tagname='.$s[tagname].'" title="tag" target="_blank">'.$s[tagname].'</a>';
		}
		$html.='<li id="'.$z[infozm].'" class="area">
					'.$infozm.'
					<p>
					'.$str.'
					</p>
					</li>';
	}
	$info[zm]=$allzm;
	$info[html]=$html;
	return $info;
}


?>