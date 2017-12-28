<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=11,IE=10,IE=9,IE=8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-title" content="<?=$public_r[sitename]?>">
<meta http-equiv="Cache-Control" content="no-siteapp">
<link rel='stylesheet' id='_common-css'  href='/skin/ecms009/css/common.css?ver=11.1' type='text/css' media='all' />
<script type="text/javascript" src="/e/data/js/ajax.js"></script>
<meta name="keywords" content="<?=$ecms_gr[keyboard]?>" />
<meta name="description" content="<?=$grpagetitle?> " />
<title><?=$grpagetitle?>--<?=$public_r[sitename]?></title>
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
      <header class="article-header">
        <h1 class="article-title"><a href="<?=$grtitleurl?>"><?=$ecms_gr[title]?></a></h1>
        <div class="article-meta">
          <time class="new">
            <?=user_time($navinfor[newstime],0)?>
          </time>
          <span class="item">小编：<?=$ecms_gr[username]?> </span> <span class="item">分类：<a href="<?=sys_ReturnBqClassname($navinfor,9)?>" title="查看<?=$class_r[$ecms_gr[classid]][classname]?>中的全部文章" rel="category tag"><?=$class_r[$ecms_gr[classid]][classname]?></a></span> <span class="item">信息来源：<?=$docheckrep[1]?ReplaceBefrom($ecms_gr[befrom]):$ecms_gr[befrom]?></span> <span class="item post-views">阅读(<script src=http://www.gonghaibo.com/e/public/ViewClick/?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&addclick=1></script>)</span> <span class="item"></span> </div>
      </header>
      <article class="article-content">
<div class="ad"><script src=http://www.gonghaibo.com/d/js/acmsd/thea5.js></script></div>
<div class="article-pic" style=" display:none">
<img src="<?=$public_r[newsurl]?><?=$navinfor[titlepic]?$navinfor[titlepic]:"skin/ecms009/images/random/titlepic/".rand(1,15).".jpg"?>" />
</div>
<?=strstr($ecms_gr[newstext],'[!--empirenews.page--]')?'[!--newstext--]':$ecms_gr[newstext]?>
<div class="pagination">
        <ul style="margin: 0;">
          [!--page.url--]
        </ul>
      </div>
<div class="ad"><script src=http://www.gonghaibo.com/d/js/acmsd/thea6.js></script></div>
        <p class="post-copyright">此文由
          <?=$public_r[sitename]?>
          编辑，未经允许不得转载！：<?=$grurl?> &raquo; <a href="<?=$grtitleurl?>"><?=$ecms_gr[title]?></a></p>
      </article>
      <div class="article-social"> <a href="JavaScript:makeRequest('/e/public/digg/?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&dotop=1&doajax=1&ajaxarea=diggnum','EchoReturnedText','GET','');" class="action action-like"><i class="glyphicon glyphicon-thumbs-up"></i><?=$ecms_gr[onetext]?> (<span id="diggnum"><script src=http://www.gonghaibo.com/e/public/ViewClick/?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&down=5></script></span>)</a>
        <div class="action-share bdsharebuttonbox"> <strong>分享到：</strong> <a class="bds_qzone" data-cmd="qzone"></a><a class="bds_tsina" data-cmd="tsina"></a><a class="bds_weixin bdsm" data-cmd="weixin"></a><a class="bds_tqq" data-cmd="tqq"></a><a class="bds_sqq bdsm" data-cmd="sqq"></a><a class="bds_renren" data-cmd="renren"></a><a class="bds_douban" data-cmd="douban"></a> <span class="bds_count" data-cmd="count"></span> </div>
      </div>
      <nav class="article-nav"> <span class="article-nav-prev">上一篇<br>
        <?php
	$next_r=$empire->fetch1("select isurl,titleurl,classid,id,title from {$dbtbpre}ecms_".$class_r[$ecms_gr[classid]][tbname]." where id<$ecms_gr[id] and classid='$ecms_gr[classid]' order by id desc limit 1");
	if(empty($next_r[id]))
	{$infonext="<a href='".$grclassurl."'>返回列表</a>";}
	else
	{
		$nexttitleurl=sys_ReturnBqTitleLink($next_r);
		$infonext="<a href='".$nexttitleurl."'>".$next_r[title]."</a>";
	}
	echo $infonext;
	?></span> <span class="article-nav-next">下一篇<br>
        <?php
	$next_r=$empire->fetch1("select isurl,titleurl,classid,id,title from {$dbtbpre}ecms_".$class_r[$ecms_gr[classid]][tbname]." where id>$ecms_gr[id] and classid='$ecms_gr[classid]' order by id limit 1");
	if(empty($next_r[id]))
	{$infonext="<a href='".$grclassurl."'>返回列表</a>";}
	else
	{
		$nexttitleurl=sys_ReturnBqTitleLink($next_r);
		$infonext="<a href='".$nexttitleurl."'>".$next_r[title]."</a>";
	}
	echo $infonext;
	?></span> </nav>


      <!-- 多说评论框 start -->
<!--PC版-->
<div id="SOHUCS" ></div>
<script charset="utf-8" type="text/javascript" src="https://changyan.sohu.com/upload/changyan.js" ></script>
<script type="text/javascript">
window.changyan.api.config({
appid: 'cysl2MHGw',
conf: 'prod_be95b2ea8a3d90c270280b19d4305f18'
});
</script>
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
    <div class="widget article-social"> <a href="JavaScript:makeRequest('/e/public/digg/?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&dotop=1&doajax=1&ajaxarea=diggnum','EchoReturnedText','GET','');" class="action action-like"><i class="glyphicon glyphicon-thumbs-up"></i><?=$ecms_gr[onetext]?> (<span id="diggnum"><script src=http://www.gonghaibo.com/e/public/ViewClick/?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&down=5></script></span>)</a>
      <div class="action-share bdsharebuttonbox"> <strong>分享到：</strong> <a class="bds_qzone" data-cmd="qzone"></a><a class="bds_tsina" data-cmd="tsina"></a><a class="bds_weixin bdsm" data-cmd="weixin"></a><a class="bds_tqq" data-cmd="tqq"></a><a class="bds_sqq bdsm" data-cmd="sqq"></a><a class="bds_renren" data-cmd="renren"></a><a class="bds_douban" data-cmd="douban"></a> <span class="bds_count" data-cmd="count"></span> </div>
    </div>
 <div class="widget widget_ui_viewposts bodr_none">

     <canvas id="canvas"></canvas>
           
        </div>
    <div class="widget widget_ui_tags">
      <h3 class="title"><strong>热门话题</strong></h3>
      <div class="items"><?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from [!db.pre!]enewstags order by num DESC limit 30",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
        <?
        echo '<a title="'.$bqr['num'].'个话题" href="/e/tags/?tagname='.$bqr['tagname'].'">'.$bqr['tagname'].'</a>';
        ?>
       <?php
}
}
?></div>
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