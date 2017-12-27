<?php
require("../../class/connect.php");
if(!defined('InEmpireCMS'))
{
	exit();
}
require("../../class/db_sql.php");
require("../../class/q_functions.php");
require "../".LoadLang("pub/fun.php");
$link=db_connect();
$empire=new mysqlquery();
$editor=1;
//分类id
$bid=(int)$_GET['bid'];
$gbr=$empire->fetch1("select bid,bname,groupid from {$dbtbpre}enewsgbookclass where bid='$bid'");
if(empty($gbr['bid']))
{
	printerror("EmptyGbook","",1);
}
//权限
if($gbr['groupid'])
{
	include("../../member/class/user.php");
	$user=islogin();
	include("../../data/dbcache/MemberLevel.php");
	if($level_r[$gbr[groupid]][level]>$level_r[$user[groupid]][level])
	{
		echo"<script>alert('您的会员级别不足(".$level_r[$gbr[groupid]][groupname].")，没有权限提交信息!');history.go(-1);</script>";
		exit();
	}
}
esetcookie("gbookbid",$bid,0);
$bname=$gbr['bname'];
$search="&bid=$bid";
$page=(int)$_GET['page'];
$page=RepPIntvar($page);
$start=0;
$line=$public_r['gb_num'];//每页显示条数
$page_line=10;//每页显示链接数
$offset=$start+$page*$line;//总偏移量
$totalnum=(int)$_GET['totalnum'];
if($totalnum>0)
{
	$num=$totalnum;
}
else
{
	$totalquery="select count(*) as total from {$dbtbpre}enewsgbook where bid='$bid' and checked=0";
	$num=$empire->gettotal($totalquery);//取得总条数
}
$search.="&totalnum=$num";
$query="select lyid,name,email,`mycall`,lytime,lytext,retext from {$dbtbpre}enewsgbook where bid='$bid' and checked=0";
$query=$query." order by lyid desc limit $offset,$line";
$sql=$empire->query($query);
$listpage=page1($num,$line,$page_line,$start,$page,$search);
$url="<a href='".ReturnSiteIndexUrl()."'>".$fun_r['index']."</a>&nbsp;>&nbsp;".$fun_r['saygbook'];
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=11,IE=10,IE=9,IE=8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-title" content="<?=$public_r[sitename]?>">
<meta http-equiv="Cache-Control" content="no-siteapp">
<link rel='stylesheet' id='_common-css'  href='/skin/ecms009/css/common.css?ver=11.1' type='text/css' media='all' />
<script type="text/javascript" src="/e/data/js/ajax.js"></script>
<meta name="keywords" content="<?=$bname?>" />
<meta name="description" content="<?=$bname?> " />
<title><?=$bname?>--<?=$public_r[sitename]?></title>
<link rel="shortcut icon" href="/skin/ecms009/images/favicon.ico">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/skin/ecms009/images/icon-144x144.png">
<!--[if lt IE 9]><script src="/skin/ecms009/js/html5.js"></script><![endif]-->
</head>
<body class="single single-post single-format-standard">
<header class="header">
  <div class="container">
    <h1 class="logo"><a href="http://www.gonghaibo.com/" title="<?=$public_r[sitename]?>"><?=$public_r[sitename]?></a></h1>
    <ul class="nav">
      <li class="<?=$GLOBALS[navclassid]?"":"active"?>"><a href="http://www.gonghaibo.com/">首页</a></li>
      <?php
$sql=$empire->query("select classid,classname,islast from {$dbtbpre}enewsclass where bclassid=0 and showclass=0 order by myorder,myorder asc");
    while($s=$empire->fetch($sql)){
    	$tclass="";
        $fr=explode('|',$class_r[$GLOBALS[navclassid]][featherclass]);
        $topbclassid=$fr[1]?$fr[1]:$GLOBALS[navclassid];
        if($topbclassid==$s[classid]){
        	$tclass='active';
        }
        $classurl=sys_ReturnBqClassname($s,9);
        
        echo '<li class="'.$tclass.'"><a href="'.$classurl.'">'.$s[classname].'</a>';
        if(!$s[islast]){
        	$sql2=$empire->query("select classid,classname from {$dbtbpre}enewsclass where bclassid=$s[classid] and showclass=0 order by myorder,myorder asc");
            $str="";
            while($s2=$empire->fetch($sql2)){
            	$classurl2=sys_ReturnBqClassname($s2,9); 
            	$str.='<li class=""><a href="'.$classurl2.'">'.$s2[classname].'</a></li>';
            }
            echo '<ul class="sub-menu">'.$str.'</ul>';
        }
        echo '</li>';
    }
