<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_ecms_news`;");
E_C("CREATE TABLE `phome_ecms_news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `ttid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `onclick` int(10) unsigned NOT NULL DEFAULT '0',
  `plnum` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `totaldown` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `newspath` char(20) NOT NULL DEFAULT '',
  `filename` char(36) NOT NULL DEFAULT '',
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `username` char(20) NOT NULL DEFAULT '',
  `firsttitle` tinyint(1) NOT NULL DEFAULT '0',
  `isgood` tinyint(1) NOT NULL DEFAULT '0',
  `ispic` tinyint(1) NOT NULL DEFAULT '0',
  `istop` tinyint(1) NOT NULL DEFAULT '0',
  `isqf` tinyint(1) NOT NULL DEFAULT '0',
  `ismember` tinyint(1) NOT NULL DEFAULT '0',
  `isurl` tinyint(1) NOT NULL DEFAULT '0',
  `truetime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastdotime` int(10) unsigned NOT NULL DEFAULT '0',
  `havehtml` tinyint(1) NOT NULL DEFAULT '0',
  `groupid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `userfen` smallint(5) unsigned NOT NULL DEFAULT '0',
  `titlefont` char(14) NOT NULL DEFAULT '',
  `titleurl` char(200) NOT NULL DEFAULT '',
  `stb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `fstb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `restb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `keyboard` char(80) NOT NULL DEFAULT '',
  `title` char(100) NOT NULL DEFAULT '',
  `newstime` int(10) unsigned NOT NULL DEFAULT '0',
  `titlepic` char(120) NOT NULL DEFAULT '',
  `ftitle` char(120) NOT NULL DEFAULT '',
  `smalltext` char(255) NOT NULL DEFAULT '',
  `diggtop` int(11) NOT NULL DEFAULT '0',
  `onetext` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `newstime` (`newstime`),
  KEY `ttid` (`ttid`),
  KEY `firsttitle` (`firsttitle`),
  KEY `isgood` (`isgood`),
  KEY `ispic` (`ispic`),
  KEY `useridis` (`userid`,`ismember`)
) ENGINE=MyISAM AUTO_INCREMENT=160 DEFAULT CHARSET=utf8");
E_D("replace into `phome_ecms_news` values('48','5','0','10','0','0','201406','48','1','admin','0','0','0','0','0','0','0','1403001138','1513759431','1','0','0','','http://www.gonghaibo.com/life/201406/48.html','1','1','1','','jq移除添加class','1403000933','','','&lt;!DOCTYPE html PUBLIC &quot;-//W3C//DTD XHTML 1.0 Transitional//EN&quot; &quot;http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd&quot;&gt;&lt;html xmlns=&quot;http://www.w3.org/1999/xht','5','');");
E_D("replace into `phome_ecms_news` values('49','5','0','14','0','0','201406','49','1','admin','0','0','0','0','0','0','0','1403001138','1513759403','1','0','0','','http://www.gonghaibo.com/life/201406/49.html','1','1','1','','css重置样式','1513759374','','','/*-------------------------------------------------------------------- 全局定义 ---------------------------------------------------------------------*/body,html','5','');");
E_D("replace into `phome_ecms_news` values('50','5','0','50','0','0','201406','50','1','admin','0','0','0','0','0','0','0','1403001139','1513759369','1','0','0','','http://www.gonghaibo.com/life/201406/50.html','1','1','1','','jq模拟东滑�\�','1513759337','','','       /*滑动*/    \$(document).ready(function(){         \$(&quot;span.imgn&quot;).click(function(){                \$(&quot;#pu1&quot;).animate({&quot;left&quot;:-90},500);                 })','6','');");
E_D("replace into `phome_ecms_news` values('51','5','0','18','0','0','201406','51','1','admin','0','0','0','0','0','0','0','1403001139','1513759327','1','0','0','','http://www.gonghaibo.com/life/201406/51.html','1','1','1','又有','js获取动态时�\�','1513759302','','','&lt;script&gt; Date.prototype.Format = function (fmt) { //author: meizz     var o = {        &quot;M+&quot;: this.getMonth() + 1, //月份         &quot;d+&quot;: this.getDate(), //�\�','18','');");
E_D("replace into `phome_ecms_news` values('52','5','0','19','0','0','201406','52','1','admin','0','0','0','0','0','0','0','1403001140','1513759281','1','0','0','','http://www.gonghaibo.com/life/201406/52.html','1','1','1','','css中，如何设置前景色的透明�\�','1513759221','','','css控制透明度倒不麻烦。filter:alpha(opacity=50); /*IE滤镜，透明�\�50%*/-moz-opacity:0.5; /*Firefox私有，透明�\�50%*/opacity:0.5;/*其他，透明�\�50%*/举个例子：通过ie6 ie7 i','4','');");
E_D("replace into `phome_ecms_news` values('53','5','0','28','0','0','201406','53','1','admin','0','0','0','0','0','0','0','1403001140','1513759296','1','0','0','','http://www.gonghaibo.com/life/201406/53.html','1','1','1','教你','css透明度设�\�','1513759289','','','css控制透明度倒不麻烦。filter:alpha(opacity=50); /*IE滤镜，透明�\�50%*/-moz-opacity:0.5; /*Firefox私有，透明�\�50%*/opacity:0.5;/*其他，透明�\�50%*/举个例子：通过ie6 ie7 i','11','');");
E_D("replace into `phome_ecms_news` values('54','5','0','35','0','0','201406','54','1','admin','0','0','0','0','0','0','0','1403001140','1513759183','1','0','0','','http://www.gonghaibo.com/life/201406/54.html','1','1','1','教你','div全屏怎么�\�','1403001073','','','&lt;script&gt;window.onload = function(){document.getElementById(&quot;lele&quot;).style.height = document.documentElement.scrollHeight + &quot;px&quot;;}&lt;/script&gt;&lt;style&gt;body{margin:0;pa','8','');");
E_D("replace into `phome_ecms_news` values('55','5','0','22','0','0','201406','55','1','admin','0','0','0','0','0','0','0','1403001141','1513759125','1','0','0','','http://www.gonghaibo.com/life/201406/55.html','1','1','1','可做','CSS hack大全','1513759072','','','part1 —�\� 浏览器测试仪器，测试您现在使用的浏览器类型IE6IE7IE8FirefoxOperaSafari (Chrome)IE6IE7IE8FirefoxOperaSafari (Chrome)您现在使用的浏览器是Firefox。Firefox','5','');");
E_D("replace into `phome_ecms_news` values('56','5','0','72','0','0','201406','56','1','admin','0','0','1','0','0','0','0','1403001141','1513759057','1','0','0','','http://www.gonghaibo.com/life/201406/56.html','1','1','1','代码','html页面的CSS、DIV命名规则','1513758977','/d/file/2017-12-20/e652942ccdf6eb8f6c91b74820fd010a.jpg','','CSS命名规则　　头：header　　内容：content/containe　　尾：footer　　导航：nav　　侧栏：sidebar　　栏目：column　　页面外围控制整体布局宽度：wrapper　　左右中：left right cente','14','');");
E_D("replace into `phome_ecms_news` values('57','5','0','50','0','0','201406','57','1','admin','0','0','1','0','0','0','0','1403001141','1513758971','1','0','0','','http://www.gonghaibo.com/life/201406/57.html','1','1','1','','强大实用的jQuery幻灯片插�\�','1513758845','/d/file/2017-12-20/71516311297f9654d65cbfdb0ac8b432.jpg','','参数参数类型默认值说明items整数5幻灯片每页可见个数itemsDesktop数组[1199,4]设置浏览器宽度和幻灯片可见个数，格式为[X,Y]，X 为浏览器宽度，Y 为可见个数，如[1199,4]就是如果','7','');");
E_D("replace into `phome_ecms_news` values('58','5','0','209','0','0','201406','58','1','admin','0','0','1','0','0','0','0','1403001142','1513758821','1','0','0','','http://www.gonghaibo.com/life/201406/58.html','1','1','1','jq','JQuery 判断滚动条是否出现，判断垂直滚动条是否到某个位置','1513758444','/d/file/2017-12-20/3a78de8d7c49a59eb317dccb733bca31.jpg','','&lt;!-- lang: js --&gt; //浏览器出现滚动条时左边栏样式改变 \$(window).resize(function(){ if(\$(window).width()&lt;1150){  //浏览器宽度小�\�1150�\� \$(&quot;.left-nav&quot;).css({&quot;posit','18','');");
E_D("replace into `phome_ecms_news` values('59','5','0','156','0','0','201406','59','1','admin','0','0','1','0','0','0','0','1403001142','1513758756','1','0','0','','http://www.gonghaibo.com/life/201406/59.html','1','1','1','代码','CANVAS绘图渐变','1513758517','/d/file/2017-12-20/06d495e5051c983da4e49ba114bf4de0.jpg','','&lt;!DOCTYPE html&gt;&lt;html&gt;&lt;head&gt;&lt;title&gt;HTML5 Canvas Demo&lt;/title&gt;&lt;!--[if IE]&gt;  &lt;script type=&quot;text/javascript&quot; src=&quot;excanvas.js&quot;&gt;&lt;/script&gt;&lt;![endif]--&gt;&lt;script&gt;  window.','33','');");
E_D("replace into `phome_ecms_news` values('68','4','0','11','0','0','201406','68','1','admin','0','0','1','0','0','0','0','1403001178','1513837948','1','0','0','','http://www.gonghaibo.com/food/201406/68.html','1','1','1','DIY','各种水果DIY的动物和人物造型','1403000971','/d/file/20140617/o0yjnuapt4w.jpg','','			水果是我们日常生活中不可缺少的补充营养的东西，如果我们来点儿创意，把水果制成动物图或者人物图，那将会非常有趣的，小小的水果被想象力赋予活泼的生命，一地鸡毛的生活细节�\�','5','');");
E_D("replace into `phome_ecms_news` values('129','3','0','79','0','0','201406','129','1','admin','0','1','1','0','0','0','0','1403001321','1513837923','1','0','0','','http://www.gonghaibo.com/view/201406/129.html','1','1','1','','世界各地美妙奇幻的彩虹，美到窒息','1403001144','/d/file/20140617/llb2g1f1pem.jpg','','			一说到彩虹，估计不少人都见过，小编小的时候也见过，不过现在感觉就很少见了。小的时候不懂，感觉彩虹很神奇，像天空中的七彩桥一样，特别漂亮，后来长大，学了物理，知道它是一种物理现','19','');");
E_D("replace into `phome_ecms_news` values('151','7','0','0','0','0','2015-05-01','151','47','fkuertfp','0','0','0','0','0','1','0','1430466361','1430466361','1','0','0','','http://www.gonghaibo.com/site_misc/team/2015-05-01/151.html','1','1','1','12','312','1430466361','','','1212','0','');");
E_D("replace into `phome_ecms_news` values('156','16','0','10','0','0','2015-10-13','156','1','admin','0','0','0','0','0','0','0','1444723245','1513838006','1','0','0','','http://www.gonghaibo.com/esjiy/2015-10-13/156.html','1','1','1','','樱花树下','1444723198','','我的世界','可好�\�','0','感觉不错，很赞哦�\�');");
E_D("replace into `phome_ecms_news` values('159','5','0','5','0','0','2017-12-20','159','1','lllomh','0','0','1','0','0','0','0','1513753254','1513758257','1','0','0','','http://www.gonghaibo.com/life/2017-12-20/159.html','1','1','1','','关闭手机页面中点击文本框，网页放大效�\�','1513753192','/d/file/2017-12-20/e3f55b4813cba6c703ea31b283e214e5.jpg','','手机缩放问题','1','感觉不错，很赞哦�\�');");

@include("../../inc/footer.php");
?>