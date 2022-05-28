<?php

    $id = $_POST['sid'];
	$name = $_POST['sname'];
	$address = $_POST['saddress'];
	$class = $_POST['sclass'];
	$phone = $_POST['sphone'];


	$connect = mysqli_connect("localhost",'root','','crud') or die("Database Connection Faield!");
	$sql = "UPDATE students SET sname = '{$name}', saddress ='{$address}', sclass ='{$class}', sphone ='{$phone}' WHERE sid = {$id}";
	$query = mysqli_query($connect, $sql) or die("Query Field!");

	header("location: http://localhost/website/yahoobaba/crud/");


    mysqli_close($connect);


?>