<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><li><label>音乐名称</label><input name="title" type="text" class="input_text" size="42" value="<?=$ecmsfirstpost==1?"":DoReqValue($mid,'title',stripSlashes($r[title]))?>">名称不能包含特殊符号！</li>
<li><label>发布者QQ号码</label><input name="qq" type="text" id="qq" value="<?=$ecmsfirstpost==1?"":DoReqValue($mid,'qq',stripSlashes($r[qq]))?>" size="42">请填写真实QQ号码！</li>
<li><label>背景音乐上传</label><input type="file" class="input_text" name="music_urlfile" size="42">只支持MP3格式！大小不要超过5M！</li>
<input type="hidden" name="gotoinfourl" value="1">