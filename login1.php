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
    background-color: lightgrey; 
    border: none;
    color:white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    margin: 4px 2px;
    cursor: pointer;
}

.button5 {font-size: 24px;}
span{
 background-color:lightgrey
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
        <table border="2" Bgcolor="lightgrey "><h1><font color="lightgrey"> USER LOGIN</font></h1>
		<form action="validation1.php" name="ab" method="post">
		<tr>
			<td width=50%>Username:</td>
			<td><input type="text" name="username" size="20" maxlength="20" required>
		</tr>
		<tr>
			<td width=50%>Password:</td>
			<td><input type="password" name="password" size="20" maxlength="15" required>
		</tr>
		
		<tr>
			<td></td>
			<td><input type="Submit" name="submit" value="submit">  
			<input type="reset" name="reset" value="reset"></td>
		</tr>
	</form>
</table>

<p>
<br />
<br />

<button class="button button5"><a href="project1.php">Home</button></a></p>



</center> 
</body>
</html>



























