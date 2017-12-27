<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>  <li><label>标题</label><input name="title" type="text" size="42" value="<?=$ecmsfirstpost==1?"":DoReqValue($mid,'title',stripSlashes($r[title]))?>"></li>
  <li><label>特殊属性</label><input name="keyboard" type="text" size=42 value="<?=stripSlashes($r[keyboard])?>">
<font color="#666666">(多个请用&quot;,&quot;隔开)</font></li>
  <li><label>标题图片</label><input type="file" name="titlepicfile" size="45"></li>
  <li><label>内容简介</label><textarea name="smalltext" cols="60" rows="10" id="smalltext"><?=$ecmsfirstpost==1?"":DoReqValue($mid,'smalltext',stripSlashes($r[smalltext]))?></textarea>
</li>
  <li><label>作者</label><input name="writer" type="text" id="writer" value="<?=$ecmsfirstpost==1?"":DoReqValue($mid,'writer',stripSlashes($r[writer]))?>" size="">
</li>
  <li><label>信息来源</label><input name="befrom" type="text" id="befrom" value="<?=$ecmsfirstpost==1?"":DoReqValue($mid,'befrom',stripSlashes($r[befrom]))?>" size="">
</li>
  <li>新闻正文</li>

<li><?php
$ziduan='newstext';//编辑器使用的字段名称
if($enews=='MAddInfo' || $enews=='MEditInfo'){//前台投稿
$qiantai=1;
$ziduanzhi=$ecmsfirstpost==1?"":DoReqValue($mid,$ziduan,stripSlashes($r[$ziduan]));
}else{//后台
$qiantai=0;
$ziduanzhi=$ecmsfirstpost==1?"":stripSlashes($r[$ziduan]);
}
?>
<script>var classid='<?=$classid?>',infoid='<?=$id?>',filepass='<?=$filepass?>',ehash='<?=$ecms_hashur[ehref]?>',qiantai='<?=$qiantai?>';//把参数传给编辑器,增加支持7.2版本的金刚模式</script>
<script type="text/javascript" charset="utf-8" src="/e/extend/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/e/extend/ueditor/ueditor.all.min.js"></script>
<script type="text/javascript" charset="utf-8" src="/e/extend/ueditor/ueditor.toolbarconfig.js"></script>
<textarea id="<?=$ziduan?>" name="<?=$ziduan?>"><?=$ziduanzhi?></textarea>
<script type="text/javascript">
<?=$ziduan?>=UE.getEditor('<?=$ziduan?>',{
serverUrl: "/e/extend/ueditor/php/controller.php",//自己的请求接口
toolbars:Default,//工具栏配置文件，具体参考ueditor.toolbarconfig.js文件中说明
pageBreakTag:'[!--empirenews.page--]',//帝国分页标签
initialFrameWidth:'100%',//编辑器宽
initialFrameHeight:300//编辑器高
//等等其它配置自行添加，参考UE默认配置文件复制修改即可
});
//自定义请求参数
<?=$ziduan?>.ready(function(){
<?=$ziduan?>.execCommand('serverparam',{
'filepass':'<?=$filepass?>',//修改时候是信息ID
'classid' :'<?=$classid?>',
'qiantai':<?=$qiantai?>
});
});
</script>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#DBEAF5">
<tr> 
<td bgcolor="#FFFFFF"> <input name="dokey" type="checkbox" value="1"<?=$r[dokey]==1?' checked':''?>>
关键字替换&nbsp;&nbsp; <input name="copyimg" type="checkbox" id="copyimg" value="1">
远程保存图片(
<input name="mark" type="checkbox" id="mark" value="1">
<a href="SetEnews.php" target="_blank">加水印</a>)&nbsp;&nbsp; 
<input name="copyflash" type="checkbox" id="copyflash" value="1">
远程保存FLASH(地址前缀： 
<input name="qz_url" type="text" id="qz_url" size="">
)</td>
</tr>
<tr>
<td bgcolor="#FFFFFF"><input name="repimgnexturl" type="checkbox" id="repimgnexturl" value="1"> 图片链接转为下一页&nbsp;&nbsp; <input name="autopage" type="checkbox" id="autopage" value="1">自动分页
,每 
<input name="autosize" type="text" id="autosize" value="5000" size="5">
个字节为一页&nbsp;&nbsp; 取第 
<input name="getfirsttitlepic" type="text" id="getfirsttitlepic" value="" size="1">
张上传图为标题图片( 
<input name="getfirsttitlespic" type="checkbox" id="getfirsttitlespic" value="1">
缩略图: 宽 
<input name="getfirsttitlespicw" type="text" id="getfirsttitlespicw" size="3" value="<?=$public_r[spicwidth]?>">
*高
<input name="getfirsttitlespich" type="text" id="getfirsttitlespich" size="3" value="<?=$public_r[spicheight]?>">
)</td>
</tr>
</table></li>