<div style="float:left;clear:left;width:850px;height:auto;background:#0B93D6;margin:10px 0px 0px 0px;padding:0px 0px 10px 0px;">
<?php
	//2014-04-16
	if(isset($_SESSION['u'])){
		if($_SESSION['u']['admin']==1){
			//
			if(isset($_POST['upForum'])){
					$forumName=$_POST['forumName'];
					
					$sqlc->setSql("UPDATE  `groups` SET  `name` =  '$forumName' WHERE  `groups`.`id` =$fid;")->exeC();
					header("location:viewforum.php?id=".$fid);
					exit;
			}
			if(isset($_POST['addForum'])){
					$forumName=$_POST['forumName'];
					
					$sqlc->setSql("INSERT INTO  `groups` (
`id` ,
`name` ,
`read_rank` ,
`post_rank` ,
`display_rank` ,
`user_id` ,
`time`
)
VALUES (
NULL ,  '$forumName',  '0',  '0',  '0',  '0', 
CURRENT_TIMESTAMP
);")->exeC();
					header("location:viewforum.php?id=".mysql_insert_id());
					exit;
			}
			//
			?>
			edit forum
			<form method="post">
				<input type="hidden" name="upForum" />
				<input type="text" name="forumName" value="<?php echo $f_row["name"];?>" />
				<input type="submit" value="updateForum" />
			</form>
			<form method="post">
				<input type="hidden" name="addForum" />
				<input type="text" name="forumName"  />
				<input type="submit" value="add a Forum" />
			</form>
			<?php
		}	
	}
?>
</div>