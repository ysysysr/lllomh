<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsfile_1`;");
E_C("CREATE TABLE `phome_enewsfile_1` (
  `fileid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pubid` bigint(16) unsigned NOT NULL DEFAULT '0',
  `filename` char(60) NOT NULL DEFAULT '',
  `filesize` int(10) unsigned NOT NULL DEFAULT '0',
  `path` char(20) NOT NULL DEFAULT '',
  `adduser` char(30) NOT NULL DEFAULT '',
  `filetime` int(10) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `no` char(60) NOT NULL DEFAULT '',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `onclick` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `cjid` int(10) unsigned NOT NULL DEFAULT '0',
  `fpath` tinyint(1) NOT NULL DEFAULT '0',
  `modtype` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`fileid`),
  KEY `id` (`id`),
  KEY `type` (`type`),
  KEY `classid` (`classid`),
  KEY `pubid` (`pubid`)
) ENGINE=MyISAM AUTO_INCREMENT=333 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsfile_1` values('321','1000090000000004','cc40b338e5f4346c3a5cba7b9dbac720.mp3','3841829','2015-01-05','[Member]haitian118','1420468822','11','[music_url]测试','0','0','4','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('328','1000010000000159','e3f55b4813cba6c703ea31b283e214e5.jpg','83564','2017-12-20','lllomh','1513753299','5','QQ图片20171218090453.jpg','1','0','159','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('329','1000010000000059','06d495e5051c983da4e49ba114bf4de0.jpg','8404','2017-12-20','lllomh','1513758691','5','1111111.png','1','0','59','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('330','1000010000000058','3a78de8d7c49a59eb317dccb733bca31.jpg','12923','2017-12-20','lllomh','1513758814','5','1111111.jpg','1','0','58','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('331','1000010000000057','71516311297f9654d65cbfdb0ac8b432.jpg','7968','2017-12-20','lllomh','1513758918','5','1111111.jpg','1','0','57','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('332','1000010000000056','e652942ccdf6eb8f6c91b74820fd010a.jpg','6381','2017-12-20','lllomh','1513759022','5','1111111.jpg','1','0','56','0','2','0');");

@include("../../inc/footer.php");
?>