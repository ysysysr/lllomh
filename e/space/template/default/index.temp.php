<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
//位置
$url="$spacename &gt; 首页";
include("header.temp.php");
$registertime=eReturnMemberRegtime($ur['registertime'],"Y-m-d H:i:s");
//oicq
if($addur['oicq'])
{
	$addur['oicq']="<a href='http://wpa.qq.com/msgrd?V=1&amp;Uin=".$addur['oicq']."&amp;Site=".$public_r['sitename']."&amp;Menu=yes' target='_blank'><img src='http://wpa.qq.com/pa?p=1:".$addur['oicq'].":4'  border='0' alt='QQ' />".$addur['oicq']."</a>";
}
//简介
$usersay=$addur['saytext']?$addur['saytext']:'暂无简介';
$usersay=RepFieldtextNbsp(stripSlashes($usersay));
?>
<div class="hyfeed">
        	<h3>动态</h3>
            <div class="hyfeedleft yh">
            	<h4><?=$me?>关注的库友</h4>
                <ul class="feedgz">
                <?php
//关注的人
$i=0;
$total=$feedusernum;
if ($total>8){
	$total=8;
}
if ($total==0){
	echo '<div class="nogz">暂时还没有关注的人</div>';
}
while($i<$total){
	$gz=$empire->fetch1("select * from {$dbtbpre}enewsmember where userid='$feeduserid[$i]' limit 1");
	$gzxx=$empire->fetch1("select * from {$dbtbpre}enewsmemberadd where userid='$feeduserid[$i]' limit 1");
	$gzxxpic=$gzxx['userpic']?$gzxx['userpic']:$public_r[newsurl].'e/data/images/nouserpic.gif';
	echo '<li><a href="/e/space/?userid='.$feeduserid[$i].'"><img src="'.$gzxxpic.'" /><span>'.$gz[username].'</span></a></li>';
	$i++;
}
				?>
                </ul>
                <h4><?=$me?>的Fans</h4>
                <ul class="feedgz">
<?php
$flsql=$empire->query("select feeduserid,userid from {$dbtbpre}enewsmemberadd order by userid"); 
$fansnum=0;
while($b=$empire->fetch($flsql))
{	
	$fansid=explode("::::::",$b['feeduserid']);
	$i=1;
	if ($i<=8){
		if (in_array($userid,$fansid)){
		$fans=$empire->fetch1("select * from {$dbtbpre}enewsmemberadd where userid='$b[userid]' limit 1");
		$fansxx=$empire->fetch1("select * from {$dbtbpre}enewsmember where userid='$b[userid]' limit 1");
		$fanspic=$fans['userpic']?$fans['userpic']:$public_r[newsurl].'e/data/images/nouserpic.gif';
		echo '<li><a href="/e/space/?userid='.$b[userid].'"><img src="'.$fanspic.'" /><span>'.$fansxx[username].'</span></a></li>';
		$i++;
		$fansnum=1;
		}
	} else {
	exit();	
	}
}
	if ($fansnum==0){
		echo '<div class="nogz">暂时还没有'.$me.'的Fans</div>';
		}
?>

                </ul>
                <h4><a href="/e/space/gbook.php?userid=<?=$userid?>">更多</a>留言板</h4>
                <div class="feedwritely">
      <form name="addgbook" method="post" action="/e/member/mspace/index.php">
	  <input type="hidden" name="userid" value="<?=$userid?>">
      <input name="uname" type="hidden" id="uname" value="<?=$getusername?>">
	  <input type="hidden" name="enews" value="AddMemberGbook">
      <textarea name="gbtext" cols="60" rows="5" id="saytext" placeholder="既然来了，就说点什么吧~" style="width:260px; height:66px;" class="input_area"></textarea>
      				<div class="plsub"><span><a href="javascript:void()" onclick="addface()"><em class="ico_face"></em>添加表情</a><div class="face" style="display: none; "></div> <input name="isprivate" type="checkbox" id="isprivate" value="1"> 私密</span><input name="" type="submit" value="发表" class="button small green yh"></div>
					</form>
                </div>
                <ul class="feedly">
                	<?php
                    $lysql=$empire->query("select * from {$dbtbpre}enewsmembergbook where userid='$userid' and isprivate='0' order by gid desc limit 5");
					while($ly=$empire->fetch($lysql))
					{ 
					$r=$empire->fetch1("select userpic from {$dbtbpre}enewsmemberadd where userid=$ly[uid] limit 1");
					$gbtext=RepPltextFace($ly[gbtext]);
					$hylypic=$r[userpic]?$r[userpic]:$public_r[newsurl].'e/data/images/nouserpic.gif';
					?>
					<li class="clearfix"><a href="/e/space/?userid=<?=$ly[uid]?>" target="_blank"><img src="<?=$hylypic?>" width="30" height="30"/></a><div class="feedlyxx">
                    	<span class="feedlyuser"><a href="/e/space/?userid=<?=$ly[uid]?>" class="c390" target="_blank"><?=$ly[uname]?></a> <abbr class="time" title="<?=$ly[addtime]?>"><?=$ly[addtime]?></abbr></span>
                        <?=$gbtext?></div></li>
					<?
                    	}
					?>
                </ul>
                <h4><?=$me?>的最近访客</h4>
                <ul class="feedgz">
