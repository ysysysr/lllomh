<?php
require("../../class/connect.php");
require("../../class/db_sql.php");
require("../../class/q_functions.php");
require("../../member/class/user.php");
eCheckCloseMods('member');//关闭模块
eCheckCloseMods('mconnect');//关闭模块
$link=db_connect();
$empire=new mysqlquery();
$editor=1;
eCheckCloseMemberConnect();//验证开启的接口
session_start();
require('../memberconnectfun.php');

$apptype='sina';
$appr=$empire->fetch1("select * from {$dbtbpre}enewsmember_connect_app where apptype='$apptype' and isclose=0 limit 1");
if(!$appr['id'])
{
        printerror2('请选择登录方式','../../../');
}

//应用的APPID
$app_id=$appr['appid'];

//应用的APPKEY
$app_secret=$appr['appkey'];

//成功授权后的回调地址
$ReturnUrlQz=eReturnDomainSiteUrl();
$my_url=$ReturnUrlQz."e/memberconnect/qq/loginend.php";

//----------------- 取得Token -----------------

if(!$_SESSION['state']||$_REQUEST['state']<>$_SESSION['state'])
{
        printerror2('来自的链接不存在， session 问题','../../../');
}

$code=RepPostVar($_REQUEST['code']);
//拼接URL
$token_url="https://api.weibo.com/oauth2/access_token?client_id=".$app_id."&client_secret=".$app_secret."&grant_type=authorization_code"."&redirect_uri=".urlencode($my_url)."&code=".$code;

//新浪获取token要采取POST方式，不能GET，
$postdata = array('client_id' => $app_id, 'client_secret' => $app_secret, 'grant_type' => 'authorization_code', 'redirect_uri' => $my_url, 'code' => $code);
$post_string = http_build_query($postdata, '', '&'); 
$post_string = ''; 
$opts = array(
    'http' => array(
        'method' => "POST", 
        'header' =>
        'Content-type:application/x-www-form-urlencoded\r\n' . 'User-Agent:weib\r\n' .
        "Content-length:" . strlen($post_string) . '\r\n\r\n', 
        'content' => $post_string
    )
);
$context = stream_context_create($opts);

$content = file_get_contents($token_url, false, $context);
$response=$content;
if(strpos($response,"callback")!==false)
{
        $lpos=strpos($response,"(");
        $rpos=strrpos($response,")");
        $response=substr($response,$lpos+1,$rpos-$lpos-1);
        $msg=json_decode($response);
        if(isset($msg->error))
        {
                echo"<h3>error:</h3>".$msg->error;
                echo"<h3>msg  :</h3>".$msg->error_description;
                exit();
        }
}


//----------------- 取得Openid -----------------

$params=array();
$params=json_decode($response,true);
$params['access_token']=RepPostVar($params['access_token']);
$graph_url="https://api.weibo.com/oauth2/get_token_info?access_token=".$params['access_token'];//新浪要POST
$str=@file_get_contents($graph_url,false,$context);//此处用到上面的空context
if(strpos($str,"callback")!==false)
{
        $lpos=strpos($str,"(");
        $rpos=strrpos($str,")");
        $str=substr($str,$lpos+1,$rpos-$lpos-1);
}
$user=json_decode($str);
if(isset($user->error))
{
        echo"<h3>error:</h3>".$user->error;
        echo"<h3>msg  :</h3>".$user->error_description;
        exit();
}

$openid=$user->uid;

if(!trim($openid)||!trim($apptype))
{
        printerror2('来自的链接不存在，openid和apptype问题','../../../');
}
$openid=RepPostVar($openid);
$apptype=RepPostVar($apptype);
$_SESSION['openid']=$openid;
$_SESSION['apptype']=$apptype;
$_SESSION['openidkey']=MemberConnect_GetBindKey($apptype,$openid);
//处理登录
MemberConnect_DoLogin($apptype,$openid);

db_close();
$empire=null;
?>