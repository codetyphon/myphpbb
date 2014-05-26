<?php
require_once 'conn.php';

if(!isset($_GET['t'])){
	exit;
}
if(!isset($_GET['f'])){
	exit;
}
if(!isset($_GET['r'])){
	exit;
}

$tid=$_GET['t'];
$fid=$_GET['f'];
$rid=$_GET['r'];
$t_result=mysql_query("select * from `tops` where `id`='$tid'");
if($t_row = mysql_fetch_array($t_result)){
}else{
	//echo "select * from `tops` where `id`='$tid'";
	exit;
}



$r_result=mysql_query("select * from `reply` where `id`='$rid'");
if($r_row = mysql_fetch_array($r_result)){
}else{
	//echo "select * from `reply` where `id`='$rid'";
	exit;
}

//echo "select * from `reply` where `id`='$rid'";
if(isset($_SESSION['u'])){
	if($_SESSION['u']['id']==$r_row['uid']||$_SESSION['u']['id']==$t_row['uid']||$_SESSION['u']['admin']==1){
		mysql_query("delete from `reply` WHERE `id` ='$rid';");
		//echo "delete from `reply` WHERE `id` ='$rid';";
		header("location:viewtopic.php?f=".$fid."&t=".$tid);
		//echo "delete from `reply` WHERE `id` ='$rid';";
	}
}else{
	echo 'err';
}
?>