<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
//����
$spacegg='';
if($addur['spacegg'])
{
	$spacegg=$addur['spacegg'];
}
//�����˵�
$wznum=0; //��������
$dhmenu='';
$modsql=$empire->query("select mid,qmname,tbname from {$dbtbpre}enewsmod where usemod=0 and showmod=0 and qenter<>'' order by myorder,mid");
while($modr=$empire->fetch($modsql))
{
	$num=$empire->num("select id from {$dbtbpre}ecms_$modr[tbname] where userid='$userid'");
	$wznum=$wznum+$num;
	$dhmenu.='<li><a href="/e/space/list.php?userid='.$userid.'&mid='.$modr[mid].'">'.$modr[qmname].'</a></li>';
}
//��Ա��Ϣ
$tmgetuserid=$userid;	//�û�ID
$tmgetusername=RepPostVar($username);	//�û���
$tmgetgroupid=$groupid;	//�û���ID
$getuserid=(int)getcvar('mluserid');//��ǰ��½��ԱID
$getusername =getcvar('mlusername');//��ǰ��½��Ա��
//��Ա������
if($tmgetgroupid)
{
	$tmgetgroupname=$level_r[$tmgetgroupid]['groupname'];
	if(!$tmgetgroupname)
	{
		include_once(ECMS_PATH.'e/data/dbcache/MemberLevel.php');
		$tmgetgroupname=$level_r[$tmgetgroupid]['groupname'];
	}
}
$follow=$empire->fetch1("select * from {$dbtbpre}enewsmemberadd where userid=$userid");
$feeduserid=explode("::::::",$follow['feeduserid']);
$Diybg=$follow['Diybg']?$follow['Diybg']:$public_r[newsurl].'yecha/blogbg.jpg';
if ($follow['lockBgImg']){
	$lockbg=" fixed";
}
if ($follow['bgsize']){
	$bgsize="background-size:100% 100%;";
}
$bgcolor=$follow['bgcolor']?$follow['bgcolor']:'#b7e3c1';
$Bgalign=$follow['Bgalign']?$follow['Bgalign']:'center';
$repeatBg=$follow['repeatBg']?$follow['repeatBg']:'repeat';
$feedusernum=count($feeduserid)-1; //�û�Ա�Ĺ�ע��
$fsnum=0; //�û�Ա�ķ�˿��
$fl=$empire->query("select feeduserid from {$dbtbpre}enewsmemberadd order by userid"); 
while($n=$empire->fetch($fl))
{
	$flid=explode("::::::",$n['feeduserid']);
	if (in_array($userid,$flid)){
		$fsnum=$fsnum+1;
	}
}
//���ӻ�Ա���ʼ�¼
if ($getuserid && $getuserid<>$userid){
	$r=$empire->fetch1("select zuijin from {$dbtbpre}enewsmemberadd where userid='$userid' limit 1");
	if (empty($r['zuijin'])){
		$empire->query("update {$dbtbpre}enewsmemberadd set zuijin='$getuserid::::::' where userid='$userid'");
		} else {
		$zuijin=explode("::::::",$r['zuijin']);
		if (in_array($getuserid,$zuijin))
    	{
			$newzuijin=$getuserid."::::::".str_replace($getuserid."::::::","",$r['zuijin']);
			$empire->query("update {$dbtbpre}enewsmemberadd set zuijin='$newzuijin' where userid='$userid'");
    	} else{
			$empire->query("update {$dbtbpre}enewsmemberadd set zuijin='$getuserid::::::$r[zuijin]' where userid='$userid'");
		}
	}
}
//�һ�����������
	if ($getuserid==$userid){
		$me="��";
	} else{
		if ($addur[sex]=="��"){
			$me="��";
		} elseif ($addur[sex]=="Ů"){
			$me="��";
		} else {
			$me="Ta";	
		}
	}
//�ҵ�������
	$xingyun=$follow[xingyun]?$follow[xingyun]:"";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title><?=$spacename?></title>
