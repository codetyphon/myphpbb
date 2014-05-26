<?php
function user_get_user_count(){
  return mysql_num_rows(sql_exec("SELECT * FROM `users`"));
}
function user_rank_add_by_userId($id){
  sql_exec("update `users` set `rank`=rank+1 where `id`='$id' and `rank`<50");
}
function user_get_user_by_userId($id){
  return sql_get_one("select * from `users` where `id`='$id'");
}
function user_get_user_by_topicId($id){
}
function user_get_userPass_by_userId($id){
  $target_user=sql_get_one("select * from `users` where `id`='$id'");
  return $target_user["password"]; 
}
function user_add_user($username,$userPass){
}
?>