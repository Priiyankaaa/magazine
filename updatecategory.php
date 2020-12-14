<?php

session_start();

$con = mysqli_connect('localhost','root','','Magazine');



$cc = $_POST['cc'];
$cname= $_POST['cname'];



	$qy= "update categories set cat_name='$cname' where cat_id=$cc ";
	mysqli_query($con, $qy);
	header('location:adminhome1.php');




?>