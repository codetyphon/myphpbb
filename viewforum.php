<?php require_once 'conn.php';
if(!isset($_GET['id'])){
	exit;
}
require_once 'codetyphon/mysql.class.php';
require_once 'codetyphon/text.class.php';
require_once 'include/mysql.php';
require_once 'include/text.php';
require_once 'action/forum.php';
require_once 'action/topic.php';
require_once 'action/user.php';
$fid=$_GET['id'];
$f_row=$sqlc->setSql("select * from `groups` where `id`='$fid'")->exeC()->getOne();



if(isset($_POST['title'])){
	if(isset($_SESSION['u'])){
		$uid=$_SESSION['u']['id'];
		$title=$_POST['title'];
		$text=$_POST['text'];
		$sqlc->setSql("INSERT INTO `tops` (
		`id` ,
		`gid` ,
		`title` ,
		`time` ,
		`ip` ,
		`uid` ,
		`text` 
		)
		VALUES (
		NULL , '$fid', '$title', 
		CURRENT_TIMESTAMP , '$ip', '$uid', '$text'
		);")->exeC();
		header("location:viewtopic.php?f=".$fid."&t=".mysql_insert_id());
		exit;
	}else{
		exit;
	}
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
<script src="ckeditor/ckeditor.js"></script>
<title><?php echo $f_row['name'];?></title>
</head>
<body>
<div style="width:100%;height:auto;text-align:center;">
	
	<div style="width:850px;height:auto;margin:10px 0px 0px 0px;margin:0 auto;text-align:left;">
		<?php require_once 'style/'.$config_row['style'].'/top.php';?>
		<div style="float:left;clear:left;width:850px;height:auto;margin:0px 0px 0px 0px;text-align:left;">
			<?php require_once 'style/'.$config_row['style'].'/admin/viewforum.php';?>
			<?php require_once 'style/'.$config_row['style'].'/viewforum.php';?>
		</div>
		<?php require_once 'style/'.$config_row['style'].'/footer.php';?>
		</body>
	</div>

</div>
</html>