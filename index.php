<!DOCTYPE html>
<html lang="en">
<head>
  <title>ImageGallery</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <style type="text/css">
  	#top{ margin-top: 10px; background-color: #4CC2C0;padding:20px 0px 10px 0px; border-radius: 5px;}
  	#top form{width: 80%;margin:auto;}
  </style>
</head>
<body>

	<div class="container" id="top">

	<form method="POST" action="uploader.php" enctype="multipart/form-data">
		<div class="form-group row">
		<div class="custom-file col-sm-10">
			<input type="file" class="custom-file-input" name="pic" id="customFile" required="">
			<label class="custom-file-label" for="customFile">Choose File</label>
		</div>
		<div class="col-sm-2">
			<button type="submit" class="btn btn-primary">Upload</button>
		</div>
	</div>
	</form>
</div>
<div class="container" id="main">
<?php
$con = new mysqli("localhost","root","","gallery");
$sql = mysqli_query($con,"SELECT img FROM images");
while($row =  mysqli_fetch_array($sql)){
	echo '
		<img src="'.$row['img'].'" width="200" height="170">
	';
}
?>	
</div>
<style type="text/css">
	img{ margin-left: 5px; margin-top: 10px;border-radius: 5px;padding: 10px;border: 2px solid #F2F7F7;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
	body{background-color: #F0F6F6}
	
</style>
</body>
</html>
