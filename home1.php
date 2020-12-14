<?php

session_start();
if(!isset($_SESSION['name'])){
header('location:login1.php');
}


?>


<!DOCTYPE html>
<html>
<head>
<style>

.zoom:hover {
    transform: scale(1.1); 
}

span{
 background-color: lightgrey
}
    
body{
    font-family: "Lato", sans-serif;
}

.sidenav {
    width: 160px;
    height:100%;
    position: fixed;
    overflow-y: scroll;
    z-index: 1;
    top: 10;
    left: 2;
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
    background-color:lightgrey ; 
    border: 10px solid;
    color: black;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    margin: 4px 2px;
    cursor: pointer;
}
.button5 {font-size: 24px;}

</head></style>	
<body bgcolor="#262626" >
    
<img src="cover1.png" height=270px width=100% >
    
<div class="sidenav">
<ul>
    <a href="#home">HOME</a>
  <li><a href="hng1.php">USER</a></li>
    <li><a href="about1.php">ABOUT</a></li>
    <li><a href="ratingpage.php">RATING</a></li>
  </ul>
</div>
        
    
<font color="lightgrey"> 
<center>	
<h1><b>WELCOME <?php echo $_SESSION['name']; ?> </h1></b> <br>

	<button class="button button5"><a href="maginfo1.php">INFORMATION</button>
	<button class="button button5"><a href="shop1.php">BUY</button>
<br />
</font>

<button class="button button5"><a href="logout1.php">LOG OUT</button>
</center>	
</body>
</html>

