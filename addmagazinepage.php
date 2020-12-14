<?php
                session_start();

$con = mysqli_connect('localhost','root','');


mysqli_select_db($con, 'Magazine');
?>

<!DOCTYPE html>
<html>
<head>
<style>
#custom {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 70%;
}

#custom td, #custom th {
    border: 1px solid #ddd;
    padding: 2px;
}

#custom tr {
	background-color:lightgrey ;
}

#custom tr:hover {background-color: #B2A8A8;}

#custom th {
    /*padding-top: 10px;
    padding-bottom: 10px;*/
    text-align: center;
    background-color: white;
    color: black;
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
    color: lightgrey ;
}
    
    
.button {
    background-color:lightgrey; /* Green */
    border: none;
    color: black;
    padding: 16px 32px;
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
	<table border="1" Bgcolor="lightgrey"><h1><font color="#D3C3C3">ADD MAGAZINE</font></h1>
		<form action="addmagazine.php" name="ab" method="post">
            
		<tr>
			<td width=50%>Magazine </td>
			<td><input type="text" name="mag_name" size="20" maxlength="20" required>
		</tr>
            <tr>
			<td width=50%>Publisher </td>
			<td>
				<select name="p" style="width:173px;">
					<?php 
					$s= "select pub_id, pub_name from publisher" ;
                    $result = mysqli_query($con, $s);
					?><option>--Select--</option><?php
					while($row=mysqli_fetch_array($result))
					{
					?>
						<option value="<?php $row["pub_id"]?>"><?php echo $row["pub_name"];?></option>
					<?php
					}
					?>
					
				</select>
			</td>
		</tr>
            <tr>
			<td width=50%>Catergory</td>
			<td>
				<select name="c" style="width:173px;">
					<?php 
					$s= "select cat_id, cat_name from categories" ;
                    $result = mysqli_query($con, $s);
					?><option>--Select--</option><?php
					while($row=mysqli_fetch_array($result))
					{
					?>
						<option value="<?php $row["cat_id"]?>"><?php echo $row["cat_name"];?></option>
					<?php
					}
					?>
					
				</select>
			</td>
		</tr>
		<tr>
			<td width=50%>Price</td>
			<td><input type="number" name="mag_price" size="20" maxlength="15" required>
		</tr>
            
            
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="submit">  
			<input type="reset" name="reset" value="reset"></td>
		</tr>
	</form>
</table>



<br/><br/>                          
<button class="button button5"><a href="logout1.php">LOG OUT</button>

</center> 
</body>
</html>