<?php
require("../class/connect.php");
require("../class/db_sql.php");
require('../data/dbcache/class.php');
$link=db_connect();
$empire=new mysqlquery();
global $public_r;
$public_r[newsurl]=rtrim($public_r[newsurl],"/");
$ddid=(int)getcvar('paymoneyddid');
if(!$ddid){
	printerror('您来自的链接不存在','',1,0,1);
}
$f=$empire->fetch1("select userid,haveprice from {$dbtbpre}enewsshopdd where ddid=$ddid");
if($f[userid]){
	$userid=(int)getcvar('mluserid');
	if(!$userid){
		printerror('请先登录会员','/e/member/login/',1,0,1);
	}
}
if(!$f[haveprice]){
	printerror('抱歉！您未付款！','',1,0,1);
}
$s=$empire->fetch1("select ddid,buycar from {$dbtbpre}enewsshopdd_add where ddid=$ddid");
if(!$s[ddid]){
	printerror('您来自的链接不存在','',1,0,1);
}	
$b=explode("!",$s[buycar]);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>返回结果</title>

</head>
<body style="text-align:center; margin:0 auto">
<?php
	for($i=0;$i<count($b)-1;$i++){
		$pr=explode("|",$b[$i]);
		$fr=explode(",",$pr[1]);
		//ID
		$classid=(int)$fr[0];
		$id=(int)$fr[1];
		if(empty($class_r[$classid][tbname]))
		{
			continue;
		}
		//取得产品信息
		$p=$empire->fetch1("select id,classid,title,price,downpath,downurltext from {$dbtbpre}ecms_".$class_r[$classid][tbname]." where id='$id' limit 1");
		if(!$p['id']||$p['classid']!=$classid)
		{
			continue;
		}
		$down=explode("\r\n",$p[downpath]);
		$downpathhtml="";
		for($j=0;$j<count($down);$j++){
			$downpath=explode("::::::",$down[$i]);
			$downpathhtml.='<a href="'.$downpath[1].'" style="color:#000; text-decoration:none" target="_blank">'.$downpath[1].'</a><br>';
		}
		echo '
				<div style="text-align:center; margin:80px auto;">.
				   <table align="center" cellspacing="0" cellpadding="0" width="840" border="0"  style="background: #FFFFFF ; text-align:center  ">
			  <tbody>
			   
				
				  <tr>
				  <td width="12%" style="font-size: 14px; font-family:\'微软雅黑\';text-align:center; color: #000000; padding: 5px; line-height: 36px; border-right:1px solid#CCCCCC; border-bottom:1px solid #FFFFFF; border-left:1px solid#CCCCCC;font-weight: bold; color:#244986; background:  #b5d4e2;">产品名称:</td>
				  <td colspan="5" style="font-size: 12px; font-family:\'微软雅黑\'; color: #000000; padding: 5px; line-height: 36px;border-right:1px solid #FFFFFF; border-bottom:1px solid #FFFFFF ; text-align: left; padding-left:30px; background: #F9F9F9">'.$p[title].'</td>
				  </tr>
				   <tr>
				  <td style="font-size: 14px; font-family:\'微软雅黑\';text-align:center; color: #000000; padding: 5px; line-height: 36px; border-right:1px solid#CCCCCC; border-bottom:1px solid #FFFFFF; border-left:1px solid#CCCCCC;font-weight: bold; color:#244986; background:  #b5d4e2;">下载地址:</td>
				  <td colspan="3" style="font-size: 12px; font-family:\'微软雅黑\'; color: #000000; padding: 5px; line-height: 36px;border-right:1px solid #FFFFFF; border-bottom:1px solid #FFFFFF ; text-align: left; padding-left:30px; background: #F9F9F9">'.$downpathhtml.'</td>
			
			
				  <td colspan="2" style="font-size: 12px; font-family:\'微软雅黑\'; color: #000000; padding: 5px; line-height: 36px; border-bottom:1px solid  #FFFFFF border-right:1px solid #FFFFFF;border-bottom:1px solid #FFFFFF ; text-align: left; padding-left:30px; background: #F9F9F9">提取密码：'.$p[downurltext].'</td>
				</tr>
				   <td colspan="6" style="font-size: 14px; font-family:\'微软雅黑\';text-align:center; color: #000000; padding: 5px; line-height: 36px; border-bottom:1px solid #F3F3F3; font-weight: bold; color: #CCCCCC; height:60px ">如果资源不能下载，，提取密码错误，链接失效等下载问题，请反馈到邮箱：48444431@qq.com 我们会在第一时间给您处理！</td>
				  </tr>
			  </tbody>
			</table>
			</div>
			';
	}
?>

</body>
</html>
<?php
db_close();
$empire=null;
?>
