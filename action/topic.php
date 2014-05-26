<?php
function act_topic_get_topic_by_topicId($topicId){
  return sql_get_one("select * from `tops` where `id`='$topicId' and `display`='1'");
}
function act_topic_up_topicView_by_topicId($topicId){
  sql_exec("update `tops` set `view`=view+1 where `id`='$topicId'");
}


function act_topic_get_topics_by_forumId($forumId,$number){
  return sql_get_Array("select * from `tops` where `gid`='$forumId' and `display`='1' order by top desc,id desc limit 0,$number");
}
function act_topic_add_topic($title,$text){
}
function act_topic_delete_topic_by_topicId($topicId,$user_id){
}
//
function act_topic_update_topic_title($topicId,$user_id,$title){
}
function act_topic_update_topic_text($topicId,$user_id,$text){
}
function act_reply_add($topicId,$replyText,$userId,$userIp){
  sql_exec("INSERT INTO `reply` (`id` ,`tid` ,`time` ,`text` ,`uid` ,`ip` )VALUES (NULL , '$topicId', CURRENT_TIMESTAMP , '$replyText', '$userId', '$userIp');");
}
?>