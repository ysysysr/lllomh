//初学JQ 多多包涵
$(function() {
    yechaInit();
    superslide();
    tongji();
    subview();
});
function yechaInit() {
	//$(".lazy").lazyload({effect:"fadeIn"}); 
	$(".avator").mouseover(function(){$("a.editavator").show();}).mouseout(function(){$("a.editavator").hide();});
	$(".tjtab").click (function(){$(".allplbox").fadeToggle();$(".tjbox").fadeToggle();$("a.tjtab").toggleClass("selected");$("a.pltab").toggleClass("selected")});
	$(".pltab").click (function(){$(".allplbox").fadeToggle();$(".tjbox").fadeToggle();$("a.tjtab").toggleClass("selected");$("a.pltab").toggleClass("selected")});
	$("abbr.time").timeago();
	$('.main a').tipsy({gravity: $.fn.tipsy.S});
	$(".searchbox").mouseover(function(){$(".chooseS").show();}).mouseout(function(){$('.chooseS').hide();});
	$(".renqi").mouseover(function(){$(".rqmore").show();}).mouseout(function(){$(".rqmore").hide();});
	$(".sctip").mouseover(function(){$(".sctishi").show();}).mouseout(function(){$(".sctishi").hide();});
	$(".jubao").click(function(){$(".pingfen").slideToggle();});
	$(".closepf").click(function(){$(".pingfen").slideUp();});
	$(".myhome").mouseover(function(){$(".myhome ul").show();$(".myhome > a").css("background-color","#036CB4");}).mouseout(function(){$(".myhome ul").hide();$(".myhome > a").css("background-color","");});
	$(".mymsg").mouseover(function(){$(".mymsg ul").show();$(".mymsg > a").css("background-color","#036CB4");}).mouseout(function(){$(".mymsg ul").hide();$(".mymsg > a").css("background-color","");});
	$(".fabu").mouseover(function(){$(".fabu ul").show();$(".fabu > a").css("background-color","#036CB4");}).mouseout(function(){$(".fabu ul").hide();$(".fabu > a").css("background-color","");});
	$(".myavator").mouseover(function(){$(".myavator ul").show();$(".myavator > a").css("background-color","#036CB4");}).mouseout(function(){$(".myavator ul").hide();$(".myavator > a").css("background-color","");});
	$(".dingzhi").mouseover(function(){$(".dingzhi ul").show();}).mouseout(function(){$(".dingzhi ul").hide();});
	$(".xiala_1").mouseover(function(){$(".xiala_1 ul").show();}).mouseout(function(){$(".xiala_1 ul").hide();});
	$(".xiala_2").mouseover(function(){$(".xiala_2 ul").show();}).mouseout(function(){$(".xiala_2 ul").hide();});
	$(".xiala_3").mouseover(function(){$(".xiala_3 ul").show();}).mouseout(function(){$(".xiala_3 ul").hide();});
	$(".xiala_4").mouseover(function(){$(".xiala_4 ul").show();}).mouseout(function(){$(".xiala_4 ul").hide();});
	$(".xiala_5").mouseover(function(){$(".xiala_5 ul").show();}).mouseout(function(){$(".xiala_5 ul").hide();});
	$(".bdfx").click(function(){$(".baidufx").slideToggle();});
	$(".plbox #saytext").click(function(){$("#repid").val("0");});
	$(".indexMsg").load("/gg.php");
	var color_a = $(".zpfl a");
		 color_a.each(function(){
			 var x = 9;
			 var y = 0;
			 var rand = parseInt(Math.random() * (x - y + 1) + y);
			 $(this).addClass("color"+rand);
	});
	$(window).scroll(function(){
		var scroH = $(this).scrollTop();
		if(scroH>=250){
			$("#header").css({"position":"fixed","top":0,"box-shadow":"0 0 25px #1962A2"});
			} else if(scroH<250){
				$("#header").css({"position":"","box-shadow":"none"});
				}
	});
}

