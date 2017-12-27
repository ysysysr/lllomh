<?php
require("connect.php");
require("db_sql.php");
require("functions.php");
$link=db_connect();
$empire=new mysqlquery();
$sql=$empire->query("select tagname from {$dbtbpre}enewstags");
while($s=$empire->fetch($sql)){
	$infozm=GetInfoZm($s[tagname]);
	$empire->query("update {$dbtbpre}enewstags set infozm='$infozm' where tagname='$s[tagname]'");
}
echo '更新成功！';
?>