<meta name="keywords" content="<?=$spacename?>" />
<meta name="description" content="<?=$spacename?>" />
<link href="/yecha/Common.css" rel="stylesheet" type="text/css" />
<link href="/yecha/hycenter.css" rel="stylesheet" type="text/css" />
<link href="/yecha/button.css" rel="stylesheet" type="text/css" />
<link href="/yecha/user/visuallightbox.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/js/jquery-1.7.2.min.js"></script>
<SCRIPT src="/js/SuperSlide.js" type=text/javascript></SCRIPT>
<SCRIPT src="/js/jRating.jquery.min.js" type=text/javascript></SCRIPT>
<SCRIPT src="/js/jquery.timeago.js" type=text/javascript></SCRIPT>
<SCRIPT src="/js/jquery.lazyload.min.js" type=text/javascript></SCRIPT>
<SCRIPT src="/js/jNotify.jquery.min.js" type=text/javascript></SCRIPT>
<SCRIPT src="/js/lazyload.min.js" type=text/javascript></SCRIPT>
<SCRIPT src="/js/artDialog.js" type=text/javascript></SCRIPT>
<SCRIPT src="/js/iframeTools.js" type=text/javascript></SCRIPT>
<script type="text/javascript" src="/js/52img.js"charset="utf-8"></script>
<script type="text/javascript">
jQuery(document).ready(
function(){window.Lightbox = new jQuery().visualLightbox({autoPlay:false,borderSize:12,classNames:'lightbox',closeLocation:'top',descSliding:true,enableRightClick:false,enableSlideshow:true,prefix:'vlb1',resizeSpeed:7,slideTime:4,startZoom:true});
var a=jQuery;a("#feedlist .lightbox").mouseenter(function(){var b=a("div.vlb_zoom",this);if(!b.length){b=a('<div class="vlb_zoom" style="position:absolute">').hide().appendTo(this);a("img:first",b).detach()}b.fadeIn("fast")}).mouseleave(function(){a("div",this).fadeOut("fast")})
});
</script>
<style>
body{ background:<?=$bgcolor?> url(<?=$Diybg?>) <?=$Bgalign?> top <?=$repeatBg?><?=$lockbg?>;<?=$bgsize?>}
.xingyun{position:absolute; top:0; left:50%; width:500px; height:242px; background:url(<?=$xingyun?>) right bottom no-repeat; z-index:5;}
</style>
</head>
<body>
<div class="xingyun"></div>
<!--[if lt IE 7]>
<div class="upgradeBrowser"><span>����������汾̫����,���黻�����������:)</span></div>
<![endif]-->
<div id="header">
    	<div class="block">
        	<div class="fl logo">
            	<a href="/" title="�Ұ�ͼ��"></a>
            </div>
            <div class="fl nav" id="nav-categories">
            	<ul>
                    <li><a href="/" class="index selected">��ҳ</a></li>
                    <li><a href="/e/action/ListInfo/?classid=61" class="ts">�γ�����</a></li>
                    <li><a href="/Custom/zhiindex.html" class="mb<? if ($GLOBALS[navclassid]>='65' and $GLOBALS[navclassid] <='90'){echo " selected";}?>">A-STEP�ǿ�</a></li>
					<li><a href="/jiangshituandui/" class="dm<? if ($GLOBALS[navclassid]>='101' and $GLOBALS[navclassid] <='121' or $GLOBALS[navclassid]=='131'){echo " selected";}?>">��ʦ�Ŷ�</a></li>
                    <li><a href="/Custom/fuwanl.html" class="tk<? if ($GLOBALS[navclassid]>='91' and $GLOBALS[navclassid] <='100'){echo " selected";}?>">���䰸��</a></li>
                    <!--<li><a href="#" class="gj">����</a></li>
                    <li class="dingzhi"><a href="#" class="dz last">����</a>
                    	<ul>
                            <li><a href="/dingzhi/ecmsmb/">�۹�cmsģ��</a></li>
                            <li><a href="/dingzhi/ecmscj/">�۹�cms���</a></li>
                            <li><a href="/dingzhi/degsin/">��ҳ���</a></li>
                            <li><a href="/dingzhi/html/">��дhtml</a></li>
                            <li><a href="/dingzhi/alldo/">������վ</a></li>
                            <li><a href="#">���ࡤ����</a></li>
                        </ul>
                    </li>-->
                </ul>
            </div>
            <div class="fr login">
            	<script src="/e/member/login/loginjs.php"></script>
            </div>
            <div class="searchbox">
            	<form name="searchform" method="GET" action="/e/sch/index.php">
                  <input type="hidden" name="field" value="1">
                  <input id="top_srh" name="keyboard" value="" placeholder="��������Ҫ���ҵ�����..." x-webkit-speech rel="xzfl">
                  <input class="top_an" value="" type="submit" name="Submit" title="�������">
                  <div class="chooseS" style="display:none;">
                	<table width="100%">
                    	<tr>
                        	<td><input type="radio" name="classid" value="" checked/><label for="a1" >ȫ��</label></td>
                            <td><input type="radio" name="classid" value="91" /><label for="a2">��ʦ</label></td>
                            <td><input type="radio" name="classid" value="101" /><label for="a3">�ǿ�</label></td>
                        </tr>
                        <!--<tr>
                        	<td><input type="radio" name="classid" value="122" /><label for="a4">����</label></td>
                            <td><input type="radio" name="classid" value="65" /><label for="a5">ģ��</label></td>
                            <td><input type="radio" name="classid" value="132" /><label for="a6">����</label></td>
                        </tr>-->
                    </table>
                </div>

				</form>
            </div>
        </div>
    </div>
