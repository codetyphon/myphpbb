<?php require_once 'conn.php';
$msg='';
if(isset($_POST['Username'])){
	$username=$_POST['Username'];
	if($username==''){
		$msg='username NULL';
	}else{
		$u_result=mysql_query("select * from `users` where `name`='$username'");
		if($u_row = mysql_fetch_array($u_result)){
			$msg="username can't be reg.";
		}else{
			$password=$_POST['Password'];
			mysql_query("INSERT INTO `users` (
				`id` ,
				`regip` ,
				`name` ,
				`password` ,
				`time` 
				)
				VALUES (
				NULL , '$ip', '$username', '$password', 
				CURRENT_TIMESTAMP 
				);");
				$_SESSION['u']['name']=$username;
				$_SESSION['u']['admin']=0;
				$_SESSION['u']['password']=$password;
				$_SESSION['u']['id']=mysql_insert_id();
				header("location:register_success.php");
				exit;
		}
	}
}else{
	//$msg='username NULL';
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<link href="style.scc" type="text/css" rel="stylesheet" />
<style>
* {
	margin:0;
	padding:0;
}
h2{
	font-size:16px;
	margin:5px 0px 0px 5px;
}
</style>
<title><?php echo $config_row['website_title'];?></title>
<script type="text/javascript"> 
</script>
</head>
<body>
<div style="width:100%;height:auto;text-align:center;">
	
	<div style="width:850px;height:auto;margin:10px 0px 0px 0px;margin:0 auto;text-align:left;">
		<?php require_once 'style/'.$config_row['style'].'/top.php';?>

		
		<div style="float:left;clear:left;width:850px;height:auto;margin:0px 0px 0px 0px;text-align:left;">

			<?php require_once 'style/'.$config_row['style'].'/register.php';?>

		</div>
		

		<?php require_once 'style/'.$config_row['style'].'/footer.php';?>
		</body>
	</div>

</div>
</html>
