<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsmemberf`;");
E_C("CREATE TABLE `phome_enewsmemberf` (
  `fid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `f` varchar(30) NOT NULL DEFAULT '',
  `fname` varchar(30) NOT NULL DEFAULT '',
  `fform` varchar(20) NOT NULL DEFAULT '',
  `fhtml` mediumtext NOT NULL,
  `fzs` varchar(255) NOT NULL DEFAULT '',
  `myorder` smallint(6) NOT NULL DEFAULT '0',
  `ftype` varchar(30) NOT NULL DEFAULT '',
  `flen` varchar(20) NOT NULL DEFAULT '',
  `fvalue` text NOT NULL,
  `fformsize` varchar(12) NOT NULL DEFAULT '',
  PRIMARY KEY (`fid`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsmemberf` values('1','truename','真实姓名','text','<input name=\\\\\"truename\\\\\" type=\\\\\"text\\\\\" class=\\\\\"input_text\\\\\" id=\\\\\"truename\\\\\" value=\\\\\"<?=\$ecmsfirstpost==1?\\\\\"\\\\\":htmlspecialchars(stripSlashes(\$addr[truename]))?>\\\\\">\r\n','','1','VARCHAR','20','','');");
E_D("replace into `phome_enewsmemberf` values('2','oicq','QQ号码','text','<input name=\\\\\"oicq\\\\\" type=\\\\\"text\\\\\" class=\\\\\"input_text\\\\\" id=\\\\\"oicq\\\\\" value=\\\\\"<?=\$ecmsfirstpost==1?\\\\\"\\\\\":htmlspecialchars(stripSlashes(\$addr[oicq]))?>\\\\\">\r\n','','5','VARCHAR','25','','');");
E_D("replace into `phome_enewsmemberf` values('3','msn','MSN','text','<input name=\\\\\"msn\\\\\" type=\\\\\"text\\\\\" class=\\\\\"input_text\\\\\" id=\\\\\"msn\\\\\" value=\\\\\"<?=\$ecmsfirstpost==1?\\\\\"\\\\\":htmlspecialchars(stripSlashes(\$addr[msn]))?>\\\\\">\r\n','','6','VARCHAR','120','','');");
E_D("replace into `phome_enewsmemberf` values('4','mycall','联系电话','text','<input name=\\\\\"mycall\\\\\" type=\\\\\"text\\\\\" class=\\\\\"input_text\\\\\" id=\\\\\"mycall\\\\\" value=\\\\\"<?=\$ecmsfirstpost==1?\\\\\"\\\\\":htmlspecialchars(stripSlashes(\$addr[mycall]))?>\\\\\">\r\n','','2','VARCHAR','30','','');");
E_D("replace into `phome_enewsmemberf` values('5','phone','手机','text','<input name=\\\\\"phone\\\\\" type=\\\\\"text\\\\\" class=\\\\\"input_text\\\\\" id=\\\\\"phone\\\\\" value=\\\\\"<?=\$ecmsfirstpost==1?\\\\\"\\\\\":htmlspecialchars(stripSlashes(\$addr[phone]))?>\\\\\">\r\n','','4','VARCHAR','30','','');");
E_D("replace into `phome_enewsmemberf` values('6','address','联系地址','text','<input name=\\\\\"address\\\\\" type=\\\\\"text\\\\\" class=\\\\\"input_text\\\\\" id=\\\\\"address\\\\\" value=\\\\\"<?=\$ecmsfirstpost==1?\\\\\"\\\\\":htmlspecialchars(stripSlashes(\$addr[address]))?>\\\\\" size=\\\\\"50\\\\\">\r\n','','9','VARCHAR','255','','');");
E_D("replace into `phome_enewsmemberf` values('7','zip','邮编','text','<input name=\\\\\"zip\\\\\" type=\\\\\"text\\\\\" class=\\\\\"input_text\\\\\" id=\\\\\"zip\\\\\" value=\\\\\"<?=\$ecmsfirstpost==1?\\\\\"\\\\\":htmlspecialchars(stripSlashes(\$addr[zip]))?>\\\\\" size=\\\\\"8\\\\\">\r\n','','10','VARCHAR','8','','');");
E_D("replace into `phome_enewsmemberf` values('9','homepage','网址','text','<input name=\\\\\"homepage\\\\\" type=\\\\\"text\\\\\" class=\\\\\"input_text\\\\\" id=\\\\\"homepage\\\\\" value=\\\\\"<?=\$ecmsfirstpost==1?\\\\\"\\\\\":htmlspecialchars(stripSlashes(\$addr[homepage]))?>\\\\\">\r\n','','7','VARCHAR','200','','');");
E_D("replace into `phome_enewsmemberf` values('10','saytext','简�\�','textarea','<textarea name=\\\\\"saytext\\\\\" class=\\\\\"input_text\\\\\" cols=\\\\\"65\\\\\" rows=\\\\\"10\\\\\" id=\\\\\"saytext\\\\\"><?=\$ecmsfirstpost==1?\\\\\"\\\\\":stripSlashes(\$addr[saytext])?></textarea>\r\n','','11','TEXT','','','');");
E_D("replace into `phome_enewsmemberf` values('11','company','公司名称','text','<input name=\\\\\"company\\\\\" type=\\\\\"text\\\\\" class=\\\\\"input_text\\\\\" id=\\\\\"company\\\\\" value=\\\\\"<?=\$ecmsfirstpost==1?\\\\\"\\\\\":htmlspecialchars(stripSlashes(\$addr[company]))?>\\\\\" size=\\\\\"38\\\\\">\r\n','','0','VARCHAR','255','','');");
E_D("replace into `phome_enewsmemberf` values('12','fax','传真','text','<input name=\\\\\"fax\\\\\" type=\\\\\"text\\\\\" class=\\\\\"input_text\\\\\" id=\\\\\"fax\\\\\" value=\\\\\"<?=\$ecmsfirstpost==1?\\\\\"\\\\\":htmlspecialchars(stripSlashes(\$addr[fax]))?>\\\\\">\r\n','','3','VARCHAR','30','','');");
E_D("replace into `phome_enewsmemberf` values('13','userpic','会员头像','img','<input type=\\\\\"file\\\\\" name=\\\\\"userpicfile\\\\\">&nbsp;&nbsp;\r\n<?=empty(\$addr[userpic])?\\\\\"\\\\\":\\\\\"<img src=\\\\''\\\\\".htmlspecialchars(stripSlashes(\$addr[userpic])).\\\\\"\\\\'' border=0>\\\\\"?>','','8','VARCHAR','200','','');");
E_D("replace into `phome_enewsmemberf` values('14','job','职业','text','\r\n<input name=\\\\\"job\\\\\" type=\\\\\"text\\\\\" id=\\\\\"job\\\\\" value=\\\\\"<?=\$ecmsfirstpost==1?\\\\\"\\\\\":ehtmlspecialchars(stripSlashes(\$addr[job]))?>\\\\\" size=\\\\\"\\\\\">\r\n','','0','VARCHAR','255','','');");
E_D("replace into `phome_enewsmemberf` values('15','juzhu','现居','text','\r\n<input name=\\\\\"juzhu\\\\\" type=\\\\\"text\\\\\" id=\\\\\"juzhu\\\\\" value=\\\\\"<?=\$ecmsfirstpost==1?\\\\\"\\\\\":ehtmlspecialchars(stripSlashes(\$addr[juzhu]))?>\\\\\" size=\\\\\"\\\\\">\r\n','','0','VARCHAR','255','','');");
E_D("replace into `phome_enewsmemberf` values('16','Diybg','DIY背景','text','\r\n<input name=\\\\\"Diybg\\\\\" type=\\\\\"text\\\\\" id=\\\\\"Diybg\\\\\" value=\\\\\"<?=\$ecmsfirstpost==1?\\\\\"\\\\\":ehtmlspecialchars(stripSlashes(\$addr[Diybg]))?>\\\\\" size=\\\\\"\\\\\">\r\n','','0','VARCHAR','255','','');");
E_D("replace into `phome_enewsmemberf` values('17','renzheng','认证信息','text','\r\n<input name=\\\\\"renzheng\\\\\" type=\\\\\"text\\\\\" id=\\\\\"renzheng\\\\\" value=\\\\\"<?=\$ecmsfirstpost==1?\\\\\"\\\\\":ehtmlspecialchars(stripSlashes(\$addr[renzheng]))?>\\\\\" size=\\\\\"\\\\\">\r\n','','0','TEXT','','','');");
E_D("replace into `phome_enewsmemberf` values('18','xingyun','我的幸运�\�','text','\r\n<input name=\\\\\"xingyun\\\\\" type=\\\\\"text\\\\\" id=\\\\\"xingyun\\\\\" value=\\\\\"<?=\$ecmsfirstpost==1?\\\\\"\\\\\":ehtmlspecialchars(stripSlashes(\$addr[xingyun]))?>\\\\\" size=\\\\\"\\\\\">\r\n','','0','VARCHAR','255','','');");
E_D("replace into `phome_enewsmemberf` values('19','lockBgImg','锁定背景图位�\�','text','\r\n<input name=\\\\\"lockBgImg\\\\\" type=\\\\\"text\\\\\" id=\\\\\"lockBgImg\\\\\" value=\\\\\"<?=\$ecmsfirstpost==1?\\\\\"\\\\\":ehtmlspecialchars(stripSlashes(\$addr[lockBgImg]))?>\\\\\" size=\\\\\"\\\\\">\r\n','','0','VARCHAR','255','','');");
E_D("replace into `phome_enewsmemberf` values('20','repeatBg','背景排列','text','\r\n<input name=\\\\\"repeatBg\\\\\" type=\\\\\"text\\\\\" id=\\\\\"repeatBg\\\\\" value=\\\\\"<?=\$ecmsfirstpost==1?\\\\\"\\\\\":ehtmlspecialchars(stripSlashes(\$addr[repeatBg]))?>\\\\\" size=\\\\\"\\\\\">\r\n','','0','VARCHAR','255','','');");
E_D("replace into `phome_enewsmemberf` values('21','Bgalign','背景对齐','text','\r\n<input name=\\\\\"Bgalign\\\\\" type=\\\\\"text\\\\\" id=\\\\\"Bgalign\\\\\" value=\\\\\"<?=\$ecmsfirstpost==1?\\\\\"\\\\\":ehtmlspecialchars(stripSlashes(\$addr[Bgalign]))?>\\\\\" size=\\\\\"\\\\\">\r\n','','0','VARCHAR','255','','');");
E_D("replace into `phome_enewsmemberf` values('22','bgcolor','背景颜色','text','\r\n<input name=\\\\\"bgcolor\\\\\" type=\\\\\"text\\\\\" id=\\\\\"bgcolor\\\\\" value=\\\\\"<?=\$ecmsfirstpost==1?\\\\\"\\\\\":ehtmlspecialchars(stripSlashes(\$addr[bgcolor]))?>\\\\\" size=\\\\\"\\\\\">\r\n','','0','VARCHAR','255','','');");
E_D("replace into `phome_enewsmemberf` values('23','bgsize','背景尺寸','text','\r\n<input name=\\\\\"bgsize\\\\\" type=\\\\\"text\\\\\" id=\\\\\"bgsize\\\\\" value=\\\\\"<?=\$ecmsfirstpost==1?\\\\\"\\\\\":ehtmlspecialchars(stripSlashes(\$addr[bgsize]))?>\\\\\" size=\\\\\"\\\\\">\r\n','','0','VARCHAR','255','','');");
E_D("replace into `phome_enewsmemberf` values('24','feeduserid','关注的用�\�','text','\r\n<input name=\\\\\"feeduserid\\\\\" type=\\\\\"text\\\\\" id=\\\\\"feeduserid\\\\\" value=\\\\\"<?=\$ecmsfirstpost==1?\\\\\"\\\\\":ehtmlspecialchars(stripSlashes(\$addr[feeduserid]))?>\\\\\" size=\\\\\"\\\\\">\r\n','','0','MEDIUMTEXT','','','');");
E_D("replace into `phome_enewsmemberf` values('25','zuijin','最近访�\�','text','\r\n<input name=\\\\\"zuijin\\\\\" type=\\\\\"text\\\\\" id=\\\\\"zuijin\\\\\" value=\\\\\"<?=\$ecmsfirstpost==1?\\\\\"\\\\\":ehtmlspecialchars(stripSlashes(\$addr[zuijin]))?>\\\\\" size=\\\\\"\\\\\">\r\n','','0','VARCHAR','255','','');");

@include("../../inc/footer.php");
?>