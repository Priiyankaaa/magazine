<?php

session_start();

$con = mysqli_connect('localhost','root','','Magazine');

$ce = $_POST['ce'];

	$qy= "delete from categories where cat_id = $ce;";
	mysqli_query($con, $qy);
	header('location:adminhome1.php');

?>