<?php
if(!defined('InEmpireCMS'))
{
	exit();
}

//--------------- 界面参数 ---------------
$addr=$empire->fetch1("select * from {$dbtbpre}enewsmemberadd where userid='$user[userid]' limit 1");
$userpic=$addr['userpic']?$addr['userpic']:$public_r[newsurl].'e/data/images/nouserpic.gif';
//--------------- 界面参数 ---------------
$Diybg=$addr['Diybg']?$addr['Diybg']:$public_r[newsurl].'yecha/blogbg.jpg';
if ($addr['lockBgImg']){
	$lockbg=" fixed";
}
if ($addr['bgsize']){
	$bgsize="background-size:100% 100%;";
}
$bgcolor=$addr['bgcolor']?$addr['bgcolor']:'#b7e3c1';
$Bgalign=$addr['Bgalign']?$addr['Bgalign']:'center';
$repeatBg=$addr['repeatBg']?$addr['repeatBg']:'repeat';
$selffile=eReturnSelfPage(0);
if(stristr($selffile,'/member/msg'))
	{
        $znxx=' class=selected';
	}
    elseif(stristr($selffile,'e/DoInfo'))
    {
		$wdtg=' class=selected';
    }
	elseif(stristr($selffile,'e/ShopSys'))
    {
		$wdshop=' class=selected';
    }
    elseif(stristr($selffile,'member/fava'))
    {
		$wdsc=' class=selected';
    }
    elseif(stristr($selffile,'member/mspace/'))
    {
		$wdkj=' class=selected';
    }
    elseif(stristr($selffile,'e/member/friend'))
    {
		$wdhy=' class=selected';
    }
    elseif(stristr($selffile,'e/member/my'))
    {
		$wdjf=' class=selected';
    }
    else
    {
		$grzx=' class=selected';
    }
//网页标题
$thispagetitle=$public_diyr['pagetitle']?$public_diyr['pagetitle']:'会员中心';
//会员信息
$tmgetuserid=(int)getcvar('mluserid');	//用户ID
$tmgetusername=RepPostVar(getcvar('mlusername'));	//用户名
$tmgetgroupid=(int)getcvar('mlgroupid');	//用户组ID
$tmgetgroupname='游客';
//会员组名称
if($tmgetgroupid)
{
	$tmgetgroupname=$level_r[$tmgetgroupid]['groupname'];
	if(!$tmgetgroupname)
	{
		include_once(ECMS_PATH.'e/data/dbcache/MemberLevel.php');
		$tmgetgroupname=$level_r[$tmgetgroupid]['groupname'];
	}
}

//模型
$tgetmid=(int)$_GET['mid'];

//关注
$follow=$empire->fetch1("select * from {$dbtbpre}enewsmemberadd where userid='$tmgetuserid'");
$feeduserid=explode("::::::",$follow['feeduserid']);
$feedusernum=count($feeduserid)-1; //该会员的关注数
$fsnum=0; //该会员的粉丝数
$fl=$empire->query("select feeduserid from {$dbtbpre}enewsmemberadd order by userid"); 
while($n=$empire->fetch($fl))
{
	$flid=explode("::::::",$n['feeduserid']);
	if (in_array($tmgetuserid,$flid)){
		$fsnum=$fsnum+1;
	}
}

$wznum=0; //文章总数
$modsql=$empire->query("select mid,qmname,tbname from {$dbtbpre}enewsmod where usemod=0 and showmod=0 and qenter<>'' order by myorder,mid");
while($modr=$empire->fetch($modsql))
{
	$num=$empire->num("select id from {$dbtbpre}ecms_$modr[tbname] where userid='$tmgetuserid'");
	$wznum=$wznum+$num;
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
<?=$thispagetitle?>
</title>
<meta name="keywords" content=" [!--pagekey--] " />
<meta name="description" content=" [!--pagedes--]" />
<link href="/yecha/Common.css" rel="stylesheet" type="text/css" />
<link href="/yecha/hycenter.css" rel="stylesheet" type="text/css" />
<link href="/yecha/button.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/js/SuperSlide.js"></script>
<script type="text/javascript" src="/js/jRating.jquery.min.js"></script>
<script type="text/javascript" src="/js/jquery.timeago.js"></script>
<script type="text/javascript" src="/js/jquery.lazyload.min.js"></script>
<script type="text/javascript" src="/js/jNotify.jquery.min.js"></script>
<script type="text/javascript" src="/js/artDialog.js"></script>
<script type="text/javascript" src="/js/iframeTools.js"></script>
<script type="text/javascript" src="/js/52img.js"></script>
<style>
body {
background:<?=$bgcolor?> url(<?=$Diybg?>) <?=$Bgalign?> top <?=$repeatBg?><?=$lockbg?>;
<?=$bgsize?>
}
</style>
</head>

<body>
<div class="xingyun"></div>
<!--[if lt IE 7]>
<div class="upgradeBrowser"><span>您的浏览器版本太低呦,建议换遨游云浏览器:)</span></div>
<![endif]-->
<div id="header">
  <div class="block">
    <div class="fl logo"> <a href="/" title=""></a> </div>
    <div class="fl nav" id="nav-categories">
      <?php
require(ECMS_PATH.'e/template/incfile/nav.php');
?>
    </div>
    <div class="fr login"> 
      <script src="/e/member/login/loginjs2.php"></script> 
    </div>
