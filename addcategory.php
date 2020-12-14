<?php

session_start();

$con = mysqli_connect('localhost','root','','Magazine');



$cat_name = $_POST['cat_name'];



$q = " select cat_name from categories  where cat_name='$cat_name' ";

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
    background:lightgrey;
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
 background-color: #262626
}


</style>
</head>

<body bgcolor="#262626">
    
<img src="cover1.png" height=270px width=100% >

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
<h2><span><b><font color="#D3C3C3">Magazine already exists</b></font></span></h2>
<button class="button button5"><a href="addcategorypage.php">Add New Category</button></a>
<button class="button button5"><a href="logout1.php">Log Out</button></a>
</p>

</center> 
</body>
</html>
';
}
else{

	$qy= " insert  into categories(cat_name ) values ('$cat_name') ";
	mysqli_query($con, $qy);
	header('location:adminhome1.php');
}



?>