<?php 
	session_start();
	$con = mysqli_connect('127.0.0.1', 'root','', 'helpsquad');
	$query_text = "INSERT INTO users (name, surname, phone, email) VALUES ({$_POST['name']}', '{$_POST['surname']}', '{$_POST['phone']}', '{$_POST['email']}')";
	$results = mysqli_query($con, $query_text); 

	$_SESSION['user_id'] = mysqli_insert_id($con);
	header("Location: index.php");
?>