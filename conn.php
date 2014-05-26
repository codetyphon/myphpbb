<?php
session_start();
define('mysql_server','localhost');
define('mysql_root','pingzili_dashan');
define('mysql_pass','7OGySHv5');//7OGySHv5
define('mysql_bass','pingzili_dashan');
$con = mysql_connect(mysql_server,mysql_root,mysql_pass);
if (!$con){
  die('Could not connect: ' . mysql_error());
  exit;
}
mysql_select_db(mysql_bass,$con);
mysql_query("set names utf8");
$ip = ip2long($_SERVER["REMOTE_ADDR"]);//ip
$host_domain='http://www.dashanxuetang.com/';
$config_result=mysql_query("select * from `config` where id =1");
if($config_row = mysql_fetch_array($config_result)){
	
}else{
	echo 'error code #5012';
	exit;
}
/*
if(isset($_SESSION['u'])){
}else{
  
}
*/
exit;
?>