?>
    </ul>
    <div class="slinks"> <a href="http://www.gonghaibo.com//lyban" title="留言板">留言</a> - <a href="http://www.gonghaibo.com/site_misc/music/">音乐</a> - <a href="http://www.gonghaibo.com/zan">点赞墙</a> - <a href="http://www.gonghaibo.com//gyw" title="关于我">关于我</a> - <a href="//shang.qq.com/wpa/qunwpa?idkey=ec2c5c138f48abe7e713f3a1aba893a8774585dbb2e15762d93adb9fb8f7ef94"  target="_blank"  title="javascript:void(0)">QQ群</a><br>
      <a class="feed-weixin" rel="external nofollow" href="javascript:;">捐赠作者</a> - <a rel="external nofollow" href="https://github.com/lllomh" title="xinlang" target="_blank">github</a> - <a rel="external nofollow" href="http://t.qq.com/a29405484" title="alibaixiu" target="_blank">腾讯微博</a> - <a rel="external nofollow" href="http://897963688.qzone.qq.com" title="/e/web/?type=rss2" target="_blank">QQ空间</a> </div>
    <form onsubmit="return checkSearchForm()" method="post" name="searchform" id="searchform" class="searchform" action="/e/search/index.php" >
    <input type="hidden" value="title" name="show"></input>
          <input type="hidden" value="1" name="tempid"></input>
          <input type="hidden" value="news" name="tbname"></input>
          <input name="mid" value="1" type="hidden">
          <input name="dopost" value="search" type="hidden">
      <input class="search-input" name="keyboard" type="text" placeholder="输入关键字">
      <button class="search-btn" name="submit" type="submit">搜索</button>
    </form>
  </div>
</header>
<section class="container">
  <div class="content-wrap">
    <div class="content">
      <article class="article-content">


      </article>
     
            <!-- 多说评论框 start -->
  <div class="ds-thread" data-category="[!--classid--]" data-thread-key="[!--id--]" data-title="[!--title--]"></div>
<!-- 多说评论框 end -->
<!-- 多说公共JS代码 start (一个网页只需插入一次) -->
<script type="text/javascript">
var duoshuoQuery = {short_name:"gonghaibo"};
  (function() {
    var ds = document.createElement('script');
    ds.type = 'text/javascript';ds.async = true;
    ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
    ds.charset = 'UTF-8';
    (document.getElementsByTagName('head')[0] 
     || document.getElementsByTagName('body')[0]).appendChild(ds);
  })();
  </script>
