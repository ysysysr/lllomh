<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='绑定社区帐号';
$url="<a href=../../../>首页</a>&nbsp;>&nbsp;<a href=../cp/>会员中心</a>&nbsp;>&nbsp;修改资料";
require(ECMS_PATH.'e/template/incfile/header.php');
?>
<div class="hy_nav">
            	<ul>
                	<li><a href="/e/member/cp/">我的信息</a></li>
            		<li><a href="/e/member/EditInfo/">完善资料</a></li>
            		<li><a href="/e/member/EditInfo/EditSafeInfo.php">修改密码</a></li>
                    <li><a href="/e/memberconnect/ListBind.php" class="selected">绑定社区帐号</a></li>
            		<li><a href="/e/member/EditInfo/EditAvator.php">修改头像</a></li>
            	</ul>
</div>
        	<div class="hy_nav hd">
            	<ul>
<?php
	$Capp=$empire->query("select appname from {$dbtbpre}enewsmember_connect_app order by id Asc");
	while($app=$empire->fetch($Capp)){
?>
            		<li><a href="javascript:void()"><?=$app['appname']?></a></li>
<? } ?>
            	</ul>
            </div>
            <div class="setting yh bd">
  <?php
  while($r=$empire->fetch($sql))
  {
	  $bindr=$empire->fetch1("select id,bindtime,loginnum,lasttime from {$dbtbpre}enewsmember_connect where userid='$user[userid]' and apptype='$r[apptype]' limit 1");
	  if($bindr['id'])
	  {
		  $dourl='<a href="doaction.php?enews=DelBind&id='.$bindr['id'].'" onclick="return confirm(\'确认要解除绑定?\'); target="_blank"" class="button blue medium">解除绑定</a>';
	  }
	  else
	  {
		  $dourl='<a href="index.php?apptype='.$r['apptype'].'&ecms=1" target="_blank" class="button blue medium">立即绑定</a>';
	  }
  ?>
            	<ul>
            		<li><label>绑定</label><?=$r['appname']?></li>
            		<li><label>说明</label>绑定<?=$r['appname']?>帐号以后，你可以使用<?=$r['appname']?>帐号快速登录吾爱图库。</li>
            		<li><label>绑定时间</label><?=$bindr['bindtime']?date('Y-m-d H:i:s',$bindr['bindtime']):'--'?></li>
            		<li><label>上次登录</label><?=$bindr['lasttime']?date('Y-m-d H:i:s',$bindr['lasttime']):'--'?></li>
            		<li><label>登录次数</label><?=$bindr['loginnum']?></li>
            		<li><label>操作</label><?=$dourl?></li>
            	</ul>
  <?php
  }
  ?>       
            </div>
            <script type="text/javascript">jQuery(".hyright").slide({effect:"fold"});</script>
<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>