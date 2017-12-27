<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='选择子分类';
require(ECMS_PATH.'e/template/incfile/header.php');
?>
<div class="hy_nav tgfl yh">
            	<ul>
                	<li><a href="/e/DoInfo/ChoseClass.php" class="selected">选择投稿类别</a></li>
            		<li><a href="javascript:void()" class="selected">选择子分类</a></li>
            		<li><a href="javascript:void()">发布内容</a></li>
            	</ul>
</div>

<div class="setting yh">
<form action="AddInfo.php" method="get" name="changeclass" id="changeclass" onsubmit="return CheckChangeClass();">
<input name="mid" type="hidden" id="mid" value="<?=$mid?>">
<input name="enews" type="hidden" id="enews" value="MAddInfo">
            	<ul>
            		<li><label>请选择子栏目</label></li>
                    <li><label></label><select name=classid size="22" style="width:300px">
                <script src="<?=$classjs?>"></script>
              </select></li>
					<li><label></label><input type='submit' name='Submit' value='确定选择' class="button blue medium"></li>
            	</ul>
</form>
            </div>
<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>