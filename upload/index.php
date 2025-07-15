<?php
	if(isset($_POST["submit"]) && is_uploaded_file($_FILES["fileToUpload"]["tmp_name"])){
		$targetdir = "privacy/";
		$targetfile = $targetdir . date('Y-m-d-H-i-s-') . $_FILES["fileToUpload"]["name"];
		require "assets/php/filter.php";
		if($uploadFail == False){
			move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetfile);
			header("location: /?submit=success");
		} else{
			header("location: /?submit=invalid");
		}
	}
	else if ($_SERVER["REQUEST_METHOD"] == "POST"){
		header("location: /?submit=failure");
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Annex</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, inital-scale=1.0">
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
		<link rel="stylesheet" type="text/css" href="assets/css/jquery.terminal.min.css">
		<script src="assets/js/jquery-3.5.1.min.js"></script>
		<script src="assets/js/jquery.terminal.min.js"></script>
		<script src="assets/js/script.js"></script>
	</head>
	<body>
		<form method="post" enctype="multipart/form-data">
			<input type="file" name="fileToUpload" id="fileSelect">
			<input class="Btn" type="submit" value="Upload" name="submit" id="submitBtn">
		</form>
		<div id="term"></div>
	</body>
</html>
