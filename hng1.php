<!DOCTYPE html>
<html>
<head>
<style>

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

.button5 {font-size: 20px;}
span{
 background-color: lightgrey
}
    ul {
    list-style-type: none;
    margin-left: 100;
    padding: 0;
    width: 40%;
    background-color: lightgrey;
    border: none;
}

li a {
    display: inline-block;
    color: black;
    padding: 16px 16px;
    text-decoration: none;
}

li {
    text-align: center;
    border-bottom:none;
}

li:last-child {
    border-bottom: none;
}

li a.active {
    background-color: lightgrey  ;
    color: black;
}

li a:hover:not(.active) {
    background-color: lightgrey ;
    color: floralwhite;
}



</style>
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
<p>
    <h2><b><font color="#D3C3C3"><font size="4px"> NOT A MEMBER?</font></font> </b></h2>
        
<button class="button button5"><a href="signup1.php">SIGN UP</button></a>
</p>

		
        <h2><b><font color="#D3C3C3"><font size="4px"> ALREADY A MEMBER?</font></font> </b></h2>
<button class="button button5"><a href="login1.php">LOGIN</button>


</center> 
</body>
</html>