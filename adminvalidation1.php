<?php

session_start();


$con = mysqli_connect('localhost','root');


mysqli_select_db($con, 'Magazine');

$a_username = $_POST['a_username'];
$a_password = $_POST['a_password'];


$q = " select * from admin  where a_username = '$a_username' && a_password = '$a_password' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){
	
	$_SESSION['name'] = $a_username;
	header('location:adminhome1.php');


}else
{
	header('location:adminlogin1.php');
}



?>