<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='会员中心';
$url="<a href=../../../>首页</a>&nbsp;>&nbsp;<a href=../cp/>会员中心</a>";
require(ECMS_PATH.'e/template/incfile/header.php');
?>
        	<div class="hy_nav">
            	<ul>
                	<li><a href="/e/member/cp/" class="selected">我的信息</a></li>
            		<li><a href="/e/member/EditInfo/">完善资料</a></li>
            		<li><a href="/e/member/EditInfo/EditSafeInfo.php">修改密码</a></li>
                    <li><a href="/e/memberconnect/ListBind.php">绑定社区帐号</a></li>
            		<li><a href="/e/member/EditInfo/EditAvator.php">修改头像</a></li>
            	</ul>
            </div>
            <div class="setting yh">
            	<ul>
            		<li><label>用户ID</label><?=$user[userid]?></li>
                    <li><label>用户名</label><?=$user[username]?> (<a href="../../space/?userid=<?=$user[userid]?>" target="_blank">我的会员空间</a>)</li>
            		<li><label>注册时间</label><?=$registertime?></li>
            		<li><label>会员等级</label><?=$level_r[$r[groupid]][groupname]?></li>
            		<li><label>剩余点数</label><?=$r[userfen]?> 点</li>
            		<li><label>帐户余额</label><?=$r[money]?> 元</li>
                    <li><label>新消息</label><?=$havemsg?></li>
            	</ul>
            </div>
<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>