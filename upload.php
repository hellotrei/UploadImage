<?php
	require_once 'conn.php';
	
	if(ISSET($_FILES['upload'])){
		$file_name = $_FILES['upload']['name'];
		$file_temp = $_FILES['upload']['tmp_name'];
		$path = "upload/".$file_name;
 
		if(move_uploaded_file($file_temp, $path)){
			mysqli_query($conn, "INSERT INTO `file` VALUES('', '$file_name', '$path')") or die(mysqli_error());
			echo "<img src=".$path." height='200' width='200'>";
		}
	}else{
		header('location: index.php');
	}
?>