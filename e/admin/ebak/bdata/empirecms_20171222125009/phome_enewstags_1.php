<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewstags`;");
E_C("CREATE TABLE `phome_enewstags` (
  `tagid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tagname` char(20) NOT NULL DEFAULT '',
  `num` int(10) unsigned NOT NULL DEFAULT '0',
  `isgood` tinyint(1) NOT NULL DEFAULT '0',
  `cid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`tagid`),
  UNIQUE KEY `tagname` (`tagname`),
  KEY `isgood` (`isgood`),
  KEY `cid` (`cid`),
  KEY `num` (`num`)
) ENGINE=MyISAM AUTO_INCREMENT=99 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewstags` values('1','15','4','0','0');");
E_D("replace into `phome_enewstags` values('2','让人','6','0','0');");
E_D("replace into `phome_enewstags` values('3','洗车','1','0','0');");
E_D("replace into `phome_enewstags` values('4','太酷�\�','1','0','0');");
E_D("replace into `phome_enewstags` values('5','用线','4','0','0');");
E_D("replace into `phome_enewstags` values('6','史瑞�\�','4','0','0');");
E_D("replace into `phome_enewstags` values('7','现实�\�','4','0','0');");
E_D("replace into `phome_enewstags` values('8','你不知道','1','0','0');");
E_D("replace into `phome_enewstags` values('9','用书','4','0','0');");
E_D("replace into `phome_enewstags` values('10','11','1','0','0');");
E_D("replace into `phome_enewstags` values('11','河上','4','0','0');");
E_D("replace into `phome_enewstags` values('12','塞纳','4','0','0');");
E_D("replace into `phome_enewstags` values('13','到过','1','0','0');");
E_D("replace into `phome_enewstags` values('14','25','1','0','0');");
E_D("replace into `phome_enewstags` values('15','1.34','4','0','0');");
E_D("replace into `phome_enewstags` values('16','22','4','0','0');");
E_D("replace into `phome_enewstags` values('17','泰坦','4','0','0');");
E_D("replace into `phome_enewstags` values('18','28.2','4','0','0');");
E_D("replace into `phome_enewstags` values('19','告诉�\�','1','0','0');");
E_D("replace into `phome_enewstags` values('20','句话','4','0','0');");
E_D("replace into `phome_enewstags` values('21','的人','2','0','0');");
E_D("replace into `phome_enewstags` values('22','教你','6','0','0');");
E_D("replace into `phome_enewstags` values('23','让你','9','0','0');");
E_D("replace into `phome_enewstags` values('24','之感','2','0','0');");
E_D("replace into `phome_enewstags` values('25','要不�\�','2','0','0');");
E_D("replace into `phome_enewstags` values('26','更具','2','0','0');");
E_D("replace into `phome_enewstags` values('27','更美�\�','2','0','0');");
E_D("replace into `phome_enewstags` values('28','24','4','0','0');");
E_D("replace into `phome_enewstags` values('29','可做','2','0','0');");
E_D("replace into `phome_enewstags` values('30','又有','6','0','0');");
E_D("replace into `phome_enewstags` values('31','小工�\�','2','0','0');");
E_D("replace into `phome_enewstags` values('32','你就可以','2','0','0');");
E_D("replace into `phome_enewstags` values('33','就会','2','0','0');");
E_D("replace into `phome_enewstags` values('34','最喜欢','2','0','0');");
E_D("replace into `phome_enewstags` values('35','你也�\�','2','0','0');");
E_D("replace into `phome_enewstags` values('36','拼出','4','0','0');");
E_D("replace into `phome_enewstags` values('37','用食�\�','4','0','0');");
E_D("replace into `phome_enewstags` values('38','看完','2','0','0');");
E_D("replace into `phome_enewstags` values('39','DIY','2','0','0');");
E_D("replace into `phome_enewstags` values('40','吃过','2','0','0');");
E_D("replace into `phome_enewstags` values('41','没吃�\�','2','0','0');");
E_D("replace into `phome_enewstags` values('42','将食�\�','2','0','0');");
E_D("replace into `phome_enewstags` values('43','舍得�\�','2','0','0');");
E_D("replace into `phome_enewstags` values('44','又可','4','0','0');");
E_D("replace into `phome_enewstags` values('45','超可�\�','2','0','0');");
E_D("replace into `phome_enewstags` values('46','猫肉�\�','2','0','0');");
E_D("replace into `phome_enewstags` values('47','既可','2','0','0');");
E_D("replace into `phome_enewstags` values('48','世界上最�\�','2','0','0');");
E_D("replace into `phome_enewstags` values('49','在空�\�','2','0','0');");
E_D("replace into `phome_enewstags` values('50','腕表','2','0','0');");
E_D("replace into `phome_enewstags` values('51','地球','2','0','0');");
E_D("replace into `phome_enewstags` values('52','Apple','2','0','0');");
E_D("replace into `phome_enewstags` values('53','脚上','2','0','0');");
E_D("replace into `phome_enewstags` values('54','可与','2','0','0');");
E_D("replace into `phome_enewstags` values('55','JINS','2','0','0');");
E_D("replace into `phome_enewstags` values('56','MEME','2','0','0');");
E_D("replace into `phome_enewstags` values('57','EDGE','2','0','0');");
E_D("replace into `phome_enewstags` values('58','多屏','2','0','0');");
E_D("replace into `phome_enewstags` values('59','多功�\�','2','0','0');");
E_D("replace into `phome_enewstags` values('60','Backpacker','2','0','0');");
E_D("replace into `phome_enewstags` values('61','iPhone','2','0','0');");
E_D("replace into `phome_enewstags` values('62','ENYO','2','0','0');");
E_D("replace into `phome_enewstags` values('63','带你','4','0','0');");
E_D("replace into `phome_enewstags` values('64','Hyper','2','0','0');");
E_D("replace into `phome_enewstags` values('65','燃料电池','1','0','0');");
E_D("replace into `phome_enewstags` values('66','PowerTrekk','1','0','0');");
E_D("replace into `phome_enewstags` values('67','净化空�\�','2','1','0');");
E_D("replace into `phome_enewstags` values('68','EVE','2','0','0');");
E_D("replace into `phome_enewstags` values('69','离线','2','0','0');");
E_D("replace into `phome_enewstags` values('70','更强�\�','2','0','0');");
E_D("replace into `phome_enewstags` values('71','无障�\�','2','0','0');");
E_D("replace into `phome_enewstags` values('72','SIGMO','2','0','0');");
E_D("replace into `phome_enewstags` values('73','360','2','0','0');");
E_D("replace into `phome_enewstags` values('74','近距�\�','2','0','0');");
E_D("replace into `phome_enewstags` values('75','世界�\�','4','0','0');");
E_D("replace into `phome_enewstags` values('76','被遗�\�','2','0','0');");
E_D("replace into `phome_enewstags` values('77','最漂亮','2','0','0');");
E_D("replace into `phome_enewstags` values('78','18','2','0','0');");
E_D("replace into `phome_enewstags` values('79','之美','2','0','0');");
E_D("replace into `phome_enewstags` values('80','微距','4','0','0');");
E_D("replace into `phome_enewstags` values('81','各大','2','0','0');");
E_D("replace into `phome_enewstags` values('82','更美','2','0','0');");
E_D("replace into `phome_enewstags` values('83','魅惑','2','0','0');");
E_D("replace into `phome_enewstags` values('84','无二','2','0','0');");
E_D("replace into `phome_enewstags` values('85','爱玩','1','0','0');");
E_D("replace into `phome_enewstags` values('86','你能','2','0','0');");
E_D("replace into `phome_enewstags` values('87','45','2','0','0');");
E_D("replace into `phome_enewstags` values('88','20','2','0','0');");
E_D("replace into `phome_enewstags` values('89','绘画作品','3','1','0');");
E_D("replace into `phome_enewstags` values('90','手工制作','3','1','0');");
E_D("replace into `phome_enewstags` values('91','大家�\�','3','0','0');");
E_D("replace into `phome_enewstags` values('92','味儿','3','0','0');");
E_D("replace into `phome_enewstags` values('93','唇上','3','0','0');");
E_D("replace into `phome_enewstags` values('94','唇妆�\�','3','0','0');");
E_D("replace into `phome_enewstags` values('95','遛狗','1','0','0');");
E_D("replace into `phome_enewstags` values('96','你更','1','0','0');");
E_D("replace into `phome_enewstags` values('97','Lishinu','1','0','0');");
E_D("replace into `phome_enewstags` values('98','丛林�\�','1','0','0');");

@include("../../inc/footer.php");
?>