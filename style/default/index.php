<?php
$array_groups=act_forum_get_forums(9);
foreach($array_groups as $groups_row ){
	$group_id=$groups_row['id'];
	?>
	<div style="float:left;clear:left;width:850px;height:auto;background:#0B93D6;margin:10px 0px 0px 0px;padding:0px 0px 10px 0px;">
		<a href="viewforum.php?id=<?php echo $group_id;?>" style="text-decoration:none;display:block;color:#fff;width:830px;height:30px;margin:10px 0px 0px 10px;"><?php echo $groups_row['name'] ;?></a>
		<div style="width:830px;height:auto;float:left;clear:left;margin:0px 10px 0px 10px;background:#D4E1EC;">
		<?php
		$array_topics=act_topic_get_topics_by_forumId($group_id,5);
			foreach($array_topics as $tops_row){
				$images=html_get_images($tops_row['text']);
				foreach($images as $pic){
					?>
					<a href="viewtopic.php?f=<?php echo $group_id ;?>&t=<?php echo $tops_row['id'];?>" style="color:#105289;text-decoration:none;">
						<img border="0" src=<?php echo $pic;?> width="200" />
					</a>
					<?php
					}
				?>
				<div style="width:810px;height:15px;float:left;clear:left;margin:10px 0px 0px 10px;padding:0px 0px 10px 0px;">
					<a href="viewtopic.php?f=<?php echo $group_id ;?>&t=<?php echo $tops_row['id'];?>" style="color:#105289;text-decoration:none;"><?php echo $tops_row['title'];?></a>
				</div>
			<?php
			}
		?>
		</div>
	</div>
	<?php
}
?>