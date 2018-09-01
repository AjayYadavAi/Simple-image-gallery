<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
	$con = new mysqli("localhost","root","","gallery");
	if(!$con){
		die("Connection Error");
	}
	$upload_image = $_FILES['pic']['name'];
	$imageFileType = strtolower(pathinfo($upload_image,PATHINFO_EXTENSION));
	$type = array('png','jpeg','jpg','gif');

	if($upload_image == ""){
		header("location:index.php");
	}
	if(in_array($imageFileType, $type)){
	$folder = "upload/";
	$pic = $folder.$upload_image;
	if(move_uploaded_file($_FILES['pic']['tmp_name'], "$folder".$_FILES['pic']['name'])){
		$sql = mysqli_query($con,"INSERT INTO images(img)VALUES('$pic')");
		if($sql){
			header("location:index.php");
		}else{
			echo "Uploading Error";
		}
	}}else{
		header("location:index.php");
	}
}


?>