<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `phome_enewspubvar`;");
E_C("CREATE TABLE `phome_enewspubvar` (
  `varid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `myvar` varchar(60) NOT NULL DEFAULT '',
  `varname` varchar(20) NOT NULL DEFAULT '',
  `varvalue` text NOT NULL,
  `varsay` varchar(255) NOT NULL DEFAULT '',
  `myorder` smallint(5) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `tocache` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`varid`),
  UNIQUE KEY `varname` (`varname`),
  KEY `classid` (`classid`),
  KEY `tocache` (`tocache`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewspubvar` values('1','xlwb','新浪微博地址','http://weibo.com/u/2462548165','变量值内填写新浪微博地址','0','0','1');");
E_D("replace into `phome_enewspubvar` values('2','txwb','腾讯微博地址','http://t.qq.com/moyu_blog/','变量值内填写腾讯微博地址','0','0','1');");
E_D("replace into `phome_enewspubvar` values('3','icp','备案信息','鲁ICP备12345678号','填入你的备案信息','0','0','1');");
E_D("replace into `phome_enewspubvar` values('4','tongji','统计代码','','填入你的统计代码','0','0','1');");
E_D("replace into `phome_enewspubvar` values('5','guanyu','关于','这里填入关于里面的内容，支持HTML代码！','这里是关于栏目的内容','0','0','1');");
E_D("replace into `phome_enewspubvar` values('6','guanggao','广告','这里是广告栏目的内容，支持HTML代码！','这里是广告栏目的内容','0','0','1');");
E_D("replace into `phome_enewspubvar` values('7','duoshuo','多说2级域名','ecms009','这里填写你申请的多说代码的二级域名','0','0','1');");

require("../../inc/footer.php");
?>