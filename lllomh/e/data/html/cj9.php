<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>音乐名称正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--title--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_title]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_title]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_title]" type="text" id="add[z_title]" value="<?=stripSlashes($r[z_title])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>发布时间正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--newstime--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_newstime]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_newstime]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_newstime]" type="text" id="add[z_newstime]" value="<?=stripSlashes($r[z_newstime])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>发布者QQ号码正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--qq--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_qq]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_qq]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_qq]" type="text" id="add[z_qq]" value="<?=stripSlashes($r[z_qq])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>背景音乐上传正则：</strong><br>
      ( 
      <input name="textfield" type="text" id="textfield" value="[!--music_url--]" size="20">
      )</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
    <tr>
      <td>附件前缀 
        <input name="add[qz_music_url]" type="text" id="add[qz_music_url]" value="<?=stripSlashes($r[qz_music_url])?>"> 
        <input name="add[save_music_url]" type="checkbox" id="add[save_music_url]" value=" checked"<?=$r[save_music_url]?>>
        远程保存 </td>
    </tr>
    <tr> 
      <td><textarea name="add[zz_music_url]" cols="60" rows="10" id="add[zz_music_url]"><?=ehtmlspecialchars(stripSlashes($r[zz_music_url]))?></textarea></td>
    </tr>
    <tr> 
      <td><input name="add[z_music_url]" type="text" id="music_url5" value="<?=stripSlashes($r[z_music_url])?>">
        (如填写这里，这就是字段的值)</td>
    </tr>
  </table></td>
  </tr>
