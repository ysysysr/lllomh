<?php
require("../class/connect.php");
require("../class/db_sql.php");
$link=db_connect();
$empire=new mysqlquery();
//�ر�Ͷ��
if($public_r['addnews_ok'])
{
	printerror("CloseQAdd","",1);
}
//��֤��ʱ���������
eCheckTimeCloseDo('info');
//��֤IP
eCheckAccessDoIp('postinfo');
$mr=$empire->fetch1("select mid,qenter,qmname,tbname from {$dbtbpre}enewsmod where mid='$mid'");
$muserid=(int)getcvar('mluserid');
$musername=RepPostVar(getcvar('mlusername'));
if(empty($musername))
{
	$musername="�ο�";
}
$classjs=$public_r['newsurl']."d/js/js/addinfo".$mid.".js";
//����ģ��
require(ECMS_PATH.'e/template/DoInfo/ChoseClass.php');
db_close();
$empire=null;
?>