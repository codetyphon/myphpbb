<?php require_once 'conn.php';
if(!isset($_GET['t'])){
	exit;
}
if(!isset($_GET['f'])){
	exit;
}
$tid=$_GET['t'];
$fid=$_GET['f'];

$t_result=mysql_query("select * from `tops` where `id`='$tid' and `display`='1'");
if($t_row = mysql_fetch_array($t_result)){
	if(isset($_SESSION['u'])){
		if($_SESSION['u']['admin']==1){
			mysql_query("UPDATE `tops` SET `top` = top+1 WHERE `tops`.`id` ='$tid';");
			header("location:viewforum.php?id=".$fid);
		}
	}
}