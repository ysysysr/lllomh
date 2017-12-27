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
  	$userpic=$m['userpic']?$m['userpic']:$public_r[newsurl].'skin/ecms009/images/random/userpic/'.rand(1,66).'.gif';	
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

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>ç™»é™†</title>
<LINK href="../../data/images/qcss.css" rel=stylesheet>
</head>
<body bgcolor="#ededed" topmargin="0">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
	<td height="23" align="center">
	<div align="left">
		&raquo;&nbsp;<font color=red><b><?=$myusername?></b></font>&nbsp;&nbsp;<a href="../my/" target="_parent"><?=$groupname?></a>&nbsp;<?=$havemsg?>&nbsp;<a href="http://www.gonghaibo.com/e/space/?userid=<?=$myuserid?>" target=_blank>æˆ‘çš„ç©ºé—´</a>&nbsp;&nbsp;<a href="../msg/" target=_blank>çŸ­ä¿¡æ¯</a>&nbsp;&nbsp;<a href="../fava/" target=_blank>æ”¶è—å¤¹</a>&nbsp;&nbsp;<a href="../cp/" target="_parent">æ§åˆ¶é¢æ¿</a>&nbsp;&nbsp;<a href="../../member/doaction.php?enews=exit&prtype=9" onclick="return confirm('ç¡®è®¤è¦é€€å‡º?');">é€€å‡º</a> 
	</div>
	</td>
    </tr>
</table>
</body>
</html>
<?
}
else
{
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>ç™»é™†</title>
<LINK href="../../data/images/qcss.css" rel=stylesheet>
</head>
<body bgcolor="#ededed" topmargin="0">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
  <form name=login method=post action="../../member/doaction.php">
    <input type=hidden name=enews value=login>
    <input type=hidden name=prtype value=1>
    <tr> 
      <td height="23" align="center">
      <div align="left">
      ç”¨æˆ·åï¼š<input name="username" type="text" size="8">&nbsp;
      å¯†ç ï¼š<input name="password" type="password" size="8">
      <select name="lifetime" id="lifetime">
         <option value="0">ä¸ä¿å­˜</option>
         <option value="3600">ä¸€å°æ—¶</option>
         <option value="86400">ä¸€å¤©</option>
         <option value="2592000">ä¸€ä¸ªæœˆ</option>
         <option value="315360000">æ°¸ä¹…</option>
      </select>&nbsp;
      <input type="submit" name="Submit" value="ç™»é™†">&nbsp;
      <input type="button" name="Submit2" value="æ³¨å†Œ" onclick="window.open('../register/');">
      </div>
      </td>
    </tr>
  </form>
</table>
</body>
</html>

<?
}
?>