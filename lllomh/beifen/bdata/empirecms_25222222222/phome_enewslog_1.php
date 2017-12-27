<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `phome_enewslog`;");
E_C("CREATE TABLE `phome_enewslog` (
  `loginid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `logintime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `loginip` varchar(20) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(30) NOT NULL DEFAULT '',
  `loginauth` tinyint(1) NOT NULL DEFAULT '0',
  `ipport` varchar(6) NOT NULL DEFAULT '',
  PRIMARY KEY (`loginid`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=192 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewslog` values('1','admin','2014-06-15 17:00:04','119.185.221.16','1','','0','');");
E_D("replace into `phome_enewslog` values('2','admin','2014-06-16 21:14:42','119.185.221.16','1','','0','');");
E_D("replace into `phome_enewslog` values('3','admin','2014-06-17 12:39:01','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('4','admin','2014-06-17 18:15:04','119.185.221.16','1','','0','');");
E_D("replace into `phome_enewslog` values('5','admin','2014-06-18 09:29:40','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('6','admin','2014-06-19 13:31:15','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('7','admin','2014-06-19 14:05:43','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('8','admin','2014-06-19 18:55:40','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('9','admin','2014-06-19 20:08:52','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('10','admin','2014-06-20 01:55:12','119.185.221.16','1','','0','');");
E_D("replace into `phome_enewslog` values('11','admin','2014-06-20 01:55:41','119.185.221.16','1','','0','');");
E_D("replace into `phome_enewslog` values('12','admin','2014-06-20 17:51:52','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('13','admin','2014-06-20 19:29:04','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('14','admin','2014-06-21 17:08:43','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('15','admin','2014-06-21 17:11:31','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('16','admin','2014-06-22 00:01:30','119.179.200.107','1','','0','');");
E_D("replace into `phome_enewslog` values('17','admin','2014-06-22 00:53:11','119.179.200.107','1','','0','');");
E_D("replace into `phome_enewslog` values('18','admin','2014-06-22 01:24:18','119.179.200.107','1','','0','');");
E_D("replace into `phome_enewslog` values('19','admin','2014-06-22 01:37:56','119.179.200.107','1','','0','');");
E_D("replace into `phome_enewslog` values('20','admin','2014-06-22 14:04:55','119.179.200.107','1','','0','');");
E_D("replace into `phome_enewslog` values('21','admin','2014-06-23 00:37:24','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('22','admin','2014-06-23 19:20:05','192.168.1.232','0','','0','');");
E_D("replace into `phome_enewslog` values('23','99yuanma.net','2014-06-23 19:20:26','192.168.1.232','0','','0','');");
E_D("replace into `phome_enewslog` values('24','99yuanma','2014-06-23 19:20:48','192.168.1.232','0','','0','');");
E_D("replace into `phome_enewslog` values('25','admin','2014-06-23 19:38:21','192.168.1.232','0','','0','');");
E_D("replace into `phome_enewslog` values('26','admin','2014-06-23 19:38:43','192.168.1.232','0','','0','');");
E_D("replace into `phome_enewslog` values('27','admin','2014-06-23 20:43:42','192.168.1.232','1','','0','');");
E_D("replace into `phome_enewslog` values('28','admin','2014-06-23 21:25:44','192.168.1.232','0','','0','');");
E_D("replace into `phome_enewslog` values('29','admin','2014-06-23 22:47:30','119.179.200.107','1','','0','');");
E_D("replace into `phome_enewslog` values('30','admin','2014-06-23 22:58:14','119.179.200.107','1','','0','');");
E_D("replace into `phome_enewslog` values('31','admin','2014-06-24 08:31:29','124.161.224.68','0','','0','');");
E_D("replace into `phome_enewslog` values('32','admin','2014-06-24 08:34:08','124.161.224.68','0','','0','');");
E_D("replace into `phome_enewslog` values('33','admin','2014-06-24 08:35:06','124.161.224.68','0','','0','');");
E_D("replace into `phome_enewslog` values('34','admin','2014-06-27 13:45:22','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('35','admin','2014-06-27 22:10:50','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('36','admin','2014-07-01 13:41:03','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('37','admin','2014-07-01 16:35:20','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('38','admin','2014-07-01 18:49:59','119.179.203.142','1','','0','');");
E_D("replace into `phome_enewslog` values('39','admin','2014-07-02 19:46:32','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('40','admin','2014-07-04 16:04:27','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('41','admin','2014-07-07 08:17:51','117.136.28.65','0','','0','');");
E_D("replace into `phome_enewslog` values('42','admin','2014-07-07 08:18:14','117.136.28.65','0','','0','');");
E_D("replace into `phome_enewslog` values('43','admin','2014-07-07 08:19:01','117.136.28.65','0','','0','');");
E_D("replace into `phome_enewslog` values('44','admin','2014-07-10 16:20:19','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('45','admin','2014-07-15 21:49:30','112.239.1.175','1','','0','');");
E_D("replace into `phome_enewslog` values('46','admin','2014-07-15 21:52:48','14.23.233.188','1','','0','');");
E_D("replace into `phome_enewslog` values('47','admin','2014-07-15 23:23:22','112.239.1.175','0','','0','');");
E_D("replace into `phome_enewslog` values('48','admin','2014-07-15 23:23:28','112.239.1.175','1','','0','');");
E_D("replace into `phome_enewslog` values('49','admin','2014-08-01 17:56:37','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('50','admin','2014-08-06 15:28:04','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('51','admin','2014-08-07 01:16:38','119.180.219.152','1','','0','');");
E_D("replace into `phome_enewslog` values('52','admin','2014-08-07 13:41:00','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('53','admin','2014-08-08 00:08:34','119.180.219.152','1','','0','');");
E_D("replace into `phome_enewslog` values('54','admin','2014-08-08 17:58:50','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('55','admin','2014-08-14 14:47:03','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('56','admin','2014-08-14 14:52:47','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('57','admin','2014-08-21 10:09:40','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('58','admin','2014-08-21 11:01:01','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('59','admin','2014-08-21 12:48:26','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('60','admin','2014-08-30 01:04:28','119.186.221.65','1','','0','');");
E_D("replace into `phome_enewslog` values('61','admin','2014-09-05 10:23:08','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('62','admin','2014-09-10 17:46:38','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('63','admin','2014-09-11 00:45:50','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('64','admin','2014-09-11 00:56:29','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('65','admin','2014-09-11 04:21:35','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('66','admin','2014-09-12 23:05:04','119.186.224.47','1','','0','');");
E_D("replace into `phome_enewslog` values('67','admin','2014-09-12 23:17:29','119.186.224.47','0','','0','');");
E_D("replace into `phome_enewslog` values('68','admin','2014-09-12 23:17:36','119.186.224.47','1','','0','');");
E_D("replace into `phome_enewslog` values('69','admin','2014-09-12 23:25:39','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('70','admin','2014-09-12 23:25:59','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('71','admin','2014-09-12 23:27:40','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('72','admin','2014-09-12 23:27:48','192.168.1.1','0','','0','');");
E_D("replace into `phome_enewslog` values('73','admin','2014-09-12 23:27:54','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('74','admin','2014-09-12 23:28:06','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('75','admin','2014-10-22 18:05:36','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('76','admin','2014-10-23 09:48:43','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('77','admin','2014-10-23 10:39:48','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('78','admin','2014-10-23 21:08:26','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('79','admin','2014-10-23 21:32:27','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('80','admin','2014-10-25 11:49:36','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('81','admin','2014-10-26 11:00:36','119.186.231.82','0','','0','');");
E_D("replace into `phome_enewslog` values('82','admin','2014-10-26 11:00:43','119.186.231.82','0','','0','');");
E_D("replace into `phome_enewslog` values('83','admin','2014-10-26 11:00:50','119.186.231.82','0','','0','');");
E_D("replace into `phome_enewslog` values('84','admin','2014-10-26 11:00:57','119.186.231.82','0','','0','');");
E_D("replace into `phome_enewslog` values('85','admin','2014-10-26 11:06:20','119.186.231.82','0','','0','');");
E_D("replace into `phome_enewslog` values('86','admin','2014-10-26 11:11:36','119.186.231.82','1','','0','');");
E_D("replace into `phome_enewslog` values('87','admin','2014-10-26 11:22:34','119.186.231.82','1','','0','');");
E_D("replace into `phome_enewslog` values('88','admin','2014-10-29 20:50:10','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('89','admin','2014-10-30 23:29:15','123.162.175.12','0','','0','');");
E_D("replace into `phome_enewslog` values('90','admin','2014-10-30 23:29:25','123.162.175.12','0','','0','');");
E_D("replace into `phome_enewslog` values('91','admin','2014-10-30 23:29:34','123.162.175.12','0','','0','');");
E_D("replace into `phome_enewslog` values('92','admin','2014-11-06 23:17:33','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('93','admin','2014-11-23 14:02:45','124.135.124.38','1','','0','');");
E_D("replace into `phome_enewslog` values('94','admin','2014-11-25 10:41:37','124.135.125.56','1','','0','');");
E_D("replace into `phome_enewslog` values('95','admin','2014-11-25 10:44:01','124.135.125.56','1','','0','');");
E_D("replace into `phome_enewslog` values('96','admin','2014-11-28 15:05:58','106.111.134.180','0','','0','');");
E_D("replace into `phome_enewslog` values('97','admin','2014-11-28 15:06:04','106.111.134.180','0','','0','');");
E_D("replace into `phome_enewslog` values('98','admin','2014-11-28 15:06:10','106.111.134.180','0','','0','');");
E_D("replace into `phome_enewslog` values('99','admin','2014-11-29 18:07:23','119.179.226.227','1','','0','');");
E_D("replace into `phome_enewslog` values('100','admin','2014-12-03 21:48:07','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('101','admin','2014-12-03 22:14:50','192.168.1.1','0','','0','');");
E_D("replace into `phome_enewslog` values('102','admin','2014-12-03 22:14:57','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('103','admin','2014-12-04 11:00:41','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('104','admin','2014-12-04 16:36:55','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('105','admin','2014-12-04 16:46:02','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('106','admin','2014-12-05 13:31:56','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('107','admin','2014-12-07 18:58:03','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('108','admin','2014-12-09 13:37:24','119.180.204.109','1','','0','');");
E_D("replace into `phome_enewslog` values('109','admin','2014-12-10 14:27:55','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('110','admin','2014-12-10 16:48:06','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('111','admin','2014-12-10 20:19:51','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('112','admin','2014-12-11 09:05:32','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('113','admin','2014-12-11 13:44:29','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('114','admin','2014-12-13 17:27:36','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('115','admin','2014-12-22 09:52:06','119.6.206.17','0','','0','');");
E_D("replace into `phome_enewslog` values('116','admin','2014-12-23 17:38:19','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('117','admin','2014-12-25 21:23:16','123.162.174.203','0','','0','');");
E_D("replace into `phome_enewslog` values('118','admin','2014-12-25 21:23:27','123.162.174.203','0','','0','');");
E_D("replace into `phome_enewslog` values('119','admin','2014-12-25 21:23:37','123.162.174.203','0','','0','');");
E_D("replace into `phome_enewslog` values('120','admin','2014-12-25 21:23:56','123.162.174.203','0','','0','');");
E_D("replace into `phome_enewslog` values('121','admin','2014-12-26 07:55:08','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('122','admin','2014-12-31 15:56:07','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('123','admin','2015-01-12 12:01:04','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('124','admin','2015-01-18 20:25:39','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('125','admin','2015-01-19 22:38:22','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('126','admin','2015-01-20 13:38:22','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('127','admin','2015-01-23 12:03:09','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('128','admin','2015-01-23 12:03:46','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('129','admin','2015-01-23 13:36:33','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('130','admin','2015-01-23 22:53:04','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('131','admin','2015-01-28 02:22:01','192.168.1.1','0','','0','0');");
E_D("replace into `phome_enewslog` values('132','admin','2015-01-28 02:22:13','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('133','admin','2015-01-29 15:35:41','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('134','admin','2015-02-10 05:51:38','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('135','admin','2015-02-10 12:15:28','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('136','admin','2015-02-10 12:18:03','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('137','admin','2015-02-10 14:47:01','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('138','admin','2015-02-10 14:54:28','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('139','admin','2015-02-16 00:06:26','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('140','admin','2015-02-20 05:50:12','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('141','admin','2015-02-26 14:20:13','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('142','admin','2015-03-03 23:45:16','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('143','admin','2015-03-07 21:55:08','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('144','admin','2015-03-11 12:49:57','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('145','admin','2015-03-12 13:34:26','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('146','admin','2015-04-03 00:05:44','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('147','admin','2015-04-07 13:15:41','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('148','admin','2015-04-13 14:57:51','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('149','admin','2015-04-18 19:08:52','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('150','admin','2015-04-20 09:07:59','58.208.131.121','0','','0','0');");
E_D("replace into `phome_enewslog` values('151','admin','2015-04-20 19:51:01','61.140.169.12','0','','0','0');");
E_D("replace into `phome_enewslog` values('152','admin','2015-04-22 09:29:51','192.168.1.1','0','','0','0');");
E_D("replace into `phome_enewslog` values('153','admin','2015-04-22 09:29:56','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('154','admin','2015-04-22 12:19:51','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('155','admin','2015-04-22 15:20:07','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('156','admin','2015-04-26 21:05:26','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('157','admin','2015-04-27 00:49:43','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('158','admin','2015-04-28 21:37:09','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('159','admin','2015-05-03 18:05:59','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('160','admin','2015-05-03 22:08:08','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('161','admin','2015-05-05 16:45:05','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('162','admin','2015-05-05 23:08:14','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('163','admin','2015-05-06 16:06:04','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('164','admin','2015-05-06 17:08:34','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('165','admin','2015-05-06 19:35:24','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('166','admin','2015-05-11 17:16:40','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('167','admin','2015-05-14 09:12:01','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('168','admin','2015-05-16 11:50:02','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('169','admin','2015-05-16 11:53:02','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('170','admin','2015-05-21 14:14:57','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('171','admin','2015-05-25 00:17:25','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('172','admin','2015-05-25 12:27:29','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('173','admin','2015-05-25 12:45:37','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('174','admin','2015-06-01 17:15:27','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('175','admin','2015-06-02 23:46:33','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('176','admin','2015-06-03 11:57:44','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('177','admin','2015-06-03 18:20:45','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('178','admin','2015-10-12 17:08:09','127.0.0.1','0','','0','53930');");
E_D("replace into `phome_enewslog` values('179','admin','2015-10-12 17:08:20','127.0.0.1','1','','0','53932');");
E_D("replace into `phome_enewslog` values('180','admin','2015-10-12 17:12:20','127.0.0.1','1','','0','54272');");
E_D("replace into `phome_enewslog` values('181','admin','2015-10-12 17:13:16','127.0.0.1','1','','0','54346');");
E_D("replace into `phome_enewslog` values('182','admin','2015-10-12 17:15:18','127.0.0.1','1','','0','54425');");
E_D("replace into `phome_enewslog` values('183','root','2015-10-13 09:54:27','127.0.0.1','0','','0','53215');");
E_D("replace into `phome_enewslog` values('184','admin','2015-10-13 09:54:35','127.0.0.1','1','','0','53236');");
E_D("replace into `phome_enewslog` values('185','admin','2015-10-13 15:39:01','127.0.0.1','1','','0','50529');");
E_D("replace into `phome_enewslog` values('186','admin','2015-10-13 18:37:52','127.0.0.1','1','','0','58772');");
E_D("replace into `phome_enewslog` values('187','admin','2015-10-14 09:31:37','127.0.0.1','1','','0','50832');");
E_D("replace into `phome_enewslog` values('188','root','2015-10-14 14:45:43','127.0.0.1','0','','0','51475');");
E_D("replace into `phome_enewslog` values('189','admin','2015-10-14 14:45:47','127.0.0.1','1','','0','51475');");
E_D("replace into `phome_enewslog` values('190','admin','2015-10-14 14:45:59','127.0.0.1','0','','0','51475');");
E_D("replace into `phome_enewslog` values('191','admin','2015-10-14 14:46:06','127.0.0.1','1','','0','51503');");

require("../../inc/footer.php");
?>