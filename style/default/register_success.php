				<div style="float:left;clear:left;width:850px;height:auto;background:#0B93D6;margin:10px 0px 0px 0px;padding:0px 0px 10px 0px;">
					<a href="index.php" style="text-decoration:none;display:block;color:#fff;width:80px;height:30px;margin:10px 0px 0px 10px;float:left;clear:left;"><?php echo $_label['home']; ?></a>
					<a style="text-decoration:none;display:block;color:#fff;width:200px;height:30px;margin:10px 0px 0px 10px;float:left;clear:none;"><<<&nbsp;&nbsp;&nbsp;<?php echo $_label['register_success']; ?></a>
					<div style="width:830px;height:auto;float:left;clear:left;margin:0px 10px 0px 10px;background:#D4E1EC;padding:0px 0px 10px 0px;">
						<h2 style="color:#105289;font-size:20px;margin:10px 0px 0px 10px;"><?php echo $_label['register_success']; ?></h2>
						<p><?php echo $_label['username']; ?>&nbsp;:&nbsp;<?php echo $_SESSION['u']['name'];?></p>
						<p><?php echo $_label['password']; ?>&nbsp;:&nbsp;<?php echo $_SESSION['u']['password'];?></p>
						<p><a href="index.php" style="color:#105289;text-decoration:none;"><?php echo $_label['click_here_to_return_index']; ?></a></p>
					</div>
				</div>