<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewssearch`;");
E_C("CREATE TABLE `phome_enewssearch` (
  `searchid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `keyboard` varchar(255) NOT NULL DEFAULT '',
  `searchtime` int(10) unsigned NOT NULL DEFAULT '0',
  `searchclass` varchar(255) NOT NULL DEFAULT '',
  `result_num` int(10) unsigned NOT NULL DEFAULT '0',
  `searchip` varchar(20) NOT NULL DEFAULT '',
  `classid` varchar(255) NOT NULL DEFAULT '',
  `onclick` int(10) unsigned NOT NULL DEFAULT '0',
  `orderby` varchar(30) NOT NULL DEFAULT '0',
  `myorder` tinyint(1) NOT NULL DEFAULT '0',
  `checkpass` varchar(32) NOT NULL DEFAULT '',
  `tbname` varchar(60) NOT NULL DEFAULT '',
  `tempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `iskey` tinyint(1) NOT NULL DEFAULT '0',
  `andsql` text NOT NULL,
  `trueclassid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`searchid`),
  KEY `checkpass` (`checkpass`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewssearch` values('1','大自�\�','1431741185','title','1','192.168.1.1','','7','newstime','0','971c1b39003e46e48d73b0a916e8ae55','news','1','0',' and ((title LIKE ''%大自�\�%''))','0');");
E_D("replace into `phome_enewssearch` values('2','自然','1414302538','title','5','192.168.1.1','','2','newstime','0','f0e3c8f290355b8c0967bfaef62afb19','news','1','0',' and ((title LIKE ''%自然%''))','0');");
E_D("replace into `phome_enewssearch` values('3','世界','1408607602','title','11','113.97.51.150','','2','newstime','0','35f688409eaa4368db550393a7afe03a','news','1','0',' and ((title LIKE ''%世界%''))','0');");
E_D("replace into `phome_enewssearch` values('4','测试','1428633033','title','3','171.34.115.173','','3','newstime','0','a390fcbe4c44150a513de10c0255d3ca','news','1','0',' and ((title LIKE ''%测试%''))','0');");
E_D("replace into `phome_enewssearch` values('5','爱的�\�','1404864006','title','1','122.233.230.170','','1','newstime','0','b66a1e1f1119ca8f949c3b53d6cbe28a','news','1','0',' and ((title LIKE ''%爱的�\�%''))','0');");
E_D("replace into `phome_enewssearch` values('6','手机','1405298484','title','2','71.119.73.93','','1','newstime','0','a2313f8c21ae88ec3b164221b0d75873','news','1','0',' and ((title LIKE ''%手机%''))','0');");
E_D("replace into `phome_enewssearch` values('7','让你','1409881964','title','8','58.101.221.113','','1','newstime','0','a501cfc523d29fac29164e24ae080a3a','news','1','0',' and ((title LIKE ''%让你%''))','0');");
E_D("replace into `phome_enewssearch` values('8','风景','1409888633','title','2','58.101.221.113','','1','newstime','0','154a1970ff3f35e780c391c8258bfe66','news','1','0',' and ((title LIKE ''%风景%''))','0');");
E_D("replace into `phome_enewssearch` values('9','鸡蛋','1414059444','title','1','192.168.1.1','','1','newstime','0','ca20fcbad5881723d306ad59065db269','news','1','0',' and ((title LIKE ''%鸡蛋%''))','0');");
E_D("replace into `phome_enewssearch` values('10','微距','1414759700','title','2','171.37.12.205','','1','newstime','0','e89d6ea55ea8655af183a54806adc97f','news','1','0',' and ((title LIKE ''%微距%''))','0');");
E_D("replace into `phome_enewssearch` values('11','美丽','1415349669','title','1','171.15.148.116','','1','newstime','0','b447cf4ec037ee7b94939aa8af8cce78','news','1','0',' and ((title LIKE ''%美丽%''))','0');");
E_D("replace into `phome_enewssearch` values('12','触电','1417539403','title','1','115.60.87.51','','1','newstime','0','cc2b007229eb608b1eceb3a47ece2de1','news','1','0',' and ((title LIKE ''%触电%''))','0');");
E_D("replace into `phome_enewssearch` values('13','可爱','1428432389','title','1','120.37.53.129','','2','newstime','0','dff16b243d855b7c6b007d891a2bc1ee','news','1','0',' and ((title LIKE ''%可爱%''))','0');");
E_D("replace into `phome_enewssearch` values('14','小工�\�','1418260667','title','1','192.168.1.1','','1','newstime','0','e34d1433187e854a0e5aad98b0a8b0aa','news','1','0',' and ((title LIKE ''%小工�\�%''))','0');");
E_D("replace into `phome_enewssearch` values('15','就会','1419509013','title','1','121.22.249.200','','2','newstime','0','7836adf6afee028d3ba0d29333c07946','news','1','0',' and ((title LIKE ''%就会%''))','0');");
E_D("replace into `phome_enewssearch` values('16','彩虹','1419342275','title','1','121.22.249.203','','1','newstime','0','73349accfc835c5d650ac065fe96e7ff','news','1','0',' and ((title LIKE ''%彩虹%''))','0');");
E_D("replace into `phome_enewssearch` values('17','线条','1419376046','title','1','121.22.249.200','1','1','newstime','0','4db0b9388594d3f23e1bb377ba9dc9af','news','0','0',' and classid=''1'' and ((title LIKE ''%线条%''))','1');");
E_D("replace into `phome_enewssearch` values('18','棉花�\�','1419427840','title','1','121.22.249.200','','1','newstime','0','054c1dda4ce8d9be808692ff8269793f','news','1','0',' and ((title LIKE ''%棉花�\�%''))','0');");
E_D("replace into `phome_enewssearch` values('19','不已','1419428048','title','1','121.22.249.200','','1','newstime','0','a78d17741e825f7d59fd1a2f52082bea','news','1','0',' and ((title LIKE ''%不已%''))','0');");
E_D("replace into `phome_enewssearch` values('20','花海','1419428211','title','1','121.22.249.203','','1','newstime','0','2b27b04cc27f1a68ecc30aa58799eb58','news','1','0',' and ((title LIKE ''%花海%''))','0');");
E_D("replace into `phome_enewssearch` values('21','美国','1419428252','title','1','114.66.199.4','','1','newstime','0','0da2c537d5c09445b6bb70a352571b3c','news','1','0',' and ((title LIKE ''%美国%''))','0');");
E_D("replace into `phome_enewssearch` values('22','法国男子','1419482335','title','1','182.136.188.195','','1','newstime','0','a54e97159c4e3a28653e6ae541967077','news','1','0',' and ((title LIKE ''%法国男子%''))','0');");
E_D("replace into `phome_enewssearch` values('23','雕塑','1419563278','title','3','61.175.101.122','','1','newstime','0','4056bb79ca0afdb25e6fbd9d74f8e1ec','news','1','0',' and ((title LIKE ''%雕塑%''))','0');");
E_D("replace into `phome_enewssearch` values('24','花朵','1432023483','title','1','123.117.30.12','','3','newstime','0','6e7d4bd90c4c25c6265d9416f3e4a642','news','1','0',' and ((title LIKE ''%花朵%''))','0');");
E_D("replace into `phome_enewssearch` values('25','英国','1430916295','title','1','115.60.88.105','','6','newstime','0','c88902bf2d7850fa65efe0d489ae9fb1','news','1','0',' and ((title LIKE ''%英国%''))','0');");
E_D("replace into `phome_enewssearch` values('26','手表','1421916196','title','2','125.71.251.230','','1','newstime','0','d77be2f7a7f5666d0ff139db2a3f16ee','news','1','0',' and ((title LIKE ''%手表%''))','0');");
E_D("replace into `phome_enewssearch` values('27','地方','1421920037','title','1','125.71.251.230','','1','newstime','0','175e55f745a4f6e9622e79e1732ca23f','news','1','0',' and ((title LIKE ''%地方%''))','0');");
E_D("replace into `phome_enewssearch` values('28','玻璃','1422671309','title','2','210.22.61.84','','1','newstime','0','24561c00718edfb110b15bc264ce59ed','news','1','0',' and ((title LIKE ''%玻璃%''))','0');");
E_D("replace into `phome_enewssearch` values('29','老头','1423128630','title','1','101.71.246.54','','1','newstime','0','7bee5710213109cb0d060f30889120e8','news','1','0',' and ((title LIKE ''%老头%''))','0');");
E_D("replace into `phome_enewssearch` values('30','幼儿�\�','1425544007','title','1','27.154.249.230','','2','newstime','0','a4141a22f04af6f552defab29e94ddaf','news','1','0',' and ((title LIKE ''%幼儿�\�%''))','0');");
E_D("replace into `phome_enewssearch` values('31','有趣','1431675712','title','12','222.90.140.37','','3','newstime','0','adae5b758ae3c7f5af61b7f3ea23e848','news','1','0',' and ((title LIKE ''%有趣%''))','0');");
E_D("replace into `phome_enewssearch` values('32','巧妙','1430994300','title','1','106.37.196.98','','1','newstime','0','33b5a2684d3bfaa11c9d6a89fe9056e1','news','1','0',' and ((title LIKE ''%巧妙%''))','0');");
E_D("replace into `phome_enewssearch` values('33','3D','1431142754','title','7','113.64.109.49','','1','newstime','0','32b471b971d2312e3dc1e493de96f6f4','news','1','0',' and ((title LIKE ''%3D%''))','0');");
E_D("replace into `phome_enewssearch` values('34','人物','1431451602','title','1','115.59.138.208','','1','newstime','0','3567c9fd743aa18a8948193fef38f56b','news','1','0',' and ((title LIKE ''%人物%''))','0');");
E_D("replace into `phome_enewssearch` values('35','城市','1432190446','title','3','58.221.204.190','','1','newstime','0','9286bae95c76ac8ea3937142e59cadaf','news','1','0',' and ((title LIKE ''%城市%''))','0');");
E_D("replace into `phome_enewssearch` values('36','�\�','1432537365','title','1','183.191.240.148','','1','newstime','0','3b5090c5b148702900ba1a0d7f2114d3','news','1','0',' and ((title LIKE ''%�\�%''))','0');");
E_D("replace into `phome_enewssearch` values('37','�\�','1444787297','title','48','127.0.0.1','','1','newstime','0','df8cfc447487db36a983362af553a345','news','1','0',' and ((title LIKE ''%�\�%''))','0');");
E_D("replace into `phome_enewssearch` values('38','如果','1513738834','title','1','127.0.0.1','','1','newstime','0','b0974c91cb0ffb046916dc18cd11a984','news','1','0',' and ((title LIKE ''%如果%''))','0');");

@include("../../inc/footer.php");
?>