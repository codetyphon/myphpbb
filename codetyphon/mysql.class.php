<?php
class Mysql{
	var $result;
	var $sql;
	var $array;
	public function getConn(){
		
	}
	public function exeC(){
		$this->result=mysql_query($this->sql);
		return $this;
	}
	public function getResult(){
		return $this->result;
	}
	public function setSql($sql){
		$this->sql=$sql;
		return $this;
	}
	public function getArray(){
		$this->array=new ArrayObject;
		while($groups_row = mysql_fetch_array($this->result)){
			$this->array[]=$groups_row;
		}
		return $this->array;
	}
	public function getOne(){
		return mysql_fetch_array($this->result);
	}
}
$sqlc=new Mysql;
?>