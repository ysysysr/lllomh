<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsfile_member`;");
E_C("CREATE TABLE `phome_enewsfile_member` (
  `fileid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pubid` tinyint(1) NOT NULL DEFAULT '0',
  `filename` char(60) NOT NULL DEFAULT '',
  `filesize` int(10) unsigned NOT NULL DEFAULT '0',
  `path` char(20) NOT NULL DEFAULT '',
  `adduser` char(30) NOT NULL DEFAULT '',
  `filetime` int(10) unsigned NOT NULL DEFAULT '0',
  `classid` tinyint(1) NOT NULL DEFAULT '0',
  `no` char(60) NOT NULL DEFAULT '',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `onclick` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `cjid` int(10) unsigned NOT NULL DEFAULT '0',
  `fpath` tinyint(1) NOT NULL DEFAULT '0',
  `modtype` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`fileid`),
  KEY `id` (`id`),
  KEY `type` (`type`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsfile_member` values('1','0','535c4c79f2a9d7a49d13ba689976b9f7.jpg','28660','2014-09-11','[EditInfo]hanxing3437','1410367216','0','Member[userpic]','1','0','1','0','2','0');");
E_D("replace into `phome_enewsfile_member` values('2','0','14317f6e47567df767a9acf4c38261df.gif','2012','2014-09-11','[EditInfo]hanxing3438','1410367680','0','Member[userpic]','1','0','2','0','2','0');");
E_D("replace into `phome_enewsfile_member` values('3','0','user1_avator.jpg','6913','avator','[EditInfo]hanxing3437','1421162030','0','Member[userpic]','1','0','1','0','2','6');");
E_D("replace into `phome_enewsfile_member` values('4','0','user3_avator.jpg','4830','avator','[EditInfo]zbzhangzhang','1415168318','0','Member[userpic]','1','0','1','0','2','6');");
E_D("replace into `phome_enewsfile_member` values('5','0','8d077f4cf32e8107c281eb34353a1294.jpg','75562','2014-11-27','[EditInfo]sghrhwfn','1417065383','0','Member[userpic]','1','0','9','0','2','0');");
E_D("replace into `phome_enewsfile_member` values('6','0','user9_avator.jpg','8920','avator','[EditInfo]sghrhwfn','1417065411','0','Member[userpic]','1','0','1','0','2','6');");
E_D("replace into `phome_enewsfile_member` values('7','0','d654647bacfcd74af12c46b32fbfa1fe.jpg','22843','2014-12-28','[EditInfo]temp','1419743278','0','Member[userpic]','1','0','17','0','2','0');");
E_D("replace into `phome_enewsfile_member` values('8','0','20a950abb5c617461cd4adfe65f8c6c1.jpg','135936','2015-01-04','[EditInfo]meishuk','1420368629','0','Member[userpic]','1','0','18','0','2','0');");
E_D("replace into `phome_enewsfile_member` values('9','0','user23_avator.jpg','11041','avator','[EditInfo]2522119','1421162925','0','Member[userpic]','1','0','1','0','2','6');");
E_D("replace into `phome_enewsfile_member` values('10','0','df3f0c590c5c13fe897f814f0f09181c.jpg','76472','2015-05-10','[EditInfo]xxxxxx','1431225871','0','Member[userpic]','1','0','48','0','2','0');");

@include("../../inc/footer.php");
?>