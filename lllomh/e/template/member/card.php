<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='点卡充值';
$url="<a href=../../../>首页</a>&nbsp;>&nbsp;<a href=../cp/>会员中心</a>&nbsp;>&nbsp;点卡充值";
require(ECMS_PATH.'e/template/incfile/header.php');
?>
<script>
function GetFen1()
{
var ok;
ok=confirm("确认要充值?");
if(ok)
{
document.GetFen.Submit.disabled=true
return true;
}
else
{return false;}
}
</script>
<br>

<div class="hy_nav">
            	<ul>
                	<li><a href="/e/payapi/">在线支付</a></li>
            		<li><a href="/e/member/buygroup/">在线充值</a></li>
            		<li><a href="/e/member/card/"   class="selected">点卡充值</a></li>
                    <li><a href="/e/member/buybak/">点卡充值记录</a></li>
            		<li><a href="/e/member/downbak/">下载消费记录</a></li>
            	</ul>
            </div>

<div class="setting yh">
  <form name=GetFen method=post action=../doaction.php onsubmit="return GetFen1();">
    <input type=hidden name=enews value=CardGetFen>
    <ul>
    <li><label>点卡冲值</label></li>
    <li><label>冲值的用户名：</label><input name="username" class="input_text" type="text" id="username" value="<?=$user[username]?>">
        *</li>
    <li><label>重复用户名：</label><input name="reusername" class="input_text" type="text" id="reusername" value="<?=$user[username]?>">
        *</li>
    <li><label>冲值卡号：</label><input name="card_no" class="input_text" type="text" id="card_no">
        *</li>
    <li><label>冲值卡密码：</label><input name="password" class="input_text" type="password" id="password">
        *</li>
    <li><input type="submit" name="Submit" class="button blue medium" value="开始冲值"> &nbsp; 
        <input type="reset" name="Submit2" class="button blue medium" value="重置"></li>
    <li>说明：带*的为必填项。</li>
    </ul>
  </form>
</div>
<br>
<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>