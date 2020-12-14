<?php

session_start();

$con = mysqli_connect('localhost','root','','Magazine');




$mag_name = $_POST['mag_name'];
$p=$_POST['p'];
$c=$_POST['c'];
$mag_price = $_POST['mag_price'];



$q = " select mag_name from magazine where mag_name='$mag_name' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num!=0)
{
	echo '
<html>
<head>
<style>
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
 background-color: lightgrey
</style>
</head>

<body bgcolor="#262626">
    
<img src="cover1.png" height=250px width=100% >


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
<h2><span><b>Magazine already exists</b></span></h2>
<button class="button button5"><a href="addmagazinepage.php">Add New Magazine</button></a>
<button class="button button5"><a href="logout1.php">Log Out</button></a>
</p>

</center> 
</body>
</html>
';
}
else{

	$qy= " insert into magazine(mag_name,pub_id,cat_id,mag_price) values ('$mag_name' ,'$p', '$c', '$mag_price') ";
	mysqli_query($con, $qy);
	header('location:adminhome1.php');
}



?>