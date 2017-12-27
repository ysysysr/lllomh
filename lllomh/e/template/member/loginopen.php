<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='会员登录';
$url="<a href=../../../>首页</a>&nbsp;>&nbsp;<a href=../cp/>会员中心</a>&nbsp;>&nbsp;会员登录";
require(ECMS_PATH.'e/template/incfile/header.php');
?>
  <div class="setting yh">
  <form name="form1" method="post" action="../doaction.php">
    <input type=hidden name=ecmsfrom value="<?=ehtmlspecialchars($_GET['from'])?>">
    <input type=hidden name=prtype value="<?=ehtmlspecialchars($_GET['prt'])?>">
    <input type=hidden name=enews value=login>
<ul>
    <li><label>会员登陆</label></li>
    <li><label>用户名：</label><input name="username" type="text" class="input_text" id="username"></li>
    <li><label>密码：</label><input name="password" type="password" class="input_text" id="password"></li>
	 <li><label>保存：</label>
        <select name="lifetime">
          <option value="0">不保存</option>
		  <option value="3600">一小时</option>
		  <option value="86400">一天</option>
		  <option value="2592000">一个月</option>
		  <option value="315360000">永久</option>
        </select>
     </li>
    <?php
	if($public_r['loginkey_ok'])
	{
	?>
    <li><label>验证码：</label><input name="key" type="text" class="input_text" id="key" size="6">
        <img src="../../ShowKey/?v=login" onclick="javascript:this.src='../../ShowKey/?v=login&tm=+Math.random();'"  style="vertical-align:middle"/> <span style="color:#666;vertical-align:bottom">  (点击图片更换)</span></li>
    <?php
	}	
	?>
    <li><input type="submit" name="Submit" value="登陆" class="button blue medium"> <input type="button" name="button" value="注册" onclick="window.open('../register/');" class="button blue medium"></li>
</ul>
	</form>
  </div>
<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>