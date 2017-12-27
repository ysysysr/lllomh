<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']=$word;
$url="<a href='../../'>首页</a>&nbsp;>&nbsp;<a href='../member/cp/'>会员中心</a>&nbsp;>&nbsp;<a href='ListInfo.php?mid=".$mid."'>管理信息</a>&nbsp;>&nbsp;".$word."&nbsp;(".$mr[qmname].")";
require(ECMS_PATH.'e/template/incfile/header_1.php');
?>
<script>
$(function() {
	$(window).scroll(function(){
		var scroH = $(this).scrollTop();
		if(scroH>=250){
			$("#header").css({"position":""});
			} else if(scroH<250){
				$("#header").css({"position":"","box-shadow":"none"});
				}
	});
})
</script>
<div class="hy_nav tgfl yh">
            	<ul>
                	<li><a href="/e/DoInfo/ChoseClass.php" class="selected">选择投稿类别</a></li>
            		<li><a href="/e/DoInfo/ChangeClass.php?mid=<?=$mid?>" class="selected">选择子分类</a></li>
            		<li><a href="javascript:void()" class="selected"><?=$word?></a></li>
            	</ul>
</div>

<div class="setting yh">
<form name="add" method="POST" enctype="multipart/form-data" action="ecms.php" onsubmit="return EmpireCMSQInfoPostFun(document.add,'<?=$mid?>');">
<input type=hidden value=<?=$enews?> name=enews> <input type=hidden value=<?=$classid?> name=classid> 
              <input name=id type=hidden id="id" value=<?=$id?>> <input type=hidden value="<?=$filepass?>" name=filepass> 
              <input name=mid type=hidden id="mid" value=<?=$mid?>>
            	<ul>
            		<li><label>选择的栏目</label><?=$postclass?></li>
  <?php
  @include($modfile);
  ?>
  <?=$showkey?>
  <li><label></label><input type='submit' name='Submit' value='发布文章' class="button blue medium"></li>
            	</ul>
</form>
            </div>
<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>