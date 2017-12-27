<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$qappname=$appr['qappname'];

$public_diyr['pagetitle']='绑定登录';
$url="位置:<a href='../../'>首页</a>&nbsp;>&nbsp;绑定登录";
$regurl=$public_r['newsurl'].'e/member/register/?tobind=1';
$loginurl=$public_r['newsurl'].'e/member/login/?tobind=1';
require(ECMS_PATH.'e/template/incfile/header.php');
//echo $qloginame;
//echo $openid;
?>
<div class="setting yh">
<ul>
  <li>您好！已通过<?=$qappname?>成功登录！</li>
  <form name="bindform" method="post" action="doaction.php">
     <li>1、如果您已有账号，可以点击下面登录绑定</li>
        <li>
            <input type="button" class="button blue medium"  name="Submit" value="马上登录绑定" onclick="window.open('<?=$loginurl?>');">
            <input name="enews" type="hidden" id="enews" value="BindUser">
          </li>
        <li>提示：捆绑成功后，下次
            <?=$qappname?>
            方式登录即可直接登录到捆绑后的账号。</li>
        </form>

    <li>2、如果还没有账号，您可以快速注册</li>
       <li>
            <input type="button" class="button blue medium"  name="Submit2" value="马上注册绑定" onclick="window.open('<?=$regurl?>');">
            <input name="enews" type="hidden" id="enews" value="BindReg">
          </li>
        <li>提示：捆绑成功后，下次
            <?=$qappname?>
            方式登录即可直接登录到捆绑后的</li>
        </form>
    
  </ul>
</div>
<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>