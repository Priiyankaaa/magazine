<?php
                $link = mysqli_connect ("localhost","root","");
                mysqli_select_db ($link,"Magazine");
?>

<!DOCTYPE html>
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
    top: 10;
    left: 2;
    background:#E2D3D3;
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
    background-color: #D3C3C3;
    border: none;
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

<body style= "background-color:#262626">
    
    <img src="header.png" height=270px width=100% >

<div class="sidenav">
<ul>
    <a href="#home">HOME</a>
  <li><a href="hng1.php">USER</a></li>
    <li><a href="about1.php">ABOUT</a></li>
  <li><a href="adminlogin1.php">ADMIN</a></li>
  </ul>
</div>

	<center>
        <table border="1" Bgcolor="#E2D3D3"><h1><font color="#D3C3C3">UPDATE CATERGORY</font></h1>
		<form action="updatecategory.php" name="ab" method="post">
		<tr>
			<td width=50%>Category to be updated:</td>
			<td>

				<select name="cc" style="width:173px;">
					<?php 
					$res=mysqli_query($link,"select cat_id,cat_name from categories");
					echo "<option>--Select--</option>";
					while($row=mysqli_fetch_array($res))
					{
						echo "<option value='".$row['cat_id']."'>".$row['cat_name']."</option>";
					}
					?>
					
				</select>				

			</td>
		</tr>
              <tr>
			<td width=50%>New Category</td>
			<td><input type="text" name="cname" size="20" maxlength="20" required>
		</tr>
		
		<tr>
			<td></td>
			<td><input type="Submit" name="submit" value="submit">  
			<input type="reset" name="reset" value="reset"></td>
		</tr>
	</form>
</table>



<br/><br/>                          
<button class="button button5"><a href="logout1.php">LOG OUT</button>

</center> 
</body>
</html>