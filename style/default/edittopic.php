<div style="float:left;clear:left;width:850px;height:auto;background:#0B93D6;margin:10px 0px 0px 0px;padding:0px 0px 10px 0px;">
					<a href="index.php" style="text-decoration:none;display:block;color:#fff;width:80px;height:30px;margin:10px 0px 0px 10px;float:left;clear:left;"><?php echo $_label['home']; ?></a>
					<a style="text-decoration:none;display:block;color:#fff;width:40px;height:30px;margin:10px 0px 0px 10px;float:left;clear:none;"><<<</a>
					
					<a href="viewforum.php?id=<?php echo $fid;?>" style="text-decoration:none;display:block;color:#fff;width:200px;height:30px;margin:10px 0px 0px 10px;"><?php echo $f_row['name'] ;?></a>
					
					<div style="width:830px;height:auto;float:left;clear:left;margin:0px 10px 0px 10px;background:#D4E1EC;padding:0px 0px 10px 0px;">
						<form method="post">
						<h2 style="color:#105289;font-size:20px;margin:10px 0px 0px 10px;">
						<input style="width:806px;" type="text" name="title" value="<?php echo $t_row['title'] ;?>" />
						</h2>
						<?php
							$uid=$t_row['uid'];
							$u_result=mysql_query("select * from `users` where `id`='$uid'");
							if($u_row = mysql_fetch_array($u_result)){
							}
						?>
						<p style="margin:10px 0px 0px 10px;font-size:13px;">by <a style="color:#105289;text-decoration:none;" href="user.php?id=<?php echo $t_row['uid'] ;?>"><?php echo $u_row['name'] ;?></a> >> <?php echo $t_row['time'] ;?></p>
						<pre style="float:left;clear:left;margin:10px 0px 0px 10px;">
						<textarea id="text" name="text"><?php echo $t_row['text'] ;?></textarea>
						</pre>
						<p>
						<input type="submit" value="<?php echo $_label['submit']; ?>" />
						</p>
						</form>
					</div>
					

					
					
					
					
				</div>