<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsclass`;");
E_C("CREATE TABLE `phome_enewsclass` (
  `classid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `bclassid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `classname` varchar(50) NOT NULL DEFAULT '',
  `sonclass` text NOT NULL,
  `is_zt` tinyint(1) NOT NULL DEFAULT '0',
  `lencord` smallint(6) NOT NULL DEFAULT '0',
  `link_num` tinyint(4) NOT NULL DEFAULT '0',
  `newstempid` smallint(6) NOT NULL DEFAULT '0',
  `onclick` int(11) NOT NULL DEFAULT '0',
  `listtempid` smallint(6) NOT NULL DEFAULT '0',
  `featherclass` text NOT NULL,
  `islast` tinyint(1) NOT NULL DEFAULT '0',
  `classpath` text NOT NULL,
  `classtype` varchar(10) NOT NULL DEFAULT '',
  `newspath` varchar(20) NOT NULL DEFAULT '',
  `filename` tinyint(1) NOT NULL DEFAULT '0',
  `filetype` varchar(10) NOT NULL DEFAULT '',
  `openpl` tinyint(1) NOT NULL DEFAULT '0',
  `openadd` tinyint(1) NOT NULL DEFAULT '0',
  `newline` int(11) NOT NULL DEFAULT '0',
  `hotline` int(11) NOT NULL DEFAULT '0',
  `goodline` int(11) NOT NULL DEFAULT '0',
  `classurl` varchar(200) NOT NULL DEFAULT '',
  `groupid` smallint(6) NOT NULL DEFAULT '0',
  `myorder` smallint(6) NOT NULL DEFAULT '0',
  `filename_qz` varchar(20) NOT NULL DEFAULT '',
  `hotplline` tinyint(4) NOT NULL DEFAULT '0',
  `modid` smallint(6) NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `firstline` tinyint(4) NOT NULL DEFAULT '0',
  `bname` varchar(50) NOT NULL DEFAULT '',
  `islist` tinyint(1) NOT NULL DEFAULT '0',
  `searchtempid` smallint(6) NOT NULL DEFAULT '0',
  `tid` smallint(6) NOT NULL DEFAULT '0',
  `tbname` varchar(60) NOT NULL DEFAULT '',
  `maxnum` int(11) NOT NULL DEFAULT '0',
  `checkpl` tinyint(1) NOT NULL DEFAULT '0',
  `down_num` tinyint(4) NOT NULL DEFAULT '0',
  `online_num` tinyint(4) NOT NULL DEFAULT '0',
  `listorder` varchar(50) NOT NULL DEFAULT '',
  `reorder` varchar(50) NOT NULL DEFAULT '',
  `intro` text NOT NULL,
  `classimg` varchar(255) NOT NULL DEFAULT '',
  `jstempid` smallint(6) NOT NULL DEFAULT '0',
  `addinfofen` int(11) NOT NULL DEFAULT '0',
  `listdt` tinyint(1) NOT NULL DEFAULT '0',
  `showclass` tinyint(1) NOT NULL DEFAULT '0',
  `showdt` tinyint(1) NOT NULL DEFAULT '0',
  `checkqadd` tinyint(1) NOT NULL DEFAULT '0',
  `qaddlist` tinyint(1) NOT NULL DEFAULT '0',
  `qaddgroupid` text NOT NULL,
  `qaddshowkey` tinyint(1) NOT NULL DEFAULT '0',
  `adminqinfo` tinyint(1) NOT NULL DEFAULT '0',
  `doctime` smallint(6) NOT NULL DEFAULT '0',
  `classpagekey` varchar(255) NOT NULL DEFAULT '',
  `dtlisttempid` smallint(6) NOT NULL DEFAULT '0',
  `classtempid` smallint(6) NOT NULL DEFAULT '0',
  `nreclass` tinyint(1) NOT NULL DEFAULT '0',
  `nreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `nrejs` tinyint(1) NOT NULL DEFAULT '0',
  `nottobq` tinyint(1) NOT NULL DEFAULT '0',
  `ipath` varchar(255) NOT NULL DEFAULT '',
  `addreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `haddlist` tinyint(4) NOT NULL DEFAULT '0',
  `sametitle` tinyint(1) NOT NULL DEFAULT '0',
  `definfovoteid` smallint(6) NOT NULL DEFAULT '0',
  `wburl` varchar(255) NOT NULL DEFAULT '',
  `qeditchecked` tinyint(1) NOT NULL DEFAULT '0',
  `wapstyleid` smallint(6) NOT NULL DEFAULT '0',
  `repreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `pltempid` smallint(6) NOT NULL DEFAULT '0',
  `cgroupid` text NOT NULL,
  `yhid` smallint(6) NOT NULL DEFAULT '0',
  `wfid` smallint(6) NOT NULL DEFAULT '0',
  `cgtoinfo` tinyint(1) NOT NULL DEFAULT '0',
  `bdinfoid` varchar(25) NOT NULL DEFAULT '',
  `repagenum` smallint(5) unsigned NOT NULL DEFAULT '0',
  `keycid` smallint(6) NOT NULL DEFAULT '0',
  `allinfos` int(10) unsigned NOT NULL DEFAULT '0',
  `infos` int(10) unsigned NOT NULL DEFAULT '0',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`classid`),
  KEY `bclassid` (`bclassid`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsclass` values('3','0','慢生�\�','','0','18','10','1','0','1','','1','view','.html','Y-m-d','0','.html','0','0','10','10','10','','0','3','','10','1','1','10','慢生�\�','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','1','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','1','1','1402822954');");
E_D("replace into `phome_enewsclass` values('4','0','心情日志','','0','18','10','1','0','1','','1','food','.html','Y-m-d','0','.html','0','0','10','10','10','','0','4','','10','1','1','10','心情日志','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','1','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','1','1','1402822971');");
E_D("replace into `phome_enewsclass` values('5','0','笔记分享','','0','18','10','1','0','1','','1','life','.html','Y-m-d','0','.html','0','0','10','10','10','','0','5','','10','1','1','10','笔记分享','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','1','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','13','13','1402823004');");
E_D("replace into `phome_enewsclass` values('6','0','音乐分享','|7|11|','0','25','10','0','0','0','','0','site_misc','.html','Y-m-d','0','.html','0','0','10','10','10','','0','6','','10','1','1','10','网站杂项（不显示�\�','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','1','0','0','0','','0','0','0','','0','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1403155961');");
E_D("replace into `phome_enewsclass` values('7','6','动�\�','','0','10','10','1','0','10','|6|','1','site_misc/team','.html','Y-m-d','0','.html','0','0','10','10','10','','0','5','','10','1','1','10','动�\�','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','10','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','1','1','1403156024');");
E_D("replace into `phome_enewsclass` values('8','6','广告','|','0','25','10','0','0','0','|6|','0','site_misc/ads','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','广告','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','0','2','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1403160380');");
E_D("replace into `phome_enewsclass` values('9','6','关于','|','0','25','10','0','0','0','|6|','0','site_misc/about','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','关于','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1403160407');");
E_D("replace into `phome_enewsclass` values('11','6','音乐倾情分享','','0','10','10','10','0','12','|6|','1','site_misc/music','.html','','0','.html','0','0','10','10','10','','0','5','','10','9','1','10','空间背景音乐专用栏目','1','0','9','music','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','4','','0','0','0','','12','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','1','0','1410343423');");
E_D("replace into `phome_enewsclass` values('14','0','留言�\�','|','0','25','10','0','0','0','','0','lyban','.html','Y-m-d','0','.html','0','1','10','10','10','','0','13','','10','1','1','10','留言�\�','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','0','3','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1444704976');");
E_D("replace into `phome_enewsclass` values('15','0','关于�\�','|','0','25','10','0','0','0','','0','gyw','.html','Y-m-d','0','.html','0','1','10','10','10','','0','2','','10','1','1','10','关于�\�','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1444716112');");
E_D("replace into `phome_enewsclass` values('16','0','儿时记忆','','0','25','10','1','0','1','','1','esjiy','.html','Y-m-d','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','儿时记忆','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','1','0','0','0','','0','0','0','','1','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','1','1','1444722907');");
E_D("replace into `phome_enewsclass` values('17','0','沿途风�\�','','0','25','10','1','0','1','','1','ytfj','.html','Y-m-d','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','沿途风�\�','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','1','0','0','0','','0','0','0','','1','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1444722962');");
E_D("replace into `phome_enewsclass` values('18','0','学校生活','','0','25','10','1','0','1','','1','xxsh','.html','Y-m-d','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','学校生活','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','1','0','0','0','','0','0','0','','1','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1444723006');");

@include("../../inc/footer.php");
?>