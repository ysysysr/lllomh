<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `phome_enewsclassadd`;");
E_C("CREATE TABLE `phome_enewsclassadd` (
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `classtext` mediumtext NOT NULL,
  `ttids` text NOT NULL,
  `lanico` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsclassadd` values('15','','','');");
E_D("replace into `phome_enewsclassadd` values('3','','','');");
E_D("replace into `phome_enewsclassadd` values('4','','','');");
E_D("replace into `phome_enewsclassadd` values('5','','','');");
E_D("replace into `phome_enewsclassadd` values('6','','','');");
E_D("replace into `phome_enewsclassadd` values('7','','','');");
E_D("replace into `phome_enewsclassadd` values('8','','','');");
E_D("replace into `phome_enewsclassadd` values('9','','','');");
E_D("replace into `phome_enewsclassadd` values('11','','','');");
E_D("replace into `phome_enewsclassadd` values('14','','','');");
E_D("replace into `phome_enewsclassadd` values('16','','','');");
E_D("replace into `phome_enewsclassadd` values('17','','','');");
E_D("replace into `phome_enewsclassadd` values('18','','','');");

require("../../inc/footer.php");
?>