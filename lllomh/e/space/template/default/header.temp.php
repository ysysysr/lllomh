<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
//公告
$spacegg='';
if($addur['spacegg'])
{
	$spacegg=$addur['spacegg'];
}
//导航菜单
$wznum=0; //文章总数
$dhmenu='';
$modsql=$empire->query("select mid,qmname,tbname from {$dbtbpre}enewsmod where usemod=0 and showmod=0 and qenter<>'' order by myorder,mid");
while($modr=$empire->fetch($modsql))
{
	$num=$empire->num("select id from {$dbtbpre}ecms_$modr[tbname] where userid='$userid'");
	$wznum=$wznum+$num;
	$dhmenu.='<li><a href="/e/space/list.php?userid='.$userid.'&mid='.$modr[mid].'">'.$modr[qmname].'</a></li>';
}
//会员信息
$tmgetuserid=$userid;	//用户ID
$tmgetusername=RepPostVar($username);	//用户名
$tmgetgroupid=$groupid;	//用户组ID
$getuserid=(int)getcvar('mluserid');//当前登陆会员ID
$getusername =getcvar('mlusername');//当前登陆会员名
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
$follow=$empire->fetch1("select * from {$dbtbpre}enewsmemberadd where userid=$userid");
$feeduserid=explode("::::::",$follow['feeduserid']);
$Diybg=$follow['Diybg']?$follow['Diybg']:$public_r[newsurl].'yecha/blogbg.jpg';
if ($follow['lockBgImg']){
	$lockbg=" fixed";
}
if ($follow['bgsize']){
	$bgsize="background-size:100% 100%;";
}
$bgcolor=$follow['bgcolor']?$follow['bgcolor']:'#b7e3c1';
$Bgalign=$follow['Bgalign']?$follow['Bgalign']:'center';
$repeatBg=$follow['repeatBg']?$follow['repeatBg']:'repeat';
$feedusernum=count($feeduserid)-1; //该会员的关注数
$fsnum=0; //该会员的粉丝数
$fl=$empire->query("select feeduserid from {$dbtbpre}enewsmemberadd order by userid"); 
while($n=$empire->fetch($fl))
{
	$flid=explode("::::::",$n['feeduserid']);
	if (in_array($userid,$flid)){
		$fsnum=$fsnum+1;
	}
}
//增加会员访问记录
if ($getuserid && $getuserid<>$userid){
	$r=$empire->fetch1("select zuijin from {$dbtbpre}enewsmemberadd where userid='$userid' limit 1");
	if (empty($r['zuijin'])){
		$empire->query("update {$dbtbpre}enewsmemberadd set zuijin='$getuserid::::::' where userid='$userid'");
		} else {
		$zuijin=explode("::::::",$r['zuijin']);
		if (in_array($getuserid,$zuijin))
    	{
			$newzuijin=$getuserid."::::::".str_replace($getuserid."::::::","",$r['zuijin']);
			$empire->query("update {$dbtbpre}enewsmemberadd set zuijin='$newzuijin' where userid='$userid'");
    	} else{
			$empire->query("update {$dbtbpre}enewsmemberadd set zuijin='$getuserid::::::$r[zuijin]' where userid='$userid'");
		}
	}
}
//我还是他还是她
	if ($getuserid==$userid){
		$me="我";
	} else{
		if ($addur[sex]=="男"){
			$me="他";
		} elseif ($addur[sex]=="女"){
			$me="她";
		} else {
			$me="Ta";	
		}
	}
//我的幸运物
	$xingyun=$follow[xingyun]?$follow[xingyun]:"";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$spacename?></title>
<meta name="keywords" content="<?=$spacename?>" />
<meta name="description" content="<?=$spacename?>" />
<link href="/yecha/Common.css" rel="stylesheet" type="text/css" />
<link href="/yecha/hycenter.css" rel="stylesheet" type="text/css" />
<link href="/yecha/button.css" rel="stylesheet" type="text/css" />
<link href="/yecha/user/visuallightbox.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/js/SuperSlide.js"></script>
<script type="text/javascript" src="/js/jRating.jquery.min.js"></script>
<script type="text/javascript" src="/js/jquery.timeago.js"></script>
<script type="text/javascript" src="/js/jquery.lazyload.min.js"></script>
<script type="text/javascript" src="/js/jNotify.jquery.min.js"></script>
<script type="text/javascript" src="/js/artDialog.js"></script>
<script type="text/javascript" src="/js/iframeTools.js"></script>
<script type="text/javascript" src="/js/52img.js"></script>
<script type="text/javascript">
jQuery(document).ready(
function(){window.Lightbox = new jQuery().visualLightbox({autoPlay:false,borderSize:12,classNames:'lightbox',closeLocation:'top',descSliding:true,enableRightClick:false,enableSlideshow:true,prefix:'vlb1',resizeSpeed:7,slideTime:4,startZoom:true});
var a=jQuery;a("#feedlist .lightbox").mouseenter(function(){var b=a("div.vlb_zoom",this);if(!b.length){b=a('<div class="vlb_zoom" style="position:absolute">').hide().appendTo(this);a("img:first",b).detach()}b.fadeIn("fast")}).mouseleave(function(){a("div",this).fadeOut("fast")})
});
</script>
<style>
body{ background:<?=$bgcolor?> url(<?=$Diybg?>) <?=$Bgalign?> top <?=$repeatBg?><?=$lockbg?>;<?=$bgsize?>}
.xingyun{position:absolute; top:0; left:50%; width:500px; height:242px; background:url(<?=$xingyun?>) right bottom no-repeat; z-index:5;}
</style>
</head>
<body>
<div class="xingyun"></div>
<!--[if lt IE 7]>
<div class="upgradeBrowser"><span>您的浏览器版本太低呦,建议换遨游云浏览器:)</span></div>
<![endif]-->
<div id="header">
    	<div class="block">
        	<div class="fl logo">
            	<a href="/" title=""></a>
            </div>
            <div class="fl nav" id="nav-categories">
            	<?php
