<?php
function sql_exec($sql){
    $result=mysql_query($sql);
    return $result;
}

function sql_get_Array($sql){
    $array=new ArrayObject;
    $sql_result=mysql_query($sql);
    while($row = mysql_fetch_array($sql_result)){
	$array[]=$row;
    }
    return $array;
}
function sql_get_one($sql){
    $sql_result=mysql_query($sql);
    if($row = mysql_fetch_array($sql_result)){
	return $row;
    }else{
	return 0;
    }
}
?>