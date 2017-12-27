<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsmemberadd`;");
E_C("CREATE TABLE `phome_enewsmemberadd` (
  `userid` int(10) unsigned NOT NULL DEFAULT '0',
  `truename` varchar(20) NOT NULL DEFAULT '',
  `oicq` varchar(25) NOT NULL DEFAULT '',
  `msn` varchar(120) NOT NULL DEFAULT '',
  `mycall` varchar(30) NOT NULL DEFAULT '',
  `phone` varchar(30) NOT NULL DEFAULT '',
  `address` varchar(255) NOT NULL DEFAULT '',
  `zip` varchar(8) NOT NULL DEFAULT '',
  `spacestyleid` smallint(6) NOT NULL DEFAULT '0',
  `homepage` varchar(200) NOT NULL DEFAULT '',
  `saytext` text NOT NULL,
  `company` varchar(255) NOT NULL DEFAULT '',
  `fax` varchar(30) NOT NULL DEFAULT '',
  `userpic` varchar(200) NOT NULL DEFAULT '',
  `spacename` varchar(255) NOT NULL DEFAULT '',
  `spacegg` text NOT NULL,
  `viewstats` int(11) NOT NULL DEFAULT '0',
  `regip` varchar(20) NOT NULL DEFAULT '',
  `lasttime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastip` varchar(20) NOT NULL DEFAULT '',
  `loginnum` int(10) unsigned NOT NULL DEFAULT '0',
  `job` varchar(255) DEFAULT NULL,
  `juzhu` varchar(10) DEFAULT NULL,
  `Diybg` varchar(255) DEFAULT NULL,
  `renzheng` text,
  `xingyun` varchar(255) DEFAULT NULL,
  `lockBgImg` varchar(255) DEFAULT NULL,
  `repeatBg` varchar(255) DEFAULT NULL,
  `Bgalign` varchar(255) DEFAULT NULL,
  `bgcolor` varchar(255) DEFAULT NULL,
  `bgsize` varchar(255) DEFAULT NULL,
  `feeduserid` mediumtext,
  `zuijin` varchar(140) DEFAULT NULL,
  `regipport` varchar(6) NOT NULL DEFAULT '',
  `lastipport` varchar(6) NOT NULL DEFAULT '',
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsmemberadd` values('1','','','','','','','','1','','','','','/d/file/avator/user1_avator.jpg','','','4','192.168.1.1','1428505223','192.168.1.1','10',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'23::::::','','0');");
E_D("replace into `phome_enewsmemberadd` values('2','','','','','','','','1','','','','','/d/file/2014-09-11/14317f6e47567df767a9acf4c38261df.gif','','','0','192.168.1.1','1410367679','192.168.1.1','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('3','张小�\�','','','','','','','1','','','','','/d/file/avator/user3_avator.jpg','','','0','60.210.102.58','1415168295','60.210.102.58','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('4','','','','','','','','1','','','','','','','','0','125.39.18.136','1415192099','125.39.18.136','2',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('5','','','','','','','','1','','','','','','','','1','171.15.148.116','1415349767','171.15.148.116','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('6','','','','','','','','1','','','','','','','','3','171.116.103.136','1415459091','171.116.103.136','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('7','','','','','','','','1','','','','','','','','1','36.99.211.108','1416657271','36.99.211.108','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('8','','','','','','','','1','','','','','','','','1','113.57.162.138','1416796025','113.57.162.138','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('9','','','','','','','','1','','','','','/d/file/avator/user9_avator.jpg','','','0','111.38.111.69','1417065383','111.38.111.69','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('10','','','','','','','','1','','','','','','','','3','112.95.189.248','1417155469','219.133.167.195','2',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('11','','','','','','','','1','','','','','','','','0','120.37.53.129','1417794854','120.37.53.129','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('12','','','','','','','','1','','','','','','','','0','119.137.88.50','1418722153','119.137.88.50','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('13','','','','','','','','1','','','','','','','','3','123.163.21.114','1419161090','106.46.161.168','2',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('14','邓志�\�','','','','','','','1','','','','','','','','1','182.18.13.16','1419154254','182.18.13.16','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('15','','','','','','','','1','','','','','','','','1','192.168.1.1','1419326286','192.168.1.1','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('16','','','','','','','','1','','','','','','','','1','218.61.106.184','1419409087','218.61.106.184','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('17','','','','','','','','1','','','','','/d/file/2014-12-28/d654647bacfcd74af12c46b32fbfa1fe.jpg','','','2','113.117.206.196','1419743278','113.117.206.196','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('18','','','','','','','','1','','','','','/d/file/2015-01-04/20a950abb5c617461cd4adfe65f8c6c1.jpg','','','2','27.194.195.85','1420368629','27.194.195.85','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('19','','','','','','','','1','','11111111','','','','','','1','124.134.165.141','1420468623','124.134.165.141','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('20','','','','','','','','1','','','','','','','','2','124.202.191.38','1421149882','60.10.97.199','2',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('21','','','','','','','','1','','','','','','','','1','111.170.49.56','1420700018','111.170.49.56','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('22','','','','','','','','1','','','','','','','','1','171.118.241.182','1420934957','171.118.241.182','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('23','','','','','','','','1','','','','','/d/file/avator/user23_avator.jpg','','','4','119.85.113.43','1421163938','119.85.113.43','6',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('24','','','','','','','','1','','','','','','','','1','183.56.195.220','1421231755','183.56.195.220','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('25','','','','','','','','1','','','','','','','','1','61.129.79.26','1421801048','61.129.79.26','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('26','','','','','','','','1','','','','','','','','1','171.38.176.113','1422234390','171.38.176.113','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('27','','','','','','','','1','','','','','','','','2','116.237.60.227','1422361363','116.237.60.227','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('28','','','','','','','','1','','','','','','','','1','49.64.119.174','1422544318','49.64.119.174','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('29','','','','','','','','1','','','','','','','','1','222.209.210.155','1422948543','222.209.210.155','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('30','','','','','','','','1','','','','','','','','1','119.35.214.57','1423503191','119.35.214.57','2',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('31','','','','','','','','1','','','','','','','','1','117.25.225.25','1423506259','117.25.225.25','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('32','','','','','','','','1','','','','','','','','12','59.36.164.76','1423630556','59.36.164.76','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('33','','','','','','','','1','','','','','','','','0','123.155.155.20','1424268673','123.155.155.20','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('34','','','','','','','','1','','','','','','','','1','14.117.104.172','1425397048','14.117.104.172','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('35','','','','','','','','1','','','','','','','','0','14.117.104.172','1425399089','14.117.104.172','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('36','','','','','','','','1','','','','','','','','1','14.117.104.172','1425541594','14.117.104.172','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('37','','','','','','','','1','','','','','','','','1','183.29.131.226','1426075243','183.29.131.226','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('38','','','','','','','','1','','','','','','','','1','122.13.2.160','1426324174','122.13.2.160','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('39','','','','','','','','1','','','','','','','','1','112.90.37.197','1426604105','112.90.37.197','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('40','1','','','','','','','1','','','','','','11','1122','1','58.213.155.2','1427683708','58.213.155.2','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('41','','','','','','','','1','','','','','','','','1','211.157.140.71','1427955945','211.157.140.71','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('42','','','','','','','','1','','','','','','123','00000000000007878','3','124.65.188.90','1428739712','111.161.77.233','3',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('43','','','','','','','','1','','','','','','','','1','123.117.47.162','1428970429','123.117.47.162','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('44','','','','','','','','1','','','','','','','','1','221.203.106.204','1428992556','221.203.106.204','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('45','','','','','','','','1','','','','','','','','1','58.254.168.77','1429544796','58.254.168.77','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('46','','','','','','','','1','','','','','','的哥','大大�\�','3','58.62.12.196','1429548291','58.62.12.196','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('47','','','','','','','','1','','','','','','','','6','122.13.236.33','1430466236','122.13.236.33','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('48','','','','','','','','1','','','','','/d/file/2015-05-10/df3f0c590c5c13fe897f814f0f09181c.jpg','','','0','182.150.137.205','1431225871','182.150.137.205','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('49','','','','','','','','1','','','','','','','','1','115.218.238.63','1431394305','115.218.238.63','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('50','魏巍','321231','','15625159594','15625159594','','','1','','','','','','','','1','219.130.240.186','1431669352','219.130.240.186','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('51','','','','','','','','1','','','','','','','','0','183.19.121.218','1431694688','183.19.121.218','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('52','','','','','','','','1','','','','','','','','0','171.113.145.248','1431949326','171.113.145.248','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('53','','','','','','','','1','','','','','','','','1','124.163.223.64','1432213739','124.163.223.64','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('54','','','','','','','','1','','','','','','','','3','127.0.0.1','1444700989','127.0.0.1','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'52496','52496');");

@include("../../inc/footer.php");
?>