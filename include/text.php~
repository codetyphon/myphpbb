<?php
function html_get_images($html){
  $images=new ArrayObject;
  preg_match_all("/<p>.*src=\"([^^]*?)\".*<\/p>/i",$html,$images);
  return $images[1];
}
function html_get_one_image($html){
  $images=html_get_images($html);
  return $images[0];
}
?>