<div class="hyindex">
    	<div class="hytopmenu yh f14">
        	<div class="hymenu">
        	<span><?=$me?>��:</span>
        	<ul>
        		<li><a href="/e/space/?userid=<?=$userid?>">��ҳ</a></li>
                <?=$dhmenu?>
				
                <li><a href="/e/space/fans.php?userid=<?=$userid?>">��˿</a></li>
                <li><a href="/e/space/gbook.php?userid=<?=$userid?>">����</a></li>
        	</ul>
            </div>
        </div>
        <div class="hy_avator">
        	<div class="avator_bg">
        	<a href="/e/space/?userid=<?=$userid?>"><img src="<?=$userpic?>" /></a>
            </div>
            <div class="my_left">
            	<ul>
                    	<li><a href="javascript:void()" onclick="follow(<?=$userid?>)">��ע<br /><strong><?=$feedusernum?></strong></a></li>
                        <li><a href="/e/space/fans.php?userid=<?=$userid?>">��˿<br /><strong><?=$fsnum?></strong></a></li>
                        <li><a href="/e/space/list.php?userid=<?=$userid?>&mid=10">����<br /><strong><?=$wznum?></strong></a></li>
                        <div class="clearfix"></div>
                </ul>
                <!--<div class="renzheng clearfix"><span class="button green small">A-STEP-<?=$tmgetgroupname?></span></div>-->
				<div style="width:60px; text-align:center;  margin:0 auto; height:50px; line-height:25px; border-radius:30%; border:1px solid #404040;"><span class="" >A-STEP<br/><?=$tmgetgroupname?></span></div>
            </div>
        </div>
        <div class="hyhead">
        	<div class="fl w230"></div>
            <div class="fl hyxx">
            	<h3><a href="/e/space/?userid=<?=$userid?>" class="yh"><?=$spacename?></a></h3>
                <span class="hyurl"><a href="/e/space/?userid=<?=$userid?>">/e/space/?userid=<?=$userid?></a><br /><?=$addur[juzhu]?> | <?=$addur[job]?> | <?=$addur[sex]?></span>
                <span class="rzxx"><?=$addur[renzheng]?></span>
                <div class="hyhudong">
                <?php				
                        	if ($getuserid!=$userid){
								$f=$empire->fetch1("select feeduserid from {$dbtbpre}enewsmemberadd where userid='$getuserid'");
								$fduserid=explode("::::::",$f['feeduserid']);
								if (in_array($userid,$fduserid)){
								$follow='<a href="javascript:void()" onclick="follow('.$userid.')" class="button blue small orange" id="follow'.$userid.'" title="ȡ����ע">ȡ����ע</a>';
								} else{
								$follow='<a href="javascript:void()" onclick="follow('.$userid.')" class="button blue small" id="follow'.$userid.'">��ע</a>';	
								}
								
								} else {
								$follow='<a href="/e/member/EditInfo/" class="button blue small">�޸�����</a>';
							}
				?>
                <?=$follow?><a href="/e/member/msg/AddMsg/?enews=AddMsg&username=<?=$username?>" target="_blank" class="button gray small ml10">��վ����</a></div>
            </div>
            <div class="fr hygg yh">
<!--<?=$spacegg?>-->
<?php
	$d=$empire->fetch1("select * FROM notice WHERE 1 order by id desc");
?>
				<div style="text-indent:2em;"><?php echo $d['tests']; ?></div>

				<?php
                if ($getuserid==$userid){
					echo '<a href="/e/member/mspace/SetSpace.php" class="editgg">�鿴���๫��</a>';
					}
				?>
				<div class="hyggxx">���﹫��</div>
            </div>
        </div>
