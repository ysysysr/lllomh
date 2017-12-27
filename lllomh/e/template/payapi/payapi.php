<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='在线支付';
$url="<a href='../../'>首页</a>&nbsp;>&nbsp;<a href=../member/cp/>会员中心</a>&nbsp;>&nbsp;在线支付";
require(ECMS_PATH.'e/template/incfile/header.php');
?>

<div class="hy_nav">
            	<ul>
                	<li><a href="/e/payapi/" class="selected">在线支付</a></li>
            		<li><a href="/e/member/buygroup/">在线充值</a></li>
            		<li><a href="/e/member/card/">点卡充值</a></li>
                    <li><a href="/e/member/buybak/">点卡充值记录</a></li>
            		<li><a href="/e/member/downbak/">下载消费记录</a></li>
            	</ul>
            </div>

<script>
function ChangeShowBuyFen(amount){
	var fen;
	fen=Math.floor(amount)*<?=$pr[paymoneytofen]?>;
	document.getElementById("showbuyfen").innerHTML=fen+" 点";
}
</script>
<form name="paytofenform" method="post" action="pay.php">
  <table width="500" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
  <div class="setting yh">
  <ul>
    <li><label>购买点数：</label> 
      <input type="hidden" name="phome" value="PayToFen"></li>
    <li><label>购买金额：</label>
      <input name="money" type="text" class="input_text" value="" size="8" onChange="ChangeShowBuyFen(document.paytofenform.money.value);">
        元 <font color="#333333">( 1元 = 
        <?=$pr[paymoneytofen]?>
        点数)</font></li>
    <li><label>购买点数：</label> <span id="showbuyfen"> 0 点</span></li>
   <li><label>支付平台：</label><SELECT name="payid" class="input_text" style="WIDTH: 120px"><?=$pays?></SELECT></li>
    <li><input type="submit" class="button blue medium" name="Submit" value="确定购买"></li>
    </ul>
    </div>
  </table>
</form>
<div class="setting yh">
  
<form name="paytomoneyform" method="post" action="pay.php">
  <ul>
    <li><label>存预付款：</label> 
      <input name="phome" type="hidden" class="input_text" id="phome" value="PayToMoney"></li>
    <li><label>金额：</label><input name="money" class="input_text" type="text" value="" size="8">
        元</li>
    <li><label>支付平台：</label><SELECT name="payid" class="input_text" style="WIDTH: 120px">
          <?=$pays?>
        </SELECT></li>
    
    <li><input type="submit" name="Submit3" class="button blue medium" value="确定支付"></li>
</ul>
</form>
  </div>
<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>