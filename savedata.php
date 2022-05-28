<?php

    
	echo $name = $_POST['sname'];
	echo $address = $_POST['saddress'];
	echo $class = $_POST['class'];
	echo $phone = $_POST['sphone'];


	$connect = mysqli_connect("localhost",'root','','crud') or die("Database Connection Faield!");
	$sql = "INSERT INTO students (sname, saddress, sclass, sphone) VALUES ('$name','$address', '$class', '$phone')";
	$query = mysqli_query($connect, $sql) or die("Query Field!");

	header("location: http://localhost/website/yahoobaba/crud/");


    mysqli_close($connect);


?>