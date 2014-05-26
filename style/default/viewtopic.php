<div style="float:left;clear:left;width:850px;height:auto;background:#0B93D6;margin:10px 0px 0px 0px;padding:0px 0px 10px 0px;">
					<a href="index.php" style="text-decoration:none;display:block;color:#fff;width:80px;height:30px;margin:10px 0px 0px 10px;float:left;clear:left;"><?php echo $_label['home']; ?></a>
					<a style="text-decoration:none;display:block;color:#fff;width:40px;height:30px;margin:10px 0px 0px 10px;float:left;clear:none;"><<<</a>
					
					<a href="viewforum.php?id=<?php echo $fid;?>" style="text-decoration:none;display:block;color:#fff;width:200px;height:30px;margin:10px 0px 0px 10px;"><?php echo $f_row['name'] ;?></a>
					
					<div style="width:830px;height:auto;float:left;clear:left;margin:0px 10px 0px 10px;background:#D4E1EC;padding:0px 0px 10px 0px;">
						<h2 style="color:#105289;font-size:20px;margin:10px 0px 0px 10px;"><?php echo $t_row['title'] ;?></h2>
						<?php
							$uid=$t_row['uid'];
							$u_row=$sqlc->setSql("select * from `users` where `id`='$uid'")->exeC()->getOne();
						?>
						<p style="margin:10px 0px 0px 10px;font-size:13px;">
						by <a style="color:#105289;text-decoration:none;" href="user.php?id=<?php echo $t_row['uid'] ;?>"><?php echo $u_row['name'] ;?></a> >> <time><?php echo $t_row['time'] ;?></time> viewed:<?php echo $t_row['view'] ;?>
						<?php
						if(isset($_SESSION['u'])){
							if($_SESSION['u']['admin']==1){
								?>
								<?php echo $_label['top']; ?>(<?php echo $t_row['top']; ?>)
								<a style="text-decoration:none;color:#105289;" href="toppic.php?f=<?php echo $fid;?>&t=<?php echo $tid ;?>">+</a> 
								<a style="text-decoration:none;color:#105289;margin:0px 0px 0px 10px;" href="untoppic.php?f=<?php echo $fid;?>&t=<?php echo $tid ;?>">-</a>
								
								<?php
							}
							if($_SESSION['u']['id']==$t_row['uid']||$_SESSION['u']['admin']==1){
								?>
								<a style="text-decoration:none;color:#105289;margin:0px 0px 0px 10px;" href="edittopic.php?f=<?php echo $fid;?>&t=<?php echo $tid ;?>"><?php echo $_label['edit']; ?></a> 
								<a style="text-decoration:none;color:#f00;" href="deletetopic.php?f=<?php echo $fid;?>&t=<?php echo $tid ;?>"><?php echo $_label['delete']; ?></a>
								<?php
							}
						}
						?>
						</p>
						<style>
						p{
							word-wrap:break-word;
							text-justify : auto; 
							text-align:justify; 
							width:808px;
							text-justify:inter-ideograph;line-height:3ex;
						}
						</style>
						<div style="width:808px;float:left;clear:left;margin:10px 0px 0px 10px;"><?php echo $t_row['text'] ;?></div>
					</div>
					
					<?php
					//
					require_once 'codetyphon/mysql.class.php';
					require_once 'codetyphon/text.class.php';
					$arr=$sqlc->setSql("select * from `reply` where `tid`='$tid'")->exeC()->getArray();
					foreach($arr as $r_row ){
							?>
							<div style="width:830px;height:auto;float:left;clear:left;margin:10px 10px 0px 10px;background:#D4E1EC;padding:0px 0px 10px 0px;">
								<p style="color:#105289;font-size:13px;margin:10px 0px 0px 10px;"><?php echo $_label['reply']; ?> <?php echo $_label['by']; ?> 
								<?php
									$reply_uid=$r_row['uid'] ;
									$reply_u_result=mysql_query("select * from `users` where `id`='$reply_uid'");
									if($reply_u_row = mysql_fetch_array($reply_u_result)){
										?>
										<a href="user.php?id=<?php echo $reply_uid ;?>" style="color:#105289;text-decoration:none;"><?php echo $reply_u_row['name'] ;?></a>
										<?php
										if(isset($_SESSION['u'])){
											if($_SESSION['u']['id']==$r_row['uid']||$_SESSION['u']['id']==$t_row['uid']||$_SESSION['u']['admin']==1){
												?>
												<a style="text-decoration:none;color:#f00;" href="deletereply.php?r=<?php echo $r_row['id'] ;?>&f=<?php echo $fid;?>&t=<?php echo $tid ;?>"><?php echo $_label['delete']; ?></a>
												<?php
											}
										}
										?>
										<?php
									}
								?>
								</p>
								<pre style="margin:10px 0px 0px 10px;">
									<?php echo $r_row['text'] ;?>
								</pre>
							</div>
							<?php
						}
					?>
					
					
					<?php
					if(isset($_SESSION['u'])){
					?>
					<div style="width:830px;height:auto;float:left;clear:left;margin:10px 10px 0px 10px;background:#D4E1EC;padding:0px 0px 10px 0px;">
						<h2 style="color:#105289;font-size:20px;margin:10px 0px 0px 10px;"><?php echo $_label['reply']; ?></h2>
						<p style="margin:0px 0px 0px 10px;font-size:13px;"><?php echo $_SESSION['u']['name'];?> &nbsp;<?php echo $_label['from']; ?>&nbsp; <?php echo long2ip($ip);?></p>
						<form method="post" style="margin:10px 0px 0px 10px;">
							<textarea id="reply"  name="reply" style="width:808px;height:100px;"></textarea>
							<input type="submit" value="<?php echo $_label['submit']; ?>" style="margin:10px 0px 0px 0px;" />
						</form>
					</div>
					<script>
						CKEDITOR.replace('reply',{ height:'240px',width:'808px'});
					</script>
					<?php
					}
					?>
					
				</div>