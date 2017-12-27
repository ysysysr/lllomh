<?php
require("../../class/connect.php");
eCheckCloseMods('pl');//关闭模块
$id=(int)$_GET['id'];
$classid=(int)$_GET['classid'];
$num=(int)$_GET['num'];
if($num<1||$num>80)
{
	$num=10;
}
$doaction=$_GET['doaction']=='dozt'?'dozt':'';
require("../../class/db_sql.php");
require("../../class/q_functions.php");
$link=db_connect();
$empire=new mysqlquery();
//专题
if($doaction=='dozt')
{
	if(empty($classid))
	{
		exit();
	}
	//信息
	$infor=$empire->fetch1("select ztid,restb from {$dbtbpre}enewszt where ztid='$classid' limit 1");
	if(!$infor['ztid'])
	{
		exit();
	}
	$pubid='-'.$classid;
}
else
{
	if(empty($id)||empty($classid))
	{
		exit();
	}
	include("../../data/dbcache/class.php");
	if(empty($class_r[$classid]['tbname']))
	{
		exit();
	}
	//信息
	$infor=$empire->fetch1("select classid,restb from {$dbtbpre}ecms_".$class_r[$classid]['tbname']." where id='$id' limit 1");
	if(!$infor['classid']||$infor['classid']!=$classid)
	{
		exit();
	}
	$pubid=ReturnInfoPubid($classid,$id);
}
//排序
$addorder='plid desc';
$myorder=(int)$_GET['myorder'];
if($myorder==1)
{
	$addorder='plid';
}
$sql=$empire->query("select * from {$dbtbpre}enewspl_".$infor['restb']." where pubid='$pubid' and checked=0 order by ".$addorder." limit ".$num);
?>
document.write("");
<?php
while($r=$empire->fetch($sql))
{
	$plusername=$r[username];
	if(empty($r[username]))
	{
		$plusername='匿名';
	}
	if($r[userid])
	{
		$plusername="<a href='$public_r[newsurl]e/space/?userid=$r[userid]' target='_blank'>$r[username]</a>";
	}
	$saytime=date('Y-m-d H:i:s',$r['saytime']);
	//ip
	$sayip=ToReturnXhIp($r[sayip]);
	$saytext=str_replace("\r\n","",$r['saytext']);
	$saytext=addslashes(RepPltextFace(stripSlashes($saytext)));//替换表情
?>
document.write(" <li class=\"comment even thread-even depth-1\" id=\"comment-<?=$r[plid]?>\">            <div class=\"c-avatar\"><img alt=\'\' data-original=\'http://www.gonghaibo.com/skin/ecms009/images/default.png\' class=\'avatar avatar-50 photo\' height=\'50\' width=\'50\' /></div>            <div class=\"c-main\" id=\"div-comment-<?=$r[plid]?>\"><span class=\"c-author\"><a href=\'http://www.gonghaibo.com/e/space/?userid=<?=$r[userid]?>\' rel=\'external nofollow\' class=\'url\'><?=$plusername?></a></span><?=$saytext?>              <time class=\"c-time\"><?=$saytime?></time>              <a class=\'comment-reply-link\' href=\'#tosaypl\' onclick=\'return addComment.moveForm(\"div-comment-<?=$r[plid]?>\", \"<?=$r[plid]?>\", \"respond\", \"<?=$r[plid]?>\")\' >回复</a></div>          </li>");
<?php
}
?>
document.write("");
<?php
db_close();
$empire=null;
?>