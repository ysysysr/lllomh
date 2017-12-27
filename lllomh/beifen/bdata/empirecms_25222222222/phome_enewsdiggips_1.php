<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `phome_enewsdiggips`;");
E_C("CREATE TABLE `phome_enewsdiggips` (
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `id` int(11) NOT NULL DEFAULT '0',
  `ips` mediumtext NOT NULL,
  KEY `classid` (`classid`,`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsdiggips` values('3','138',',192.168.1.1,117.23.104.92,116.208.80.147,175.160.46.46,106.44.206.80,110.53.148.230,113.134.224.107,122.233.229.230,113.137.173.234,123.138.40.22,192.168.1.232,119.124.58.170,101.226.89.119,180.153.163.187,27.22.81.39,36.250.225.202,175.44.140.225,123.138.215.126,124.115.105.66,58.101.221.113,221.204.61.178,111.63.29.170,36.63.193.79,124.166.231.49,60.210.102.58,171.15.148.116,218.58.156.212,222.174.55.30,183.251.96.70,66.249.74.98,183.61.34.39,120.37.53.129,120.39.96.137,119.121.150.155,116.26.20.196,202.110.156.213,66.249.74.78,221.199.34.113,119.137.88.50,180.153.163.189,101.226.66.180,180.212.248.13,60.223.226.191,114.250.251.110,60.18.154.6,180.153.163.191,180.153.201.15,36.251.104.160,121.22.249.200,218.28.44.43,122.227.159.226,117.37.124.92,122.142.221.194,59.39.70.78,124.226.0.199,112.228.133.196,221.222.212.207,27.214.36.231,118.213.149.186,117.82.8.178,219.152.115.191,110.229.36.141,218.28.91.42,203.208.60.234,1.202.249.99,61.129.79.26,116.21.153.155,60.223.231.139,203.208.60.202,124.207.242.130,122.13.239.46,27.186.125.31,110.167.24.11,61.133.84.141,42.157.10.24,120.32.216.33,115.60.80.255,119.176.115.170,180.153.161.217,117.25.225.25,117.35.15.134,123.6.196.30,120.34.143.175,171.80.145.73,58.221.154.90,121.232.55.238,42.227.197.245,112.90.150.133,183.29.131.226,59.49.34.83,111.225.26.173,211.162.34.211,58.213.155.2,113.31.38.190,123.117.47.162,221.203.106.204,221.194.177.63,36.59.224.18,36.59.229.137,221.217.28.9,58.20.235.20,14.20.125.138,61.54.242.45,182.150.142.159,139.206.147.196,14.17.37.146,112.90.156.88,60.180.213.60,157.122.145.167,106.37.196.98,182.150.137.205,182.150.138.162,123.185.185.111,180.153.161.55,101.226.33.217,219.130.240.186,36.250.88.97,219.130.241.216,113.137.164.191,27.187.136.147,36.22.0.171,114.97.79.237,123.138.215.226,180.153.214.180,123.138.215.228,112.65.193.13,222.79.124.183,218.194.0.185,115.60.8.113,116.113.77.180,60.213.151.161,49.85.211.165,183.14.112.10,127.0.0.1,');");
E_D("replace into `phome_enewsdiggips` values('3','139',',192.168.1.1,122.233.229.230,27.22.81.39,115.234.68.221,122.13.242.170,49.77.179.70,175.44.140.225,123.138.215.126,58.101.221.113,123.162.175.12,124.166.231.49,171.116.108.230,60.210.102.58,171.15.148.233,171.118.137.239,119.162.225.35,171.116.109.159,36.99.211.108,1.193.78.24,115.60.87.87,111.38.111.69,39.64.70.217,183.251.96.70,221.217.121.91,117.89.3.73,220.162.59.91,66.249.74.98,120.37.53.129,66.249.74.88,60.223.226.191,101.226.33.200,180.153.214.199,114.250.251.110,119.137.86.88,122.229.54.225,66.249.75.154,122.227.159.226,183.93.221.243,124.226.0.199,66.249.65.198,27.200.238.2,183.32.52.137,1.202.249.99,112.65.193.15,203.208.60.215,203.208.60.210,203.208.60.212,203.208.60.207,61.164.65.130,66.249.65.174,66.249.65.182,14.117.101.13,119.6.205.75,42.157.11.55,123.6.196.30,66.249.79.11,58.221.154.90,203.208.60.120,183.29.131.226,123.55.212.19,119.6.205.196,111.161.57.49,121.239.157.96,58.254.168.107,118.76.100.22,123.150.37.101,106.37.196.98,182.150.137.205,112.90.231.103,112.64.235.251,101.226.33.205,171.37.35.95,49.80.161.102,49.85.211.165,183.14.112.10,127.0.0.1,');");
E_D("replace into `phome_enewsdiggips` values('3','137',',192.168.1.1,117.23.104.92,106.44.206.80,122.233.229.230,113.137.173.234,36.250.225.202,36.99.211.108,118.254.236.120,66.249.74.101,120.37.53.129,66.249.74.88,119.137.86.88,123.151.42.57,66.249.67.16,114.66.199.5,122.227.159.226,124.227.37.83,42.232.76.86,203.208.60.200,203.208.60.213,203.208.60.203,182.123.222.53,203.208.60.205,203.208.60.201,203.208.60.216,203.208.60.210,106.42.118.94,203.208.60.207,106.42.116.27,183.27.207.20,171.117.172.53,203.208.60.145,66.249.79.146,66.249.79.2,66.249.79.3,66.249.79.155,66.249.73.138,203.208.60.175,203.208.60.44,203.208.60.111,58.221.154.90,203.208.60.117,203.208.60.125,110.186.159.6,101.226.65.102,66.249.67.91,203.208.60.118,183.29.131.226,182.42.162.17,119.99.147.78,119.130.99.69,218.104.78.197,119.130.96.77,106.37.196.98,121.33.7.1,112.90.231.103,101.226.33.203,101.226.66.172,113.137.164.191,36.22.0.171,171.217.176.190,183.14.113.160,127.0.0.1,');");
E_D("replace into `phome_enewsdiggips` values('3','136',',192.168.1.1,175.160.46.46,110.53.148.230,113.134.224.107,122.233.229.230,192.168.1.232,124.115.105.66,125.39.18.136,1.202.16.79,36.99.211.108,66.249.74.101,120.37.53.129,66.249.74.85,60.223.226.191,180.153.206.35,124.227.37.83,203.208.60.220,42.232.76.86,203.208.60.202,61.164.65.130,171.117.172.53,66.249.79.11,140.237.69.107,119.130.96.77,182.129.168.188,222.79.124.183,');");
E_D("replace into `phome_enewsdiggips` values('3','135',',192.168.1.1,122.233.229.230,115.234.68.221,122.13.242.170,66.249.74.104,120.37.53.129,66.249.74.89,221.199.34.113,203.208.60.220,203.208.60.211,60.255.0.20,223.199.254.172,119.6.205.75,60.255.0.18,140.237.69.107,183.29.131.226,122.13.233.104,66.249.73.218,218.18.156.170,124.163.223.64,101.226.33.206,');");
E_D("replace into `phome_enewsdiggips` values('3','134',',192.168.1.1,36.99.211.108,118.254.236.120,66.249.74.107,120.37.53.129,66.249.74.75,60.223.226.191,180.153.214.182,124.226.0.199,203.208.60.220,203.208.60.127,203.208.60.203,203.208.60.213,203.208.60.204,203.208.60.209,203.208.60.205,203.208.60.214,203.208.60.216,203.208.60.211,203.208.60.162,203.208.60.156,203.208.60.158,113.97.235.154,203.208.60.160,66.249.79.146,66.249.79.154,66.249.79.3,66.249.79.11,66.249.79.155,140.237.69.107,66.249.75.27,203.208.60.164,203.208.60.125,203.208.60.124,203.208.60.119,58.221.154.90,203.208.60.110,203.208.60.118,203.208.60.109,203.208.60.117,66.249.73.237,183.29.131.226,203.208.60.39,203.208.60.52,36.63.213.228,119.130.96.77,123.118.133.233,115.58.223.85,');");
E_D("replace into `phome_enewsdiggips` values('3','133',',192.168.1.1,122.13.242.170,123.138.215.126,124.166.231.49,59.56.255.157,66.249.74.98,120.37.53.129,66.249.74.79,203.208.60.225,42.232.76.86,203.208.60.202,203.208.60.211,203.208.60.210,203.208.60.212,203.208.60.201,203.208.60.205,61.133.84.141,203.208.60.206,203.208.60.215,203.208.60.207,66.249.65.178,203.208.60.145,123.117.18.225,203.208.60.151,203.208.60.161,203.208.60.146,36.32.251.8,36.22.0.171,180.153.163.208,180.153.206.18,182.129.168.188,');");
E_D("replace into `phome_enewsdiggips` values('3','132',',192.168.1.1,113.200.204.158,116.6.95.210,218.94.134.178,66.249.74.91,120.37.53.129,66.249.74.84,122.142.221.194,203.208.60.223,125.71.251.230,203.208.60.203,203.208.60.212,203.208.60.201,203.208.60.200,203.208.60.210,203.208.60.214,66.249.65.182,66.249.65.174,223.199.254.172,111.77.20.52,66.249.67.146,123.6.196.30,66.249.79.146,66.249.79.11,66.249.79.155,182.42.162.17,101.226.125.117,110.185.144.32,118.212.143.200,180.164.114.19,182.129.168.188,');");
E_D("replace into `phome_enewsdiggips` values('5','52',',192.168.1.1,172.56.30.97,66.249.75.186,203.208.60.202,');");
E_D("replace into `phome_enewsdiggips` values('5','58',',106.44.206.80,172.56.30.97,219.133.12.254,66.249.74.98,66.249.74.90,66.249.74.46,114.66.199.5,106.118.164.141,66.249.65.130,203.208.60.208,59.36.164.76,180.153.206.35,111.192.63.159,111.205.187.18,117.21.164.53,101.226.102.97,180.153.201.215,124.163.223.64,');");
E_D("replace into `phome_enewsdiggips` values('4','71',',113.97.48.85,58.251.146.243,123.126.115.229,66.249.74.91,66.249.74.108,66.249.75.170,203.208.60.212,203.208.60.142,');");
E_D("replace into `phome_enewsdiggips` values('5','54',',175.44.140.225,121.31.122.2,66.249.74.99,66.249.75.170,203.208.60.200,66.249.73.237,203.208.60.136,182.150.137.205,');");
E_D("replace into `phome_enewsdiggips` values('5','51',',175.44.140.225,124.202.190.6,121.31.122.2,66.249.74.94,66.249.65.183,113.78.236.82,203.208.60.212,203.208.60.206,203.208.60.26,203.208.60.25,66.249.79.100,66.249.67.100,66.249.65.155,66.249.64.13,66.249.64.11,66.249.65.68,66.249.67.19,66.249.65.71,');");
E_D("replace into `phome_enewsdiggips` values('4','78',',175.44.140.225,66.249.74.96,66.249.74.85,66.249.65.145,203.208.60.211,49.64.119.174,112.90.146.213,119.6.205.75,66.249.73.202,112.90.231.23,');");
E_D("replace into `phome_enewsdiggips` values('5','49',',175.44.140.225,66.249.74.102,66.249.75.186,203.208.60.209,203.208.60.136,');");
E_D("replace into `phome_enewsdiggips` values('3','130',',36.250.171.94,171.118.137.239,66.249.74.87,66.249.74.82,66.249.65.179,203.208.60.226,203.208.60.131,203.208.60.168,203.208.60.205,203.208.60.200,203.208.60.209,203.208.60.199,203.208.60.215,203.208.60.214,106.42.116.27,123.125.35.174,66.249.75.11,203.208.60.175,203.208.60.169,203.208.60.115,203.208.60.119,203.208.60.118,66.249.69.94,114.102.69.161,182.129.168.188,');");
E_D("replace into `phome_enewsdiggips` values('4','75',',123.146.248.222,66.249.74.97,203.208.60.234,203.208.60.206,66.249.73.210,180.121.160.119,203.208.60.142,');");
E_D("replace into `phome_enewsdiggips` values('3','129',',58.101.221.113,171.116.103.136,101.226.61.184,66.249.65.123,66.249.74.92,66.249.74.76,113.78.236.82,203.208.60.204,203.208.60.213,203.208.60.209,203.208.60.203,203.208.60.210,203.208.60.211,203.208.60.207,203.208.60.215,203.208.60.162,66.249.67.154,203.208.60.146,180.164.114.19,');");
E_D("replace into `phome_enewsdiggips` values('5','55',',192.168.1.1,66.249.74.105,203.208.60.225,203.208.60.214,203.208.60.132,');");
E_D("replace into `phome_enewsdiggips` values('4','76',',183.251.96.50,66.249.74.75,66.249.74.74,121.31.40.130,218.83.36.123,203.208.60.213,203.208.60.199,203.208.60.206,203.208.60.205,203.208.60.204,203.208.60.203,203.208.60.214,66.249.65.174,203.208.60.152,203.208.60.149,66.249.67.2,66.249.79.154,66.249.79.11,66.249.79.155,116.90.80.244,66.249.73.130,203.208.60.41,203.208.60.110,203.208.60.119,203.208.60.123,203.208.60.109,117.21.164.53,180.153.201.215,180.153.206.16,');");
E_D("replace into `phome_enewsdiggips` values('4','68',',203.208.60.228,203.208.60.225,203.208.60.208,66.249.73.218,203.208.60.144,');");
E_D("replace into `phome_enewsdiggips` values('3','131',',111.38.111.69,66.249.74.96,66.249.75.170,203.208.60.204,171.36.9.82,203.208.60.132,');");
E_D("replace into `phome_enewsdiggips` values('5','53',',49.77.189.37,101.226.66.177,66.249.74.99,122.5.95.96,203.208.60.229,118.213.149.186,203.208.60.213,66.249.73.202,203.208.60.142,124.163.209.77,14.17.37.161,');");
E_D("replace into `phome_enewsdiggips` values('5','48',',118.254.236.120,66.249.74.94,66.249.65.183,203.208.60.212,203.208.60.135,');");
E_D("replace into `phome_enewsdiggips` values('5','59',',66.249.74.100,66.249.74.90,66.249.67.2,27.211.141.176,203.208.60.129,203.208.60.203,111.201.159.132,203.208.60.205,203.208.60.206,203.208.60.213,203.208.60.214,59.36.164.76,180.153.211.172,66.249.67.154,219.140.129.182,66.249.79.146,66.249.79.154,66.249.79.3,66.249.79.11,66.249.73.138,66.249.75.235,203.208.60.164,203.208.60.119,203.208.60.122,203.208.60.115,203.208.60.48,112.101.159.4,124.160.68.195,113.200.251.130,221.194.177.63,117.21.164.53,180.153.214.199,101.226.102.97,');");
E_D("replace into `phome_enewsdiggips` values('4','69',',66.249.74.108,66.249.75.170,203.208.60.209,203.208.60.155,');");
E_D("replace into `phome_enewsdiggips` values('4','74',',66.249.74.96,66.249.65.183,203.208.60.206,66.249.67.100,');");
E_D("replace into `phome_enewsdiggips` values('4','77',',66.249.74.100,66.249.74.85,66.249.64.44,203.208.60.232,203.208.60.134,203.208.60.127,125.39.114.135,203.208.60.216,203.208.60.202,220.173.130.84,203.208.60.214,203.208.60.213,203.208.60.199,203.208.60.200,203.208.60.207,203.208.60.208,66.249.75.11,203.208.60.176,203.208.60.180,123.117.41.138,119.6.205.196,');");
E_D("replace into `phome_enewsdiggips` values('5','57',',66.249.74.105,203.208.60.224,203.208.60.208,203.208.60.133,60.206.230.76,119.147.146.189,101.226.33.221,');");
E_D("replace into `phome_enewsdiggips` values('5','56',',66.249.74.99,119.5.215.135,182.136.188.34,203.208.60.224,14.159.52.69,118.213.149.186,61.158.152.205,203.208.60.199,203.208.60.209,66.249.73.210,66.249.79.20,123.156.13.163,218.85.210.159,119.130.96.77,');");
E_D("replace into `phome_enewsdiggips` values('5','50',',66.249.74.99,203.208.60.219,203.208.60.205,66.249.73.202,180.162.3.29,163.177.128.245,');");
E_D("replace into `phome_enewsdiggips` values('4','79',',66.249.74.85,66.249.75.160,113.31.46.144,203.208.60.139,203.208.60.201,66.249.79.155,58.221.154.90,119.130.99.69,180.162.3.29,222.72.51.26,');");
E_D("replace into `phome_enewsdiggips` values('4','72',',203.208.60.230,203.208.60.211,66.249.73.210,203.208.60.135,');");
E_D("replace into `phome_enewsdiggips` values('4','73',',203.208.60.233,203.208.60.204,66.249.73.202,203.208.60.129,182.150.137.205,');");
E_D("replace into `phome_enewsdiggips` values('4','70',',203.208.60.227,203.208.60.208,203.208.60.127,');");

require("../../inc/footer.php");
?>