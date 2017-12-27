<?php
require('../../class/connect.php');
require('../../class/db_sql.php');
require('../../class/functions.php');
require('../../class/t_functions.php');
$link=db_connect();
$empire=new mysqlquery();
$userid=(int)getcvar('mluserid');
$picpath=ECMS_PATH.$public_r['fileurl'].date("Y-m-d",time())."/";
$txt=$userid.".txt";
file_put_contents($txt,$picpath);
DoMkdir($picpath);
$file_src = $picpath.$userid."src.png"; 
$filename162 = $picpath.$userid."1.png"; 
$filename48 = $picpath.$userid."2.png"; 
$filename20 = $picpath.$userid."3.png"; 
$src=base64_decode($_POST['pic']);
$pic1=base64_decode($_POST['pic1']);   
$pic2=base64_decode($_POST['pic2']);  
$pic3=base64_decode($_POST['pic3']);
$userpic=$public_r['fileurl'].date("Y-m-d",time())."/".$userid."1.png"; 
$empire->query("update {$dbtbpre}enewsmemberadd set userpic='$userpic' where userid='$userid'");
if($src) {
	file_put_contents($file_src,$src);
}
file_put_contents($filename162,$pic1);
file_put_contents($filename48,$pic2);
file_put_contents($filename20,$pic3);
$rs['status'] = 1;
print json_encode($rs);
db_close();
$empire=null;
?>