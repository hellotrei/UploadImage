<?php
	$conn = mysqli_connect("localhost", "root", "", "upload");
	
	if(!$conn){
		die("Error: Failed to connect to database");
	}
?>