<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `phome_enewsf`;");
E_C("CREATE TABLE `phome_enewsf` (
  `fid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `f` varchar(30) NOT NULL DEFAULT '',
  `fname` varchar(30) NOT NULL DEFAULT '',
  `fform` varchar(20) NOT NULL DEFAULT '',
  `fhtml` mediumtext NOT NULL,
  `fzs` varchar(255) NOT NULL DEFAULT '',
  `isadd` tinyint(1) NOT NULL DEFAULT '0',
  `isshow` tinyint(1) NOT NULL DEFAULT '0',
  `iscj` tinyint(1) NOT NULL DEFAULT '0',
  `cjhtml` mediumtext NOT NULL,
  `myorder` smallint(6) NOT NULL DEFAULT '0',
  `ftype` varchar(30) NOT NULL DEFAULT '',
  `flen` varchar(20) NOT NULL DEFAULT '',
  `dotemp` tinyint(1) NOT NULL DEFAULT '0',
  `tid` smallint(6) NOT NULL DEFAULT '0',
  `tbname` varchar(60) NOT NULL DEFAULT '',
  `savetxt` tinyint(1) NOT NULL DEFAULT '0',
  `fvalue` text NOT NULL,
  `iskey` tinyint(1) NOT NULL DEFAULT '0',
  `tobr` tinyint(1) NOT NULL DEFAULT '0',
  `dohtml` tinyint(1) NOT NULL DEFAULT '0',
  `qfhtml` mediumtext NOT NULL,
  `isonly` tinyint(1) NOT NULL DEFAULT '0',
  `linkfieldval` varchar(30) NOT NULL DEFAULT '',
  `samedata` tinyint(1) NOT NULL DEFAULT '0',
  `fformsize` varchar(12) NOT NULL DEFAULT '',
  `tbdataf` tinyint(1) NOT NULL DEFAULT '0',
  `ispage` tinyint(1) NOT NULL DEFAULT '0',
  `adddofun` varchar(255) NOT NULL DEFAULT '',
  `editdofun` varchar(255) NOT NULL DEFAULT '',
  `qadddofun` varchar(255) NOT NULL DEFAULT '',
  `qeditdofun` varchar(255) NOT NULL DEFAULT '',
  `linkfieldtb` varchar(60) NOT NULL DEFAULT '',
  `linkfieldshow` varchar(30) NOT NULL DEFAULT '',
  `editorys` tinyint(1) NOT NULL DEFAULT '0',
  `issmalltext` tinyint(1) NOT NULL DEFAULT '0',
  `fmvnum` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`fid`),
  KEY `tid` (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=115 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsf` values('1','title','标题','text','<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" bgcolor=\\\\\"#DBEAF5\\\\\">\r\n<tr> \r\n  <td height=\\\\\"25\\\\\" bgcolor=\\\\\"#FFFFFF\\\\\">\r\n	<?=\$tts?\\\\\"<select name=\\\\''ttid\\\\''><option value=\\\\''0\\\\''>标题分类</option>\$tts</select>\\\\\":\\\\\"\\\\\"?>\r\n	<input type=text name=title value=\\\\\"<?=ehtmlspecialchars(stripSlashes(\$r[title]))?>\\\\\" size=\\\\\"60\\\\\"> \r\n	<input type=\\\\\"button\\\\\" name=\\\\\"button\\\\\" value=\\\\\"图文\\\\\" onclick=\\\\\"document.add.title.value=document.add.title.value+\\\\''(图文)\\\\'';\\\\\"> \r\n  </td>\r\n</tr>\r\n<tr> \r\n  <td height=\\\\\"25\\\\\" bgcolor=\\\\\"#FFFFFF\\\\\">属性: \r\n	<input name=\\\\\"titlefont[b]\\\\\" type=\\\\\"checkbox\\\\\" value=\\\\\"b\\\\\"<?=\$titlefontb?>>粗体\r\n	<input name=\\\\\"titlefont[i]\\\\\" type=\\\\\"checkbox\\\\\" value=\\\\\"i\\\\\"<?=\$titlefonti?>>斜体\r\n	<input name=\\\\\"titlefont[s]\\\\\" type=\\\\\"checkbox\\\\\" value=\\\\\"s\\\\\"<?=\$titlefonts?>>删除线\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;颜色: <input name=\\\\\"titlecolor\\\\\" type=\\\\\"text\\\\\" value=\\\\\"<?=stripSlashes(\$r[titlecolor])?>\\\\\" size=\\\\\"10\\\\\"><a onclick=\\\\\"foreColor();\\\\\"><img src=\\\\\"../data/images/color.gif\\\\\" width=\\\\\"21\\\\\" height=\\\\\"21\\\\\" align=\\\\\"absbottom\\\\\"></a>\r\n  </td>\r\n</tr>\r\n</table>','标题','0','1','1','  <tr bgcolor=\"#FFFFFF\"> \r\n    <td height=\"22\" valign=\"top\"><strong>[!--enews.name--]正则：</strong><br>\r\n      (<input name=\"textfield\" type=\"text\" id=\"textfield\" value=\"[!--title--]\" size=\"20\">)</td>\r\n    <td><table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"3\">\r\n        <tr> \r\n          <td><textarea name=\"add[zz_title]\" cols=\"60\" rows=\"10\" id=\"textarea\"><?=ehtmlspecialchars(stripSlashes(\$r[zz_title]))?></textarea></td>\r\n        </tr>\r\n        <tr> \r\n          <td><input name=\"add[z_title]\" type=\"text\" id=\"add[z_title]\" value=\"<?=stripSlashes(\$r[z_title])?>\">\r\n            (如填写这里，将为字段的值)</td>\r\n        </tr>\r\n      </table></td>\r\n  </tr>','0','CHAR','100','1','1','news','0','','0','0','0','<input name=\\\\\"title\\\\\" type=\\\\\"text\\\\\" size=\\\\\"42\\\\\" value=\\\\\"<?=\$ecmsfirstpost==1?\\\\\"\\\\\":DoReqValue(\$mid,\\\\''title\\\\'',stripSlashes(\$r[title]))?>\\\\\">','0','','0','60','0','0','','','','','','','0','0','');");
E_D("replace into `phome_enewsf` values('2','special.field','特殊属性','','<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" bgcolor=\\\\\"#DBEAF5\\\\\">\r\n  <tr>\r\n    <td height=\\\\\"25\\\\\" bgcolor=\\\\\"#FFFFFF\\\\\">信息属性: \r\n      <input name=\\\\\"checked\\\\\" type=\\\\\"checkbox\\\\\" value=\\\\\"1\\\\\"<?=\$r[checked]?\\\\'' checked\\\\'':\\\\''\\\\''?>>\r\n      审核 &nbsp;&nbsp; 推荐 \r\n      <select name=\\\\\"isgood\\\\\" id=\\\\\"isgood\\\\\">\r\n        <option value=\\\\\"0\\\\\">不推荐</option>\r\n	<?=\$ftnr[\\\\''igname\\\\'']?>\r\n      </select>\r\n      &nbsp;&nbsp; 头条 \r\n      <select name=\\\\\"firsttitle\\\\\" id=\\\\\"firsttitle\\\\\">\r\n        <option value=\\\\\"0\\\\\">非头条</option>\r\n	<?=\$ftnr[\\\\''ftname\\\\'']?>\r\n      </select></td>\r\n  </tr>\r\n  <tr> \r\n    <td height=\\\\\"25\\\\\" bgcolor=\\\\\"#FFFFFF\\\\\">关键字&nbsp;&nbsp;&nbsp;: \r\n      <input name=\\\\\"keyboard\\\\\" type=\\\\\"text\\\\\" size=\\\\\"52\\\\\" value=\\\\\"<?=stripSlashes(\$r[keyboard])?>\\\\\">\r\n      <font color=\\\\\"#666666\\\\\">(多个请用&quot;,&quot;隔开)</font></td>\r\n  </tr>\r\n  <tr> \r\n    <td height=\\\\\"25\\\\\" bgcolor=\\\\\"#FFFFFF\\\\\">外部链接: \r\n      <input name=\\\\\"titleurl\\\\\" type=\\\\\"text\\\\\" value=\\\\\"<?=stripSlashes(\$r[titleurl])?>\\\\\" size=\\\\\"52\\\\\">\r\n      <font color=\\\\\"#666666\\\\\">(填写后信息连接地址将为此链接)</font></td>\r\n  </tr>\r\n</table>','特殊属性','0','1','0','','1','','','0','1','news','0','','0','0','0','<input name=\\\\\"keyboard\\\\\" type=\\\\\"text\\\\\" size=42 value=\\\\\"<?=stripSlashes(\$r[keyboard])?>\\\\\">\r\n<font color=\\\\\"#666666\\\\\">(多个请用&quot;,&quot;隔开)</font>','0','','0','','0','0','','','','','','','0','0','');");
E_D("replace into `phome_enewsf` values('3','titlepic','标题图片','img','<input name=\\\\\"titlepic\\\\\" type=\\\\\"text\\\\\" id=\\\\\"titlepic\\\\\" value=\\\\\"<?=\$ecmsfirstpost==1?\\\\\"\\\\\":ehtmlspecialchars(stripSlashes(\$r[titlepic]))?>\\\\\" size=\\\\\"45\\\\\">\r\n<a onclick=\\\\\"window.open(\\\\''ecmseditor/FileMain.php?<?=\$ecms_hashur[ehref]?>&type=1&classid=<?=\$classid?>&infoid=<?=\$id?>&filepass=<?=\$filepass?>&sinfo=1&doing=1&field=titlepic\\\\'',\\\\''\\\\'',\\\\''width=700,height=550,scrollbars=yes\\\\'');\\\\\" title=\\\\\"选择已上传的图片\\\\\"><img src=\\\\\"../data/images/changeimg.gif\\\\\" border=\\\\\"0\\\\\" align=\\\\\"absbottom\\\\\"></a>','标题图片','0','1','1','  <tr bgcolor=\\\\\"#FFFFFF\\\\\"> \r\n    <td height=\\\\\"22\\\\\" valign=\\\\\"top\\\\\"><strong>[!--enews.name--]正则：</strong><br>\r\n      ( \r\n      <input name=\\\\\"textfield\\\\\" type=\\\\\"text\\\\\" id=\\\\\"textfield\\\\\" value=\\\\\"[!--titlepic--]\\\\\" size=\\\\\"20\\\\\">\r\n      )</td>\r\n    <td><table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"1\\\\\" cellpadding=\\\\\"3\\\\\">\r\n    <tr>\r\n      <td>附件前缀 \r\n        <input name=\\\\\"add[qz_titlepic]\\\\\" type=\\\\\"text\\\\\" id=\\\\\"add[qz_titlepic]\\\\\" value=\\\\\"<?=stripSlashes(\$r[qz_titlepic])?>\\\\\"> \r\n        <input name=\\\\\"add[save_titlepic]\\\\\" type=\\\\\"checkbox\\\\\" id=\\\\\"add[save_titlepic]\\\\\" value=\\\\\" checked\\\\\"<?=\$r[save_titlepic]?>>\r\n        远程保存 </td>\r\n    </tr>\r\n    <tr> \r\n      <td><textarea name=\\\\\"add[zz_titlepic]\\\\\" cols=\\\\\"60\\\\\" rows=\\\\\"10\\\\\" id=\\\\\"add[zz_titlepic]\\\\\"><?=ehtmlspecialchars(stripSlashes(\$r[zz_titlepic]))?></textarea></td>\r\n    </tr>\r\n    <tr> \r\n      <td><input name=\\\\\"add[z_titlepic]\\\\\" type=\\\\\"text\\\\\" id=\\\\\"titlepic5\\\\\" value=\\\\\"<?=stripSlashes(\$r[z_titlepic])?>\\\\\">\r\n        (如填写这里，这就是字段的值)</td>\r\n    </tr>\r\n  </table></td>\r\n  </tr>\r\n','2','CHAR','120','1','1','news','0','','0','0','0','<input type=\\\\\"file\\\\\" name=\\\\\"titlepicfile\\\\\" size=\\\\\"45\\\\\">','0','','0','60','0','0','','','','','','','0','0','');");
E_D("replace into `phome_enewsf` values('4','newstime','发布时间','text','<input name=\\\\\"newstime\\\\\" type=\\\\\"text\\\\\" value=\\\\\"<?=\$r[newstime]?>\\\\\"><input type=button name=button value=\\\\\"设为当前时间\\\\\" onclick=\\\\\"document.add.newstime.value=\\\\''<?=\$todaytime?>\\\\''\\\\\">','发布时间','0','1','1','  <tr bgcolor=\"#FFFFFF\"> \r\n    <td height=\"22\" valign=\"top\"><strong>[!--enews.name--]正则：</strong><br>\r\n      (<input name=\"textfield\" type=\"text\" id=\"textfield\" value=\"[!--newstime--]\" size=\"20\">)</td>\r\n    <td><table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"3\">\r\n        <tr> \r\n          <td><textarea name=\"add[zz_newstime]\" cols=\"60\" rows=\"10\" id=\"textarea\"><?=ehtmlspecialchars(stripSlashes(\$r[zz_newstime]))?></textarea></td>\r\n        </tr>\r\n        <tr> \r\n          <td><input name=\"add[z_newstime]\" type=\"text\" id=\"add[z_newstime]\" value=\"<?=stripSlashes(\$r[z_newstime])?>\">\r\n            (如填写这里，将为字段的值)</td>\r\n        </tr>\r\n      </table></td>\r\n  </tr>','1','INT','11','1','1','news','0','','1','0','0','','0','','0','','0','0','','','','','','','0','0','');");
E_D("replace into `phome_enewsf` values('5','ftitle','副标题','text','<input name=\\\\\"ftitle\\\\\" type=\\\\\"text\\\\\" size=60 id=\\\\\"ftitle\\\\\" value=\\\\\"<?=\$ecmsfirstpost==1?\\\\\"\\\\\":ehtmlspecialchars(stripSlashes(\$r[ftitle]))?>\\\\\">\r\n','副标题','1','1','1','\r\n  <tr bgcolor=\"#FFFFFF\"> \r\n    <td height=\"22\" valign=\"top\"><strong>[!--enews.name--]正则：</strong><br>\r\n      (<input name=\"textfield\" type=\"text\" id=\"textfield\" value=\"[!--ftitle--]\" size=\"20\">)</td>\r\n    <td><table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"3\">\r\n        <tr> \r\n          <td><textarea name=\"add[zz_ftitle]\" cols=\"60\" rows=\"10\" id=\"textarea\"><?=ehtmlspecialchars(stripSlashes(\$r[zz_ftitle]))?></textarea></td>\r\n        </tr>\r\n        <tr> \r\n          <td><input name=\"add[z_ftitle]\" type=\"text\" id=\"add[z_ftitle]\" value=\"<?=stripSlashes(\$r[z_ftitle])?>\">\r\n            (如填写这里，将为字段的值)</td>\r\n        </tr>\r\n      </table></td>\r\n  </tr>\r\n','0','CHAR','120','1','1','news','0','','0','0','1','<input name=\\\\\"ftitle\\\\\" type=\\\\\"text\\\\\" size=42 id=\\\\\"ftitle\\\\\" value=\\\\\"<?=\$ecmsfirstpost==1?\\\\\"\\\\\":DoReqValue(\$mid,\\\\''ftitle\\\\'',stripSlashes(\$r[ftitle]))?>\\\\\">\r\n','0','','0','','0','0','','','','','','','0','0','');");
E_D("replace into `phome_enewsf` values('6','smalltext','内容简介','textarea','<textarea name=\\\\\"smalltext\\\\\" cols=\\\\\"80\\\\\" rows=\\\\\"10\\\\\" id=\\\\\"smalltext\\\\\"><?=\$ecmsfirstpost==1?\\\\\"\\\\\":ehtmlspecialchars(stripSlashes(\$r[smalltext]))?></textarea>\r\n','内容简介','1','1','1','\r\n  <tr bgcolor=\"#FFFFFF\"> \r\n    <td height=\"22\" valign=\"top\"><strong>[!--enews.name--]正则：</strong><br>\r\n      (<input name=\"textfield\" type=\"text\" id=\"textfield\" value=\"[!--smalltext--]\" size=\"20\">)</td>\r\n    <td><table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"3\">\r\n        <tr> \r\n          <td><textarea name=\"add[zz_smalltext]\" cols=\"60\" rows=\"10\" id=\"textarea\"><?=ehtmlspecialchars(stripSlashes(\$r[zz_smalltext]))?></textarea></td>\r\n        </tr>\r\n        <tr> \r\n          <td><input name=\"add[z_smalltext]\" type=\"text\" id=\"add[z_smalltext]\" value=\"<?=stripSlashes(\$r[z_smalltext])?>\">\r\n            (如填写这里，将为字段的值)</td>\r\n        </tr>\r\n      </table></td>\r\n  </tr>\r\n','2','CHAR','255','1','1','news','0','','0','1','1','<textarea name=\\\\\"smalltext\\\\\" cols=\\\\\"60\\\\\" rows=\\\\\"10\\\\\" id=\\\\\"smalltext\\\\\"><?=\$ecmsfirstpost==1?\\\\\"\\\\\":DoReqValue(\$mid,\\\\''smalltext\\\\'',stripSlashes(\$r[smalltext]))?></textarea>\r\n','0','','0','','0','0','','','','','','','0','1','');");
E_D("replace into `phome_enewsf` values('7','writer','作者','text','<?php\r\n\$writer_sql=\$empire->query(\\\\\"select writer from {\$dbtbpre}enewswriter\\\\\");\r\nwhile(\$w_r=\$empire->fetch(\$writer_sql))\r\n{\r\n	\$w_class.=\\\\\"<option value=\\\\''\\\\\".\$w_r[writer].\\\\\"\\\\''>\\\\\".\$w_r[writer].\\\\\"</option>\\\\\";\r\n}\r\n?>\r\n<input type=text name=writer value=\\\\\"<?=\$ecmsfirstpost==1?\\\\\"\\\\\":ehtmlspecialchars(stripSlashes(\$r[writer]))?>\\\\\" size=\\\\\"\\\\\"> \r\n        <select name=\\\\\"w_id\\\\\" id=\\\\\"select7\\\\\" onchange=\\\\\"document.add.writer.value=document.add.w_id.value\\\\\">\r\n          <option>选择作者</option>\r\n		  <?=\$w_class?>\r\n        </select>\r\n<input type=\\\\\"button\\\\\" name=\\\\\"wbutton\\\\\" value=\\\\\"增加作者\\\\\" onclick=\\\\\"window.open(\\\\''NewsSys/writer.php?<?=\$ecms_hashur[ehref]?>&addwritername=\\\\''+document.add.writer.value);\\\\\">\r\n','作者','1','1','1','\r\n  <tr bgcolor=\"#FFFFFF\"> \r\n    <td height=\"22\" valign=\"top\"><strong>[!--enews.name--]正则：</strong><br>\r\n      (<input name=\"textfield\" type=\"text\" id=\"textfield\" value=\"[!--writer--]\" size=\"20\">)</td>\r\n    <td><table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"3\">\r\n        <tr> \r\n          <td><textarea name=\"add[zz_writer]\" cols=\"60\" rows=\"10\" id=\"textarea\"><?=ehtmlspecialchars(stripSlashes(\$r[zz_writer]))?></textarea></td>\r\n        </tr>\r\n        <tr> \r\n          <td><input name=\"add[z_writer]\" type=\"text\" id=\"add[z_writer]\" value=\"<?=stripSlashes(\$r[z_writer])?>\">\r\n            (如填写这里，将为字段的值)</td>\r\n        </tr>\r\n      </table></td>\r\n  </tr>\r\n','2','CHAR','30','1','1','news','0','','0','0','1','<input name=\\\\\"writer\\\\\" type=\\\\\"text\\\\\" id=\\\\\"writer\\\\\" value=\\\\\"<?=\$ecmsfirstpost==1?\\\\\"\\\\\":DoReqValue(\$mid,\\\\''writer\\\\'',stripSlashes(\$r[writer]))?>\\\\\" size=\\\\\"\\\\\">\r\n','0','','0','','1','0','','','','','','','0','0','');");
E_D("replace into `phome_enewsf` values('8','befrom','信息来源','text','<?php\r\n\$befrom_sql=\$empire->query(\\\\\"select sitename from {\$dbtbpre}enewsbefrom\\\\\");\r\nwhile(\$b_r=\$empire->fetch(\$befrom_sql))\r\n{\r\n	\$b_class.=\\\\\"<option value=\\\\''\\\\\".\$b_r[sitename].\\\\\"\\\\''>\\\\\".\$b_r[sitename].\\\\\"</option>\\\\\";\r\n}\r\n?>\r\n<input type=\\\\\"text\\\\\" name=\\\\\"befrom\\\\\" value=\\\\\"<?=\$ecmsfirstpost==1?\\\\\"\\\\\":ehtmlspecialchars(stripSlashes(\$r[befrom]))?>\\\\\" size=\\\\\"\\\\\"> \r\n        <select name=\\\\\"befrom_id\\\\\" id=\\\\\"befromid\\\\\" onchange=\\\\\"document.add.befrom.value=document.add.befrom_id.value\\\\\">\r\n          <option>选择信息来源</option>\r\n          <?=\$b_class?>\r\n        </select>\r\n<input type=\\\\\"button\\\\\" name=\\\\\"wbutton\\\\\" value=\\\\\"增加来源\\\\\" onclick=\\\\\"window.open(\\\\''NewsSys/BeFrom.php?<?=\$ecms_hashur[ehref]?>&addsitename=\\\\''+document.add.befrom.value);\\\\\">\r\n','信息来源','1','1','1','\r\n  <tr bgcolor=\"#FFFFFF\"> \r\n    <td height=\"22\" valign=\"top\"><strong>[!--enews.name--]正则：</strong><br>\r\n      (<input name=\"textfield\" type=\"text\" id=\"textfield\" value=\"[!--befrom--]\" size=\"20\">)</td>\r\n    <td><table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"3\">\r\n        <tr> \r\n          <td><textarea name=\"add[zz_befrom]\" cols=\"60\" rows=\"10\" id=\"textarea\"><?=ehtmlspecialchars(stripSlashes(\$r[zz_befrom]))?></textarea></td>\r\n        </tr>\r\n        <tr> \r\n          <td><input name=\"add[z_befrom]\" type=\"text\" id=\"add[z_befrom]\" value=\"<?=stripSlashes(\$r[z_befrom])?>\">\r\n            (如填写这里，将为字段的值)</td>\r\n        </tr>\r\n      </table></td>\r\n  </tr>\r\n','2','CHAR','60','1','1','news','0','','0','0','1','<input name=\\\\\"befrom\\\\\" type=\\\\\"text\\\\\" id=\\\\\"befrom\\\\\" value=\\\\\"<?=\$ecmsfirstpost==1?\\\\\"\\\\\":DoReqValue(\$mid,\\\\''befrom\\\\'',stripSlashes(\$r[befrom]))?>\\\\\" size=\\\\\"\\\\\">\r\n','0','','0','','1','0','','','','','','','0','0','');");
E_D("replace into `phome_enewsf` values('9','newstext','新闻正文','editor','<?php\r\n\$ziduan=\\\\''newstext\\\\'';//编辑器使用的字段名称\r\nif(\$enews==\\\\''MAddInfo\\\\'' || \$enews==\\\\''MEditInfo\\\\''){//前台投稿\r\n\$qiantai=1;\r\n\$ziduanzhi=\$ecmsfirstpost==1?\\\\\"\\\\\":DoReqValue(\$mid,\$ziduan,stripSlashes(\$r[\$ziduan]));\r\n}else{//后台\r\n\$qiantai=0;\r\n\$ziduanzhi=\$ecmsfirstpost==1?\\\\\"\\\\\":stripSlashes(\$r[\$ziduan]);\r\n}\r\n?>\r\n<script>var classid=\\\\''<?=\$classid?>\\\\'',infoid=\\\\''<?=\$id?>\\\\'',filepass=\\\\''<?=\$filepass?>\\\\'',ehash=\\\\''<?=\$ecms_hashur[ehref]?>\\\\'',qiantai=\\\\''<?=\$qiantai?>\\\\'';//把参数传给编辑器,增加支持7.2版本的金刚模式</script>\r\n<script type=\\\\\"text/javascript\\\\\" charset=\\\\\"utf-8\\\\\" src=\\\\\"/e/extend/ueditor/ueditor.config.js\\\\\"></script>\r\n<script type=\\\\\"text/javascript\\\\\" charset=\\\\\"utf-8\\\\\" src=\\\\\"/e/extend/ueditor/ueditor.all.min.js\\\\\"></script>\r\n<script type=\\\\\"text/javascript\\\\\" charset=\\\\\"utf-8\\\\\" src=\\\\\"/e/extend/ueditor/ueditor.toolbarconfig.js\\\\\"></script>\r\n<textarea id=\\\\\"<?=\$ziduan?>\\\\\" name=\\\\\"<?=\$ziduan?>\\\\\"><?=\$ziduanzhi?></textarea>\r\n<script type=\\\\\"text/javascript\\\\\">\r\n<?=\$ziduan?>=UE.getEditor(\\\\''<?=\$ziduan?>\\\\'',{\r\nserverUrl: \\\\\"/e/extend/ueditor/php/controller.php\\\\\",//自己的请求接口\r\ntoolbars:Default,//工具栏配置文件，具体参考ueditor.toolbarconfig.js文件中说明\r\npageBreakTag:\\\\''[!--empirenews.page--]\\\\'',//帝国分页标签\r\ninitialFrameWidth:\\\\''100%\\\\'',//编辑器宽\r\ninitialFrameHeight:300//编辑器高\r\n//等等其它配置自行添加，参考UE默认配置文件复制修改即可\r\n});\r\n//自定义请求参数\r\n<?=\$ziduan?>.ready(function(){\r\n<?=\$ziduan?>.execCommand(\\\\''serverparam\\\\'',{\r\n\\\\''filepass\\\\'':\\\\''<?=\$filepass?>\\\\'',//修改时候是信息ID\r\n\\\\''classid\\\\'' :\\\\''<?=\$classid?>\\\\'',\r\n\\\\''qiantai\\\\'':<?=\$qiantai?>\r\n});\r\n});\r\n</script>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellpadding=\\\\\"3\\\\\" cellspacing=\\\\\"1\\\\\" bgcolor=\\\\\"#DBEAF5\\\\\">\r\n<tr> \r\n<td bgcolor=\\\\\"#FFFFFF\\\\\"> <input name=\\\\\"dokey\\\\\" type=\\\\\"checkbox\\\\\" value=\\\\\"1\\\\\"<?=\$r[dokey]==1?\\\\'' checked\\\\'':\\\\''\\\\''?>>\r\n关键字替换&nbsp;&nbsp; <input name=\\\\\"copyimg\\\\\" type=\\\\\"checkbox\\\\\" id=\\\\\"copyimg\\\\\" value=\\\\\"1\\\\\">\r\n远程保存图片(\r\n<input name=\\\\\"mark\\\\\" type=\\\\\"checkbox\\\\\" id=\\\\\"mark\\\\\" value=\\\\\"1\\\\\">\r\n<a href=\\\\\"SetEnews.php\\\\\" target=\\\\\"_blank\\\\\">加水印</a>)&nbsp;&nbsp; \r\n<input name=\\\\\"copyflash\\\\\" type=\\\\\"checkbox\\\\\" id=\\\\\"copyflash\\\\\" value=\\\\\"1\\\\\">\r\n远程保存FLASH(地址前缀： \r\n<input name=\\\\\"qz_url\\\\\" type=\\\\\"text\\\\\" id=\\\\\"qz_url\\\\\" size=\\\\\"\\\\\">\r\n)</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor=\\\\\"#FFFFFF\\\\\"><input name=\\\\\"repimgnexturl\\\\\" type=\\\\\"checkbox\\\\\" id=\\\\\"repimgnexturl\\\\\" value=\\\\\"1\\\\\"> 图片链接转为下一页&nbsp;&nbsp; <input name=\\\\\"autopage\\\\\" type=\\\\\"checkbox\\\\\" id=\\\\\"autopage\\\\\" value=\\\\\"1\\\\\">自动分页\r\n,每 \r\n<input name=\\\\\"autosize\\\\\" type=\\\\\"text\\\\\" id=\\\\\"autosize\\\\\" value=\\\\\"5000\\\\\" size=\\\\\"5\\\\\">\r\n个字节为一页&nbsp;&nbsp; 取第 \r\n<input name=\\\\\"getfirsttitlepic\\\\\" type=\\\\\"text\\\\\" id=\\\\\"getfirsttitlepic\\\\\" value=\\\\\"\\\\\" size=\\\\\"1\\\\\">\r\n张上传图为标题图片( \r\n<input name=\\\\\"getfirsttitlespic\\\\\" type=\\\\\"checkbox\\\\\" id=\\\\\"getfirsttitlespic\\\\\" value=\\\\\"1\\\\\">\r\n缩略图: 宽 \r\n<input name=\\\\\"getfirsttitlespicw\\\\\" type=\\\\\"text\\\\\" id=\\\\\"getfirsttitlespicw\\\\\" size=\\\\\"3\\\\\" value=\\\\\"<?=\$public_r[spicwidth]?>\\\\\">\r\n*高\r\n<input name=\\\\\"getfirsttitlespich\\\\\" type=\\\\\"text\\\\\" id=\\\\\"getfirsttitlespich\\\\\" size=\\\\\"3\\\\\" value=\\\\\"<?=\$public_r[spicheight]?>\\\\\">\r\n)</td>\r\n</tr>\r\n</table>','新闻正文','1','1','1','\r\n  <tr bgcolor=\\\\\"#FFFFFF\\\\\"> \r\n    <td height=\\\\\"22\\\\\" valign=\\\\\"top\\\\\"><strong>[!--enews.name--]正则：</strong><br>\r\n      (<input name=\\\\\"textfield\\\\\" type=\\\\\"text\\\\\" id=\\\\\"textfield\\\\\" value=\\\\\"[!--newstext--]\\\\\" size=\\\\\"20\\\\\">)</td>\r\n    <td><table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"1\\\\\" cellpadding=\\\\\"3\\\\\">\r\n        <tr> \r\n          <td><textarea name=\\\\\"add[zz_newstext]\\\\\" cols=\\\\\"60\\\\\" rows=\\\\\"10\\\\\" id=\\\\\"textarea\\\\\"><?=ehtmlspecialchars(stripSlashes(\$r[zz_newstext]))?></textarea></td>\r\n        </tr>\r\n        <tr> \r\n          <td><input name=\\\\\"add[z_newstext]\\\\\" type=\\\\\"text\\\\\" id=\\\\\"add[z_newstext]\\\\\" value=\\\\\"<?=stripSlashes(\$r[z_newstext])?>\\\\\">\r\n            (如填写这里，将为字段的值)</td>\r\n        </tr>\r\n      </table></td>\r\n  </tr>\r\n','2','MEDIUMTEXT','','1','1','news','0','','0','1','1','<?php\r\n\$ziduan=\\\\''newstext\\\\'';//编辑器使用的字段名称\r\nif(\$enews==\\\\''MAddInfo\\\\'' || \$enews==\\\\''MEditInfo\\\\''){//前台投稿\r\n\$qiantai=1;\r\n\$ziduanzhi=\$ecmsfirstpost==1?\\\\\"\\\\\":DoReqValue(\$mid,\$ziduan,stripSlashes(\$r[\$ziduan]));\r\n}else{//后台\r\n\$qiantai=0;\r\n\$ziduanzhi=\$ecmsfirstpost==1?\\\\\"\\\\\":stripSlashes(\$r[\$ziduan]);\r\n}\r\n?>\r\n<script>var classid=\\\\''<?=\$classid?>\\\\'',infoid=\\\\''<?=\$id?>\\\\'',filepass=\\\\''<?=\$filepass?>\\\\'',ehash=\\\\''<?=\$ecms_hashur[ehref]?>\\\\'',qiantai=\\\\''<?=\$qiantai?>\\\\'';//把参数传给编辑器,增加支持7.2版本的金刚模式</script>\r\n<script type=\\\\\"text/javascript\\\\\" charset=\\\\\"utf-8\\\\\" src=\\\\\"/e/extend/ueditor/ueditor.config.js\\\\\"></script>\r\n<script type=\\\\\"text/javascript\\\\\" charset=\\\\\"utf-8\\\\\" src=\\\\\"/e/extend/ueditor/ueditor.all.min.js\\\\\"></script>\r\n<script type=\\\\\"text/javascript\\\\\" charset=\\\\\"utf-8\\\\\" src=\\\\\"/e/extend/ueditor/ueditor.toolbarconfig.js\\\\\"></script>\r\n<textarea id=\\\\\"<?=\$ziduan?>\\\\\" name=\\\\\"<?=\$ziduan?>\\\\\"><?=\$ziduanzhi?></textarea>\r\n<script type=\\\\\"text/javascript\\\\\">\r\n<?=\$ziduan?>=UE.getEditor(\\\\''<?=\$ziduan?>\\\\'',{\r\nserverUrl: \\\\\"/e/extend/ueditor/php/controller.php\\\\\",//自己的请求接口\r\ntoolbars:Default,//工具栏配置文件，具体参考ueditor.toolbarconfig.js文件中说明\r\npageBreakTag:\\\\''[!--empirenews.page--]\\\\'',//帝国分页标签\r\ninitialFrameWidth:\\\\''100%\\\\'',//编辑器宽\r\ninitialFrameHeight:300//编辑器高\r\n//等等其它配置自行添加，参考UE默认配置文件复制修改即可\r\n});\r\n//自定义请求参数\r\n<?=\$ziduan?>.ready(function(){\r\n<?=\$ziduan?>.execCommand(\\\\''serverparam\\\\'',{\r\n\\\\''filepass\\\\'':\\\\''<?=\$filepass?>\\\\'',//修改时候是信息ID\r\n\\\\''classid\\\\'' :\\\\''<?=\$classid?>\\\\'',\r\n\\\\''qiantai\\\\'':<?=\$qiantai?>\r\n});\r\n});\r\n</script>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellpadding=\\\\\"3\\\\\" cellspacing=\\\\\"1\\\\\" bgcolor=\\\\\"#DBEAF5\\\\\">\r\n<tr> \r\n<td bgcolor=\\\\\"#FFFFFF\\\\\"> <input name=\\\\\"dokey\\\\\" type=\\\\\"checkbox\\\\\" value=\\\\\"1\\\\\"<?=\$r[dokey]==1?\\\\'' checked\\\\'':\\\\''\\\\''?>>\r\n关键字替换&nbsp;&nbsp; <input name=\\\\\"copyimg\\\\\" type=\\\\\"checkbox\\\\\" id=\\\\\"copyimg\\\\\" value=\\\\\"1\\\\\">\r\n远程保存图片(\r\n<input name=\\\\\"mark\\\\\" type=\\\\\"checkbox\\\\\" id=\\\\\"mark\\\\\" value=\\\\\"1\\\\\">\r\n<a href=\\\\\"SetEnews.php\\\\\" target=\\\\\"_blank\\\\\">加水印</a>)&nbsp;&nbsp; \r\n<input name=\\\\\"copyflash\\\\\" type=\\\\\"checkbox\\\\\" id=\\\\\"copyflash\\\\\" value=\\\\\"1\\\\\">\r\n远程保存FLASH(地址前缀： \r\n<input name=\\\\\"qz_url\\\\\" type=\\\\\"text\\\\\" id=\\\\\"qz_url\\\\\" size=\\\\\"\\\\\">\r\n)</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor=\\\\\"#FFFFFF\\\\\"><input name=\\\\\"repimgnexturl\\\\\" type=\\\\\"checkbox\\\\\" id=\\\\\"repimgnexturl\\\\\" value=\\\\\"1\\\\\"> 图片链接转为下一页&nbsp;&nbsp; <input name=\\\\\"autopage\\\\\" type=\\\\\"checkbox\\\\\" id=\\\\\"autopage\\\\\" value=\\\\\"1\\\\\">自动分页\r\n,每 \r\n<input name=\\\\\"autosize\\\\\" type=\\\\\"text\\\\\" id=\\\\\"autosize\\\\\" value=\\\\\"5000\\\\\" size=\\\\\"5\\\\\">\r\n个字节为一页&nbsp;&nbsp; 取第 \r\n<input name=\\\\\"getfirsttitlepic\\\\\" type=\\\\\"text\\\\\" id=\\\\\"getfirsttitlepic\\\\\" value=\\\\\"\\\\\" size=\\\\\"1\\\\\">\r\n张上传图为标题图片( \r\n<input name=\\\\\"getfirsttitlespic\\\\\" type=\\\\\"checkbox\\\\\" id=\\\\\"getfirsttitlespic\\\\\" value=\\\\\"1\\\\\">\r\n缩略图: 宽 \r\n<input name=\\\\\"getfirsttitlespicw\\\\\" type=\\\\\"text\\\\\" id=\\\\\"getfirsttitlespicw\\\\\" size=\\\\\"3\\\\\" value=\\\\\"<?=\$public_r[spicwidth]?>\\\\\">\r\n*高\r\n<input name=\\\\\"getfirsttitlespich\\\\\" type=\\\\\"text\\\\\" id=\\\\\"getfirsttitlespich\\\\\" size=\\\\\"3\\\\\" value=\\\\\"<?=\$public_r[spicheight]?>\\\\\">\r\n)</td>\r\n</tr>\r\n</table>','0','','0','','1','1','','','','','','','0','0','');");
E_D("replace into `phome_enewsf` values('10','diggtop','顶','text','\r\n<input name=\"diggtop\" type=\"text\" id=\"diggtop\" value=\"<?=\$ecmsfirstpost==1?\"\":ehtmlspecialchars(stripSlashes(\$r[diggtop]))?>\" size=\"\">\r\n','','1','1','1','\r\n  <tr bgcolor=\"#FFFFFF\"> \r\n    <td height=\"22\" valign=\"top\"><strong>[!--enews.name--]正则：</strong><br>\r\n      (<input name=\"textfield\" type=\"text\" id=\"textfield\" value=\"[!--diggtop--]\" size=\"20\">)</td>\r\n    <td><table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"3\">\r\n        <tr> \r\n          <td><textarea name=\"add[zz_diggtop]\" cols=\"60\" rows=\"10\" id=\"textarea\"><?=ehtmlspecialchars(stripSlashes(\$r[zz_diggtop]))?></textarea></td>\r\n        </tr>\r\n        <tr> \r\n          <td><input name=\"add[z_diggtop]\" type=\"text\" id=\"add[z_diggtop]\" value=\"<?=stripSlashes(\$r[z_diggtop])?>\">\r\n            (如填写这里，将为字段的值)</td>\r\n        </tr>\r\n      </table></td>\r\n  </tr>\r\n','3','INT','','1','1','news','0','','0','0','1','\r\n<input name=\"diggtop\" type=\"text\" id=\"diggtop\" value=\"<?=\$ecmsfirstpost==1?\"\":DoReqValue(\$mid,''diggtop'',stripSlashes(\$r[diggtop]))?>\" size=\"\">\r\n','0','','0','','0','0','','','','','','','0','0','');");
E_D("replace into `phome_enewsf` values('107','title','音乐名称','text','<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" bgcolor=\\\\\"#DBEAF5\\\\\">\r\n<tr> \r\n  <td height=\\\\\"25\\\\\" bgcolor=\\\\\"#FFFFFF\\\\\">\r\n	<?=\$tts?\\\\\"<select name=\\\\''ttid\\\\''><option value=\\\\''0\\\\''>标题分类</option>\$tts</select>\\\\\":\\\\\"\\\\\"?>\r\n	<input type=text name=title value=\\\\\"<?=ehtmlspecialchars(stripSlashes(\$r[title]))?>\\\\\" size=\\\\\"60\\\\\"> \r\n	<input type=\\\\\"button\\\\\" name=\\\\\"button\\\\\" value=\\\\\"图文\\\\\" onclick=\\\\\"document.add.title.value=document.add.title.value+\\\\''(图文)\\\\'';\\\\\"> \r\n  </td>\r\n</tr>\r\n<tr> \r\n  <td height=\\\\\"25\\\\\" bgcolor=\\\\\"#FFFFFF\\\\\">属性: \r\n	<input name=\\\\\"titlefont[b]\\\\\" type=\\\\\"checkbox\\\\\" value=\\\\\"b\\\\\"<?=\$titlefontb?>>粗体\r\n	<input name=\\\\\"titlefont[i]\\\\\" type=\\\\\"checkbox\\\\\" value=\\\\\"i\\\\\"<?=\$titlefonti?>>斜体\r\n	<input name=\\\\\"titlefont[s]\\\\\" type=\\\\\"checkbox\\\\\" value=\\\\\"s\\\\\"<?=\$titlefonts?>>删除线\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;颜色: <input name=\\\\\"titlecolor\\\\\" type=\\\\\"text\\\\\" value=\\\\\"<?=stripSlashes(\$r[titlecolor])?>\\\\\" size=\\\\\"10\\\\\"><a onclick=\\\\\"foreColor();\\\\\"><img src=\\\\\"../data/images/color.gif\\\\\" width=\\\\\"21\\\\\" height=\\\\\"21\\\\\" align=\\\\\"absbottom\\\\\"></a>\r\n  </td>\r\n</tr>\r\n</table>\r\n','标题','0','1','1','\n  <tr bgcolor=\"#FFFFFF\"> \n    <td height=\"22\" valign=\"top\"><strong>[!--enews.name--]正则：</strong><br>\n      (<input name=\"textfield\" type=\"text\" id=\"textfield\" value=\"[!--title--]\" size=\"20\">)</td>\n    <td><table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"3\">\n        <tr> \n          <td><textarea name=\"add[zz_title]\" cols=\"60\" rows=\"10\" id=\"textarea\"><?=ehtmlspecialchars(stripSlashes(\$r[zz_title]))?></textarea></td>\n        </tr>\n        <tr> \n          <td><input name=\"add[z_title]\" type=\"text\" id=\"add[z_title]\" value=\"<?=stripSlashes(\$r[z_title])?>\">\n            (如填写这里，将为字段的值)</td>\n        </tr>\n      </table></td>\n  </tr>\n','0','CHAR','100','1','9','music','0','','0','0','0','<input name=\\\\\"title\\\\\" type=\\\\\"text\\\\\" class=\\\\\"input_text\\\\\" size=\\\\\"42\\\\\" value=\\\\\"<?=\$ecmsfirstpost==1?\\\\\"\\\\\":DoReqValue(\$mid,\\\\''title\\\\'',stripSlashes(\$r[title]))?>\\\\\">名称不能包含特殊符号！','0','','0','60','0','0','','','','','','','0','0','');");
E_D("replace into `phome_enewsf` values('108','special.field','特殊属性','','\n<table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" bgcolor=\"#DBEAF5\">\n  <tr>\n    <td height=\"25\" bgcolor=\"#FFFFFF\">信息属性: \n      <input name=\"checked\" type=\"checkbox\" value=\"1\"<?=\$r[checked]?'' checked'':''''?>>\n      审核 &nbsp;&nbsp; 推荐 \n      <select name=\"isgood\" id=\"isgood\">\n        <option value=\"0\">不推荐</option>\n	<?=\$ftnr[''igname'']?>\n      </select>\n      &nbsp;&nbsp; 头条 \n      <select name=\"firsttitle\" id=\"firsttitle\">\n        <option value=\"0\">非头条</option>\n	<?=\$ftnr[''ftname'']?>\n      </select></td>\n  </tr>\n  <tr> \n    <td height=\"25\" bgcolor=\"#FFFFFF\">关键字&nbsp;&nbsp;&nbsp;: \n      <input name=\"keyboard\" type=\"text\" size=\"52\" value=\"<?=stripSlashes(\$r[keyboard])?>\">\n      <font color=\"#666666\">(多个请用&quot;,&quot;隔开)</font></td>\n  </tr>\n  <tr> \n    <td height=\"25\" bgcolor=\"#FFFFFF\">外部链接: \n      <input name=\"titleurl\" type=\"text\" value=\"<?=stripSlashes(\$r[titleurl])?>\" size=\"52\">\n      <font color=\"#666666\">(填写后信息连接地址将为此链接)</font></td>\n  </tr>\n</table>\n','特殊属性','0','1','0','\n\n','0','','0','0','9','music','0','','0','0','0','\n<input name=\"keyboard\" type=\"text\" size=42 value=\"<?=stripSlashes(\$r[keyboard])?>\">\n<font color=\"#666666\">(多个请用&quot;,&quot;隔开)</font>\n','0','','0','','0','0','','','','','','','0','0','');");
E_D("replace into `phome_enewsf` values('109','titlepic','标题图片','img','\n<input name=\"titlepic\" type=\"text\" id=\"titlepic\" value=\"<?=\$ecmsfirstpost==1?\"\":ehtmlspecialchars(stripSlashes(\$r[titlepic]))?>\" size=\"45\">\n<a onclick=\"window.open(''ecmseditor/FileMain.php?<?=\$ecms_hashur[ehref]?>&type=1&classid=<?=\$classid?>&infoid=<?=\$id?>&filepass=<?=\$filepass?>&sinfo=1&doing=1&field=titlepic'','''',''width=700,height=550,scrollbars=yes'');\" title=\"选择已上传的图片\"><img src=\"../data/images/changeimg.gif\" border=\"0\" align=\"absbottom\"></a> \n','标题图片','0','1','1','\n  <tr bgcolor=\"#FFFFFF\"> \n    <td height=\"22\" valign=\"top\"><strong>[!--enews.name--]正则：</strong><br>\n      ( \n      <input name=\"textfield\" type=\"text\" id=\"textfield\" value=\"[!--titlepic--]\" size=\"20\">\n      )</td>\n    <td><table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"3\">\n    <tr>\n      <td>附件前缀 \n        <input name=\"add[qz_titlepic]\" type=\"text\" id=\"add[qz_titlepic]\" value=\"<?=stripSlashes(\$r[qz_titlepic])?>\"> \n        <input name=\"add[save_titlepic]\" type=\"checkbox\" id=\"add[save_titlepic]\" value=\" checked\"<?=\$r[save_titlepic]?>>\n        远程保存 </td>\n    </tr>\n    <tr> \n      <td><textarea name=\"add[zz_titlepic]\" cols=\"60\" rows=\"10\" id=\"add[zz_titlepic]\"><?=ehtmlspecialchars(stripSlashes(\$r[zz_titlepic]))?></textarea></td>\n    </tr>\n    <tr> \n      <td><input name=\"add[z_titlepic]\" type=\"text\" id=\"titlepic5\" value=\"<?=stripSlashes(\$r[z_titlepic])?>\">\n        (如填写这里，这就是字段的值)</td>\n    </tr>\n  </table></td>\n  </tr>\n','0','CHAR','120','1','9','music','0','','0','0','0','\n<input type=\"file\" name=\"titlepicfile\" size=\"45\">\n','0','','0','60','0','0','','','','','','','0','0','');");
E_D("replace into `phome_enewsf` values('110','newstime','发布时间','text','\n<input name=\"newstime\" type=\"text\" value=\"<?=\$r[newstime]?>\"><input type=button name=button value=\"设为当前时间\" onclick=\"document.add.newstime.value=''<?=\$todaytime?>''\">\n','发布时间','0','1','1','\n  <tr bgcolor=\"#FFFFFF\"> \n    <td height=\"22\" valign=\"top\"><strong>[!--enews.name--]正则：</strong><br>\n      (<input name=\"textfield\" type=\"text\" id=\"textfield\" value=\"[!--newstime--]\" size=\"20\">)</td>\n    <td><table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"3\">\n        <tr> \n          <td><textarea name=\"add[zz_newstime]\" cols=\"60\" rows=\"10\" id=\"textarea\"><?=ehtmlspecialchars(stripSlashes(\$r[zz_newstime]))?></textarea></td>\n        </tr>\n        <tr> \n          <td><input name=\"add[z_newstime]\" type=\"text\" id=\"add[z_newstime]\" value=\"<?=stripSlashes(\$r[z_newstime])?>\">\n            (如填写这里，将为字段的值)</td>\n        </tr>\n      </table></td>\n  </tr>\n','0','INT','11','1','9','music','0','','1','0','0','\n\n','0','','0','','0','0','','','','','','','0','0','');");
E_D("replace into `phome_enewsf` values('111','qq','发布者QQ号码','text','<input name=\\\\\"qq\\\\\" type=\\\\\"text\\\\\" id=\\\\\"qq\\\\\" value=\\\\\"<?=\$ecmsfirstpost==1?\\\\\"\\\\\":ehtmlspecialchars(stripSlashes(\$r[qq]))?>\\\\\" size=\\\\\"60\\\\\">\r\n','','1','1','1','\n  <tr bgcolor=\\\\\"#FFFFFF\\\\\"> \n    <td height=\\\\\"22\\\\\" valign=\\\\\"top\\\\\"><strong>[!--enews.name--]正则：</strong><br>\n      (<input name=\\\\\"textfield\\\\\" type=\\\\\"text\\\\\" id=\\\\\"textfield\\\\\" value=\\\\\"[!--qq--]\\\\\" size=\\\\\"20\\\\\">)</td>\n    <td><table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"1\\\\\" cellpadding=\\\\\"3\\\\\">\n        <tr> \n          <td><textarea name=\\\\\"add[zz_qq]\\\\\" cols=\\\\\"60\\\\\" rows=\\\\\"10\\\\\" id=\\\\\"textarea\\\\\"><?=ehtmlspecialchars(stripSlashes(\$r[zz_qq]))?></textarea></td>\n        </tr>\n        <tr> \n          <td><input name=\\\\\"add[z_qq]\\\\\" type=\\\\\"text\\\\\" id=\\\\\"add[z_qq]\\\\\" value=\\\\\"<?=stripSlashes(\$r[z_qq])?>\\\\\">\n            (如填写这里，将为字段的值)</td>\n        </tr>\n      </table></td>\n  </tr>\n','0','VARCHAR','','1','9','music','0','','0','0','1','<input name=\\\\\"qq\\\\\" type=\\\\\"text\\\\\" id=\\\\\"qq\\\\\" value=\\\\\"<?=\$ecmsfirstpost==1?\\\\\"\\\\\":DoReqValue(\$mid,\\\\''qq\\\\'',stripSlashes(\$r[qq]))?>\\\\\" size=\\\\\"42\\\\\">请填写真实QQ号码！','0','','0','60','0','0','','','','','','','0','0','');");
E_D("replace into `phome_enewsf` values('112','music_url','背景音乐上传','file','<input name=\\\\\"music_url\\\\\" type=\\\\\"text\\\\\" id=\\\\\"music_url\\\\\" value=\\\\\"<?=\$ecmsfirstpost==1?\\\\\"\\\\\":ehtmlspecialchars(stripSlashes(\$r[music_url]))?>\\\\\" size=\\\\\"60\\\\\">\r\n<a onclick=\\\\\"window.open(\\\\''ecmseditor/FileMain.php?<?=\$ecms_hashur[ehref]?>&type=0&classid=<?=\$classid?>&infoid=<?=\$id?>&filepass=<?=\$filepass?>&sinfo=1&doing=1&field=music_url\\\\'',\\\\''\\\\'',\\\\''width=700,height=550,scrollbars=yes\\\\'');\\\\\" title=\\\\\"选择已上传的文件\\\\\"><img src=\\\\\"../data/images/changefile.gif\\\\\" border=\\\\\"0\\\\\" align=\\\\\"absbottom\\\\\"></a>\r\n','','1','1','1','\n  <tr bgcolor=\\\\\"#FFFFFF\\\\\"> \n    <td height=\\\\\"22\\\\\" valign=\\\\\"top\\\\\"><strong>[!--enews.name--]正则：</strong><br>\n      ( \n      <input name=\\\\\"textfield\\\\\" type=\\\\\"text\\\\\" id=\\\\\"textfield\\\\\" value=\\\\\"[!--music_url--]\\\\\" size=\\\\\"20\\\\\">\n      )</td>\n    <td><table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"1\\\\\" cellpadding=\\\\\"3\\\\\">\n    <tr>\n      <td>附件前缀 \n        <input name=\\\\\"add[qz_music_url]\\\\\" type=\\\\\"text\\\\\" id=\\\\\"add[qz_music_url]\\\\\" value=\\\\\"<?=stripSlashes(\$r[qz_music_url])?>\\\\\"> \n        <input name=\\\\\"add[save_music_url]\\\\\" type=\\\\\"checkbox\\\\\" id=\\\\\"add[save_music_url]\\\\\" value=\\\\\" checked\\\\\"<?=\$r[save_music_url]?>>\n        远程保存 </td>\n    </tr>\n    <tr> \n      <td><textarea name=\\\\\"add[zz_music_url]\\\\\" cols=\\\\\"60\\\\\" rows=\\\\\"10\\\\\" id=\\\\\"add[zz_music_url]\\\\\"><?=ehtmlspecialchars(stripSlashes(\$r[zz_music_url]))?></textarea></td>\n    </tr>\n    <tr> \n      <td><input name=\\\\\"add[z_music_url]\\\\\" type=\\\\\"text\\\\\" id=\\\\\"music_url5\\\\\" value=\\\\\"<?=stripSlashes(\$r[z_music_url])?>\\\\\">\n        (如填写这里，这就是字段的值)</td>\n    </tr>\n  </table></td>\n  </tr>\n','0','VARCHAR','','1','9','music','0','','0','0','1','<input type=\\\\\"file\\\\\" class=\\\\\"input_text\\\\\" name=\\\\\"music_urlfile\\\\\" size=\\\\\"42\\\\\">只支持MP3格式！大小不要超过5M！','0','','0','60','0','0','','','','','','','0','0','');");
E_D("replace into `phome_enewsf` values('113','onetext','一句话文本','text','<input name=\\\\\"onetext\\\\\" type=\\\\\"text\\\\\" id=\\\\\"onetext\\\\\" value=\\\\\"<?=\$ecmsfirstpost==1?\\\\\"感觉不错，很赞哦！\\\\\":ehtmlspecialchars(stripSlashes(\$r[onetext]))?>\\\\\" size=\\\\\"60\\\\\">\r\n','','1','1','1','\r\n  <tr bgcolor=\\\\\"#FFFFFF\\\\\"> \r\n    <td height=\\\\\"22\\\\\" valign=\\\\\"top\\\\\"><strong>[!--enews.name--]正则：</strong><br>\r\n      (<input name=\\\\\"textfield\\\\\" type=\\\\\"text\\\\\" id=\\\\\"textfield\\\\\" value=\\\\\"[!--onetext--]\\\\\" size=\\\\\"20\\\\\">)</td>\r\n    <td><table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"1\\\\\" cellpadding=\\\\\"3\\\\\">\r\n        <tr> \r\n          <td><textarea name=\\\\\"add[zz_onetext]\\\\\" cols=\\\\\"60\\\\\" rows=\\\\\"10\\\\\" id=\\\\\"textarea\\\\\"><?=ehtmlspecialchars(stripSlashes(\$r[zz_onetext]))?></textarea></td>\r\n        </tr>\r\n        <tr> \r\n          <td><input name=\\\\\"add[z_onetext]\\\\\" type=\\\\\"text\\\\\" id=\\\\\"add[z_onetext]\\\\\" value=\\\\\"<?=stripSlashes(\$r[z_onetext])?>\\\\\">\r\n            (如填写这里，将为字段的值)</td>\r\n        </tr>\r\n      </table></td>\r\n  </tr>\r\n','0','VARCHAR','','1','1','news','0','感觉不错，很赞哦！','0','0','1','<input name=\\\\\"onetext\\\\\" type=\\\\\"text\\\\\" id=\\\\\"onetext\\\\\" value=\\\\\"<?=\$ecmsfirstpost==1?\\\\\"感觉不错，很赞哦！\\\\\":DoReqValue(\$mid,\\\\''onetext\\\\'',stripSlashes(\$r[onetext]))?>\\\\\" size=\\\\\"60\\\\\">\r\n','0','','0','60','0','0','','','','','','','0','0','');");
E_D("replace into `phome_enewsf` values('114','diggtop','顶','text','\r\n<input name=\\\\\"diggtop\\\\\" type=\\\\\"text\\\\\" id=\\\\\"diggtop\\\\\" value=\\\\\"<?=\$ecmsfirstpost==1?\\\\\"\\\\\":ehtmlspecialchars(stripSlashes(\$r[diggtop]))?>\\\\\" size=\\\\\"\\\\\">\r\n','','1','1','1','\r\n  <tr bgcolor=\\\\\"#FFFFFF\\\\\"> \r\n    <td height=\\\\\"22\\\\\" valign=\\\\\"top\\\\\"><strong>[!--enews.name--]正则：</strong><br>\r\n      (<input name=\\\\\"textfield\\\\\" type=\\\\\"text\\\\\" id=\\\\\"textfield\\\\\" value=\\\\\"[!--diggtop--]\\\\\" size=\\\\\"20\\\\\">)</td>\r\n    <td><table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"1\\\\\" cellpadding=\\\\\"3\\\\\">\r\n        <tr> \r\n          <td><textarea name=\\\\\"add[zz_diggtop]\\\\\" cols=\\\\\"60\\\\\" rows=\\\\\"10\\\\\" id=\\\\\"textarea\\\\\"><?=ehtmlspecialchars(stripSlashes(\$r[zz_diggtop]))?></textarea></td>\r\n        </tr>\r\n        <tr> \r\n          <td><input name=\\\\\"add[z_diggtop]\\\\\" type=\\\\\"text\\\\\" id=\\\\\"add[z_diggtop]\\\\\" value=\\\\\"<?=stripSlashes(\$r[z_diggtop])?>\\\\\">\r\n            (如填写这里，将为字段的值)</td>\r\n        </tr>\r\n      </table></td>\r\n  </tr>\r\n','0','INT','','1','9','music','0','','0','0','1','\r\n<input name=\\\\\"diggtop\\\\\" type=\\\\\"text\\\\\" id=\\\\\"diggtop\\\\\" value=\\\\\"<?=\$ecmsfirstpost==1?\\\\\"\\\\\":DoReqValue(\$mid,\\\\''diggtop\\\\'',stripSlashes(\$r[diggtop]))?>\\\\\" size=\\\\\"\\\\\">\r\n','0','','0','','0','0','','','','','','','0','0','');");

require("../../inc/footer.php");
?>