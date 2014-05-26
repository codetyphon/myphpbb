<?php
class Res{
	var $arr;
	public function reSet(){
		$this->arr=new ArrayObject;
	}
	public function addKey($key){
		$this->arr[]=$key;
		return $this;
	}
	public function checkGetNull(){
		foreach ($this->arr as $res) {
			if(!isset($_GET[$res])){
				exit;
			}
		}
	}
	public function checkPostNull(){
		foreach ($this->arr as $res) {
			if(!isset($_POST[$res])){
				exit;
			}
		}
	}
	public function getKey($key){
		if(!isset($_GET[$key])){
			exit;
		}
		return $_GET[$key];
	}
}
$res=new Res;
?>