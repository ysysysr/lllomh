<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `phome_enewspltemp`;");
E_C("CREATE TABLE `phome_enewspltemp` (
  `tempid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `tempname` varchar(60) NOT NULL DEFAULT '',
  `temptext` mediumtext NOT NULL,
  `isdefault` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`tempid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewspltemp` values('1','默认评论列表模板','<!DOCTYPE HTML PUBLIC \\\\\"-//W3C//DTD HTML 4.01 Transitional//EN\\\\\">\r\n<html>\r\n<head>\r\n<meta http-equiv=\\\\\"Content-Type\\\\\" content=\\\\\"text/html; charset=utf-8\\\\\">\r\n<title>[!--pagetitle--] - Powered by EmpireCMS</title>\r\n<meta name=\\\\\"keywords\\\\\" content=\\\\\"[!--pagekey--]\\\\\" />\r\n<meta name=\\\\\"description\\\\\" content=\\\\\"[!--pagedes--]\\\\\" />\r\n<style type=\\\\\"text/css\\\\\">\r\n<!--\r\nbody,Table{ color: #222; font-size: 12px; }\r\na { color: #222; text-decoration: none; }\r\na:hover { color: #f00; text-decoration: underline; }\r\nh1 { font-size:32px; font-weight: bold; }\r\nh2 { color: #1e3a9e; font-size: 25px; font-weight: bold;  }\r\n.you { color: #1f3a87; font-size: 14px; }\r\n.text { font-size: 14px; padding-left: 5px; padding-right: 5px; line-height: 20px}\r\n.re a { color: #1f3a87; }\r\n.name { color: #1f3a87; }\r\n.name a { color: #1f3a87; text-decoration: underline;}\r\n.retext { background-color: #f3f3f3; width: 100%; float: left; padding-top: 22px; padding-bottom: 22px; border-top: 1px solid #ccc; }\r\n.retext textarea { width: 535px; height: 130px; float: left; margin-left: 60px; border-top-style: inset; border-top-width: 2px; border-left-style: inset; border-left-width: 2px; }\r\n.hrLine{BORDER-BOTTOM: #807d76 1px dotted;}\r\n\r\n.ecomment {margin:0;padding:0;}\r\n.ecomment {margin-bottom:12px;overflow-x:hidden;overflow-y:hidden;padding-bottom:3px;padding-left:3px;padding-right:3px;padding-top:3px;background:#FFFFEE;padding:3px;border:solid 1px #999;}\r\n.ecommentauthor {float:left; color:#F96; font-weight:bold;}\r\n.ecommenttext {clear:left;margin:0;padding:0;}\r\n-->\r\n</style>\r\n<script src=\\\\\"[!--news.url--]e/data/js/ajax.js\\\\\"></script>\r\n</head>\r\n\r\n<body topmargin=\\\\\"0\\\\\">\r\n<table width=\\\\\"766\\\\\" border=\\\\\"0\\\\\" align=\\\\\"center\\\\\" cellpadding=\\\\\"3\\\\\" cellspacing=\\\\\"1\\\\\">\r\n  <tr>\r\n    <td width=\\\\\"210\\\\\"><a href=\\\\\"[!--news.url--]\\\\\"><img src=\\\\\"[!--news.url--]skin/default/images/logo.gif\\\\\" border=\\\\\"0\\\\\" /></a></td>\r\n    <td><h1>网友评论</h1></td>\r\n    <td><div align=\\\\\"right\\\\\"><a href=\\\\\"#tosaypl\\\\\"><strong><font color=\\\\\"#FF0000\\\\\">我也评两句</font></strong></a></div></td>\r\n  </tr>\r\n</table>\r\n<table width=\\\\\"766\\\\\" border=\\\\\"0\\\\\" align=\\\\\"center\\\\\" cellpadding=\\\\\"3\\\\\" cellspacing=\\\\\"1\\\\\" bgcolor=\\\\\"#222\\\\\">\r\n  <tr>\r\n    <td height=\\\\\"2\\\\\"></td>\r\n  </tr>\r\n</table>\r\n<table width=\\\\\"766\\\\\" border=\\\\\"0\\\\\" align=\\\\\"center\\\\\" cellpadding=\\\\\"3\\\\\" cellspacing=\\\\\"1\\\\\">\r\n  <tr> \r\n    <td height=\\\\\"42\\\\\"> \r\n      <h2>评论：<a href=\\\\\"[!--titleurl--]\\\\\" target=\\\\\"_blank\\\\\"><font color=\\\\\"#1e3a9e\\\\\">[!--title--]</font></a></h2></td>\r\n    <td><div align=\\\\\"right\\\\\"><a href=\\\\\"[!--titleurl--]\\\\\" target=\\\\\"_blank\\\\\">查看原文</a></div></td>\r\n  </tr>\r\n</table>\r\n<hr align=\\\\\"center\\\\\" width=\\\\\"766\\\\\" size=1 class=hrline>\r\n<table width=\\\\\"766\\\\\" border=\\\\\"0\\\\\" align=\\\\\"center\\\\\" cellpadding=\\\\\"3\\\\\" cellspacing=\\\\\"1\\\\\" bgcolor=\\\\\"#384EA3\\\\\">\r\n  <form action=\\\\\"../enews/index.php\\\\\" method=\\\\\"post\\\\\" name=\\\\\"infopfenform\\\\\">\r\n    <input type=\\\\\"hidden\\\\\" name=\\\\\"enews\\\\\" value=\\\\\"AddInfoPfen\\\\\" />\r\n    <input type=\\\\\"hidden\\\\\" name=\\\\\"classid\\\\\" value=\\\\\"[!--classid--]\\\\\" />\r\n    <input type=\\\\\"hidden\\\\\" name=\\\\\"id\\\\\" value=\\\\\"[!--id--]\\\\\" />\r\n    <tr> \r\n      <td width=\\\\\"50%\\\\\" height=\\\\\"27\\\\\" valign=\\\\\"middle\\\\\"><font color=\\\\\"#FFFFFF\\\\\">&nbsp;评分: \r\n        <input type=\\\\\"radio\\\\\" name=\\\\\"fen\\\\\" value=\\\\\"1\\\\\">\r\n        1分 \r\n        <input type=\\\\\"radio\\\\\" name=\\\\\"fen\\\\\" value=\\\\\"2\\\\\">\r\n        2分 \r\n        <input name=\\\\\"fen\\\\\" type=\\\\\"radio\\\\\" value=\\\\\"3\\\\\" checked>\r\n        3分 \r\n        <input type=\\\\\"radio\\\\\" name=\\\\\"fen\\\\\" value=\\\\\"4\\\\\">\r\n        4分 \r\n        <input type=\\\\\"radio\\\\\" name=\\\\\"fen\\\\\" value=\\\\\"5\\\\\">\r\n        5分 \r\n        <input type=\\\\\"submit\\\\\" name=\\\\\"Submit\\\\\" value=\\\\\"提交\\\\\">\r\n        </font></td>\r\n      <td width=\\\\\"50%\\\\\" valign=\\\\\"middle\\\\\"><div align=\\\\\"center\\\\\"><font color=\\\\\"#FFFFFF\\\\\">平均得分: \r\n          <strong><span id=\\\\\"pfendiv\\\\\">[!--pinfopfen--]</span></strong> 分，共有 <strong>[!--infopfennum--]</strong> \r\n          人参与评分</font></div></td>\r\n    </tr>\r\n  </form>\r\n</table>\r\n<table width=\\\\\"766\\\\\" border=\\\\\"0\\\\\" align=\\\\\"center\\\\\" cellpadding=\\\\\"3\\\\\" cellspacing=\\\\\"1\\\\\" bgcolor=\\\\\"#CCCCCC\\\\\">\r\n  <tr> \r\n    <td height=\\\\\"30\\\\\" bgcolor=\\\\\"#FFFFFF\\\\\"> \r\n      <table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"1\\\\\" cellpadding=\\\\\"3\\\\\">\r\n        <tr> \r\n          <td width=\\\\\"17%\\\\\">&nbsp;&nbsp;&nbsp;网友评论</td>\r\n          <td width=\\\\\"83%\\\\\"><div align=\\\\\"right\\\\\">[!--listpage--]&nbsp;&nbsp;&nbsp;</div></td>\r\n        </tr>\r\n      </table></td>\r\n  </tr>\r\n  <tr> \r\n    <td bgcolor=\\\\\"#f8fcff\\\\\"> [!--empirenews.listtemp--] \r\n      <table width=\\\\\"96%\\\\\" border=\\\\\"0\\\\\" align=\\\\\"center\\\\\" cellpadding=\\\\\"3\\\\\" cellspacing=\\\\\"1\\\\\" style=\\\\\"word-break:break-all; word-wrap:break-all;\\\\\">\r\n        <tr> \r\n          <td height=\\\\\"30\\\\\"><span class=\\\\\"name\\\\\">本站网友 [!--username--]</span> <font color=\\\\\"#666666\\\\\">ip:[!--plip--]</font></td>\r\n          <td><div align=\\\\\"right\\\\\"><font color=\\\\\"#666666\\\\\">[!--pltime--] 发表</font></div></td>\r\n        </tr>\r\n        <tr valign=\\\\\"top\\\\\"> \r\n          <td height=\\\\\"50\\\\\" colspan=\\\\\"2\\\\\" class=\\\\\"text\\\\\">[!--pltext--]</td>\r\n        </tr>\r\n        <tr> \r\n          <td height=\\\\\"30\\\\\">&nbsp;</td>\r\n          <td><div align=\\\\\"right\\\\\" class=\\\\\"re\\\\\"><a href=\\\\\"#tosaypl\\\\\"[!--includelink--]>回复</a>&nbsp; \r\n              <a href=\\\\\"JavaScript:makeRequest(\\\\''../pl/doaction.php?enews=DoForPl&plid=[!--plid--]&classid=[!--classid--]&id=[!--id--]&dopl=1&doajax=1&ajaxarea=zcpldiv[!--plid--]\\\\'',\\\\''EchoReturnedText\\\\'',\\\\''GET\\\\'',\\\\''\\\\'');\\\\\">支持</a>[<span id=\\\\\"zcpldiv[!--plid--]\\\\\">[!--zcnum--]</span>]&nbsp; \r\n              <a href=\\\\\"JavaScript:makeRequest(\\\\''../pl/doaction.php?enews=DoForPl&plid=[!--plid--]&classid=[!--classid--]&id=[!--id--]&dopl=0&doajax=1&ajaxarea=fdpldiv[!--plid--]\\\\'',\\\\''EchoReturnedText\\\\'',\\\\''GET\\\\'',\\\\''\\\\'');\\\\\">反对</a>[<span id=\\\\\"fdpldiv[!--plid--]\\\\\">[!--fdnum--]</span>]\r\n            </div></td>\r\n        </tr>\r\n      </table>\r\n      <table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"1\\\\\" cellpadding=\\\\\"3\\\\\">\r\n        <tr>\r\n          <td background=\\\\\"[!--news.url--]skin/default/images/plhrbg.gif\\\\\"></td>\r\n        </tr>\r\n      </table>\r\n      [!--empirenews.listtemp--] \r\n      <div align=\\\\\"right\\\\\"><br />\r\n        [!--listpage--]&nbsp;&nbsp;&nbsp;<br />\r\n        <br />\r\n        <font color=\\\\\"#FF0000\\\\\">网友评论仅供网友表达个人看法，并不表明本站同意其观点或证实其描述&nbsp;&nbsp;&nbsp;</font><br><br> </div></td>\r\n  </tr>\r\n  <script>\r\n  function CheckPl(obj)\r\n  {\r\n  	if(obj.saytext.value==\\\\\"\\\\\")\r\n  	{\r\n  		alert(\\\\\"错误，评论不能为空\\\\\");\r\n  		obj.saytext.focus();\r\n  		return false;\r\n  	}\r\n  	return true;\r\n  }\r\n  </script>\r\n  <form action=\\\\\"../pl/doaction.php\\\\\" method=\\\\\"post\\\\\" name=\\\\\"saypl\\\\\" id=\\\\\"saypl\\\\\" onsubmit=\\\\\"return CheckPl(document.saypl)\\\\\">\r\n  <tr id=\\\\\"tosaypl\\\\\"> \r\n    <td bgcolor=\\\\\"#f8fcff\\\\\"> <table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"1\\\\\" cellpadding=\\\\\"3\\\\\">\r\n        <tr> \r\n            <td width=\\\\\"13%\\\\\" height=\\\\\"28\\\\\">&nbsp;&nbsp;&nbsp;<span class=\\\\\"you\\\\\">我也评两句</span></td>\r\n            <td valign=\\\\\"middle\\\\\">用户名： \r\n              <input name=\\\\\"username\\\\\" type=\\\\\"text\\\\\" id=\\\\\"username\\\\\" size=\\\\\"12\\\\\" value=\\\\\"[!--lusername--]\\\\\" />\r\n            密码： \r\n            <input name=\\\\\"password\\\\\" type=\\\\\"password\\\\\" id=\\\\\"password\\\\\" size=\\\\\"12\\\\\" value=\\\\\"[!--lpassword--]\\\\\" />\r\n            验证码： \r\n            <input name=\\\\\"key\\\\\" type=\\\\\"text\\\\\" id=\\\\\"key\\\\\" size=\\\\\"6\\\\\" />\r\n              <img src=\\\\\"[!--key.url--]\\\\\" align=\\\\\"middle\\\\\" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=\\\\\"[!--news.url--]e/member/register/\\\\\" target=\\\\\"_blank\\\\\">还没有注册？</a></td>\r\n        </tr>\r\n      </table></td>\r\n  </tr>\r\n  <tr> \r\n    <td bgcolor=\\\\\"#f8fcff\\\\\"> <table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"1\\\\\" cellpadding=\\\\\"3\\\\\" class=\\\\\"retext\\\\\">\r\n        <tr> \r\n          <td width=\\\\\"78%\\\\\"><div align=\\\\\"center\\\\\"> \r\n              <textarea name=\\\\\"saytext\\\\\" cols=\\\\\"58\\\\\" rows=\\\\\"6\\\\\" id=\\\\\"saytext\\\\\"></textarea>\r\n            </div></td>\r\n          <td width=\\\\\"22%\\\\\" rowspan=\\\\\"2\\\\\"> <div align=\\\\\"center\\\\\">\r\n              <input name=\\\\\"nomember\\\\\" type=\\\\\"checkbox\\\\\" id=\\\\\"nomember\\\\\" value=\\\\\"1\\\\\" checked=\\\\\"checked\\\\\" />\r\n                匿名发表<br>\r\n                <br />\r\n              <input name=\\\\\"imageField\\\\\" type=\\\\\"submit\\\\\" id=\\\\\"imageField\\\\\" value=\\\\\" 提 交 \\\\\" />\r\n            </div></td>\r\n        </tr>\r\n        <tr> \r\n          <td><div align=\\\\\"center\\\\\"> \r\n              <script src=\\\\\"[!--news.url--]d/js/js/plface.js\\\\\"></script>\r\n            </div></td>\r\n        </tr>\r\n      </table> </td>\r\n  </tr>\r\n  <input name=\\\\\"id\\\\\" type=\\\\\"hidden\\\\\" id=\\\\\"id\\\\\" value=\\\\\"[!--id--]\\\\\" />\r\n  <input name=\\\\\"classid\\\\\" type=\\\\\"hidden\\\\\" id=\\\\\"classid\\\\\" value=\\\\\"[!--classid--]\\\\\" />\r\n  <input name=\\\\\"enews\\\\\" type=\\\\\"hidden\\\\\" id=\\\\\"enews\\\\\" value=\\\\\"AddPl\\\\\" />\r\n  <input name=\\\\\"repid\\\\\" type=\\\\\"hidden\\\\\" id=\\\\\"repid\\\\\" value=\\\\\"0\\\\\" />\r\n  </form>\r\n</table>\r\n[!--temp.footer--]\r\n</body>\r\n</html>','1');");

require("../../inc/footer.php");
?>