<?php
	$extension = pathinfo($_FILES["fileToUpload"]["name"])["extension"];
	switch($extension){
		case "php":
		case "phtml":
		case "phar":
		case "php3":
		case "php4":
		case "php7":
		case "phps":
		case "php-s":
		case "pht":
		case "phar":
		case NULL:
			$uploadFail = True;
			break;
		default:
			$uploadFail = False;
	}
?>

