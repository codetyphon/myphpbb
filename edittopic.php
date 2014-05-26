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
		if($t_row['uid']==$_SESSION['u']['id']||$_SESSION['u']['admin']==1){
			if(isset($_POST['title'])){
				$text=$_POST['text'];
				$title=$_POST['title'];
				mysql_query("UPDATE `tops` SET `text` = '$text',`title`='$title' WHERE `id` ='$tid';");
				header("location:viewtopic.php?f=".$fid."&t=".$tid);
			}
		}else{
			exit;
		}
	}
}
$f_result=mysql_query("select * from `groups` where `id`='$fid'");
if($f_row = mysql_fetch_array($f_result)){

}else{
	exit;
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
<title><?php echo $config_row['website_title'];?></title>
</head>
<body>
<div style="width:100%;height:auto;text-align:center;">
	
	<div style="width:850px;height:auto;margin:10px 0px 0px 0px;margin:0 auto;text-align:left;">
		<?php require_once 'style/'.$config_row['style'].'/top.php';?>

		
		<div style="float:left;clear:left;width:850px;height:auto;margin:0px 0px 0px 0px;text-align:left;">

			<?php require_once 'style/'.$config_row['style'].'/edittopic.php';?>	

		</div>
		

		<?php require_once 'style/'.$config_row['style'].'/footer.php';?>
		</body>
	</div>

</div>
</html>
<script>
	CKEDITOR.replace('text',{ height:'240px',width:'808px'});
</script>