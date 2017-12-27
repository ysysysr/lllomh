<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='好友列表';
require(ECMS_PATH.'e/template/incfile/header.php');
?>
<div class="addnews clearfix">
<form name="form1" method="post" action="">
            	<span class="fl">
                <select name="cid" id="select" class="input_select" onchange=window.location='../friend/?cid='+this.options[this.selectedIndex].value>
                  <option value="0">显示全部</option>
                  <?=$select?>
                </select></span>
                <div class="fr"><a href="FriendClass/" class="button green small">管理好友分类</a> <a href="add/?fcid=<?=$cid?>" class="button blue small">添加好友</a></div>
</form>
</div>

<div class="hytable">
<form name=favaform method=post action="../doaction.php" onsubmit="return confirm('确认要操作?');">
            <input type=hidden value=hy name=enews>
            	<table class="common-table">
							<thead><tr><th></th><th>用户名</th><th>备注</th><th nowrap="nowrap">操作</th></tr></thead>
		<?php
			while($r=$empire->fetch($sql))
			{
			?>
				<tr><td class="center"><img src="../../data/images/man.gif" width="16" height="16" border=0></td><td><a href="../ShowInfo/?username=<?=$r[fname]?>" target=_blank><?=$r[fname]?></a></td><td class="center"><input name="fsay[]" type="text" id="fsay[]" value="<?=stripSlashes($r[fsay])?>" size="32" class="input_text"></td><td class="center"><a href="add/?enews=EditFriend&fid=<?=$r[fid]?>&fcid=<?=$cid?>" class="button blue small">修改</a> <a href="../doaction.php?enews=DelFriend&fid=<?=$r[fid]?>&fcid=<?=$cid?>" onclick="return confirm('确认要删除?');" class="button orange small">删除</a></td></tr>
  <?
	}
  ?>
    <tr>
    <td colspan="4" class="noborder"> 
     <?=$returnpage?>
    </td>
  	</tr>
				</table>
</form>
 </div>
<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>