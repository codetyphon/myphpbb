<?php
//2014-04-22
function act_forum_get_forums($number){
  return sql_get_Array("select * from `groups` order by id limit 0,$number");
}
function act_forum_get_forum_by_forumId($forumId){
  return sql_get_one("select * from `groups` where `id`='$forumId'");
}
function act_forum_get_forum_by_topicId($id){
}
function act_forum_get_replys_by_forumId($id){
}
function act_forum_get_reply_by_forumId($id){
}
?>