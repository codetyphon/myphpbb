<?php
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 4); 
$lang_code='en';
if (preg_match("/zh-c/i", $lang)){
	$lang_code='zh';
}else if (preg_match("/zh/i", $lang)){
	$lang_code='zh';
}else if (preg_match("/en/i", $lang)){  
	//echo "English";  
	$lang_code='en';
}else if (preg_match("/fr/i", $lang)){ 
	//echo "French";  
	$lang_code='fr';
}else if (preg_match("/de/i", $lang)){ 
	//echo "German";  
	$lang_code='de';
}else if (preg_match("/jp/i", $lang)){
	//echo "Japanese"; 
	$lang_code='ja';	
}else if (preg_match("/ko/i", $lang)){ 
	//echo "Korean"; 
	$lang_code='ko';
}else if (preg_match("/es/i", $lang)){
	//echo "Spanish";
	$lang_code='es';
}else if (preg_match("/sv/i", $lang)){
	//echo "Swedish";  
	$lang_code='sv';
}else{
	//echo $_SERVER["HTTP_ACCEPT_LANGUAGE"];
}
if(file_exists('lang'.$lang_code.'.php')){
	$lang_code='en';
}
require_once 'lang/'.$lang_code.'.php';
?>
<style>
	div,img{
		border-radius:15px;
	}
</style>
<div style="width:850px;height:129px;background:url(images/banner.jpg)">
			<div style="width:200px;height:40px;font-size:35px;color:#fff;font-weight:900;margin:30px 0px 0px 10px;">pascalchina</div>
		</div>

		<div style="width:100%;height:auto;background:#CADCEB;font-size:16px;color:#105289;text-align:left;float:left;clear:left;margin:0px 0px 0px 0px;padding:10px 0px 10px 0px;">
			<?php 
			if(isset($_SESSION['u'])){
				?>
				<div style="margin:0px 0px 0px 10px;">
					<?php 
					if($_SESSION['u']['admin']==1){
						?>
						<?php echo $_label['admin']; ?>:<?php echo $_SESSION['u']['name'];?>
						<?php
					}else{
						?>
						<?php echo $_label['username']; ?>:<?php echo $_SESSION['u']['name'];?>
						<?php
					}
					?>
					
					<a href="logout.php" style="color:#105289;text-decoration:none;"><?php echo $_label['logout']; ?></a>
				</div>
				<?php
			}else{
				?>
				<form method="post" action="login.php" style="float:left;clear:left;margin:0px 0px 0px 10px;">
					<?php echo $_label['username']; ?> : <input type="text" name="username" />
					<?php echo $_label['password']; ?> : <input type="password" name="password" />
					<input type="submit" value="<?php echo $_label['login']; ?>" />
				</form>
				<a href="register.php" style="text-decoration:none;display:block;float:left;clear:none;color:#105289;margin:0px 0px 0px 20px;"><?php echo $_label['register']; ?></a>
				<?php
			}
			?>
		</div>