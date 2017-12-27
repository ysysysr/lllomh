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
    <input type=hidden name=enews value=login>
	<input name="tobind" type="hidden" id="tobind" value="<?=$tobind?>">
    <ul>
    <li><label>会员登录<?=$tobind?' (绑定账号)':''?></label>
    </li>
    <li><label>用户名：</label>
      <input name="username" type="text" id="username" size="30" class="input_text">
	  	<?php
		if($public_r['regacttype']==1)
		{
		?>
        &nbsp;&nbsp;<a href="../register/regsend.php" target="_blank">帐号未激活？</a>
		<?php
		}
		?>
		</li>
    <li><label>密码：</label>
      <input name="password" type="password" id="password" size="30" class="input_text">
        &nbsp;&nbsp;<a href="../GetPassword/" target="_blank">忘记密码？</a></li>
	 <li><label>保存时间：</label>
      
	  <input name=lifetime type=radio value=0 checked>
        不保存
	    <input type=radio name=lifetime value=3600>
        一小时 
        <input type=radio name=lifetime value=86400>
        一天 
        <input type=radio name=lifetime value=2592000>
        一个月
<input type=radio name=lifetime value=315360000>
        永久 </li>
    <?php
	if($public_r['loginkey_ok'])
	{
	?>
    <li><label>验证码：</label>
      <input name="key" type="text" class="input_text" id="key" size="6">
        <img src="../../ShowKey/?v=login" onclick="javascript:this.src='../../ShowKey/?v=login&tm=+Math.random();'"  style="vertical-align:middle"/> <span style="color:#666;vertical-align:bottom">  (点击图片更换)</span></li>
    <?php
	}	
	?>
    <li><input type="submit" name="Submit" class="button blue medium" value=" 登 录 ">&nbsp;&nbsp;&nbsp; <input type="button" class="button blue medium" name="button" value="马上注册" onclick="parent.location.href='../register/<?=$tobind?'?tobind=1':''?>';"></li>
    </ul>
	</form>
</div>
<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>