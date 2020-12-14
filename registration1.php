<?php

session_start();

$con = mysqli_connect('localhost','root','','Magazine');

$username = $_POST['username'];
$password = $_POST['password'];
$email=$_POST['email'];


$q = " select username from users  where username ='$username'";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num!=0)
{
	echo '
<html>
<head>
<style>

body {
    font-family: "Lato", sans-serif;
}

.sidenav {
    border-bottom: none;
    width: 160px;
    height:100%;
    position: fixed;
    overflow-y: scroll;
    z-index: 1;
    top: 285;
    left: 10;
    background:#E2D3D3;
    overflow-x: hidden;
    padding: 20px;
}

.sidenav a {
    border-bottom: none;
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 20px;
    color: #262626;
    display: block;
}

.sidenav a:hover {
    color: #E2D3D3 ;
}
    
    
.button {
    background-color: #262626; 
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    margin: 4px 2px;
    cursor: pointer;
}

.button5 {font-size: 24px;}
span{
 background-color: #D3C3C3
}
</style>
</head>

<body bgcolor="#262626">

<img src="header.png" height=270px width=100% >
	<center>
    
    <div class="sidenav">
<ul>
    <a href="#home">HOME</a>
  <li><a href="hng1.php">USER</a></li>
    <li><a href="about1.php">ABOUT</a></li>
  <li><a href="adminlogin1.php">ADMIN</a></li>
  <li><a href="ratingpage.php">RATING</a></li>
  </ul>
</div>

<p>
<h2><b><font color="#D3C3C3"> USER already taken</font></h1></b></h2>
<button class="button button5"><span><a href="signup1.php">SIGN UP</span></button></a>
</p>
<button class="button button5"><span><a href="login1.php">LOGIN</span></button></a>

</center> 
</body>
</html>
';
}
else{

	$qy= " insert  into users(username , password, email) values ('$username' , '$password' , '$email') ";
	mysqli_query($con, $qy);
	header('location:login1.php');
}



?>