<!DOCTYPE html>
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
    top: 10;
    left: 2;
    background:lightgrey;
    overflow-x: scroll;
    padding: 20px;
}

.sidenav a {
    border-bottom: none;
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 20px;
    color: #262626 ;
    display: block;
}

.sidenav a:hover {
    color: #E2D3D3 ;
}
    
    
ul {
    list-style-type: none;

    margin-left: 50;
    padding: 0;
    width: 30%;
    background-color: lightgrey;
    border: none;
}

li a {
    display: inline-block;
    color:black;
    padding: 8px 16px;
    text-decoration: none;
}

li {
    text-align: center;
    border-bottom: 2px solid #555;
}

li:last-child {
    border-bottom: none;
}

li a.active {
    background-color:lightgrey;
    color: black;
}

li a:hover:not(.active) {
    background-color: lightgrey;
    color: floralwhite;
}
.button {
    background-color:lightgrey ; 
    border: 4ps 2ps;
    color: whitesmoke;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    margin: 4px 2px;
    cursor: pointer;
}
.button5 {font-size: 24px;}

</style>

</head>
<body bgcolor="#262626">
    
<img src="cover1.png" height=200px width=100% >
    
      <div class="sidenav">
<ul>
    <a href="#home">HOME</a>
  <li><a href="hng1.php">USER</a></li>
    <li><a href="about1.php">ABOUT</a></li>
  <li><a href="adminlogin1.php">ADMIN</a></li>
  </ul>
</div>
<center>
    <font color="#B2A8A8"> 	
    <h1><b>WELCOME ADMIN </h1></b> </font><br>
</center>
    <p><center>

        <table border="1" Bgcolor="#262626 "><h1><font color="#D3C3C3"> ADD INFORMATION </font></h1>
<ul>
  <li><a href="addcategorypage.php">ADD CATEGORY</a></li>
    <li><a href="updatecategorypage.php">UPDATE CATEGORY</a></li>
  
  <li><a href="addpublisherpage.php">ADD PUBLISHER</a></li>
  <li><a href="addmagazinepage1.php">ADD MAGAZINE</a></li>
  <li><a href="deletemagazinepage.php">DELETE MAGAZINE</a></li>
  
</ul>
        </center></p>
<p><center>
<br />
<br />

<button class="button button5"><a href="logout1.php">LOG OUT</button></a></p>



</body>
</html>
