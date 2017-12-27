<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='购物车页面';
$url="<a href=../../../>首页</a>&nbsp;>&nbsp;<a href=../cp/>会员中心</a>&nbsp;>&nbsp;购物车页面";
require(ECMS_PATH.'e/template/incfile/header.php');
?>
<!DOCTYPE HTML PUBLIC -//W3C//DTD HTML 4.01 Transitional//EN>
<html>
<head>
<meta http-equiv=Content-Type content=text/html; charset=utf-8>
<title>我的购物车</title>
<link href=../../data/images/qcss.css rel=stylesheet type=text/css>
<script language="javascript">
window.resizeTo(760,600);
window.focus();
</script>
</head>

<body>
<?php
include('buycar/buycar_form.php');
?>
<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>