<!-- 多说公共JS代码 end -->


    </div>
  </div>
  <aside class="speedbar-wrap">
    <div class="speedbar">
      <ul class="speedbar-menu">
        <li><a target="_blank" href="/remen">热门排行</a></li>
        <li><a target="_blank" href="/tui">推荐阅读</a></li>
        <li><a target="_blank" href="/zan">点赞热门</a></li>
       <li><a href="/esjiy">儿时记忆</a></li>
       <li><a href="/ytfj">沿途风景</a></li>
         <li><a href="/xxsh">学校生活</a></li>
      </ul>
      <div class="speedbar-weixin">
        <h5>微信扫一扫捐赠作者</h5>
        <img src="/skin/ecms009/images/weixin-qrcode.jpg" alt=""> </div>
    </div>
  </aside>
  <aside class="sidebar">
   <!--<div class="widget widget_ui_ad">
      <div class="item"><script src=http://www.gonghaibo.com/d/js/acmsd/thea4.js></script></div>
    </div>-->
    <div class="widget article-social"> <a href="JavaScript:makeRequest('/e/public/digg/?classid=[!--classid--]&id=[!--id--]&dotop=1&doajax=1&ajaxarea=diggnum','EchoReturnedText','GET','');" class="action action-like"><i class="glyphicon glyphicon-thumbs-up"></i>[!--onetext--] (<span id="diggnum"><script src=http://www.gonghaibo.com/e/public/ViewClick/?classid=[!--classid--]&id=[!--id--]&down=5></script></span>)</a>
      <div class="action-share bdsharebuttonbox"> <strong>分享到：</strong> <a class="bds_qzone" data-cmd="qzone"></a><a class="bds_tsina" data-cmd="tsina"></a><a class="bds_weixin bdsm" data-cmd="weixin"></a><a class="bds_tqq" data-cmd="tqq"></a><a class="bds_sqq bdsm" data-cmd="sqq"></a><a class="bds_renren" data-cmd="renren"></a><a class="bds_douban" data-cmd="douban"></a> <span class="bds_count" data-cmd="count"></span> </div>
    </div>
    <div class="widget widget_ui_viewposts">
      <h3 class="title"><strong>热门阅读</strong></h3>
      <ul class="posts-xs">
        [e:loop={'news',6,19,1,'','onclick DESC'}]
        <li class="item-1"><a href="<?=$bqsr['titleurl']?>"><img data-src="<?=sys_ResizeImg($bqr[titlepic],240,180,1,'')?>" class="thumb"/>
          <h2><?=$bqr['title']?></h2>
          <p>
            <time><?=date('m-d',$bqr[newstime])?></time>
            <span class="post-views">阅读(<script src=http://www.gonghaibo.com/e/public/ViewClick/?classid=<?=$bqr['classid']?>&id=<?=$bqr['id']?>></script>)</span></p>
          </a></li>
        [/e:loop]
      </ul>
    </div>
    <div class="widget widget_ui_ad">
      <div class="item"><script src=http://www.gonghaibo.com/d/js/acmsd/thea2.js></script></div>
    </div>
    <div class="widget widget_ui_tags">
      <h3 class="title"><strong>热门话题</strong></h3>
      <div class="items">[e:loop={"select * from [!db.pre!]enewstags order by num DESC limit 30",0,24,0}]
        <?
        echo '<a title="'.$bqr['num'].'个话题" href="/e/tags/?tagname='.$bqr['tagname'].'">'.$bqr['tagname'].'</a>';
        ?>
       [/e:loop]</div>
    </div>
    <div class="widget widget_ui_posts">
      <h3 class="title"><strong>特别推荐</strong></h3>
      <ul class="posts-xs">
        [e:loop={'news',6,20,1,'isgood>0','newstime DESC'}]
        <li class="item-"><a href="<?=$bqsr['titleurl']?>"><img data-src="<?=sys_ResizeImg($bqr[titlepic],240,180,1,'')?>" class="thumb"/>
          <h2><?=$bqr['title']?></h2>
          <p>
            <time><?=date('m-d',$bqr[newstime])?></time>
            <span class="post-views">阅读(<script src=http://www.gonghaibo.com/e/public/ViewClick/?classid=<?=$bqr['classid']?>&id=<?=$bqr['id']?>></script>)</span></p>
          </a></li>
       [/e:loop]
      </ul>
    </div>
  </aside>
</section>
<footer class="footer"> &copy; 2015 <a href="http://www.gonghaibo.com/"></a> &nbsp; <a href="http://www.miitbeian.gov.cn/" target="_blank">沪备11002373号-1</a> </footer>
<script>
var jsui={
    uri: '/skin/ecms009'
};
</script>
<!--ADD_CODE_FOOTER_START--> 
<script type="text/javascript">
var duoshuoQuery = {short_name:"<?=$public_r['add_duoshuo']?>"};
	(function() {
		var ds = document.createElement('script');
		ds.type = 'text/javascript';ds.async = true;
		ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
		ds.charset = 'UTF-8';
		(document.getElementsByTagName('head')[0] 
		 || document.getElementsByTagName('body')[0]).appendChild(ds);
	})();
	</script>
<?=$public_r['add_tongji']?>
<!--ADD_CODE_FOOTER_END--> 
<script type='text/javascript' src='/skin/ecms009/js/one.js?ver=5.6'></script>
</body>
</html>
<?
while($r=$empire->fetch($sql))
{
	$r['retext']=nl2br($r[retext]);
	$r['lytext']=nl2br($r[lytext]);
?>

<?
}
?>

<?php
db_close();
$empire=null;
?>