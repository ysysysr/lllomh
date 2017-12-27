<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsmember`;");
E_C("CREATE TABLE `phome_enewsmember` (
  `userid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` char(20) NOT NULL DEFAULT '',
  `password` char(32) NOT NULL DEFAULT '',
  `rnd` char(20) NOT NULL DEFAULT '',
  `email` char(50) NOT NULL DEFAULT '',
  `registertime` int(10) unsigned NOT NULL DEFAULT '0',
  `groupid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `userfen` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `userdate` int(10) unsigned NOT NULL DEFAULT '0',
  `money` float(11,2) NOT NULL DEFAULT '0.00',
  `zgroupid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `havemsg` tinyint(1) NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `salt` char(8) NOT NULL DEFAULT '',
  `userkey` char(12) NOT NULL DEFAULT '',
  PRIMARY KEY (`userid`),
  UNIQUE KEY `username` (`username`),
  KEY `groupid` (`groupid`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsmember` values('1','hanxing3437','d17bb573ee5744457f72531d4895218e','dEuATySsp48Q6kuBgIKF','48444431@qq.com','1410367216','1','0','0','0.00','0','0','1','3Q7gGF','xfRk9TQBBdXV');");
E_D("replace into `phome_enewsmember` values('2','hanxing3438','a18685c28f2dfaf73e3ad6687188bd49','E9ptpDGJvbfX26smzDrE','2234439707@qq.com','1410367679','1','0','0','0.00','0','0','1','GR6tnf','Fmc5PEqsM7Nb');");
E_D("replace into `phome_enewsmember` values('3','zbzhangzhang','2ff04ebf6cb2e0e7fe486ad12d429dd4','srtQqZBd4SV9DzaTTq8e','89534146@qq.com','1415168295','1','0','0','0.00','0','0','1','43HfJu','LRpAGV6jfaZD');");
E_D("replace into `phome_enewsmember` values('4','5555321','1aece693e85a0cf9895cb47be21c5552','jRuvLGhpg7Ta4aGkCSFZ','lg0839@qq.com','1415190828','1','0','0','0.00','0','0','1','cKMbuE','hKz9bWvt6aZr');");
E_D("replace into `phome_enewsmember` values('5','123456','3df217c8d1d36b835affdc03192bad3d','BndtmqeTsAyF9znKSC4n','ASD@1564.NET','1415349767','1','0','0','0.00','0','0','1','KSLSPH','NWrSYsMg5XTA');");
E_D("replace into `phome_enewsmember` values('6','test888','ffbeed75a74ab8b463e1be6763797ca9','kimRcXGPuDA2RRRRRRRR','8888@88.com','1415459091','1','0','0','0.00','0','0','1','RRRRRR','RRRRRRRRRRRR');");
E_D("replace into `phome_enewsmember` values('7','fzs','b94c7c5c506d628400774550f298ef8e','bjLgcZ2evrD6HKCMCvvF','xuelibaba@126.com','1416657271','1','0','0','0.00','0','0','1','YtZMMk','TQg7YnKZLh52');");
E_D("replace into `phome_enewsmember` values('8','wujianshu','af43d49255a4a626d749063809d37b87','sjypmsDDfYBj4bdPVD7y','2222222222@qq.com','1416796025','1','0','0','0.00','0','0','1','KGjzgd','yEdRwdikdXe5');");
E_D("replace into `phome_enewsmember` values('9','sghrhwfn','2e86f1c7d66c1ef3034484dc711b60db','WX5Gq2Qk2h2KHBJv2Kmv','54040566@qq.com','1417065383','1','0','0','0.00','0','0','1','res2Ty','UQvKTykXkrnT');");
E_D("replace into `phome_enewsmember` values('10','w648648w','1c458374dcbb5f5213a2157ef2144aa7','8T3x2kEg9ATBgYC4tQAP','haowll@126.com','1417092856','1','0','0','0.00','0','0','1','mzsxN5','UtMeY7Yc67bu');");
E_D("replace into `phome_enewsmember` values('11','wsywsy333','fac2703e80dedeaad0a757fb433df513','LnHTq4QdQQXq2UWUnBUA','398814692@qq.com','1417794854','1','0','0','0.00','0','0','1','zaAYJv','DgebqUQ8KwQm');");
E_D("replace into `phome_enewsmember` values('12','boosun','5d2647a5d81dcd2d06da4b683315fbbd','YYYYYYYYYYYYYYYYYYYY','boosun@163.com','1418722153','1','0','0','0.00','0','0','1','YYYYYY','YYYYYYYYYYYY');");
E_D("replace into `phome_enewsmember` values('13','mlp','40895ce23eb9b48fe5fe68c5cd2b6e0a','fSXbuxh3fgMQG7sEG83U','11@11.com','1419088436','1','0','0','0.00','0','0','1','Lgsede','Kh5ZGDNvHrj4');");
E_D("replace into `phome_enewsmember` values('14','邓志�\�','c3e139de319ac343f899fda9a0be8029','jWszCKDFr7zBET7yZxNY','dzypro@126.com','1419154254','1','0','0','0.00','0','0','1','JTBMPr','DA85iCgnLn72');");
E_D("replace into `phome_enewsmember` values('15','飞扬网络','0f8b607099527a6b59bb7e455c8a1414','cjgSzLChMfqvfPyQC62b','42521@qq.com','1419326286','1','0','0','0.00','0','0','1','gJDfBy','84QjVbwkfNp9');");
E_D("replace into `phome_enewsmember` values('16','92game','4251121d861fa70d44a11cad8bb4651d','BruwLZPEqNydqs2YkJaJ','134jde@qq.com','1419409087','1','0','0','0.00','0','0','1','YMBrmw','9sWggPzu8y4d');");
E_D("replace into `phome_enewsmember` values('17','temp','53cd750633565a202e7185d85c20f8b8','ZcGJJWRscrNmrY2YiMBH','temp@temp.com','1419743278','1','0','0','0.00','0','0','1','EYRbbE','EnxVDz3KjRxf');");
E_D("replace into `phome_enewsmember` values('18','meishuk','aced06e4059164ba3519b187d896ba53','v6bLjciSNmbJNkhfHNJj','meishuku@q.cc','1420368629','1','0','0','0.00','0','0','1','pVVVVV','deskQF8cCFrY');");
E_D("replace into `phome_enewsmember` values('19','haitian118','000afad43ec7fb259e0246661e41cfd0','Tvf5LWsW9PQkMkJ7gPgD','pop35@126.com','1420468623','1','0','0','0.00','0','0','1','Zrv7zn','jqfkM7g43zjQ');");
E_D("replace into `phome_enewsmember` values('20','narhao','4ffa8a9f52909a11d8aed50d4b5c7cfa','fvw4a5X5M3FRgvPt3FhA','zaotang88@126.com','1420616356','1','0','0','0.00','0','0','1','wt3QSz','WAcFjLHBsd3C');");
E_D("replace into `phome_enewsmember` values('21','wfljp','47d714ac889a3ddf724cd1ac2e302da3','UEBnPhPEECHHNS4tvzLJ','27046988@qq.com','1420700018','1','0','0','0.00','0','0','1','78m5Uh','nREaz6QRCNHS');");
E_D("replace into `phome_enewsmember` values('22','bingzhou01','a02bdd1a12a5dd12ab79437242b94c89','cSEmcmcKRCEQzezHDqPg','88888888@88.com','1420934957','1','0','0','0.00','0','0','1','B5pebX','sCnBFcvs6jfn');");
E_D("replace into `phome_enewsmember` values('23','2522119','79d71ea3d66db0c7ed350004ec1fa6a0','JiUnEnnBBpppppnnnnCS','2522119@qq.com','1421157636','1','0','0','0.00','0','0','1','tsMurt','bNTZgFd86Kik');");
E_D("replace into `phome_enewsmember` values('24','linbozhe','96ed958bf3e79f48825b8fd1509ad598','rjivpaaKADDW7Szz2gq5','413415171@qq.com','1421231755','1','0','0','0.00','0','0','1','LBKPFA','xDWjTiCRSx3z');");
E_D("replace into `phome_enewsmember` values('25','mytest','0e2afabed2adcd5818d66c3632bd34aa','6bFxmiAGCHsNy5KTTiXB','1225888363@qq.com','1421801048','1','0','0','0.00','0','0','1','jZ4FwQ','Za6hJEFJkKFK');");
E_D("replace into `phome_enewsmember` values('26','qq815840109','7711cae09c8bc484b4b99b3bc99c99eb','tUPJLSzTB7YcsYzZ52XB','815840105@qq.com','1422234390','1','0','0','0.00','0','0','1','YALnRe','GvbMn9KXN5bn');");
E_D("replace into `phome_enewsmember` values('27','test','2093cfd0fa357591aa76de04876c6700','u3DmWSjA9CDQvvqjNBnx','test@test.com','1422361363','1','0','0','0.00','0','0','1','tqJUZ4','mezTSSKueVBa');");
E_D("replace into `phome_enewsmember` values('28','hao1088','8b58c39f0119d58e2b0ccbbcab6c6aef','A5nBcDamVrlxvb5js3Gf','ksmis1@qq.com','1422544318','1','0','0','0.00','0','0','1','sz4091','CChZlQkhpx3W');");
E_D("replace into `phome_enewsmember` values('29','shellcn','e79b2ad3b213f0b6563c1f41739b9a9e','Eu5K1UA2FRUmDdRCgDrR','asiadiver@163.com','1422948543','1','0','0','0.00','0','0','1','sE8bNP','WtD4hvgIm26R');");
E_D("replace into `phome_enewsmember` values('30','test222','10147b876d9bf643cef05db244e51593','LRBR5PJEu2AqlEROBI62','sdafds@126.com','1423502949','1','0','0','0.00','0','0','1','UxlfdM','Qg9830pxS7pU');");
E_D("replace into `phome_enewsmember` values('31','kyueyue','dc840cfa1efb7b01aa617209f2bfb0db','tiQ0sqtiamQl8Dt4xk6U','vcpe@163.com','1423506259','1','0','0','0.00','0','0','1','dO7DwM','dGNtSWIWdel5');");
E_D("replace into `phome_enewsmember` values('32','test123','e954498efcff957a635cbae43770ca8a','YCheSq8BWiGHwxEaHWtI','test123@163.com','1423630556','1','0','0','0.00','0','0','1','RNZvPI','cqgYJTrcw4zs');");
E_D("replace into `phome_enewsmember` values('33','呵呵','a495aeaf405bd8684feec0a378b40241','LmITet7che7rrWQPE2h3','5545454@qq.com','1424268673','1','0','0','0.00','0','0','1','SitjB9','LB4zqYnLVCKP');");
E_D("replace into `phome_enewsmember` values('34','michell','f5eb5cf3f22c383b7d9530e91bfadac7','4E7BuV2RMjBgjUep3mTG','fsdf@sd.com','1425397048','1','0','0','0.00','0','0','1','cMyYrc','5e4godlCkmkf');");
E_D("replace into `phome_enewsmember` values('35','coght','64c22faee428d30a6fc750a0ca03694d','DpptZ9XqKca6EywKgCXS','c165161@qq.com','1425399089','1','0','0','0.00','0','0','1','PcNTK8','2ZAZsKCTn1zt');");
E_D("replace into `phome_enewsmember` values('36','loaddi','7a0389fe353d25a59f28e666f60a4e6f','IM4ooj8qu53GzHE0GHvB','sdf@asd.com','1425541594','1','0','0','0.00','0','0','1','2kNNUl','gDHvBDHrcCtb');");
E_D("replace into `phome_enewsmember` values('37','text','13d9fbb415be0d020c3d219ad5feb7f8','Szc8sXQA6rEOLQMsJIOg','text@126.com','1426075243','1','0','0','0.00','0','0','1','AfTt5f','WwWoX8beDmOL');");
E_D("replace into `phome_enewsmember` values('38','test789','7265d76861d336331d2b3a5cfd984811','3ZRTF2KztL867BmPQO4j','123@123.com','1426324174','1','0','0','0.00','0','0','1','YPhG4h','hT3cfijHlBuK');");
E_D("replace into `phome_enewsmember` values('39','wanzhe128','1aaffcf42f9989a77ebfc3d2f623ba36','OfNUHnxEea0rHBsHMUNs','123@1234.com','1426604105','1','0','0','0.00','0','0','1','BCmBW1','S38SP5kHQEdk');");
E_D("replace into `phome_enewsmember` values('40','zhuifengyh','cbc117cd1e7d3cb541c68d81ab42170b','y6kB2sbHe8HhRrhb8biT','zhuifengyh@163.com','1427683708','1','0','0','0.00','0','0','1','LeYbCx','NwfTcMpQtFFf');");
E_D("replace into `phome_enewsmember` values('41','djw07','cd0fafdde8cbb3296124d2765c287c69','wPPZqH6XHFe26n9OaOCR','2@qq.com','1427955945','1','0','0','0.00','0','0','1','DvAV8e','dsDnbatEiaVc');");
E_D("replace into `phome_enewsmember` values('42','adminadmin','b3f2a11e56921bcaa0ee26105ef8f735','yvM6LK5kzSwBNolwnjMl','admin@163.com','1428474961','1','0','0','0.00','0','0','1','JiChfc','fCpREd3AzvLM');");
E_D("replace into `phome_enewsmember` values('43','的的','9f9d5faa912cf1aa83451f77621cc505','UvRCmhotBwVtxx7tVld4','111@163.com','1428970429','1','0','0','0.00','0','0','1','uDC74j','3HeqfVF3Dw3h');");
E_D("replace into `phome_enewsmember` values('44','testtest','7544cbaf8153edc7d61aba71f4b34384','eNM7cVepCZifTMSga85b','testtest@test.com','1428992556','1','0','0','0.00','0','0','1','alXMMr','vZjVRflLtzLF');");
E_D("replace into `phome_enewsmember` values('45','yujiannet','c23a12ce62c2e3ee9ac9a41e57a623d4','kYx89eh3nCth7zkmmuFS','123@1qq.com','1429544796','1','0','0','0.00','0','0','1','Chr1tK','O4hdX8bHtfUP');");
E_D("replace into `phome_enewsmember` values('46','930292008','fbf7d8aefc7bd6c73279573e846cc398','9txpv9qoHzQJ6vCjTKYj','930292008@qq.com','1429548291','1','0','0','0.00','0','0','1','zG0CpT','1YgQG1iaa4rJ');");
E_D("replace into `phome_enewsmember` values('47','fkuertfp','8981d30aeb53eb3b6a6da8d8d8cdabfa','FUvm2kZWpgIW0GEbDMkO','12@123.com','1430466236','1','0','0','0.00','0','0','1','L0KDop','Cjuv3H9hCFVe');");
E_D("replace into `phome_enewsmember` values('48','xxxxxx','22f5e0d9601df86a4be5b4bba048c4d8','V6PoHQC4ZRZf0k1e6J3f','2232343354@qq.com','1431225871','1','0','0','0.00','0','0','1','S32a36','jQbupAe4F5dr');");
E_D("replace into `phome_enewsmember` values('49','zzww858','bf9be67e3d585f16f2415865dece3ba6','b7QDzNDaiEobDuRtOCOq','475863104@qq.com','1431394305','1','0','0','0.00','0','0','1','ltYEHh','LuVNnZMyEhM1');");
E_D("replace into `phome_enewsmember` values('50','fayxia','776b75a5a560f74fc0ad61470135c35a','vxj8g3vmLjrlTToU9F1j','512190946@qq.com','1431669352','1','0','0','0.00','0','0','1','P9NqRr','Ry4v3V6jAGNG');");
E_D("replace into `phome_enewsmember` values('51','noonsun','0eb8ac68a57ec3d4dabbed55f300cce7','6a6NL2ql1y0wgxi8UOuG','mychineseren@qq.com','1431694688','1','0','0','0.00','0','0','1','hx85Uu','bniYX5TqSmpi');");
E_D("replace into `phome_enewsmember` values('52','gaxun','ae5441a9888a60ee97c6ef53bec9c652','K04uk9LSJzbaB7WnLDqn','2323@23.com','1431949326','1','0','0','0.00','0','0','1','tOlrx8','RSCT85ufMcvb');");
E_D("replace into `phome_enewsmember` values('53','123','e80a8005f25e7f4c097add58576ef7c4','WZf1di3MWyAa6a17nNq3','123@1232.com','1432213739','1','0','0','0.00','0','0','1','z7r0Td','zxkqZFr0XOxG');");
E_D("replace into `phome_enewsmember` values('54','1771228435','6ae1eafa8e51d215ef756d28cb5b92da','2A6jBoYvzZe370UC8Y9Z','1771228435@qq.com','1444700989','1','0','0','0.00','0','0','1','pk96JE','fl32SME9V14u');");

@include("../../inc/footer.php");
?>