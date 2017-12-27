<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `phome_ecms_infoclass_music`;");
E_C("CREATE TABLE `phome_ecms_infoclass_music` (
  `classid` int(10) unsigned NOT NULL DEFAULT '0',
  `zz_title` text NOT NULL,
  `z_title` varchar(255) NOT NULL DEFAULT '',
  `qz_title` varchar(255) NOT NULL DEFAULT '',
  `save_title` varchar(10) NOT NULL DEFAULT '',
  `zz_titlepic` text NOT NULL,
  `z_titlepic` varchar(255) NOT NULL DEFAULT '',
  `qz_titlepic` varchar(255) NOT NULL DEFAULT '',
  `save_titlepic` varchar(10) NOT NULL DEFAULT '',
  `zz_newstime` text NOT NULL,
  `z_newstime` varchar(255) NOT NULL DEFAULT '',
  `qz_newstime` varchar(255) NOT NULL DEFAULT '',
  `save_newstime` varchar(10) NOT NULL DEFAULT '',
  `zz_qq` text NOT NULL,
  `z_qq` varchar(255) NOT NULL,
  `qz_qq` varchar(255) NOT NULL,
  `save_qq` varchar(10) NOT NULL,
  `zz_music_url` text NOT NULL,
  `z_music_url` varchar(255) NOT NULL,
  `qz_music_url` varchar(255) NOT NULL,
  `save_music_url` varchar(10) NOT NULL,
  `zz_diggtop` text NOT NULL,
  `z_diggtop` varchar(255) NOT NULL,
  `qz_diggtop` varchar(255) NOT NULL,
  `save_diggtop` varchar(10) NOT NULL,
  PRIMARY KEY (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>