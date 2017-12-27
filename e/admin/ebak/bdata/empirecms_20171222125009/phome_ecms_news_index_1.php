<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

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
) ENGINE=MyISAM AUTO_INCREMENT=160 DEFAULT CHARSET=utf8");
E_D("replace into `phome_ecms_news_index` values('48','5','1','1403000933','1403001138','1513759431','1');");
E_D("replace into `phome_ecms_news_index` values('49','5','1','1513759374','1403001138','1513759403','1');");
E_D("replace into `phome_ecms_news_index` values('50','5','1','1513759337','1403001139','1513759369','1');");
E_D("replace into `phome_ecms_news_index` values('51','5','1','1513759302','1403001139','1513759327','1');");
E_D("replace into `phome_ecms_news_index` values('52','5','1','1513759221','1403001140','1513759281','1');");
E_D("replace into `phome_ecms_news_index` values('53','5','1','1513759289','1403001140','1513759296','1');");
E_D("replace into `phome_ecms_news_index` values('54','5','1','1403001073','1403001140','1513759183','1');");
E_D("replace into `phome_ecms_news_index` values('55','5','1','1513759072','1403001141','1513759125','1');");
E_D("replace into `phome_ecms_news_index` values('56','5','1','1513758977','1403001141','1513759057','1');");
E_D("replace into `phome_ecms_news_index` values('57','5','1','1513758845','1403001141','1513758971','1');");
E_D("replace into `phome_ecms_news_index` values('58','5','1','1513758444','1403001142','1513758821','1');");
E_D("replace into `phome_ecms_news_index` values('59','5','1','1513758517','1403001142','1513758756','1');");
E_D("replace into `phome_ecms_news_index` values('68','4','1','1403000971','1403001178','1513837948','1');");
E_D("replace into `phome_ecms_news_index` values('129','3','1','1403001144','1403001321','1513837923','1');");
E_D("replace into `phome_ecms_news_index` values('151','7','1','1430466361','1430466361','1430466361','1');");
E_D("replace into `phome_ecms_news_index` values('156','16','1','1444723198','1444723245','1513838006','1');");
E_D("replace into `phome_ecms_news_index` values('159','5','1','1513753192','1513753254','1513758257','1');");

@include("../../inc/footer.php");
?>