require(ECMS_PATH.'e/template/incfile/nav.php');
?>
            </div>
            <div class="fr login">
            	<script src="/e/member/login/loginjs2.php"></script>
            </div>
            <!--<div class="searchbox">
            	<form name="searchform" method="GET" action="/e/sch/index.php">
                  <input type="hidden" name="field" value="1">
                  <input id="top_srh" name="keyboard" value="" placeholder="请输入你要查找的内容..." x-webkit-speech rel="xzfl">
                  <input class="top_an" value="" type="submit" name="Submit" title="点击搜索">
                  <div class="chooseS" style="display:none;">
                	<table width="100%">
                    	<tr>
                        	<td><input type="radio" name="classid" value="" checked/><label for="a1" >全部</label></td>
                            <td><input type="radio" name="classid" value="91" /><label for="a2">图片</label></td>
                            <td><input type="radio" name="classid" value="101" /><label for="a3">代码</label></td>
                        </tr>
                        <tr>
                        	<td><input type="radio" name="classid" value="122" /><label for="a4">工具</label></td>
                            <td><input type="radio" name="classid" value="65" /><label for="a5">模板</label></td>
                            <td><input type="radio" name="classid" value="132" /><label for="a6">定制</label></td>
                        </tr>
                    </table>
                </div>

				</form>
            </div>-->
        </div>
    </div>
<div class="hyindex">
    	<div class="hytopmenu yh f14">
        	<div class="hymenu">
        	<span><?=$me?>的:</span>
        	<ul>
        		<li><a href="<?=$spaceurl?>">主页</a></li>
                <?=$dhmenu?>
                <li><a href="/e/space/fans.php?userid=<?=$userid?>">粉丝</a></li>
                <li><a href="/e/space/gbook.php?userid=<?=$userid?>">留言</a></li>
        	</ul>
            </div>
        </div>
        <div class="hy_avator">
        	<div class="avator_bg">
        	<a href="<?=$spaceurl?>"><img src="<?=$userpic?>" /></a>
            </div>
            <div class="my_left">
            	<ul>
                    	<li><a href="javascript:void()" onclick="follow(<?=$userid?>)">关注<br /><strong><?=$feedusernum?></strong></a></li>
                        <li><a href="/e/space/fans.php?userid=<?=$userid?>">粉丝<br /><strong><?=$fsnum?></strong></a></li>
                        <li><a href="/e/space/list.php?userid=<?=$userid?>&mid=7">文章<br /><strong><?=$wznum?></strong></a></li>
                        <div class="clearfix"></div>
                </ul>
                <div class="renzheng clearfix"><span class="button green small">本站<?=$tmgetgroupname?></span></div>
            </div>
        </div>
        <div class="hyhead">
        	<div class="fl w230"></div>
            <div class="fl hyxx">
            	<h3><a href="<?=$spaceurl?>" class="yh"><?=$spacename?></a></h3>
                <span class="hyurl"><a href="<?=$spaceurl?>"><?=$spaceurl?></a><br /><?=$addur[juzhu]?> | <?=$addur[job]?> | <?=$addur[sex]?></span>
                <span class="rzxx"><?=$addur[renzheng]?></span>
                <div class="hyhudong">
                <?php				
                        	if ($getuserid!=$userid){
								$f=$empire->fetch1("select feeduserid from {$dbtbpre}enewsmemberadd where userid='$getuserid'");
								$fduserid=explode("::::::",$f['feeduserid']);
								if (in_array($userid,$fduserid)){
								$follow='<a href="javascript:void()" onclick="follow('.$userid.')" class="button blue small orange" id="follow'.$userid.'" title="取消关注">取消关注</a>';
								} else{
								$follow='<a href="javascript:void()" onclick="follow('.$userid.')" class="button blue small" id="follow'.$userid.'">关注</a>';	
								}
								
								} else {
								$follow='<a href="/e/member/EditInfo/" class="button blue small">修改资料</a>';
							}
				?>
                <?=$follow?><a href="/e/member/msg/AddMsg/?enews=AddMsg&username=<?=$username?>" target="_blank" class="button gray small ml10">发站内信</a></div>
            </div>
            <div class="fr hygg yh">
<?=$spacegg?>
				<?php
                if ($getuserid==$userid){
					echo '<a href="/e/member/mspace/SetSpace.php" class="editgg">修改公告</a>';
					}
				?>
				<div class="hyggxx">公告牌</div>
            </div>
        </div>
