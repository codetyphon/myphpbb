<?php require_once 'conn.php' ?>
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
p{
	margin:10px 0px 0px 10px;
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
			<?php require_once 'style/'.$config_row['style'].'/register_success.php';?>
		</div>
		<?php require_once 'style/'.$config_row['style'].'/footer.php';?>
		</body>
	</div>
</div>
</html>
