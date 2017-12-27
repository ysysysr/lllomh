<?php
require("../../class/connect.php");
if(!defined('InEmpireCMS'))
{
	exit();
}
eCheckCloseMods('member');//¹Ø±ÕÄ£¿é
$myuserid=(int)getcvar('mluserid');
$mhavelogin=0;
if($myuserid)
{
	include("../../class/db_sql.php");
	include("../../member/class/user.php");
	include("../../data/dbcache/MemberLevel.php");
	$link=db_connect();
	$empire=new mysqlquery();
	$mhavelogin=1;
	//Êı¾İ
	$myusername=RepPostVar(getcvar('mlusername'));
	$myrnd=RepPostVar(getcvar('mlrnd'));
	$r=$empire->fetch1("select ".eReturnSelectMemberF('userid,username,groupid,userfen,money,userdate,havemsg,checked')." from ".eReturnMemberTable()." where ".egetmf('userid')."='$myuserid' and ".egetmf('rnd')."='$myrnd' limit 1");
	
		
	$m=$empire->fetch1("select userpic from {$dbtbpre}enewsmemberadd where userid='$myuserid' limit 1");
  	$userpic=$m['userpic']?$m['userpic']:$public_r[newsurl].'skin/ecms026/images/random/userpic/'.rand(1,66).'.gif';	
	if(empty($r[userid])||$r[checked]==0)
	{
		EmptyEcmsCookie();
		$mhavelogin=0;
	}
	//»áÔ±µÈ¼¶
	if(empty($r[groupid]))
	{$groupid=eReturnMemberDefGroupid();}
	else
	{$groupid=$r[groupid];}
	$groupname=$level_r[$groupid]['groupname'];
	//µãÊı
	$userfen=$r[userfen];
	//Óà¶î
	$money=$r[money];
	//ÌìÊı
	$userdate=0;
	if($r[userdate])
	{
		$userdate=$r[userdate]-time();
		if($userdate<=0)
		{$userdate=0;}
		else
		{$userdate=round($userdate/(24*3600));}
	}
	//ÊÇ·ñÓĞ¶ÌÏûÏ¢
	$havemsg="";
	if($r[havemsg])
	{
		$havemsg="<a href='".$public_r['newsurl']."e/member/msg/' target=_blank><font color=red>ÄúÓĞĞÂÏûÏ¢</font></a>";
	}
	//$myusername=$r[username];
	db_close();
	$empire=null;
}
if($mhavelogin==1)
{
?>
document.write("               <div class=\"widget box row\"><h3>ç”¨æˆ·ç®¡ç†</h3>        <p><div class=\"v_avatar\"><img alt=\"\" src=<?=$userpic?> class=\"avatar avatar-64 photo\" height=\"64\" width=\"64\" /></div>			<div class=\"v_li\">				<li><a class=\"btn\" href=\"/e/member/cp/\" target=\"_blank\">æ§åˆ¶é¢æ¿</a></li>				<li><a class=\"btn\" href=\"/e/DoInfo/ChoseClass.php\" target=\"_blank\">æ’°å†™æ–‡ç« </a></li>				<li><a class=\"btn\" href=\"/e/member/cp/\" target=\"_blank\">æˆ‘çš„ç©ºé—´</a></li>				<li><a class=\"btn\" href=\"/e/member/doaction.php?enews=exit&ecmsfrom=9\" onclick=\"return confirm(\'ç¡®è®¤è¦é€€å‡º?\');\">æ³¨é”€</a></li></div></p><div class=\"clear\"></div>      </div> ");
<?
}
else
{
?>
document.write("<div class=\"widget box row\"><h3>ç”¨æˆ·ç®¡ç†</h3><form id=\"loginform\" name=\"login\" method=\"post\" action=\"/e/member/doaction.php\"><div class=\"loginl\"><p><label>ç”¨æˆ·å</label><input class=\"login\" type=\"text\" name=\"username\" id=\"log\" value=\"\" size=\"12\" /></p><p><label>å¯†ã€€ç </label><input class=\"login\" type=\"password\" name=\"password\" id=\"pwd\" value=\"\" size=\"12\" /></p></div><div class=\"loginr\"><input class=\"denglu btn\" type=\"submit\" name=\"submit\" value=\"ç™» é™†\" /></div><div class=\"clear\"></div><p><a class=\"register\" href=\"/e/member/register/\">ç”¨æˆ·æ³¨å†Œ</a><a class=\"register\" href=\"/e/member/GetPassword/\">å¿˜è®°å¯†ç </a></p><input type=\"hidden\" name=\"enews\" value=\"login\">    <input type=\"hidden\" name=\"ecmsfrom\" value=\"9\"></form> <div class=\"clear\"></div>      </div>        ");
<?
}
?>