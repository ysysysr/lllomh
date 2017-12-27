<?php
require("../class/connect.php");
require("../class/db_sql.php");
$link=db_connect();
$empire=new mysqlquery();
//关闭投稿
if($public_r['addnews_ok'])
{
	printerror("CloseQAdd","",1);
}
//验证本时间允许操作
eCheckTimeCloseDo('info');
//验证IP
eCheckAccessDoIp('postinfo');
$mr=$empire->fetch1("select mid,qenter,qmname,tbname from {$dbtbpre}enewsmod where mid='$mid'");
$muserid=(int)getcvar('mluserid');
$musername=RepPostVar(getcvar('mlusername'));
if(empty($musername))
{
	$musername="游客";
}
$classjs=$public_r['newsurl']."d/js/js/addinfo".$mid.".js";
//导入模板
require(ECMS_PATH.'e/template/DoInfo/ChoseClass.php');
db_close();
$empire=null;
?>