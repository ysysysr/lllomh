<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
//查询SQL，如果要显示自定义字段记得在SQL里增加查询字段
$query="select id,classid,isurl,titleurl,isqf,havehtml,istop,isgood,firsttitle,ismember,username,plnum,totaldown,onclick,newstime,truetime,lastdotime,titlefont,titlepic,title from ".$infotb." where ".$yhadd."userid='$user[userid]' and ismember=1".$add." order by newstime desc limit $offset,$line";
$sql=$empire->query($query);
//返回头条和推荐级别名称
$ftnr=ReturnFirsttitleNameList(0,0);
$ftnamer=$ftnr['ftr'];
$ignamer=$ftnr['igr'];

$public_diyr['pagetitle']='管理信息';
$url="<a href='../../'>首页</a>&nbsp;>&nbsp;<a href='../member/cp/'>会员中心</a>&nbsp;>&nbsp;<a href='ListInfo.php?mid=$mid".$addecmscheck."'>管理信息</a>&nbsp;(".$mr[qmname].")";
require(ECMS_PATH.'e/template/incfile/header.php');
?>





<div class="hyright">
            <div class="addnews clearfix">
            	<span class="fl"><a href="/e/DoInfo/choseclass.php" class="button green small">发布文章</a></span>
                <div class="fr">
<form name="searchinfo" method="GET" action="ListInfo.php">
          <input name="keyboard" type="text" id="keyboard" value="" class="input_text" placeholder="查找您投稿的文章...">
          <select name="show" class="input_select">
            <option value="0" selected="">标题</option>
          </select>
          <input type="submit" name="Submit2" value="搜索" class="button orange small">
		  <input name="sear" type="hidden" id="sear" value="1">
          <input name="mid" type="hidden" value="<?=$mid?>">
		  <input name="ecmscheck" type="hidden" id="ecmscheck" value="<?=$ecmscheck?>">
</form>

        		</div>
</div>
<div class="hy_nav tglist yh">
            	<ul>
                <li>当前信息所属分类:</li>
                            		<li><a href="/e/DoInfo/ListInfo.php?mid=10" class='selected'>模板</a></li>
                        		<li><a href="/e/DoInfo/ListInfo.php?mid=11">图库</a></li>
                        		<li><a href="/e/DoInfo/ListInfo.php?mid=12">代码</a></li>
                        		<li><a href="/e/DoInfo/ListInfo.php?mid=13">工具</a></li>
                        	</ul>
</div>
<div class="hy_nav hd">
            	<ul>
            		<li><a href="ListInfo.php?mid=<?=$mid?>" <?=$indexchecked==1?' class="on"':' bgcolor="#C9F1FF"'?>>已发布</a></li>
            		<li><a href="ListInfo.php?mid=<?=$mid?>&ecmscheck=1" <?=$indexchecked==0?' class="on"':' bgcolor="#C9F1FF"'?>>待审核</a></li>
            	</ul>
</div>




<div class="hytable yh">
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="common-table">
<thead><tr><th>文章标题</th><th nowrap="nowrap">发布时间</th><th nowrap="nowrap">点击率</th><th nowrap="nowrap">评论</th><th nowrap="nowrap">审核</th><th nowrap="nowrap">操作</th></tr></thead>
     <tr> 
  <?
	while($r=$empire->fetch($sql))
	{
		//状态
		$st='';
		if($r[istop])//置顶
		{
			$st.="<font color=red>[顶".$r[istop]."]</font>";
		}
		if($r[isgood])//推荐
		{
			$st.="<font color=red>[".$ignamer[$r[isgood]-1]."]</font>";
		}
		if($r[firsttitle])//头条
		{
			$st.="<font color=red>[".$ftnamer[$r[firsttitle]-1]."]</font>";
		}
		//时间
		$newstime=date("Y-m-d",$r[newstime]);
		$oldtitle=$r[title];
		$r[title]=stripSlashes(sub($r[title],0,50,false));
		$r[title]=DoTitleFont($r[titlefont],$r[title]);
		if($indexchecked==0)
		{
			$checked='<font color=red>×</font>';
			$titleurl='AddInfo.php?enews=MEditInfo&classid='.$r[classid].'&id='.$r[id].'&mid='.$mid.$addecmscheck;//链接
		}
		else
		{
			$checked='√';
			$titleurl=sys_ReturnBqTitleLink($r);//链接
		}
		$plnum=$r[plnum];//评论个数
		//标题图片
		$showtitlepic="";
		if($r[titlepic])
		{$showtitlepic="<a href='".$r[titlepic]."' title='预览标题图片' target=_blank><img src='../data/images/showimg.gif' border=0></a>";}
		//栏目
		$classname=$class_r[$r[classid]][classname];
		$classurl=sys_ReturnBqClassname($r,9);
		$bclassid=$class_r[$r[classid]][bclassid];
		$br['classid']=$bclassid;
		$bclassurl=sys_ReturnBqClassname($br,9);
		$bclassname=$class_r[$bclassid][classname];
	?>
  <tr bgcolor="#FFFFFF" id=news<?=$r[id]?>> 
    <td height="25"> <div align="left"> 
        <?=$st?>
		<?=$showtitlepic?>
        <a href="<?=$titleurl?>" target=_blank title="<?=$oldtitle?>"> 
        <strong><?=$r[title]?></strong>        </a>
		<br>
          栏目:<a href='<?=$bclassurl?>' target='_blank'><?=$bclassname?></a> > <a href='<?=$classurl?>' target='_blank'><?=$classname?></a>
      </div></td>
    <td height="25"> <div align="center"><?=$newstime?></div></td>
	<td height="25"> <div align="center"> <a title="下载次数:<?=$r[totaldown]?>"> 
        <?=$r[onclick]?>
        </a> </div></td>
    <td><div align="center"><a href="<?=$public_r['plurl']?>?id=<?=$r[id]?>&classid=<?=$r[classid]?>" title="查看评论" target=_blank><u><?=$plnum?></u></a></div></td>
    <td><div align="center">
        <?=$checked?>
      </div></td>
    <td height="25"><div align="center"><a href="AddInfo.php?enews=MEditInfo&classid=<?=$r[classid]?>&id=<?=$r[id]?>&mid=<?=$mid?><?=$addecmscheck?>">修改</a> | <a href="ecms.php?enews=MDelInfo&classid=<?=$r[classid]?>&id=<?=$r[id]?>&mid=<?=$mid?><?=$addecmscheck?>" onclick="return confirm('确认要删除?');">删除</a> 
      </div></td>
  </tr>
  <?
	}
	?>
  <tr bgcolor="#FFFFFF"> 
    <td height="25" colspan="6"> 
      <?=$returnpage?>    </td>
  </tr>
</table>
 </div>
</div>
    </div>
<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>