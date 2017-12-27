<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `phome_enewsuserlist`;");
E_C("CREATE TABLE `phome_enewsuserlist` (
  `listid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `listname` varchar(60) NOT NULL DEFAULT '',
  `pagetitle` varchar(120) NOT NULL DEFAULT '',
  `filepath` varchar(120) NOT NULL DEFAULT '',
  `filetype` varchar(12) NOT NULL DEFAULT '',
  `totalsql` text NOT NULL,
  `listsql` text NOT NULL,
  `maxnum` int(11) NOT NULL DEFAULT '0',
  `lencord` int(11) NOT NULL DEFAULT '0',
  `listtempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `pagekeywords` varchar(255) NOT NULL DEFAULT '',
  `pagedescription` varchar(255) NOT NULL DEFAULT '',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`listid`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsuserlist` values('1','首页列表','首页列表','../../','.html','select count(*) as total from [!db.pre!]ecms_news where classid <>7','select * from [!db.pre!]ecms_news where classid <>7 order by newstime desc','0','20','9','首页列表','首页列表','0');");
E_D("replace into `phome_enewsuserlist` values('2','点赞墙','点赞墙','../../zan/','.html','select count(*) as total from [!db.pre!]ecms_news order by diggtop desc','select * from [!db.pre!]ecms_news order by diggtop desc','40','40','11','点赞墙','点赞墙','0');");
E_D("replace into `phome_enewsuserlist` values('11','热门列表','热门列表','../../remen/','.html','select count(*) as total from [!db.pre!]ecms_news where classid <>7','select * from [!db.pre!]ecms_news where classid <>7 order by onclick desc','36','36','8','','','0');");
E_D("replace into `phome_enewsuserlist` values('12','推荐列表','推荐列表','../../tui/','.html','select count(*) as total from [!db.pre!]ecms_news where classid <>7 and isgood > 0 ','select * from [!db.pre!]ecms_news where classid <>7 and isgood > 0 order by newstime desc','36','36','7','','','0');");

require("../../inc/footer.php");
?>