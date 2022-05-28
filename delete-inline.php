<?php

	echo $id = $_GET['id'];
	
	$connect = mysqli_connect("localhost", "root", "", "crud") or die("Database Connection Faield");
    $query = "DELETE FROM students WHERE sid = {$id}";
    $result = mysqli_query($connect, $query) or die("Query Field!!!");

   	header("location: http://localhost/website/yahoobaba/crud/");

   	mysqli_close($connect);
?>