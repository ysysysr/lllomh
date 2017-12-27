<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='修改资料';
$url="<a href=../../../>首页</a>&nbsp;>&nbsp;<a href=../cp/>会员中心</a>&nbsp;>&nbsp;修改资料";
require(ECMS_PATH.'e/template/incfile/header.php');
?>
        	<div class="hy_nav">
            	<ul>
                	<li><a href="/e/member/cp/">我的信息</a></li>
            		<li><a href="/e/member/EditInfo/" class="selected">完善资料</a></li>
            		<li><a href="/e/member/EditInfo/EditSafeInfo.php">修改密码</a></li>
                        <li><a href="/e/memberconnect/ListBind.php">绑定社区帐号</a></li>
            		<li><a href="/e/member/EditInfo/EditAvator.php">修改头像</a></li>
            	</ul>
            </div>
            <div class="setting yh">
            <form name=userinfoform method=post enctype="multipart/form-data" action=../doaction.php>
    <input type=hidden name=enews value=EditInfo>
            	<ul>
                    <li><label>用户名</label><?=$user[username]?></li>
   <?php
	@include($formfile);
	?>
<div style="display:none">
                    <li><label></label><input name="lockBgImg[]" type="checkbox" value=""<?=strstr($addr[lockBgImg],"||")?' checked':''?>> 锁定背景图位置</li>
                    <li><label></label><input name="bgsize[]" type="checkbox" value=""<?=strstr($addr[bgsize],"||")?' checked':''?>> 背景图缩放到100%</li>
                    <li><label>背景平铺</label><select name="repeatBg" id="repeatBg"><option value="repeat-x"<?=$addr[repeatBg]=="repeat-x"?' selected':''?>>横向平铺</option><option value="repeat-y"<?=$addr[repeatBg]=="repeat-y"?' selected':''?>>纵向平铺</option><option value="repeat"<?=$addr[repeatBg]=="repeat"?' selected':''?>>全部平铺</option><option value="no-repeat"<?=$addr[repeatBg]=="no-repeat"?' selected':''?>>不重复</option></select></li>
                    <li><label>背景对齐</label><input name="Bgalign" type="radio" value="left"<?=$addr[Bgalign]=="left"?' checked':''?>> 居左 <input name="Bgalign" type="radio" value="center"<?=$addr[Bgalign]=="center"?' checked':''?>> 居中 <input name="Bgalign" type="radio" value="right"<?=$addr[Bgalign]=="right"?' checked':''?>> 居右</li>
                    <li><label>背景颜色</label><input name="bgcolor" type="color" id="bgcolor" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($addr[bgcolor]))?>" size=""></li>
</div>
            		<li><label></label><input type='submit' name='Submit' value='保存信息' class="button blue medium"></li>
            	</ul>
                </form>
            </div>
<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>