<!--
    <div class="searchbox">
      <form name="searchform" method="GET" action="/e/sch/index.php">
        <input type="hidden" name="field" value="1">
        <input id="top_srh" name="keyboard" value="" placeholder="请输入你要查找的内容..." x-webkit-speech rel="xzfl">
        <input class="top_an" value="" type="submit" name="Submit" title="点击搜索">
        <div class="chooseS" style="display:none;">
          <table width="100%">
            <tr>
              <td><input type="radio" name="classid" value="" checked/>
                <label for="a1" >全部</label></td>
              <td><input type="radio" name="classid" value="91" />
                <label for="a2">图片</label></td>
              <td><input type="radio" name="classid" value="101" />
                <label for="a3">代码</label></td>
            </tr>
            <tr>
              <td><input type="radio" name="classid" value="122" />
                <label for="a4">工具</label></td>
              <td><input type="radio" name="classid" value="65" />
                <label for="a5">模板</label></td>
              <td><input type="radio" name="classid" value="132" />
                <label for="a6">定制</label></td>
            </tr>
          </table>
        </div>
      </form>
    </div>-->
  </div>
</div>
<div class="hymain">
<div class="hytopmenu yh f14">
  <?php
	if($tmgetuserid)	//已登录
	{
	?>
  <span>我的:</span>
  <ul>
    <li><a href="/e/member/cp/">会员中心</a></li>
    <li><a href="<?=$public_r['newsurl']?>e/member/msg/">我的消息</a></li>
    <li><a href="/e/space/list.php?userid=<?=$tmgetuserid?>&mid=1">我的文章</a></li>
    <li><a href="<?=$public_r['newsurl']?>e/member/my/">我的积分</a></li>
    <li><a href="<?=$public_r['newsurl']?>e/space/gbook.php?userid=<?=$tmgetuserid?>" target="_blank">我的留言</a></li>
    <li><a href="<?=$public_r['newsurl']?>e/space/?userid=<?=$user[userid]?>" target="_blank">我的主页</a></li>
  </ul>
  <?
	}
	else	//游客
	{
	?>
  <span>游客,您好:</span>您还未登录,请先<a href="/e/member/login/">登陆</a> 或者 <a href="/e/member/register/ChangeRegister.php" target="_blank">注册</a>! 体验更多精彩服务.
  <?php
	}
	?>
</div>
<div class="hysidebar">
  <div class="userbox yh">
    <div class="avator"> <a href="#" class="avatorpic"><img src="<?=$userpic?>" /></a> <a href="<?=$public_r['newsurl']?>e/member/EditInfo/EditAvator.php" class="editavator">修改头像</a> </div>
    <div class="userxx yh">
      <h4>
        <?=$tmgetusername?>
      </h4>
      <span><a href="<?=$public_r['newsurl']?>e/space/?userid=<?=$user[userid]?>">您会员的userid为<?=$tmgetuserid?>
      </a></span>
      <ul>
        <li><a href="#">关注<br />
          <strong>
          <?=$feedusernum?>
          </strong></a></li>
        <li><a href="#">粉丝<br />
          <strong>
          <?=$fsnum?>
          </strong></a></li>
        <li><a href="#">文章<br />
          <strong>
          <?=$wznum?>
          </strong></a></li>
      </ul>
    </div>
    <div class="clearfix"></div>
    <!--勋章 预留-->
    <div class="xunzhang"></div>
    <p class="user_info">
      <?=$user[saytext]?>
    </p>
    <div class="clearfix guanzhu"> <a href="/e/member/mspace/SetDIY.php" class="button small green">装扮空间</a> <a href="/e/member/msg/AddMsg/?enews=AddMsg$username" class="ml10 button small gray">发站内信</a> </div>
  </div>
  <div class="userzx yh">
    <ul>
      <li><a href="/e/member/cp/"<?=$grzx?>><span class="ico_zx"></span>我的个人中心</a></li>
      <li><a href="<?=$public_r['newsurl']?>e/member/msg/"<?=$znxx?>><span class="ico_xx"></span>站内消息</a></li>
      <li><a href="/e/DoInfo/choseclass.php"<?=$wdtg?>><span class="ico_tg"></span>我的投稿</a></li>
      <li><a href="<?=$public_r['newsurl']?>e/member/fava/"<?=$wdsc?>><span class="ico_fav"></span>我的收藏</a></li>
      <li><a href="<?=$public_r['newsurl']?>e/member/friend/"<?=$wdhy?>><span class="ico_fri"></span>我的好友</a></li>
      <!--<li><a href=""<?=$wdgz?>><span class="ico_gz"></span>我的关注</a></li>-->
      <li><a href="/e/member/mspace/SetSpace.php"<?=$wdkj?>><span class="ico_kj"></span>我的空间</a></li>
      <li><a href="<?=$public_r['newsurl']?>e/payapi/"<?=$wdjf?>><span class="ico_jf"></span>财务管理</a></li>
      <li><a href="<?=$public_r['newsurl']?>e/ShopSys/address/ListAddress.php"<?=$wdshop?>><span class="ico_sc"></span>我的商城</a></li>
      <?php
	if($tmgetuserid)
	{
	?>
      <li><a href="<?=$public_r['newsurl']?>e/member/doaction.php?enews=exit" onclick="return confirm('确认要退出?');"><span class="ico_out"></span>退出</a></li>
      <?}?>
    </ul>
  </div>
</div>
<div class="hyright">