<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='在线充值';
$url="<a href='../../../'>首页</a>&nbsp;>&nbsp;<a href='../cp/'>会员中心</a>&nbsp;>&nbsp;在线充值";
require(ECMS_PATH.'e/template/incfile/header.php');
?>

<div class="hy_nav">
            	<ul>
                	<li><a href="/e/payapi/">在线支付</a></li>
            		<li><a href="/e/member/buygroup/"  class="selected">在线充值</a></li>
            		<li><a href="/e/member/card/">点卡充值</a></li>
                    <li><a href="/e/member/buybak/">点卡充值记录</a></li>
            		<li><a href="/e/member/downbak/">下载消费记录</a></li>
            	</ul>
            </div>

<div class="setting yh">
  <form name="payform" method="post" action="../../payapi/BuyGroupPay.php">
  <ul>
   <li>请选择要购买的充值类型：</li>
    <?
  while($r=$empire->fetch($sql))
  {
	  if($r[buygroupid]&&$level_r[$r[buygroupid]][level]>$level_r[$user[groupid]][level])
	  {
		  continue;
	  }
  ?>
    <li> <input type="radio" name="id" value="<?=$r[id]?>"> 
             
              <?=$r[gmoney]?>
              元 （ 
              <?=$r[gname]?>
              ）
            <font color="#666666">
              <?=nl2br($r[gsay])?>
              </font></li>
    <?
  }
  ?>
    <li><label>支付平台：</label>
        <SELECT name="payid" class="input_text" style="WIDTH: 120px">
          <?=$pays?>
        </SELECT></li>
    <li><input type="submit" class="button blue medium" name="Submit" value="马上充值">
        &nbsp;&nbsp; <input type="button" class="button blue medium" name="Submit2" value="返回" onclick="self.location.href='../../../';"> 
      </li>
    </ul>
  </form>
</div>
<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>