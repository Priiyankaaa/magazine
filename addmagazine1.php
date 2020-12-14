<?php

session_start();
if(!isset($_SESSION['id'])){
    header('location:adminlogin1.php');
}


$con = mysqli_connect('localhost','root','','Magazine');



$mag_name = $_POST['mag_name'];
$p = $_POST['p'];
$c=$_POST['c'];
$mag_price=$_POST['mag_price'];


$q = " select mag_name from magazine  where mag_name='$mag_name'";

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
    width: 160px;
    height:100%;
    position: fixed;
    overflow-y: scroll;
    z-index: 1;
    top: 270;
    left: 7;
    background:#E2D3D3;
    overflow-x: hidden;
    padding: 20px;
}

.sidenav a {

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
 background-color: #D3C3C3 ;
}
</style>
</head>

<body bgcolor="#262626">

<img src="header.png" height=270px width=100% >


   <div class="sidenav">
<ul>
    <a href="#home">HOME</a>
  <li><a href="hng1.php">USER</a></li>
    <li><a href="about1.php">ABOUT</a></li>
  <li><a href="adminlogin1.php">ADMIN</a></li>
  </ul>
</div>

	<center>
<p>
<h2><b><font color="#D3C3C3">Magazine already exists</font></b></h2>
<button class="button button5"><span><a href="addmagazinepage1.php">ADD NEW MAGAZINE</span></button></a>
<button class="button button5"><span><a href="logout1.php">LOG OUT</span></button></a>
</p>

</center> 
</body>
</html>
';
}
else{

	$qy= " insert  into magazine(mag_name , pub_id, cat_id, mag_price) values ('$mag_name' , '$p' , '$c', '$mag_price') ";
	mysqli_query($con, $qy);
	header('location:adminhome1.php');
}



?>