<?php
require_once '../conn.php';
//$host_domain='http://127.0.0.1/ct';
if ((($_FILES["upload"]["type"] == "image/gif")|| ($_FILES["upload"]["type"] == "image/x-png")|| ($_FILES["upload"]["type"] == "image/x-png")|| ($_FILES["upload"]["type"] == "image/jpeg")|| ($_FILES["upload"]["type"] == "image/pjpeg"))){
	if ($_FILES["upload"]["error"] > 0){
		echo "Return Code: " . $_FILES["upload"]["error"] . "<br />";
    }else{
		//echo "Upload: " . $_FILES["file"]["name"] . "<br />";
		//echo "Type: " . $_FILES["file"]["type"] . "<br />";
		//echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
		//echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";
		$d=time();
		$ip = ip2long($_SERVER["REMOTE_ADDR"]);//ip
		if(!is_dir('upload_images/'.$ip)){
			if(mkdir('upload_images/'.$ip)){
			}else{
				echo 'make dir error';
				exit;
			}
		}
		move_uploaded_file($_FILES["upload"]["tmp_name"],"upload_images/" .$ip.'/'.$d.'_'.$_FILES["upload"]["name"]);
		$url=$host_domain.'/picbox/upload_images/' .$ip.'/'.$d.'_'. $_FILES["upload"]["name"];
		$fn=$_GET['CKEditorFuncNum'];
		echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction($fn,'$url', '');</script>";
	}
}else{
	echo "Invalid file";
	echo $_FILES["upload"]["type"] ;
	
}

?>