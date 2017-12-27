<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='取回密码';
$url="<a href=../../../>首页</a>&nbsp;>&nbsp;<a href=../cp/>会员中心</a>&nbsp;>&nbsp;取回密码";
require(ECMS_PATH.'e/template/incfile/header.php');
?>
<div class="setting yh">
  <form name="GetPassForm" method="POST" action="../doaction.php">
  <ul>
<div align="center"><li><label>取回密码</label></div>
   <li><label>用户名</label><td width="77%"><input name="username" type="text" id="username" size="38" class="input_text"></li>
    <li><label>邮箱</label><input name="email" type="text" id="email" size="38" class="input_text"></li>
    <li><label>验证码</label><input name="key" type="text" id="key" size="6" class="input_text"> <img src="../../ShowKey/?v=getpassword"></li>
    <li><input type="submit" class="button blue medium" name="button" value="提交"> <input name="enews" type="hidden" id="enews" value="SendPassword"></li>
    </ul>
  </form>
</div>
<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>