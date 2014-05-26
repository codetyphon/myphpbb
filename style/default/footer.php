<?php
if(isset($_SESSION['ip'])){
	if($_SESSION['ip']==$ip){
	}else{
		
	}
}else{
	$_SESSION['ip']=$ip;
	mysql_query("INSERT INTO `index_ips` (`id` ,`ip` ,`time` )VALUES (NULL , '$ip', CURRENT_TIMESTAMP );");
}
?>



<div style="width:100%;height:auto;background:#CADCEB;font-size:16px;color:#105289;text-align:center;float:left;clear:left;margin:20px 0px 0px 0px;padding:10px 0px 10px 0px;">
		Powered by www.codeTyphon.com <?php echo user_get_user_count();?> <a href="about.php" style="color:#105289;text-decoration:none;"><?php echo $_label['about']; ?></a>  <?php echo $_label['viewed'];?>:<?php echo mysql_num_rows(mysql_query("select * from `index_ips`")) ;?></div>
		