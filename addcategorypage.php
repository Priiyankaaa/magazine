<!DOCTYPE html>
<html>
<head>
<style>

#custom tr {
	bgcolor:#D3C3C3 ;
}

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
    
    
.button {
    background-colour: lightgrey; 
    border: none;
    color: whitesmoke;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    margin: 4px 2px;
    cursor: pointer;
}
.button5 {font-size: 24px;}
</head></style>

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
        <table border="1" Bgcolor="lightgrey"><h1><font color="#D3C3C3">ADD CATERGORY</font></h1>
		<form action="addcategory.php" name="ab" method="post">
		<tr>
			<td width=50%>Catergory:</td>
			<td><input type="text" name="cat_name" size="20" maxlength="20" required>
		</tr>
		
			<td></td>
			<td><input type="Submit" name="submit" value="submit">  
			<input type="reset" name="reset" value="reset"></td>
		</tr>
	</form>
</table>

<button class="button button5"><a href="logout1.php">LOG OUT</button>

</center> 
</body>
</html>