				<div style="float:left;clear:left;width:850px;height:auto;background:#0B93D6;margin:10px 0px 0px 0px;padding:0px 0px 10px 0px;">
					<a href="index.php" style="text-decoration:none;display:block;color:#fff;width:80px;height:30px;margin:10px 0px 0px 10px;float:left;clear:left;"><?php echo $_label['home']; ?></a>
					<a style="text-decoration:none;display:block;color:#fff;width:200px;height:30px;margin:10px 0px 0px 10px;float:left;clear:none;"><<<&nbsp;&nbsp;&nbsp;<?php echo $_label['register']; ?></a>
					<div style="width:830px;height:auto;float:left;clear:left;margin:0px 10px 0px 10px;background:#D4E1EC;padding:0px 0px 10px 0px;">
						<h2 style="color:#105289;font-size:20px;margin:10px 0px 0px 10px;"><?php echo $_label['register']; ?></h2>
						<form style="margin:10px 0px 0px 10px;" method="post">
						<style>
							p{
								margin:10px 0px 0px 0px;
							}
						</style>
							<p><?php echo $_label['username']; ?> :</p>
							<p><input type="text" name="Username" /><span style="margin:0px 0px 0px 10px;color:#f00;"><?php echo $msg ;?></span></p>
							<p><?php echo $_label['password']; ?> :</p>
							<p><input type="text" name="Password" /></p>
							<p><input type="submit" value="<?php echo $_label['register']; ?>" /></p>
						</form>
					</div>
					
				</div>