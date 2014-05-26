<?php
class Text{
	var $html;
	var $images;
	public function setHtml($html){
		$this->html=$html;
		return $this;
	}
	public function getImages(){
		$this->images=new ArrayObject;
		preg_match_all("/<p>.*src=\"([^^]*?)\".*<\/p>/i",$this->html,$this->images);
		return $this->images[1];
	}
	public function getFirstImage(){
		$this->images=new ArrayObject;
		preg_match_all("/<p>.*src=\"([^^]*?)\".*<\/p>/i",$this->html,$this->images);
		return $this->images[1][0];
	}
}
$text=new Text;
?>
