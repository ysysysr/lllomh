<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
session_start();

//------------------ 参数开始 ------------------

//应用的APPID
$app_id=$appr['appid'];

//应用的APPKEY
$app_secret=$appr['appkey'];

//成功授权后的回调地址
$my_url=$ReturnUrlQz."e/memberconnect/sina/loginend.php";
//------------------ 参数结束 ------------------

//state参数用于防止CSRF攻击，成功授权后回调时会原样带回
$_SESSION['state']=md5(uniqid(rand(),TRUE));
//拼接URL
$gotologinurl="https://api.weibo.com/oauth2/authorize?client_id=".$app_id."&response_type=code&redirect_uri=".urlencode($my_url)."&state=".$_SESSION['state'];
?>
<html>
<title>新浪微博登录</title>
<meta http-equiv="Cache-Control" content="no-cache"/>
<body>
<script>
top.location.href='<?=$gotologinurl?>';
</script>
</body>
</html>