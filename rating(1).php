<?php

session_start();

$con = mysqli_connect('localhost','root','','Magazine');



$m=$_POST['m'];
$rate = $_POST['rate'];


$q = " select mag_name from magazine  where mag_name='$mag_name'";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num!=0)
{
	echo '
<html>
<head>
<style>
.button {
    background-color: #262626 
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
	<center>
<p>
<h2><span><b>Rating already done</b></span></h2>
<button class="button button5"><a href="rating.php">Add New Crop</button></a>
<button class="button button5"><a href="logout1.php">Log Out</button></a>
</p>
</center> 
</body>
</html>
';
}
else{

	$qy= " insert  into rating(mag_id , rate) values ('$m' , '$rate' ) ";
	mysqli_query($con, $qy);
	header('location:project1.php');
}



?>