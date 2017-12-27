<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewspl_set`;");
E_C("CREATE TABLE `phome_enewspl_set` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `pltime` smallint(5) unsigned NOT NULL DEFAULT '0',
  `plsize` smallint(5) unsigned NOT NULL DEFAULT '0',
  `plincludesize` smallint(5) unsigned NOT NULL DEFAULT '0',
  `plkey_ok` tinyint(1) NOT NULL DEFAULT '0',
  `plface` text NOT NULL,
  `plfacenum` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `plgroupid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `plclosewords` text NOT NULL,
  `plf` text NOT NULL,
  `plmustf` text NOT NULL,
  `pldatatbs` text NOT NULL,
  `defpltempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `pl_num` smallint(5) unsigned NOT NULL DEFAULT '0',
  `pldeftb` smallint(5) unsigned NOT NULL DEFAULT '0',
  `plurl` varchar(200) NOT NULL DEFAULT '',
  `plmaxfloor` smallint(5) unsigned NOT NULL DEFAULT '0',
  `plquotetemp` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewspl_set` values('1','20','500','0','1','||[~e.jy~]##1.gif||[~e.kq~]##2.gif||[~e.se~]##3.gif||[~e.sq~]##4.gif||[~e.lh~]##5.gif||[~e.ka~]##6.gif||[~e.hh~]##7.gif||[~e.ys~]##8.gif||[~e.ng~]##9.gif||[~e.ot~]##10.gif||','10','0','','','',',1,','1','12','1','/e/pl/','5','              <li class=\\\\\"comment byuser comment-author-yuer even depth-2\\\\\" id=\\\\\"comment-[!--plid--]\\\\\">\r\n                <div class=\\\\\"c-avatar\\\\\"><img alt=\\\\''\\\\'' src=\\\\''/skin/ecms009/images/default.png\\\\'' class=\\\\''avatar avatar-50 photo\\\\'' height=\\\\''50\\\\'' width=\\\\''50\\\\'' /></div>\r\n                <div class=\\\\\"c-main\\\\\" id=\\\\\"div-comment-[!--plid--]\\\\\"><span class=\\\\\"c-author\\\\\"><a href=\\\\''/e/space/?userid=[!--userid--]\\\\'' rel=\\\\''external nofollow\\\\'' class=\\\\''url\\\\''>[!--username--]</a></span>[!--pltext--]\r\n                  <time class=\\\\\"c-time\\\\\"></time>\r\n                  <a class=\\\\''comment-reply-link\\\\'' href=\\\\''/5613.html?replytocom=2632#respond\\\\'' onclick=\\\\''return addComment.moveForm(\\\\\"div-comment-2632\\\\\", \\\\\"2632\\\\\", \\\\\"respond\\\\\", \\\\\"5613\\\\\")\\\\''>回复</a></div>\r\n              </li>\r\n');");

@include("../../inc/footer.php");
?>