
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>注册会员</title>
<link href="/yecha/Common.css" rel="stylesheet" type="text/css" />
<link href="/yecha/button.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/js/SuperSlide.js"></script>
<script type="text/javascript" src="/js/jRating.jquery.min.js"></script>
<script type="text/javascript" src="/js/jquery.timeago.js"></script>
<script type="text/javascript" src="/js/jquery.lazyload.min.js"></script>
<script type="text/javascript" src="/js/jNotify.jquery.min.js"></script>
<script type="text/javascript" src="/js/artDialog.js"></script>
<script type="text/javascript" src="/js/iframeTools.js"></script>
<script type="text/javascript" src="/js/cookies.js"></script>
<script type="text/javascript" src="/js/52img.js"></script>
<style>
body { background: #fff; overflow: hidden; }
.loginbox input{ border:0;}
</style>
<script type="application/javascript">
$(
  function(){
    $(".qq").click(
      function(){
        $.cookie("curl",window.parent.location,{path:'/'});
        window.parent.location.href ="/e/memberconnect/?apptype=qq";
      }
);
  }
)
	function closetc(){
		art.dialog.close();
		}
 function qqlogin()
 {
art.dialog.open('/e/memberconnect/?apptype=qq',
    {title: 'QQ登录',width: 320, height: 400});
 }
</script>
<body>
<div class="loginbox yh" style="display:block;">
  <div class="external">
    <p class="title">使用合作账号登录<span>(推荐)</span></p>
    <ul>
      <li><a href="/e/memberconnect/?apptype=sina" class="weibo" hidefocus="">微博帐号</a></li>
      <li><a href="javascript:void();" class="qq" target="_blank">QQ帐号</a></li>
      <!--<li><a href="javascript:void()" class="renren" hidefocus="" onclick="closef()">人人账号</a></li>
      <li><a href="javascript:void()" class="baidu" hidefocus="">百度帐号</a></li>-->
    </ul>
    <p class="text">快捷登录，无需注册</p>
    <p class="text">与你的朋友分享你的资源！</p>
  </div>
  <div class="site">
    <p class="title">本站账号登录</p>
    <p class="errorinfo">错误信息提示</p>
        	<form name="form1" method="post" onsubmit="logincheck();return false;">
    		<input type=hidden name=ecmsfrom id="ecmsfrom" value="">
			<input type=hidden name=enews value=Ajaxlogin>
            <input name="tobind" type="hidden" id="tobind" value="0">
      <div class="email focuss">
        <input type="text" name="username" id="username" placeholder="请输入您的会员帐号">
      </div>
      <div class="password">
        <input type="password" name="password" class="pwd" id="password" placeholder="请输入密码">
      </div>
      <div>
        <p class="autologin">
          <input type="checkbox" id="autocheckbox" name="lifetime" checked="" hidefocus="" value="315360000" tabindex="3">
          <label for="autocheckbox">下次自动登录</label>
        </p>
        <a class="forgot" href="javascript:void()" target="_blank" hidefocus="">忘记密码</a></div>
      <div>
        <input class="submit" type="submit" onclick="logincheck();">
        <p class="reg">还没有本站账号？<a href="/e/member/register/" target="_blank" hidefocus="">立即注册！</a></p>
      </div>
    </form>
  </div>
</div>
</body>
</html>