<?php
$jl=$empire->fetch1("select zuijin from {$dbtbpre}enewsmemberadd where userid='$userid' limit 1");
$jluserid=explode("::::::",$jl['zuijin']);
$i=0;
$jlnum=count($jluserid)-1;
if ($jlnum>=8){
	$jlnum=8;
} 
elseif ($jlnum=='0')
	{
	echo '<div class="nogz">暂时还没有访客记录</div>';
} 
while($i<$jlnum)
{
	$jluser=$empire->fetch1("select * from {$dbtbpre}enewsmemberadd where userid='$jluserid[$i]' limit 1");
	$jluserxx=$empire->fetch1("select * from {$dbtbpre}enewsmember where userid='$jluserid[$i]' limit 1");
	$jluserpic=$jluser['userpic']?$jluser['userpic']:$public_r[newsurl].'e/data/images/nouserpic.gif';
	?>
	<li><a href="/e/space/?userid=<?=$jluserid[$i]?>"><img src="<?=$jluserpic?>" /><span><?=$jluserxx[username]?></span></a></li>
	<?
	$i++; 
}

?>
</ul>
            </div>
            <div class="hyfeedright yh">
            	<ul class="feedlist" id="feedlist">
<?php
	$total=0;
	while ($total<count($feeduserid)-1){
			$tiaojian=$tiaojian." or userid=".$feeduserid[$total]; //sql附件条件
			$total++;
	}
	$feedsql=$empire->query("select * from {$dbtbpre}enews_feed where userid='$userid'$tiaojian order by id desc limit 10");
	$feednum=$empire->num("select * from {$dbtbpre}enews_feed where userid='$userid'$tiaojian order by id desc limit 10");
	if ($feednum=='0'){
		echo '<div class="center c999 mt30">暂时没有动态.</div>';
	} else {
		while($f=$empire->fetch($feedsql)){
	if ($f[titlepic]){
		$feedpic='<div class="feednewspic"><a href="'.$f[titlepic].'" class="lightbox" title="'.$f[classname].'"><img src="'.$f[titlepic].'"/></a></div>';
	}
	$type=$f[type]; //feed分类
	switch($type){
		case "news":$typename="投稿";break;
		case "message":$typename="留言";break;
		case "download":$typename="下载";break;
		case "review":$typename="评论";break;
		case "buy":$typename="购买";break;
		case "fav":$typename="收藏";break;
		case "recommend":$typename="推荐";break;
	}
	if ($f['userid']!=$userid){
		$typename="<a href='/e/space/?userid=".$userid."'>".$username."</a> 关注的库友";
	}
?>
                	<li><span class="<?=$type?>"><?=$typename?></span>: <?=$f[feed]?>
                    <?=$feedpic?>
                    <div class="hyfeedxx"><div class="fr hyfeeduserxx"><a href="#">评论(<script src="/e/public/ViewClick/?classid=<?=$f[classid]?>&id=<?=$f[newsid]?>&down=2"></script>)</a> <a href="#">浏览数(<script src="/e/public/ViewClick/?classid=<?=$f[classid]?>&id=<?=$f[newsid]?>"></script>)</a></div><abbr class="time" title="<?=$f[time]?>"><?=$f[time]?></abbr> 来自: <a href="/e/action/ListInfo.php?&ph=1&classid=<?=$f[classid]?>" target="_blank"><?=$f[classname]?></a></div>
                    </li>
<?
	}	
	}
?>	
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
<?php
include("footer.temp.php");
?>