
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
    background-color: lightgrey  ;
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
        <table border="1" Bgcolor="lightgrey"><h1><font color="lightgrey">USER SIGN-UP</font></h1>
		<form action="registration1.php" name="ab" method="post">
		<tr>
            
			<td width=50%>USERNAME:</td>
			<td><input type="text" name="username" size="20" maxlength="20" required>
            </td>
                
		</tr>
		<tr>
            
			<td width=50%>PASSWORD:</td>
			<td><input type="password" name="password" size="20" maxlength="15" required>
		</tr>
		<tr>
			<td width=50%>EMAIL</td>
			<td><input type="email" name="email" size="20" maxlength="50" required>
		</tr>
		
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="submit">  
			<input type="reset" name="reset" value="reset"></td>
		</tr>
	</form>
</table>


</center> 
</body>
</html>