function superslide(){
	$(".slider .bd li").first().before(jQuery(".slider .bd li").last());
	$(".slider").hover(function() {jQuery(this).find(".arrow").stop(true, true).fadeIn(300)},function() {jQuery(this).find(".arrow").fadeOut(300)});
    $(".slider").slide({titCell: ".hd ul",mainCell: ".bd ul",effect: "leftLoop",autoPlay: true,vis: 3,autoPage: true,trigger: "click"});
	$(".gonggao").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"topLoop",autoPlay:true,vis:5}); 
}

function addfav(classid,id){
	art.dialog.open('/e/member/fava/add/sc.php?classid='+classid+'&id='+id,
    {title: '加入收藏夹',lock: true,opacity: 0.5, width: 400, height:190,fixed:true})
}


//增加评论
function addPl(){
	var username,saytext,id,classid,enews,repid,url;
	username=$("#username").val();
	id=$("#id").val();
	classid=$("#classid").val();
	enews=$("#enews").val();
	repid=$("#repid").val();
	saytext=$("#saytext").val();
	if (repid!='0'){
	username=$("#username").val();
	id=$("#replyComment"+repid+" #id").val();
	classid=$("#replyComment"+repid+" #classid").val();
	enews=$("#replyComment"+repid+" #enews").val();
	repid=$("#replyComment"+repid+" #repid").val();
	saytext=$("#replyComment"+repid+" #saytext").val();
	}
	if (saytext==""){
		jError("请说一些你的看法吧!",{HorizontalPosition : 'center',VerticalPosition:'center'});document.getElementById("saytext").focus();return false;
		}
	$.post("/e/pl/ajaxpl.php",
		{
			username:username,
			id:id,
			classid:classid,
			enews:enews,
			repid:repid,
			saytext:saytext
		},
		function(data,status){
			 switch(data){
				  case"FailPassword":art.dialog.open('/register/ajaxlogin.php',
    {title: '会员登陆',lock: true,opacity: 0.2, width: 690, height:305,fixed:true,close: function () {
		$(".login").load("/e/member/login/ajaxlogin.php");
    }
	});
				  break;
				  case"NotCheckedUser":jError("您的帐号还没通过审核!请通过帐号验证后再进行评论!",{HorizontalPosition : 'center',VerticalPosition:'center'});
				  break;
				  case"GuestNotToPl":art.dialog.open('/register/ajaxlogin.php',
    {title: '会员登陆',lock: true,opacity: 0.2, width: 690, height:305,fixed:true,close: function () {
		$(".login").load("/e/member/login/ajaxlogin.php");
    }
	});
				  break;
				  case"NotLevelToPl":jError("您所在的会员组不能发表评论!",{HorizontalPosition : 'center',VerticalPosition:'center'});
				  break;
				  case"EmptyPl":jError("您没有什么话可说的吗?",{HorizontalPosition : 'center',VerticalPosition:'center'});
				  break;
				  case"ErrorUrl":jError("评论提交异常,请检查来源!",{HorizontalPosition : 'center',VerticalPosition:'center'});
				  break;
				  case"CloseClassPl":jError("此栏目已关闭评论功能!",{HorizontalPosition : 'center',VerticalPosition:'center'});
				  break;
				  case"HavePlCloseWords":jError("有非法字符,无法评论!",{HorizontalPosition : 'center',VerticalPosition:'center'});
				  break;
				  case"CloseInfoPl":jError("此信息已关闭评论!",{HorizontalPosition : 'center',VerticalPosition:'center'});
				  break;
				  case"PlSizeTobig":jError("您的评论内容过长，请精简一下吧!",{HorizontalPosition : 'center',VerticalPosition:'center'});
				  break;
				  case"PlOutTime":jError("您发表评论太快了,请稍后发表!",{HorizontalPosition : 'center',VerticalPosition:'center'});
				  break;
				  case"DbError":jError("网站数据库出错,请联系管理员解决!",{HorizontalPosition : 'center',VerticalPosition:'center'});
				  break;
				  case"AddPlSuccess":jSuccess("评论发表成功,感谢您的参与!",{HorizontalPosition : 'center',VerticalPosition:'center',onClosed : function(){
					  $("#infocommentarea").load("/e/extend/infocomment/index.php?classid="+classid+"&id="+id);
					  $("abbr.plnum").text(parseInt($(".pltab abbr.plnum").text())+1);
					   document.getElementById("saytext").value="";
		  				}
						})
				  break;
				 }
			}
		)
}
//回复评论
function replyComment(plid){
	$("#repid").val(plid);
	$(".replyComment").slideUp();
	$("#replyComment"+plid).slideToggle();
}
function closepl(plid){
	$("#replyComment"+plid).slideUp();
}
//增加表情
function addface(){
	$(".face").load("/e/extend/face/index.php");
	$(".plsub span .face").toggle()
}
//选择好友
function chosefri(){
	art.dialog.open('/e/member/friend/change/chosefri.php?fm=sendmsg&f=to_username',
    {title: '选择好友',lock: true,opacity: 0.5, width: 400, fixed:true})
}
//ajax登陆
function login(){
	art.dialog.open('/register/ajaxlogin.php',
    {id:'loginbox1',title: '会员登陆',lock: true,opacity: 0.2, width: 690, height:305,fixed:true,close: function () {
		$(".login").load("/e/member/login/ajaxlogin.php");
    }
	})
}
//下载
function dlfile(classid,id){
	art.dialog.open("/e/DownSys/DownSoft/?classid="+classid+"&id="+id+"&pathid=0",{title: '下载素材',lock: true,opacity: 0.2, width: 520, height:300,fixed:true})
}
//增加评论
function logincheck(){
	var username,password,ecmsfrom,lifetime;
	username=$("#username").val();
	password=$("#password").val();
	ecmsfrom=$("#ecmsfrom").val();
	lifetime=0;
	if ($("#autocheckbox").is(":checked")){
		lifetime=$("#autocheckbox").val();
		}
	if (username==""){
		jError("用户名不能为空哦!",{HorizontalPosition : 'center',VerticalPosition:'center'});document.getElementById("username").focus();return false;
		}
	if (password==""){
		jError("密码不能为空哦!",{HorizontalPosition : 'center',VerticalPosition:'center'});document.getElementById("password").focus();return false;
		}
	$.post("/e/member/doaction.php",
		{
			username:username,
			password:password,
			lifetime:lifetime,
			enews:"Ajaxlogin",
			tobind:"0"
		},
		function(data,status){
			 switch(data){
				 case"EmptyLogin":jError("用户名和密码不能为空",{HorizontalPosition : 'center',VerticalPosition:'center'});
				 break;
				 case"FailPassword":jError("您的用户名密码有误?",{HorizontalPosition : 'center',VerticalPosition:'center'});
				 break;
				 case"NotCheckedUser":jError("您的帐号还未通过审核!",{HorizontalPosition : 'center',VerticalPosition:'center'});
				 break;
				 case"NotCookie":jError("登录不成功，请确认您的cookie是否已开启!",{HorizontalPosition : 'center',VerticalPosition:'center'});
				 break;
				 case"LoginSuccess":jSuccess("登陆成功,页面跳转中..请稍后",{HorizontalPosition : 'center',VerticalPosition:'center',onClosed : function(){art.dialog.close();}})
				 break;
			 }
			}
		)
}
//Feed相关
function follow(userid){
	$.post("/e/extend/feed/index.php",
		{
			followid:userid
		},
		function(data,status){
			 switch(data){
				 case"DelSuccess":jError("取消关注成功!",{HorizontalPosition : 'center',VerticalPosition:'center',onClosed : function(){
					 $("#follow"+userid).text("关注");
					 $("#follow"+userid).removeClass("orange");
					 }});
				 break;
				 case"unknowerror":jError("发生未知错误,请联系管理员!",{HorizontalPosition : 'center',VerticalPosition:'center'});
				 break;
				 case"nofollowme":jError("不能关注自己哦!",{HorizontalPosition : 'center',VerticalPosition:'center'});
				 break;
				 case"AddSuccess":jSuccess("关注成功!",{HorizontalPosition : 'center',VerticalPosition:'center',onClosed : function(){
					 $("#follow"+userid).text("取消关注");
					 $("#follow"+userid).addClass("orange");
					 }})
				 break;
				 case"Pleaselogin":art.dialog.open('/register/ajaxlogin.php',
    {title: '会员登陆',lock: true,opacity: 0.2, width: 690, height:305,fixed:true,close: function () {
		$(".login").load("/e/member/login/ajaxlogin.php");
    }
	});
				  break;
			 }
			}
		)
}
function xingyun(){
	$(".xingyun").toggleClass("yanshi");
	$(".hymain").toggleClass("hyindex");
}
//异步加载统计点击率等
function tongji(){
var viewnum = $(".main #redu");
		viewnum.each(function(){
			 $(this).load("/e/public/ViewClick/ajaxtj.php?classid="+$(this).attr("classid")+"&id="+$(this).attr("newsid"));
});
var addviewnum = $(".main #addredu");
		addviewnum.each(function(){
			 $(this).load("/e/public/ViewClick/ajaxtj.php?classid="+$(this).attr("classid")+"&id="+$(this).attr("newsid")+"&addclick=1");
});
var plnum = $(".main #plnum");
		plnum.each(function(){
			 $(this).load("/e/public/ViewClick/ajaxtj.php?classid="+$(this).attr("classid")+"&id="+$(this).attr("newsid")+"&down=2");
});
var tjnum = $(".main #tjnum");
		tjnum.each(function(){
			 $(this).load("/e/public/ViewClick/ajaxtj.php?classid="+$(this).attr("classid")+"&id="+$(this).attr("newsid")+"&down=5");
});
var favnum = $(".main #favnum");
		favnum.each(function(){
			 $(this).load("/e/public/ViewClick/ajaxtj.php?classid="+$(this).attr("classid")+"&id="+$(this).attr("newsid")+"&down=8");
});
var downloadnum = $(".main #downloadnum");
		downloadnum.each(function(){
			 $(this).load("/e/public/ViewClick/ajaxtj.php?classid="+$(this).attr("classid")+"&id="+$(this).attr("newsid")+"&down=1");
});
}
//分享到QQ微博
function qqfx(classid,id){
  var src = $(this).attr('href');
  $.post("/e/memberconnect/qq/share.php",
		{
			classid:classid,
			id:id
		},
  function(data,status){
    window.location=src
  });
return false;
}
//在线生成预览地址
function subview(){
  $("#subview").click(
  function(){
    var file=$("#file_upload-queue input").attr("value");
    if (!file){
      jError("您还未上传文件!请先上传好后再生成预览地址",{HorizontalPosition : 'center',VerticalPosition:'center'})
    } else {
      var index1=file.lastIndexOf(".");
      var index2=file.length;
      var type=file.substring(index1,index2);
      if (type!=".zip"){
        jError("只有Zip格式文件才可以进行在线生成预览哦!",{HorizontalPosition : 'center',VerticalPosition:'center'});
      } else{
		$.post("/e/extend/unzip/",
			  {
				  fileurl:file
			  },
		function(data,status){
			if(data=="nologin"){
				art.dialog.open('/register/ajaxlogin.php',
				{title: '会员登陆',lock: true,opacity: 0.2, width: 690, height:305,fixed:true,close: function () {
				$(".login").load("/e/member/login/ajaxlogin.php");
				}
				});
			} else if (data=="typeerror"){
				jError("不是Zip格式,无法生成在线预览!",{HorizontalPosition : 'center',VerticalPosition:'center'});
			} else if (data=="noopen"){
				jError("无法打开文件,请检查文件是否有误!",{HorizontalPosition : 'center',VerticalPosition:'center'});
			} else {
				$("#view").val(data);
				$("#subview").css("display","none");
				$("#subview").attr("onclick","javascript:window.location.href="+data);
				$("#subview").val("点击预览");
				$("#subview").attr("id","");
			}
		});
  }}}
)}