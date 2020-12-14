<!DOCTYPE html>
<html>
<head>
	<style>
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
    border: 5px solid;
    color:black;
    padding: 15px 105px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    margin: 2px 2px solid;
    cursor: pointer;
}
.button {
    background-color:lightgrey; 
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    margin: 4px 2px;
    cursor: pointer;
}

.button5 {font-size: 20px;}
</style>
	<title></title>
</head>
    
<body bgcolor="#262626">
<img src="cover1.png" height=200px width=100% >
    
<div class="sidenav">
<ul>
    <a href="#home">HOME</a>
  <li><a href="hng1.php">USER</a></li>
    <li><a href="about1.php">ABOUT</a></li>
    <li><a href="ratingpage.php">RATING</a></li>
  </ul>
</div>
<center>
    
    <h2><b><font color="#D3C3C3"><font size="6px">ORDER HAS BEEN PLACED</font></b></h2>
<p>Rate the magazine if purchased</p>
<br />
<br />
<button class="button button5"><a href="logout1.php">LOG OUT</button></a>

</center>

</body>
</html>