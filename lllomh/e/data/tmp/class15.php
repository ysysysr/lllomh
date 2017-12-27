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
<meta name="keywords" content="" />
<meta name="description" content=" " />
<title>关于我--<?=$public_r[sitename]?></title>
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
<h3 class="title"><strong><a href="http://www.gonghaibo.com//gyw/">关于我</a></strong></h3>
      <article class="article-content">
<div class="about left">
  <h2>Just about me</h2>
    <ul style="margin: 0px 0px 30px -38px;"> 

             <pre>
 me = {
        "name": "Hobo Gong",
        "age": "20+",
        "gender": "Male",
        "graduated-university": "University",
        "work-experience": "4 years",
        "address": "China",
        "email": "lllomh@qq.com",
        "skills": {
            "php": {
                "frameworks": ["yii1.+"]
            },
            "frontend": {
                "basic": ["css3", "html", "html5", "jquery", "jquery-ui", "js"],
                "frameworks": ["bootstrap", "angularJS", "vue"],
                "others": ["Amaze UI"]
            },
            "web-server": ["IIS", "apache"],
            "system": ["windows", "windows-server", "OSX"],
            "database": ["Access", "mysql"],
            "machine learning": ["Preparation"],
            "others": ["cookie", "localstorage", "sessionStorage"]
        },
        "devTools": [
            ["sublime text 3", "PHP Storm", "Web Storm", "Nodepad++"],
            ["Chrome DevTools", "charles"],
            ["svn", "git"]
        ],
        "hobbies": ["reading", "travel"],
        "my-wish": "To be a good software engineer"
    }
             </pre>


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
    <div class="widget widget_ui_viewposts article-content">

      <h3 class="title"><strong>个人信息</strong></h3>
      <ul class="posts-xs">
      <p style="margin-bottom: 6px;font-size: 16px;line-height: 27px;">网名:<font  style="color: blue;">芈渡</font>lllomh</p>
      <p style="margin-bottom: 6px;font-size: 16px;line-height: 27px;">姓名:Hobo.Gong</p>
    <p style="margin-bottom: 6px;font-size: 16px;line-height: 27px;">现居:中国</p>
   <p style="margin-bottom: 6px;font-size: 16px;line-height: 27px;">职业:互联网</p>
  <p style="margin-bottom: 6px;font-size: 16px;line-height: 27px;">生日:乙亥年</p>
 <hr/ style="margin-left: -13px;">
<p style="margin-bottom: 6px;font-size: 16px;line-height: 27px;">喜欢的书籍:<百年孤独></p>
<p style="margin-bottom: 6px;font-size: 16px;line-height: 27px;">喜欢的影视:<天那边></p>
<p style="margin-bottom: 6px;font-size: 16px;line-height: 27px;">喜欢的运动:登山,游泳</p>
<p style="margin-bottom: 6px;font-size: 16px;line-height: 27px;">喜欢的游戏:仙剑奇侠传系列</p>
<p style="margin-bottom: 6px;font-size: 16px;line-height: 27px;">喜欢的颜色:深蓝</p>

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