<?php
	$tmp = $_FILES["pic"]["tmp_name"];
	$uploadfilename = $_FILES["pic"]["name"];
	$date = date("mdy-Hms");

	$newfile = "uploads/" . basename($date."_".$uploadfilename);
	
	if(move_uploaded_file($tmp, $newfile)) {
		header("Location: index.php");
		exit();
	}
?>