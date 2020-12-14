<?php

session_start();


$con = mysqli_connect('localhost','root');


mysqli_select_db($con, 'Magazine');

$username = $_POST['username'];
$password = $_POST['password'];


$q = " select * from users  where username = '$username' && password = '$password' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){
	
	$_SESSION['name'] = $username;
	header('location:home1.php');


}else
{
	header('location:login1.php');
}



?>