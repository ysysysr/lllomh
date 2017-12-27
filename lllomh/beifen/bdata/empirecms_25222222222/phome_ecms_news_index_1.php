<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `phome_ecms_news_index`;");
E_C("CREATE TABLE `phome_ecms_news_index` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `newstime` int(10) unsigned NOT NULL DEFAULT '0',
  `truetime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastdotime` int(10) unsigned NOT NULL DEFAULT '0',
  `havehtml` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `checked` (`checked`),
  KEY `newstime` (`newstime`),
  KEY `truetime` (`truetime`,`id`),
  KEY `havehtml` (`classid`,`truetime`,`havehtml`,`checked`,`id`)
) ENGINE=MyISAM AUTO_INCREMENT=157 DEFAULT CHARSET=utf8");
E_D("replace into `phome_ecms_news_index` values('59','5','1','1403001097','1403001142','1403001142','1');");
E_D("replace into `phome_ecms_news_index` values('58','5','1','1403001114','1403001142','1403001142','1');");
E_D("replace into `phome_ecms_news_index` values('57','5','1','1403001067','1403001141','1403001141','1');");
E_D("replace into `phome_ecms_news_index` values('56','5','1','1403001087','1403001141','1403001141','1');");
E_D("replace into `phome_ecms_news_index` values('55','5','1','1403001022','1403001141','1403001141','1');");
E_D("replace into `phome_ecms_news_index` values('54','5','1','1403001073','1403001140','1403001140','1');");
E_D("replace into `phome_ecms_news_index` values('53','5','1','1403001065','1403001140','1403001140','1');");
E_D("replace into `phome_ecms_news_index` values('52','5','1','1403000996','1403001140','1403001140','1');");
E_D("replace into `phome_ecms_news_index` values('51','5','1','1403001038','1403001139','1403001139','1');");
E_D("replace into `phome_ecms_news_index` values('50','5','1','1403000963','1403001139','1403001139','1');");
E_D("replace into `phome_ecms_news_index` values('49','5','1','1403000907','1403001138','1403001138','1');");
E_D("replace into `phome_ecms_news_index` values('48','5','1','1403000933','1403001138','1403001138','1');");
E_D("replace into `phome_ecms_news_index` values('68','4','1','1403000971','1403001178','1403001178','1');");
E_D("replace into `phome_ecms_news_index` values('69','4','1','1403000986','1403001178','1403001178','1');");
E_D("replace into `phome_ecms_news_index` values('70','4','1','1403000989','1403001179','1403001179','1');");
E_D("replace into `phome_ecms_news_index` values('71','4','1','1403000998','1403001179','1403001179','1');");
E_D("replace into `phome_ecms_news_index` values('72','4','1','1403001033','1403001179','1403001179','1');");
E_D("replace into `phome_ecms_news_index` values('73','4','1','1403001019','1403001179','1403001179','1');");
E_D("replace into `phome_ecms_news_index` values('74','4','1','1403001067','1403001180','1403001180','1');");
E_D("replace into `phome_ecms_news_index` values('75','4','1','1403001075','1403001180','1403001180','1');");
E_D("replace into `phome_ecms_news_index` values('76','4','1','1403001104','1403001181','1403001181','1');");
E_D("replace into `phome_ecms_news_index` values('77','4','1','1403001097','1403001181','1403001181','1');");
E_D("replace into `phome_ecms_news_index` values('78','4','1','1403001140','1403001181','1403001181','1');");
E_D("replace into `phome_ecms_news_index` values('79','4','1','1403001136','1403001181','1403001181','1');");
E_D("replace into `phome_ecms_news_index` values('129','3','1','1403001144','1403001321','1403001321','1');");
E_D("replace into `phome_ecms_news_index` values('130','3','1','1403001169','1403001322','1403001322','1');");
E_D("replace into `phome_ecms_news_index` values('131','3','1','1403001083','1403001322','1403001322','1');");
E_D("replace into `phome_ecms_news_index` values('132','3','1','1403001242','1403001323','1403001323','1');");
E_D("replace into `phome_ecms_news_index` values('133','3','1','1403001152','1403001323','1403001323','1');");
E_D("replace into `phome_ecms_news_index` values('134','3','1','1403001264','1403001324','1403001324','1');");
E_D("replace into `phome_ecms_news_index` values('135','3','1','1403001264','1403001324','1444789028','1');");
E_D("replace into `phome_ecms_news_index` values('136','3','1','1403001269','1403001324','1403001324','1');");
E_D("replace into `phome_ecms_news_index` values('137','3','1','1403001272','1403001324','1414048117','1');");
E_D("replace into `phome_ecms_news_index` values('138','3','1','1403001300','1403001325','1414048084','1');");
E_D("replace into `phome_ecms_news_index` values('139','3','1','1403001278','1403001325','1430901294','1');");
E_D("replace into `phome_ecms_news_index` values('156','16','1','1444723198','1444723245','1444723245','1');");
E_D("replace into `phome_ecms_news_index` values('150','4','0','1429544888','1429544888','1429544888','0');");
E_D("replace into `phome_ecms_news_index` values('151','7','0','1430466361','1430466361','1430466361','0');");

require("../../inc/footer.php");
?>