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
<meta name="keywords" content="[!--pagekey--]" />
<meta name="description" content="[!--pagedes--] " />
<title>[!--pagetitle--]--<?=$public_r[sitename]?></title>
<link rel="shortcut icon" href="/skin/ecms009/images/favicon.ico">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/skin/ecms009/images/icon-144x144.png">
<!--[if lt IE 9]><script src="/skin/ecms009/js/html5.js"></script><![endif]-->
</head>
<body class="home blog"data-navto="home">
<header class="header">
  <div class="container">
    <h1 class="logo"><a href="[!--news.url--]" title="<?=$public_r[sitename]?>"><?=$public_r[sitename]?></a></h1>
    <ul class="nav">
      <li class="<?=$GLOBALS[navclassid]?"":"active"?>"><a href="[!--news.url--]">首页</a></li>
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
    <div class="slinks"> <a href="[!--news.url--]/lyban" title="留言板">留言</a> - <a href="[!--news.url--]site_misc/music/">音乐</a> - <a href="[!--news.url--]zan">点赞墙</a> - <a href="[!--news.url--]/gyw" title="关于我">关于我</a> - <a href="//shang.qq.com/wpa/qunwpa?idkey=ec2c5c138f48abe7e713f3a1aba893a8774585dbb2e15762d93adb9fb8f7ef94"  target="_blank"  title="javascript:void(0)">QQ群</a><br>
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
    <div class="content excerpts">
      <h3 class="title"><strong>[!--class.name--]</strong></h3>
      [!--empirenews.listtemp--]<!--list.var1-->[!--empirenews.listtemp--]
      <div class="pagination">
        <ul>
          [!--show.listpage--]
        </ul>
      </div>
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
    <div class="widget widget_links">
      <h3 class="title"><strong>友情链接</strong></h3>
      <ul class='xoxo blogroll'>
         <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('select * from [!db.pre!]enewslink where checked=1 and lpic="" order by lid',20,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
      <li><a href="<?=$bqr[lurl]?>" target="_blank"><?=$bqr[lname]?></a></li>
      <?php
}
}
?>
      </ul>
    </div>
   
  </aside>
</section>
<footer class="footer"> &copy; 2015 <a href="[!--news.url--]"></a> &nbsp; <a href="http://www.miitbeian.gov.cn/" target="_blank">沪备11002373号-1</a> </footer>
<script>
var jsui={
    uri: '/skin/ecms009'
};
</script> 
<!--ADD_CODE_FOOTER_START--> 
<?=$public_r['add_tongji']?>
<!--ADD_CODE_FOOTER_END--> 
<script type='text/javascript' src='/skin/ecms009/js/one.js?ver=11.1'></script>
</body>
</html>
