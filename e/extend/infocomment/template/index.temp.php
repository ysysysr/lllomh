<?php
if(!defined('InEmpireCMS'))
{
        exit();
}
if($returnshowplnum==1)//返回总评论数显示
{
	echo $num."<!--empirecms.infocomment-->";
}
?>
<?php
$plstep=$num-$page*$line;//起始楼层
while($r=$empire->fetch($sql))
{
	$plusername=$r[username];
	if(empty($r[username]))
	{
		$plusername='匿名';
	}
	if($r[userid])
	{
		$plusername="<a href='$public_r[newsurl]e/space/?userid=$r[userid]' class='url' target='_blank'>$r[username]</a>";
	}
	$saytime=date('Y-m-d H:i:s',$r['saytime']);
	//ip
	$sayip=ToReturnXhIp($r[sayip]);
	$saytext=RepPltextFace(stripSlashes($r['saytext']));//替换表情
	//$includelink=" onclick=\"javascript:document.saypl.repid.value='".$r[plid]."';document.saypl.saytext.focus();\"";
	$includelink=" onclick=\"return addComment.moveForm('div-comment-".$r[plid]."', '".$r[plid]."', 'respond', '".$r[plid]."')\"";
?>
	<li class="comment even thread-even depth-1" id="comment-<?=$r[plid]?>">
            <div class="c-avatar"><img alt='' src='/skin/ecms009/images/default.png' class='avatar avatar-50 photo' height='50' width='50' /></div>
            <div class="c-main" id="div-comment-<?=$r[plid]?>"><span class="c-author"><a href='/e/space/?userid=<?=$r[userid]?>' rel='external nofollow' class='url'><?=$r[username]?></a></span><?=$saytext?>
              <time class="c-time">[<?=$plstep?> 楼]</time>
              <!--<a class='comment-reply-link' href='#tosaypl' <?=$includelink?>>回复</a></div>-->
              <ul class="children">
              </ul>
          </li>
      
<?php
	//楼层
	$plstep=$plstep-1;
}
?>
<table width="100%" border="0" cellspacing="1" cellpadding="3">
  <tr>
    <td><div class="epages" align="right"><?=$listpage?></div></td>
  </tr>
</table>