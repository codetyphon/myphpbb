<?php require_once 'conn.php';
$msg='';
if(isset($_POST['username'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$u_result=mysql_query("select * from `users` where `name`='$username'");
	if($u_row = mysql_fetch_array($u_result)){
		if($u_row['password']==$password){
			$_SESSION['u']=$u_row;
			header("location:index.php");
		}
	}else{
	}
}else{
}
?>