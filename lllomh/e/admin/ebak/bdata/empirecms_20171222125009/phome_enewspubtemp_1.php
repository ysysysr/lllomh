<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewspubtemp`;");
E_C("CREATE TABLE `phome_enewspubtemp` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `indextemp` mediumtext NOT NULL,
  `cptemp` mediumtext NOT NULL,
  `searchtemp` mediumtext NOT NULL,
  `searchjstemp` mediumtext NOT NULL,
  `searchjstemp1` mediumtext NOT NULL,
  `otherlinktemp` mediumtext NOT NULL,
  `downsofttemp` text NOT NULL,
  `onlinemovietemp` text NOT NULL,
  `listpagetemp` text NOT NULL,
  `gbooktemp` mediumtext NOT NULL,
  `loginiframe` mediumtext NOT NULL,
  `otherlinktempsub` tinyint(4) NOT NULL DEFAULT '0',
  `otherlinktempdate` varchar(20) NOT NULL DEFAULT '',
  `loginjstemp` mediumtext NOT NULL,
  `downpagetemp` mediumtext NOT NULL,
  `pljstemp` mediumtext NOT NULL,
  `schalltemp` mediumtext NOT NULL,
  `schallsubnum` smallint(6) NOT NULL DEFAULT '0',
  `schalldate` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewspubtemp` values('1','<!DOCTYPE html PUBLIC \\\\\"-//W3C//DTD XHTML 1.0 Transitional//EN\\\\\" \\\\\"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\\\\\">\r\n<html xmlns=\\\\\"http://www.w3.org/1999/xhtml\\\\\">\r\n<head>\r\n<meta http-equiv=\\\\\"Content-Type\\\\\" content=\\\\\"text/html; charset=utf-8\\\\\" />\r\n<title>不是首页</title>\r\n</head>\r\n\r\n<body>\r\n请使�\�  后台--数据更新--最右侧的“刷新所有自定义列表�\� 来更新首�\�\r\n</body>\r\n</html>','<!DOCTYPE html PUBLIC \\\\\"-//W3C//DTD XHTML 1.0 Transitional//EN\\\\\" \\\\\"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\\\\\">\r\n<html xmlns=\\\\\"http://www.w3.org/1999/xhtml\\\\\">\r\n<head>\r\n<meta http-equiv=\\\\\"Content-Type\\\\\" content=\\\\\"text/html; charset=utf-8\\\\\" />\r\n<title>[!--pagetitle--] - Powered by EmpireCMS</title>\r\n<meta name=\\\\\"keywords\\\\\" content=\\\\\"[!--pagekey--]\\\\\" />\r\n<meta name=\\\\\"description\\\\\" content=\\\\\"[!--pagedes--]\\\\\" />\r\n<link href=\\\\\"[!--news.url--]skin/default/css/style.css\\\\\" rel=\\\\\"stylesheet\\\\\" type=\\\\\"text/css\\\\\" />\r\n<script type=\\\\\"text/javascript\\\\\" src=\\\\\"[!--news.url--]skin/default/js/tabs.js\\\\\"></script>\r\n</head>\r\n<body class=\\\\\"listpage\\\\\">\r\n[!--temp.dtheader--] \r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"10\\\\\" cellpadding=\\\\\"0\\\\\">\r\n<tr valign=\\\\\"top\\\\\">\r\n<td class=\\\\\"list_content\\\\\"><table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"position\\\\\">\r\n<tr>\r\n<td>现在的位置：[!--newsnav--]\r\n</td>\r\n</tr>\r\n</table>\r\n      <table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"box\\\\\">\r\n        <tr> \r\n          <td width=\\\\\"300\\\\\" valign=\\\\\"top\\\\\"> \r\n		  <?php\r\n		  \$lguserid=intval(getcvar(\\\\''mluserid\\\\''));//登陆用户ID\r\n		  \$lgusername=RepPostVar(getcvar(\\\\''mlusername\\\\''));//登陆用户\r\n		  \$lggroupid=intval(getcvar(\\\\''mlgroupid\\\\''));//会员组ID\r\n		  if(\$lggroupid)	//登陆会员显示菜单\r\n		  {\r\n		  ?>\r\n            <table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellpadding=\\\\\"3\\\\\" cellspacing=\\\\\"1\\\\\" class=\\\\\"tableborder\\\\\">\r\n              <tr class=\\\\\"header\\\\\"> \r\n                <td height=\\\\\"20\\\\\" bgcolor=\\\\\"#FFFFFF\\\\\"> <div align=\\\\\"center\\\\\"><strong><a href=\\\\\"[!--news.url--]e/member/cp/\\\\\">功能菜单</a></strong></div></td>\r\n              </tr>\r\n              <tr> \r\n                <td height=\\\\\"25\\\\\" bgcolor=\\\\\"#FFFFFF\\\\\" onmouseout=\\\\\"this.style.backgroundColor=\\\\''#ffffff\\\\''\\\\\" onmouseover=\\\\\"this.style.backgroundColor=\\\\''#EBF3FC\\\\''\\\\\"><div align=\\\\\"center\\\\\"><a href=\\\\\"[!--news.url--]e/member/EditInfo/\\\\\">修改资料</a></div></td>\r\n              </tr>\r\n              <tr> \r\n                <td height=\\\\\"25\\\\\" bgcolor=\\\\\"#FFFFFF\\\\\" onmouseout=\\\\\"this.style.backgroundColor=\\\\''#ffffff\\\\''\\\\\" onmouseover=\\\\\"this.style.backgroundColor=\\\\''#EBF3FC\\\\''\\\\\"><div align=\\\\\"center\\\\\"><a href=\\\\\"[!--news.url--]e/member/my/\\\\\">帐号状�\�</a></div></td>\r\n              </tr>\r\n              <tr> \r\n                <td height=\\\\\"25\\\\\" bgcolor=\\\\\"#FFFFFF\\\\\" onmouseout=\\\\\"this.style.backgroundColor=\\\\''#ffffff\\\\''\\\\\" onmouseover=\\\\\"this.style.backgroundColor=\\\\''#EBF3FC\\\\''\\\\\"><div align=\\\\\"center\\\\\"><a href=\\\\\"[!--news.url--]e/member/msg/\\\\\">站内信息</a></div></td>\r\n              </tr>\r\n              <tr> \r\n                <td height=\\\\\"25\\\\\" bgcolor=\\\\\"#FFFFFF\\\\\" onmouseout=\\\\\"this.style.backgroundColor=\\\\''#ffffff\\\\''\\\\\" onmouseover=\\\\\"this.style.backgroundColor=\\\\''#EBF3FC\\\\''\\\\\"><div align=\\\\\"center\\\\\"><a href=\\\\\"[!--news.url--]e/member/mspace/SetSpace.php\\\\\">空间设置</a></div></td>\r\n              </tr>\r\n              <tr> \r\n                <td height=\\\\\"25\\\\\" bgcolor=\\\\\"#FFFFFF\\\\\" onmouseout=\\\\\"this.style.backgroundColor=\\\\''#ffffff\\\\''\\\\\" onmouseover=\\\\\"this.style.backgroundColor=\\\\''#EBF3FC\\\\''\\\\\"><div align=\\\\\"center\\\\\"><a href=\\\\\"[!--news.url--]e/DoInfo/\\\\\">管理信息</a></div></td>\r\n              </tr>\r\n              <tr> \r\n                <td height=\\\\\"25\\\\\" bgcolor=\\\\\"#FFFFFF\\\\\" onmouseout=\\\\\"this.style.backgroundColor=\\\\''#ffffff\\\\''\\\\\" onmouseover=\\\\\"this.style.backgroundColor=\\\\''#EBF3FC\\\\''\\\\\"><div align=\\\\\"center\\\\\"><a href=\\\\\"[!--news.url--]e/member/fava/\\\\\">收藏�\�</a></div></td>\r\n              </tr>\r\n              <tr> \r\n                <td height=\\\\\"25\\\\\" bgcolor=\\\\\"#FFFFFF\\\\\" onmouseout=\\\\\"this.style.backgroundColor=\\\\''#ffffff\\\\''\\\\\" onmouseover=\\\\\"this.style.backgroundColor=\\\\''#EBF3FC\\\\''\\\\\"><div align=\\\\\"center\\\\\"><a href=\\\\\"[!--news.url--]e/payapi/\\\\\">在线支付</a></div></td>\r\n              </tr>\r\n              <tr> \r\n                <td height=\\\\\"25\\\\\" bgcolor=\\\\\"#FFFFFF\\\\\" onmouseout=\\\\\"this.style.backgroundColor=\\\\''#ffffff\\\\''\\\\\" onmouseover=\\\\\"this.style.backgroundColor=\\\\''#EBF3FC\\\\''\\\\\"><div align=\\\\\"center\\\\\"><a href=\\\\\"[!--news.url--]e/member/friend/\\\\\">我的好友</a></div></td>\r\n              </tr>\r\n              <tr> \r\n                <td height=\\\\\"25\\\\\" bgcolor=\\\\\"#FFFFFF\\\\\" onmouseout=\\\\\"this.style.backgroundColor=\\\\''#ffffff\\\\''\\\\\" onmouseover=\\\\\"this.style.backgroundColor=\\\\''#EBF3FC\\\\''\\\\\"><div align=\\\\\"center\\\\\"><a href=\\\\\"[!--news.url--]e/member/buybak/\\\\\">消费记录</a></div></td>\r\n              </tr>\r\n              <tr> \r\n                <td height=\\\\\"25\\\\\" bgcolor=\\\\\"#FFFFFF\\\\\" onmouseout=\\\\\"this.style.backgroundColor=\\\\''#ffffff\\\\''\\\\\" onmouseover=\\\\\"this.style.backgroundColor=\\\\''#EBF3FC\\\\''\\\\\"><div align=\\\\\"center\\\\\"><a href=\\\\\"[!--news.url--]e/member/buygroup/\\\\\">在线充�\�</a></div></td>\r\n              </tr>\r\n              <tr> \r\n                <td height=\\\\\"25\\\\\" bgcolor=\\\\\"#FFFFFF\\\\\" onmouseout=\\\\\"this.style.backgroundColor=\\\\''#ffffff\\\\''\\\\\" onmouseover=\\\\\"this.style.backgroundColor=\\\\''#EBF3FC\\\\''\\\\\"><div align=\\\\\"center\\\\\"><a href=\\\\\"[!--news.url--]e/member/card/\\\\\">点卡充�\�</a></div></td>\r\n              </tr>\r\n              <tr> \r\n                <td height=\\\\\"25\\\\\" bgcolor=\\\\\"#FFFFFF\\\\\" onmouseout=\\\\\"this.style.backgroundColor=\\\\''#ffffff\\\\''\\\\\" onmouseover=\\\\\"this.style.backgroundColor=\\\\''#EBF3FC\\\\''\\\\\"><div align=\\\\\"center\\\\\"><a href=\\\\\"#ecms\\\\\" onclick=\\\\\"window.open(\\\\''[!--news.url--]e/ShopSys/buycar/\\\\'',\\\\''\\\\'',\\\\''width=680,height=500,scrollbars=yes,resizable=yes\\\\'');\\\\\">我的购物�\�</a></div></td>\r\n              </tr>\r\n              <tr> \r\n                <td height=\\\\\"25\\\\\" bgcolor=\\\\\"#FFFFFF\\\\\" onmouseout=\\\\\"this.style.backgroundColor=\\\\''#ffffff\\\\''\\\\\" onmouseover=\\\\\"this.style.backgroundColor=\\\\''#EBF3FC\\\\''\\\\\"><div align=\\\\\"center\\\\\"><a href=\\\\\"[!--news.url--]e/ShopSys/ListDd/\\\\\">我的订单</a></div></td>\r\n              </tr>\r\n			  <tr> \r\n                <td height=\\\\\"25\\\\\" bgcolor=\\\\\"#FFFFFF\\\\\" onmouseout=\\\\\"this.style.backgroundColor=\\\\''#ffffff\\\\''\\\\\" onmouseover=\\\\\"this.style.backgroundColor=\\\\''#EBF3FC\\\\''\\\\\"><div align=\\\\\"center\\\\\"><a href=\\\\\"[!--news.url--]e/member/login/\\\\\">重新登陆</a></div></td>\r\n              </tr>\r\n              <tr> \r\n                <td height=\\\\\"25\\\\\" bgcolor=\\\\\"#FFFFFF\\\\\" onmouseout=\\\\\"this.style.backgroundColor=\\\\''#ffffff\\\\''\\\\\" onmouseover=\\\\\"this.style.backgroundColor=\\\\''#EBF3FC\\\\''\\\\\"><div align=\\\\\"center\\\\\"><a href=\\\\\"[!--news.url--]e/member/doaction.php?enews=exit\\\\\" onclick=\\\\\"return confirm(\\\\''确认要退�\�?\\\\'');\\\\\">退出登�\�</a></div></td>\r\n              </tr>\r\n            </table>\r\n			<?php\r\n			}\r\n			else	//游客显示菜单\r\n			{\r\n			?>  \r\n            <table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellpadding=\\\\\"3\\\\\" cellspacing=\\\\\"1\\\\\" class=\\\\\"tableborder\\\\\">\r\n              <tr class=\\\\\"header\\\\\"> \r\n                <td height=\\\\\"20\\\\\" bgcolor=\\\\\"#FFFFFF\\\\\"> <div align=\\\\\"center\\\\\"><strong><a href=\\\\\"[!--news.url--]e/member/cp/\\\\\">功能菜单</a></strong></div></td>\r\n              </tr>\r\n              <tr> \r\n                <td height=\\\\\"25\\\\\" bgcolor=\\\\\"#FFFFFF\\\\\" onmouseout=\\\\\"this.style.backgroundColor=\\\\''#ffffff\\\\''\\\\\" onmouseover=\\\\\"this.style.backgroundColor=\\\\''#EBF3FC\\\\''\\\\\"><div align=\\\\\"center\\\\\"><a href=\\\\\"[!--news.url--]e/member/login/\\\\\">会员登陆</a></div></td>\r\n              </tr>\r\n              <tr> \r\n                <td height=\\\\\"25\\\\\" bgcolor=\\\\\"#FFFFFF\\\\\" onmouseout=\\\\\"this.style.backgroundColor=\\\\''#ffffff\\\\''\\\\\" onmouseover=\\\\\"this.style.backgroundColor=\\\\''#EBF3FC\\\\''\\\\\"><div align=\\\\\"center\\\\\"><a href=\\\\\"[!--news.url--]e/member/register/\\\\\">注册帐号</a></div></td>\r\n              </tr>\r\n              <tr> \r\n                <td height=\\\\\"25\\\\\" bgcolor=\\\\\"#FFFFFF\\\\\" onmouseout=\\\\\"this.style.backgroundColor=\\\\''#ffffff\\\\''\\\\\" onmouseover=\\\\\"this.style.backgroundColor=\\\\''#EBF3FC\\\\''\\\\\"><div align=\\\\\"center\\\\\"><a href=\\\\\"[!--news.url--]e/DoInfo/\\\\\">发布投稿</a></div></td>\r\n              </tr>\r\n              <tr> \r\n                <td height=\\\\\"25\\\\\" bgcolor=\\\\\"#FFFFFF\\\\\" onmouseout=\\\\\"this.style.backgroundColor=\\\\''#ffffff\\\\''\\\\\" onmouseover=\\\\\"this.style.backgroundColor=\\\\''#EBF3FC\\\\''\\\\\"><div align=\\\\\"center\\\\\"><a href=\\\\\"#ecms\\\\\" onclick=\\\\\"window.open(\\\\''[!--news.url--]e/ShopSys/buycar/\\\\'',\\\\''\\\\'',\\\\''width=680,height=500,scrollbars=yes,resizable=yes\\\\'');\\\\\">我的购物�\�</a></div></td>\r\n              </tr>\r\n            </table>\r\n			<?php\r\n			}\r\n			?>\r\n			</td>\r\n          <td width=\\\\\"85%\\\\\" valign=\\\\\"top\\\\\">[!--empirenews.template--]</td>\r\n        </tr>\r\n      </table></td>\r\n</tr>\r\n</table>\r\n[!--temp.footer--]\r\n</body>\r\n</html>','<!DOCTYPE html PUBLIC \\\\\"-//W3C//DTD XHTML 1.0 Transitional//EN\\\\\" \\\\\"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\\\\\">\r\n<html xmlns=\\\\\"http://www.w3.org/1999/xhtml\\\\\">\r\n<head>\r\n<meta http-equiv=\\\\\"Content-Type\\\\\" content=\\\\\"text/html; charset=utf-8\\\\\" />\r\n<title>高级搜索 - Powered by EmpireCMS</title>\r\n<link href=\\\\\"[!--news.url--]skin/default/css/style.css\\\\\" rel=\\\\\"stylesheet\\\\\" type=\\\\\"text/css\\\\\" />\r\n<script type=\\\\\"text/javascript\\\\\" src=\\\\\"[!--news.url--]skin/default/js/tabs.js\\\\\"></script>\r\n<script src=\\\\\"[!--news.url--]e/data/images/setday.js\\\\\"></script>\r\n</head>\r\n<body class=\\\\\"listpage\\\\\">\r\n[!--temp.dtheader--]\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"10\\\\\" cellpadding=\\\\\"0\\\\\">\r\n	<tr valign=\\\\\"top\\\\\">\r\n		<td class=\\\\\"list_content\\\\\"><table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"position\\\\\">\r\n				<tr>\r\n					<td>现在的位置：[!--url--]</td>\r\n				</tr>\r\n			</table>\r\n			<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"box\\\\\">\r\n				<tr>\r\n					<td><table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\">\r\n						<tr>\r\n							<td><form action=\\\\''[!--news.url--]e/search/index.php\\\\'' method=\\\\\"post\\\\\" name=\\\\\"search_news\\\\\" id=\\\\\"search_news\\\\\">\r\n									<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\">\r\n										<tr>\r\n											<td width=\\\\\"54%\\\\\"><table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellpadding=\\\\\"6\\\\\" cellspacing=\\\\\"0\\\\\">\r\n													<tr>\r\n														<td bgcolor=\\\\\"#F4F4F4\\\\\"><strong>搜索范围</strong></td>\r\n													</tr>\r\n											</table></td>\r\n											<td width=\\\\\"46%\\\\\"><table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellpadding=\\\\\"6\\\\\" cellspacing=\\\\\"0\\\\\">\r\n													<tr>\r\n														<td bgcolor=\\\\\"#F4F4F4\\\\\"><strong>搜索栏目</strong></td>\r\n													</tr>\r\n											</table></td>\r\n										</tr>\r\n										<tr>\r\n											<td valign=\\\\\"top\\\\\"><table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellpadding=\\\\\"6\\\\\" cellspacing=\\\\\"0\\\\\">\r\n													<tr>\r\n														<td><input type=\\\\\"radio\\\\\" name=\\\\\"show\\\\\" value=\\\\\"title\\\\\" checked=\\\\\"checked\\\\\" />\r\n															标题\r\n															<input type=\\\\\"radio\\\\\" name=\\\\\"show\\\\\" value=\\\\\"smalltext\\\\\" />\r\n															简�\�\r\n															<input type=\\\\\"radio\\\\\" name=\\\\\"show\\\\\" value=\\\\\"newstext\\\\\" />\r\n															内容\r\n															<input type=\\\\\"radio\\\\\" name=\\\\\"show\\\\\" value=\\\\\"writer\\\\\" />\r\n															作�\�\r\n															<input name=\\\\\"show\\\\\" type=\\\\\"radio\\\\\" value=\\\\\"title,smalltext,newstext,writer\\\\\" />\r\n															不限</td>\r\n													</tr>\r\n												</table>\r\n													<br />\r\n													<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellpadding=\\\\\"6\\\\\" cellspacing=\\\\\"0\\\\\">\r\n														<tr bgcolor=\\\\\"#F4F4F4\\\\\">\r\n															<td><strong>时间限制</strong><font color=\\\\\"#666666\\\\\">(0000-00-00为不限制)</font></td>\r\n														</tr>\r\n														<tr>\r\n															<td height=\\\\\"30\\\\\" valign=\\\\\"top\\\\\">�\�\r\n																<input name=\\\\\"starttime\\\\\" type=\\\\\"text\\\\\" value=\\\\\"0000-00-00\\\\\" size=\\\\\"12\\\\\" onclick=\\\\\"setday(this)\\\\\" />\r\n																�\�\r\n																<input name=\\\\\"endtime\\\\\" type=\\\\\"text\\\\\" value=\\\\\"0000-00-00\\\\\" size=\\\\\"12\\\\\" onclick=\\\\\"setday(this)\\\\\" />\r\n																之间的数�\�</td>\r\n														</tr>\r\n														<tr>\r\n															<td bgcolor=\\\\\"#F4F4F4\\\\\"><strong>价格限制</strong><font color=\\\\\"#666666\\\\\">(商城模型中有�\�,0为不限制)</font></td>\r\n														</tr>\r\n														<tr>\r\n															<td>�\�\r\n																<input name=\\\\\"startprice\\\\\" type=\\\\\"text\\\\\" id=\\\\\"startprice\\\\\" value=\\\\\"0\\\\\" size=\\\\\"6\\\\\" />\r\n																�\�\r\n																<input name=\\\\\"endprice\\\\\" type=\\\\\"text\\\\\" id=\\\\\"endprice\\\\\" value=\\\\\"0\\\\\" size=\\\\\"6\\\\\" />\r\n																元之�\�</td>\r\n														</tr>\r\n												</table></td>\r\n											<td valign=\\\\\"top\\\\\"><table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"6\\\\\" cellpadding=\\\\\"0\\\\\">\r\n													<tr>\r\n														<td><select name=\\\\\"classid\\\\\" size=\\\\\"8\\\\\" id=\\\\\"select2\\\\\" style=\\\\\"width: 100%;height:112px\\\\\">\r\n																<option value=\\\\\"0\\\\\" selected=\\\\\"selected\\\\\">所有栏�\�</option>\r\n															[!--class--]\r\n          \r\n														</select></td>\r\n													</tr>\r\n												</table>\r\n													<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellpadding=\\\\\"6\\\\\" cellspacing=\\\\\"0\\\\\">\r\n														<tr>\r\n															<td bgcolor=\\\\\"#F4F4F4\\\\\"><strong>结果显示</strong></td>\r\n														</tr>\r\n														<tr>\r\n															<td height=\\\\\"30\\\\\"><select name=\\\\\"orderby\\\\\" id=\\\\\"select4\\\\\">\r\n																	<option value=\\\\\"\\\\\">按发布日�\�</option>\r\n																	<option value=\\\\\"id\\\\\">信息ID</option>\r\n																	<option value=\\\\\"plnum\\\\\">评论�\�</option>\r\n																	<option value=\\\\\"onclick\\\\\">人气</option>\r\n																	<option value=\\\\\"totaldown\\\\\">下载�\�</option>\r\n																</select>\r\n																	<select name=\\\\\"myorder\\\\\" id=\\\\\"select5\\\\\">\r\n																		<option value=\\\\\"0\\\\\">倒序排列</option>\r\n																		<option value=\\\\\"1\\\\\">顺序排列</option>\r\n																	</select>\r\n															</td>\r\n														</tr>\r\n												</table></td>\r\n										</tr>\r\n									</table>\r\n								<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellpadding=\\\\\"4\\\\\" cellspacing=\\\\\"0\\\\\">\r\n										<tr>\r\n											<td>关键字：\r\n												<input name=\\\\\"keyboard\\\\\" type=\\\\\"text\\\\\" id=\\\\\"keyboard2\\\\\" size=\\\\\"60\\\\\" />\r\n													<input type=\\\\\"submit\\\\\" name=\\\\\"Submit22\\\\\" value=\\\\\"搜索\\\\\" />\r\n											</td>\r\n										</tr>\r\n									</table>\r\n							</form></td>\r\n						</tr>\r\n					</table></td>\r\n				</tr>\r\n			</table></td>\r\n	</tr>\r\n</table>\r\n[!--temp.footer--]\r\n</body>\r\n</html>','<table border=0 cellpadding=3 cellspacing=1><form name=search_js1 method=post action=''[!--news.url--]e/search/index.php'' onsubmit=''return search_check(document.search_js1);''><tr><td><div align=center>搜索: <select name=show><option value=title>标题</option><option value=smalltext>简�\�</option><option value=newstext>内容</option><option value=writer>作�\�</option><option value=title,smalltext,newstext,writer>搜索全部</option></select><select name=classid><option value=0>所有栏�\�</option>[!--class--]</select><input name=keyboard type=text size=13><input type=submit name=Submit value=搜索></div></td></tr></form></table>','<table width=99% border=0 cellpadding=3 cellspacing=1><form name=search_js2 method=post action=''[!--news.url--]e/search/index.php'' onsubmit=''return search_check(document.search_js2);''><tr><td height=25><div align=center>关键�\�: <input name=keyboard type=text size=13></div></td></tr><tr><td><div align=center>范围: <select name=show><option value=title>标题</option><option value=smalltext>简�\�</option><option value=newstext>内容</option><option value=writer>作�\�</option><option value=title,smalltext,newstext,writer>搜索全部</option></select></div></td></tr><tr><td><div align=center>栏目:<select name=classid><option value=0>所有栏�\�</option>[!--class--]</select></div></td></tr><tr><td><div align=center><input type=submit name=Submit value=搜索></div></td></tr></form></table>','[!--empirenews.listtemp--]<li><a href=\"[!--titleurl--]\" title=\"[!--oldtitle--]\">[!--title--]</a></li>[!--empirenews.listtemp--]','[ <a href=\\\\\"#ecms\\\\\" onclick=\\\\\"window.open(\\\\''[!--down.url--]\\\\'',\\\\''\\\\'',\\\\''width=300,height=300,resizable=yes\\\\'');\\\\\">[!--down.name--]</a> ]','[ <a href=\\\\\"#ecms\\\\\" onclick=\\\\\"window.open(\\\\''[!--down.url--]\\\\'',\\\\''\\\\'',\\\\''width=300,height=300,resizable=yes\\\\'');\\\\\">[!--down.name--]</a> ]','页次：[!--thispage--]/[!--pagenum--]&nbsp;每页[!--lencord--]&nbsp;总数[!--num--]&nbsp;&nbsp;&nbsp;&nbsp;[!--pagelink--]&nbsp;&nbsp;&nbsp;&nbsp;转到:[!--options--]','<!DOCTYPE HTML>\r\n<html>\r\n<head>\r\n<meta charset=\\\\\"UTF-8\\\\\">\r\n<meta http-equiv=\\\\\"X-UA-Compatible\\\\\" content=\\\\\"IE=11,IE=10,IE=9,IE=8\\\\\">\r\n<meta name=\\\\\"viewport\\\\\" content=\\\\\"width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0\\\\\">\r\n<meta name=\\\\\"apple-mobile-web-app-title\\\\\" content=\\\\\"<?=\$public_r[sitename]?>\\\\\">\r\n<meta http-equiv=\\\\\"Cache-Control\\\\\" content=\\\\\"no-siteapp\\\\\">\r\n<link rel=\\\\''stylesheet\\\\'' id=\\\\''_common-css\\\\''  href=\\\\''/skin/ecms009/css/common.css?ver=11.1\\\\'' type=\\\\''text/css\\\\'' media=\\\\''all\\\\'' />\r\n<script type=\\\\\"text/javascript\\\\\" src=\\\\\"/e/data/js/ajax.js\\\\\"></script>\r\n<meta name=\\\\\"keywords\\\\\" content=\\\\\"[!--pagekey--]\\\\\" />\r\n<meta name=\\\\\"description\\\\\" content=\\\\\"[!--pagedes--] \\\\\" />\r\n<title>[!--pagetitle--]--<?=\$public_r[sitename]?></title>\r\n<link rel=\\\\\"shortcut icon\\\\\" href=\\\\\"/skin/ecms009/images/favicon.ico\\\\\">\r\n<link rel=\\\\\"apple-touch-icon-precomposed\\\\\" sizes=\\\\\"144x144\\\\\" href=\\\\\"/skin/ecms009/images/icon-144x144.png\\\\\">\r\n<!--[if lt IE 9]><script src=\\\\\"/skin/ecms009/js/html5.js\\\\\"></script><![endif]-->\r\n</head>\r\n<body class=\\\\\"single single-post single-format-standard\\\\\">\r\n[!--temp.header--]\r\n<section class=\\\\\"container\\\\\">\r\n  <div class=\\\\\"content-wrap\\\\\">\r\n    <div class=\\\\\"content\\\\\">\r\n      <article class=\\\\\"article-content\\\\\">\r\n\r\n\r\n      </article>\r\n     \r\n            <!-- 多说评论�\� start -->\r\n  <div class=\\\\\"ds-thread\\\\\" data-category=\\\\\"[!--classid--]\\\\\" data-thread-key=\\\\\"[!--id--]\\\\\" data-title=\\\\\"[!--title--]\\\\\"></div>\r\n<!-- 多说评论�\� end -->\r\n<!-- 多说公共JS代码 start (一个网页只需插入一�\�) -->\r\n<script type=\\\\\"text/javascript\\\\\">\r\nvar duoshuoQuery = {short_name:\\\\\"gonghaibo\\\\\"};\r\n  (function() {\r\n    var ds = document.createElement(\\\\''script\\\\'');\r\n    ds.type = \\\\''text/javascript\\\\'';ds.async = true;\r\n    ds.src = (document.location.protocol == \\\\''https:\\\\'' ? \\\\''https:\\\\'' : \\\\''http:\\\\'') + \\\\''//static.duoshuo.com/embed.js\\\\'';\r\n    ds.charset = \\\\''UTF-8\\\\'';\r\n    (document.getElementsByTagName(\\\\''head\\\\'')[0] \r\n     || document.getElementsByTagName(\\\\''body\\\\'')[0]).appendChild(ds);\r\n  })();\r\n  </script>\r\n<!-- 多说公共JS代码 end -->\r\n\r\n\r\n    </div>\r\n  </div>\r\n  [!--temp.left--]\r\n  <aside class=\\\\\"sidebar\\\\\">\r\n   <!--<div class=\\\\\"widget widget_ui_ad\\\\\">\r\n      <div class=\\\\\"item\\\\\"><script src=[!--news.url--]d/js/acmsd/thea4.js></script></div>\r\n    </div>-->\r\n    <div class=\\\\\"widget article-social\\\\\"> <a href=\\\\\"JavaScript:makeRequest(\\\\''/e/public/digg/?classid=[!--classid--]&id=[!--id--]&dotop=1&doajax=1&ajaxarea=diggnum\\\\'',\\\\''EchoReturnedText\\\\'',\\\\''GET\\\\'',\\\\''\\\\'');\\\\\" class=\\\\\"action action-like\\\\\"><i class=\\\\\"glyphicon glyphicon-thumbs-up\\\\\"></i>[!--onetext--] (<span id=\\\\\"diggnum\\\\\"><script src=[!--news.url--]e/public/ViewClick/?classid=[!--classid--]&id=[!--id--]&down=5></script></span>)</a>\r\n      <div class=\\\\\"action-share bdsharebuttonbox\\\\\"> <strong>分享到：</strong> <a class=\\\\\"bds_qzone\\\\\" data-cmd=\\\\\"qzone\\\\\"></a><a class=\\\\\"bds_tsina\\\\\" data-cmd=\\\\\"tsina\\\\\"></a><a class=\\\\\"bds_weixin bdsm\\\\\" data-cmd=\\\\\"weixin\\\\\"></a><a class=\\\\\"bds_tqq\\\\\" data-cmd=\\\\\"tqq\\\\\"></a><a class=\\\\\"bds_sqq bdsm\\\\\" data-cmd=\\\\\"sqq\\\\\"></a><a class=\\\\\"bds_renren\\\\\" data-cmd=\\\\\"renren\\\\\"></a><a class=\\\\\"bds_douban\\\\\" data-cmd=\\\\\"douban\\\\\"></a> <span class=\\\\\"bds_count\\\\\" data-cmd=\\\\\"count\\\\\"></span> </div>\r\n    </div>\r\n    <div class=\\\\\"widget widget_ui_viewposts\\\\\">\r\n      <h3 class=\\\\\"title\\\\\"><strong>热门阅读</strong></h3>\r\n      <ul class=\\\\\"posts-xs\\\\\">\r\n        [e:loop={\\\\''news\\\\'',6,19,1,\\\\''\\\\'',\\\\''onclick DESC\\\\''}]\r\n        <li class=\\\\\"item-1\\\\\"><a href=\\\\\"<?=\$bqsr[\\\\''titleurl\\\\'']?>\\\\\"><img data-src=\\\\\"<?=sys_ResizeImg(\$bqr[titlepic],240,180,1,\\\\''\\\\'')?>\\\\\" class=\\\\\"thumb\\\\\"/>\r\n          <h2><?=\$bqr[\\\\''title\\\\'']?></h2>\r\n          <p>\r\n            <time><?=date(\\\\''m-d\\\\'',\$bqr[newstime])?></time>\r\n            <span class=\\\\\"post-views\\\\\">阅读(<script src=[!--news.url--]e/public/ViewClick/?classid=<?=\$bqr[\\\\''classid\\\\'']?>&id=<?=\$bqr[\\\\''id\\\\'']?>></script>)</span></p>\r\n          </a></li>\r\n        [/e:loop]\r\n      </ul>\r\n    </div>\r\n    <div class=\\\\\"widget widget_ui_ad\\\\\">\r\n      <div class=\\\\\"item\\\\\"><script src=[!--news.url--]d/js/acmsd/thea2.js></script></div>\r\n    </div>\r\n    <div class=\\\\\"widget widget_ui_tags\\\\\">\r\n      <h3 class=\\\\\"title\\\\\"><strong>热门话题</strong></h3>\r\n      <div class=\\\\\"items\\\\\">[e:loop={\\\\\"select * from [!db.pre!]enewstags order by num DESC limit 30\\\\\",0,24,0}]\r\n        <?\r\n        echo \\\\''<a title=\\\\\"\\\\''.\$bqr[\\\\''num\\\\''].\\\\''个话题\\\\" href=\\\\\"/e/tags/?tagname=\\\\''.\$bqr[\\\\''tagname\\\\''].\\\\''\\\\\">\\\\''.\$bqr[\\\\''tagname\\\\''].\\\\''</a>\\\\'';\r\n        ?>\r\n       [/e:loop]</div>\r\n    </div>\r\n    <div class=\\\\\"widget widget_ui_posts\\\\\">\r\n      <h3 class=\\\\\"title\\\\\"><strong>特别推荐</strong></h3>\r\n      <ul class=\\\\\"posts-xs\\\\\">\r\n        [e:loop={\\\\''news\\\\'',6,20,1,\\\\''isgood>0\\\\'',\\\\''newstime DESC\\\\''}]\r\n        <li class=\\\\\"item-\\\\\"><a href=\\\\\"<?=\$bqsr[\\\\''titleurl\\\\'']?>\\\\\"><img data-src=\\\\\"<?=sys_ResizeImg(\$bqr[titlepic],240,180,1,\\\\''\\\\'')?>\\\\\" class=\\\\\"thumb\\\\\"/>\r\n          <h2><?=\$bqr[\\\\''title\\\\'']?></h2>\r\n          <p>\r\n            <time><?=date(\\\\''m-d\\\\'',\$bqr[newstime])?></time>\r\n            <span class=\\\\\"post-views\\\\\">阅读(<script src=[!--news.url--]e/public/ViewClick/?classid=<?=\$bqr[\\\\''classid\\\\'']?>&id=<?=\$bqr[\\\\''id\\\\'']?>></script>)</span></p>\r\n          </a></li>\r\n       [/e:loop]\r\n      </ul>\r\n    </div>\r\n  </aside>\r\n</section>\r\n[!--temp.footer--]\r\n<script>\r\nvar jsui={\r\n    uri: \\\\''/skin/ecms009\\\\''\r\n};\r\n</script>\r\n<!--ADD_CODE_FOOTER_START--> \r\n<script type=\\\\\"text/javascript\\\\\">\r\nvar duoshuoQuery = {short_name:\\\\\"<?=\$public_r[\\\\''add_duoshuo\\\\'']?>\\\\\"};\r\n	(function() {\r\n		var ds = document.createElement(\\\\''script\\\\'');\r\n		ds.type = \\\\''text/javascript\\\\'';ds.async = true;\r\n		ds.src = (document.location.protocol == \\\\''https:\\\\'' ? \\\\''https:\\\\'' : \\\\''http:\\\\'') + \\\\''//static.duoshuo.com/embed.js\\\\'';\r\n		ds.charset = \\\\''UTF-8\\\\'';\r\n		(document.getElementsByTagName(\\\\''head\\\\'')[0] \r\n		 || document.getElementsByTagName(\\\\''body\\\\'')[0]).appendChild(ds);\r\n	})();\r\n	</script>\r\n<?=\$public_r[\\\\''add_tongji\\\\'']?>\r\n<!--ADD_CODE_FOOTER_END--> \r\n<script type=\\\\''text/javascript\\\\'' src=\\\\''/skin/ecms009/js/one.js?ver=5.6\\\\''></script>\r\n</body>\r\n</html>','<html>\r\n<head>\r\n<meta http-equiv=\\\\\"Content-Type\\\\\" content=\\\\\"text/html; charset=utf-8\\\\\">\r\n<title>登陆</title>\r\n<LINK href=\\\\\"../../data/images/qcss.css\\\\\" rel=stylesheet>\r\n</head>\r\n<body bgcolor=\\\\\"#ededed\\\\\" topmargin=\\\\\"0\\\\\">\r\n<table border=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" width=\\\\\"100%\\\\\">\r\n  <form name=login method=post action=\\\\\"../../member/doaction.php\\\\\">\r\n    <input type=hidden name=enews value=login>\r\n    <input type=hidden name=prtype value=1>\r\n    <tr> \r\n      <td height=\\\\\"23\\\\\" align=\\\\\"center\\\\\">\r\n      <div align=\\\\\"left\\\\\">\r\n      用户名：<input name=\\\\\"username\\\\\" type=\\\\\"text\\\\\" size=\\\\\"8\\\\\">&nbsp;\r\n      密码�\�<input name=\\\\\"password\\\\\" type=\\\\\"password\\\\\" size=\\\\\"8\\\\\">\r\n      <select name=\\\\\"lifetime\\\\\" id=\\\\\"lifetime\\\\\">\r\n         <option value=\\\\\"0\\\\\">不保�\�</option>\r\n         <option value=\\\\\"3600\\\\\">一小时</option>\r\n         <option value=\\\\\"86400\\\\\">一�\�</option>\r\n         <option value=\\\\\"2592000\\\\\">一个月</option>\r\n         <option value=\\\\\"315360000\\\\\">永久</option>\r\n      </select>&nbsp;\r\n      <input type=\\\\\"submit\\\\\" name=\\\\\"Submit\\\\\" value=\\\\\"登陆\\\\\">&nbsp;\r\n      <input type=\\\\\"button\\\\\" name=\\\\\"Submit2\\\\\" value=\\\\\"注册\\\\\" onclick=\\\\\"window.open(\\\\''../register/\\\\'');\\\\\">\r\n      </div>\r\n      </td>\r\n    </tr>\r\n  </form>\r\n</table>\r\n</body>\r\n</html>\r\n[!--empirenews.template--]\r\n<html>\r\n<head>\r\n<meta http-equiv=\\\\\"Content-Type\\\\\" content=\\\\\"text/html; charset=utf-8\\\\\">\r\n<title>登陆</title>\r\n<LINK href=\\\\\"../../data/images/qcss.css\\\\\" rel=stylesheet>\r\n</head>\r\n<body bgcolor=\\\\\"#ededed\\\\\" topmargin=\\\\\"0\\\\\">\r\n<table border=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" width=\\\\\"100%\\\\\">\r\n    <tr>\r\n	<td height=\\\\\"23\\\\\" align=\\\\\"center\\\\\">\r\n	<div align=\\\\\"left\\\\\">\r\n		&raquo;&nbsp;<font color=red><b>[!--username--]</b></font>&nbsp;&nbsp;<a href=\\\\\"../my/\\\\\" target=\\\\\"_parent\\\\\">[!--groupname--]</a>&nbsp;[!--havemsg--]&nbsp;<a href=\\\\\"[!--news.url--]e/space/?userid=[!--userid--]\\\\\" target=_blank>我的空间</a>&nbsp;&nbsp;<a href=\\\\\"../msg/\\\\\" target=_blank>短信�\�</a>&nbsp;&nbsp;<a href=\\\\\"../fava/\\\\\" target=_blank>收藏�\�</a>&nbsp;&nbsp;<a href=\\\\\"../cp/\\\\\" target=\\\\\"_parent\\\\\">控制面板</a>&nbsp;&nbsp;<a href=\\\\\"../../member/doaction.php?enews=exit&prtype=9\\\\\" onclick=\\\\\"return confirm(\\\\''确认要退�\�?\\\\'');\\\\\">退�\�</a> \r\n	</div>\r\n	</td>\r\n    </tr>\r\n</table>\r\n</body>\r\n</html>','50','Y-m-d H:i:s','<!--<div class=\\\\\"user-signin\\\\\">-->\r\n<span\\\\\"><a href=\\\\\"/e/member/login/\\\\\">登录</a></span> | <span><a href=\\\\\"/e/member/register/ChangeRegister.php\\\\\">注册</a></span>\r\n</div>\r\n\r\n [!--empirenews.template--]  \r\n<div class=\\\\\"user-welcome\\\\\">\r\n			<a title=\\\\\"进入用户中心\\\\\" href=\\\\\"[!--news.url--]e/member/cp/\\\\\"><img class=\\\\\"avatar avatar-50\\\\\" src=\\\\\"<?=\$userpic?>\\\\\"></a>\r\n		</div>\r\n\r\n','<html>\r\n<head>\r\n<meta http-equiv=\\\\\"Content-Type\\\\\" content=\\\\\"text/html; charset=utf-8\\\\\">\r\n<title>[!--pagetitle--]</title>\r\n<meta name=\\\\\"keywords\\\\\" content=\\\\\"[!--pagekey--]\\\\\">\r\n<meta name=\\\\\"description\\\\\" content=\\\\\"[!--pagedes--]\\\\\">\r\n<link href=\\\\\"../../data/images/qcss.css\\\\\" rel=\\\\\"stylesheet\\\\\" type=\\\\\"text/css\\\\\">\r\n</head>\r\n<body>\r\n<br>\r\n<br>\r\n<br>\r\n<br>\r\n<table align=\\\\\"center\\\\\" width=\\\\\"100%\\\\\">\r\n  <tr> \r\n    <td height=\\\\\"32\\\\\" align=center>\r\n	<a href=\\\\\"[!--down.url--]\\\\\" title=\\\\\"[!--title--] －[!--down.name--]\\\\\">\r\n	<img src=\\\\\"../../data/images/download.jpg\\\\\" border=0>\r\n	</a>\r\n	</td>\r\n  </tr>\r\n  <tr> \r\n    <td align=center>(点击下载)</td>\r\n  </tr>\r\n</table>\r\n<br>\r\n</body>\r\n</html>','[!--empirenews.listtemp--] \r\n<li class=\\\\\"comment even thread-even depth-1\\\\\" id=\\\\\"comment-[!--plid--]\\\\\">\r\n            <div class=\\\\\"c-avatar\\\\\"><img alt=\\\\''\\\\'' data-original=\\\\''[!--news.url--]skin/ecms009/images/default.png\\\\'' class=\\\\''avatar avatar-50 photo\\\\'' height=\\\\''50\\\\'' width=\\\\''50\\\\'' /></div>\r\n            <div class=\\\\\"c-main\\\\\" id=\\\\\"div-comment-[!--plid--]\\\\\"><span class=\\\\\"c-author\\\\\"><a href=\\\\''[!--news.url--]e/space/?userid=[!--userid--]\\\\'' rel=\\\\''external nofollow\\\\'' class=\\\\''url\\\\''>[!--username--]</a></span>[!--pltext--]\r\n              <time class=\\\\\"c-time\\\\\">[!--pltime--]</time>\r\n              <a class=\\\\''comment-reply-link\\\\'' href=\\\\''#tosaypl\\\\'' onclick=\\\\''return addComment.moveForm(\\\\\"div-comment-[!--plid--]\\\\\", \\\\\"[!--plid--]\\\\\", \\\\\"respond\\\\\", \\\\\"[!--plid--]\\\\\")\\\\'' >回复</a></div>\r\n          </li>\r\n[!--empirenews.listtemp--]','<!DOCTYPE html PUBLIC \\\\\"-//W3C//DTD XHTML 1.0 Transitional//EN\\\\\" \\\\\"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\\\\\">\r\n<html xmlns=\\\\\"http://www.w3.org/1999/xhtml\\\\\">\r\n<head>\r\n<meta http-equiv=\\\\\"Content-Type\\\\\" content=\\\\\"text/html; charset=utf-8\\\\\" />\r\n<title>搜索 - Powered by EmpireCMS</title>\r\n<link href=\\\\\"[!--news.url--]skin/default/css/style.css\\\\\" rel=\\\\\"stylesheet\\\\\" type=\\\\\"text/css\\\\\" />\r\n<script type=\\\\\"text/javascript\\\\\" src=\\\\\"[!--news.url--]skin/default/js/tabs.js\\\\\"></script>\r\n<style type=\\\\\"text/css\\\\\">\r\n<!--\r\n.r {\r\ndisplay:inline;\r\nfont-weight:normal;\r\nmargin:0;\r\nfont-size:16px;\r\nmargin-top:10px;\r\n}\r\n.a{color:green}\r\n.fl{color:#77c}\r\n-->\r\n</style>\r\n</head>\r\n<body class=\\\\\"listpage\\\\\">\r\n[!--temp.dtheader--]\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"10\\\\\" cellpadding=\\\\\"0\\\\\">\r\n	<tr valign=\\\\\"top\\\\\">\r\n		<td class=\\\\\"list_content\\\\\"><table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"position\\\\\">\r\n				<tr>\r\n					<td>现在的位置：<a href=\\\\\"[!--news.url--]\\\\\">首页</a>&nbsp;>&nbsp;搜索</td>\r\n				</tr>\r\n			</table>\r\n			<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"box\\\\\">\r\n				<tr>\r\n					<td><form action=\\\\''index.php\\\\'' method=\\\\\"GET\\\\\" name=\\\\\"search_news\\\\\" id=\\\\\"search_news\\\\\">\r\n							<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"6\\\\\" cellpadding=\\\\\"0\\\\\">\r\n								<tr>\r\n									<td height=\\\\\"32\\\\\">关键字：\r\n										<input name=\\\\\"keyboard\\\\\" type=\\\\\"text\\\\\" id=\\\\\"keyboard\\\\\" value=\\\\\"[!--keyboard--]\\\\\" size=\\\\\"42\\\\\" />\r\n                    <select name=\\\\\"field\\\\\" id=\\\\\"field\\\\\">\r\n                      <option value=\\\\\"1\\\\\">全文</option>\r\n                      <option value=\\\\\"2\\\\\">标题</option>\r\n                      <option value=\\\\\"3\\\\\">内容</option>\r\n                    </select> \r\n                    <input type=\\\\\"submit\\\\\" name=\\\\\"Submit22\\\\\" value=\\\\\"搜索\\\\\" />\r\n                    <font color=\\\\\"#666666\\\\\">(多个关键字请�\�&quot;空格&quot;隔开)</font> </td>\r\n								</tr>\r\n							</table>\r\n						</form>\r\n						<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" cellspacing=\\\\\"6\\\\\">\r\n							<tr>\r\n								<td>系统搜索到约�\�<strong>[!--num--]</strong>项符�\�<strong>[!--keyboard--]</strong>的查询结�\�</td>\r\n							</tr>\r\n						</table>\r\n						[!--empirenews.listtemp--]\r\n						<h2 class=\\\\\"r\\\\\"><span>[!--no.num--].</span> <a class=\\\\\"l\\\\\" href=\\\\\"[!--titleurl--]\\\\\" target=\\\\\"_blank\\\\\">[!--title--]</a></h2>\r\n						<table width=\\\\\"80%\\\\\" border=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\">\r\n							<tbody>\r\n							<tr>\r\n								<td>[!--smalltext--]</td>\r\n							</tr>\r\n							<tr>\r\n								<td><span class=\\\\\"a\\\\\">[!--titleurl--] - [!--newstime--]</span></td>\r\n							</tr>\r\n							<tr>\r\n								<td>&nbsp;</td>\r\n							</tr>\r\n							</tbody>\r\n						</table>\r\n						[!--empirenews.listtemp--]\r\n						<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"list_page\\\\\">\r\n							<tr>\r\n								<td>[!--listpage--]</td>\r\n							</tr>\r\n						</table></td>\r\n				</tr>\r\n			</table></td>\r\n	</tr>\r\n</table>\r\n[!--temp.footer--]\r\n</body>\r\n</html>','120','Y-m-d H:i:s');");

@include("../../inc/footer.php");
?>