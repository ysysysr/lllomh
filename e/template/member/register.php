<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='注册会员';
$url="<a href=../../../>首页</a>&nbsp;>&nbsp;<a href=../cp/>会员中心</a>&nbsp;>&nbsp;注册会员";
require(ECMS_PATH.'e/template/incfile/header.php');
?>
<div class="setting yh">
  <form name=userinfoform method=post enctype="multipart/form-data" action=../doaction.php>
    <input type=hidden name=enews value=register>
    <ul>
    <li><label>注册会员</label><?=$tobind?' (绑定账号)':''?></li>
    <li>基本信息--必须填写 
        <input name="groupid" type="hidden" id="groupid" value="<?=$groupid?>">
        <input name="tobind" type="hidden" id="tobind" value="<?=$tobind?>">
    </li>
    <li><label>用户名</label><input name='username' type='text' id='username' maxlength='30' class="input_text">
        *</li>
    <li><label>密码</label><input name='password' type='password' id='password' maxlength='20' class="input_text">
        *</li>
    <li><label>重复密码</label><input name='repassword' type='password' id='repassword' maxlength='20' class="input_text">
        *</li>
    <li><label>邮箱</label><input name='email' type='text' id='email' maxlength='50' class="input_text">
        *</li>
    <li>其他信息--选择填写</li>
    <?php
	@include($formfile);
	?>
    
	<?
	if($public_r['regkey_ok'])
	{
	?>
    <li><label>验证码：</label><input name="key" type="text" class="input_text" id="key" size="6"><img src="../../ShowKey/?v=reg" onclick="javascript:this.src='../../ShowKey/?v=reg&tm=+Math.random();'"  style="vertical-align:middle"/> <span style="color:#666;vertical-align:bottom">  (点击图片更换)</span></li>
	<?
	}	
	?>
    <li><input type='submit' name='Submit' value='马上注册' class="button blue medium"> 
        &nbsp;&nbsp; <input type='button' name='Submit2' value='返回' class="button blue medium" onclick='history.go(-1)'>
    </li>
    <li>说明：带*项为必填。</li>
    
    </ul>
  </form>
  </div>

<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>