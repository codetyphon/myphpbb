<div style="float:left;clear:left;width:850px;height:auto;background:#0B93D6;margin:10px 0px 0px 0px;padding:0px 0px 10px 0px;">
					<a href="index.php" style="text-decoration:none;display:block;color:#fff;width:auto;height:30px;margin:10px 0px 0px 10px;float:left;clear:left;"><?php echo $_label['home']; ?></a>
					<a style="text-decoration:none;display:block;color:#fff;width:30px;height:30px;margin:10px 0px 0px 10px;float:left;clear:none;"><<<</a>
					<a href="viewforum.php?id=<?php echo $fid;?>" style="text-decoration:none;display:block;color:#fff;width:200px;height:30px;margin:10px 0px 0px 10px;float:left;clear:none;"><?php echo $f_row['name'] ;?></a>
					<div style="width:830px;height:auto;float:left;clear:left;margin:0px 10px 0px 10px;background:#D4E1EC;">
					<?php
					
					$array_tops=act_topic_get_topics_by_forumId($fid,9);
					foreach($array_tops as $tops_row ){
						$images=html_get_images($tops_row['text']);
						foreach($images as $pic){
						?>
						<a href="viewtopic.php?f=<?php echo $fid ;?>&t=<?php echo $tops_row['id'];?>" style="color:#105289;text-decoration:none;">
							<img border="0" src=<?php echo $pic;?> width="200" />
						</a>
						<?php
					}
					?>
						<div style="width:810px;height:15px;float:left;clear:left;margin:10px 0px 0px 10px;padding:0px 0px 10px 0px;">
							<a href="viewtopic.php?f=<?php echo $fid ;?>&t=<?php echo $tops_row['id'];?>" style="color:#105289;text-decoration:none;"><?php echo $tops_row['title'];?></a>
						</div>
					<?php
					}
					?>
					</div>
					<?php
					if(isset($_SESSION['u'])&&$_SESSION['u']['rank']>2){
					?>
					<div style="width:830px;height:auto;float:left;clear:left;margin:10px 10px 0px 10px;background:#D4E1EC;padding:0px 0px 10px 0px;">
						<h2 style="color:#105289;font-size:20px;margin:10px 0px 0px 10px;"><?php echo $_label['post']; ?></h2>
						<p style="margin:0px 0px 0px 10px;font-size:13px;"><?php echo $_SESSION['u']['name'];?> &nbsp;<?php echo $_label['from']; ?>&nbsp; <?php echo long2ip($ip);?></p>
						<form method="post" style="margin:10px 0px 0px 10px;">
							<input type="text" name="title" style="width:806px;height:20px;margin:0px 0px 0px 0px;" />
							<textarea id="text" name="text" style="width:500px;height:100px;"></textarea>
							<input type="submit" value="<?php echo $_label['submit']; ?>" style="margin:10px 0px 0px 0px;" />
						</form>
					</div>
					<script>
						CKEDITOR.replace('text',{ height:'240px',width:'808px'});
					</script>
					<?php
					}
					?>
				</div>