<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `phome_enewspubvarclass`;");
E_C("CREATE TABLE `phome_enewspubvarclass` (
  `classid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `classname` varchar(30) NOT NULL DEFAULT '',
  `classsay` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>