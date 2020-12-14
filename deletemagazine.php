<?php

session_start();

$con = mysqli_connect('localhost','root','','Magazine');

$aa = $_POST['aa'];


	$qy= "DELETE FROM magazine WHERE mag_name='$aa'";
	mysqli_query($con, $qy);
	header('location:adminhome1.php');

?>