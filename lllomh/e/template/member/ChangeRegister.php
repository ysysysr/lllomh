<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='注册会员';
$url="<a href=../../../>首页</a>&nbsp;>&nbsp;<a href=../cp/>会员中心</a>&nbsp;>&nbsp;选择注册会员类型";
require(ECMS_PATH.'e/template/incfile/header.php');
?>
<div class="setting yh">
  <form name="ChRegForm" method="GET" action="index.php">
  <input name="tobind" type="hidden" id="tobind" value="<?=$tobind?>">
              	<ul>
    <li><label>选择注册类型</label><?=$tobind?' (绑定账号)':''?></li>

		<?php
		while($r=$empire->fetch($sql))
		{
			$checked='';
			if($r[groupid]==eReturnMemberDefGroupid())
			{
				$checked=' checked';
			}
		?>
          <li>
			<input type="radio" name="groupid" value="<?=$r[groupid]?>"<?=$checked?>>
              <?=$r[groupname]?>
            </li>
		<?php
		}
		?>

    <li><input type="submit" class="button blue medium" name="button" value="下一步">
    </li>
                	</ul>
  </form>
</div>
<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>