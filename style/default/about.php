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
		<?php require_once 'top.php';?>

		
		<div style="float:left;clear:left;width:850px;height:auto;margin:0px 0px 0px 0px;text-align:left;">
				<div style="float:left;clear:left;width:850px;height:auto;background:#0B93D6;margin:10px 0px 0px 0px;padding:0px 0px 10px 0px;">
					<a href="index.php" style="text-decoration:none;display:block;color:#fff;width:80px;height:30px;margin:10px 0px 0px 10px;float:left;clear:left;"><?php echo $_label['home']; ?></a>
					<a style="text-decoration:none;display:block;color:#fff;width:200px;height:30px;margin:10px 0px 0px 10px;float:left;clear:none;"><<<&nbsp;&nbsp;&nbsp;about</a>
					<div style="width:830px;height:auto;float:left;clear:left;margin:0px 10px 0px 10px;background:#D4E1EC;padding:0px 0px 10px 0px;">
						<h2 style="color:#105289;font-size:20px;margin:10px 0px 0px 10px;">about</h2>
						<p>service@codeTyphon.com</p>
					</div>
					<div style="width:830px;height:auto;float:left;clear:left;margin:10px 10px 0px 10px;background:#D4E1EC;padding:0px 0px 10px 0px;">
						<h2 style="color:#105289;font-size:20px;margin:10px 0px 0px 10px;">about</h2>
						<p>service@codeTyphon.com</p>
					</div>
					<div style="width:830px;height:auto;float:left;clear:left;margin:10px 10px 0px 10px;background:#D4E1EC;padding:0px 0px 10px 0px;">
						<h2 style="color:#105289;font-size:20px;margin:10px 0px 0px 10px;">about</h2>
						<p>service@codeTyphon.com</p>
					</div>
				</div>

		</div>
		

		<?php require_once 'footer.php';?>
		</body>
	</div>

</div>
</html>
