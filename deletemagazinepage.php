<?php
                $link = mysqli_connect ("localhost","root","");
                mysqli_select_db ($link,"Magazine");
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
	background-color: white;
}

#custom tr:hover {background-color: #ddd;}

#custom th {
    /*padding-top: 10px;
    padding-bottom: 10px;*/
    text-align: center;
    background-color: lightgrey;
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
    background-color:lightgrey; 
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
    
<body bgcolor="#262626">
<img src="cover1.png" height=200px width=100% >
    
      <div class="sidenav">
<ul>
    <a href="project1.php">HOME</a>
  <li><a href="hng1.php">USER</a></li>
    <li><a href="about1.php">ABOUT</a></li>
  <li><a href="adminlogin1.php">ADMIN</a></li>
  </ul>
</div>

	<center>
        <table border="1" Bgcolor="lightgrey"><h1><font color="#D3C3C3">DELETE MAGAZINE</font></h1>
		<form action="deletemagazine.php" name="aa" method="post">
		<tr>
			
			<td width=50%>Magazine to be deleted</td>
			<td>

				<select name="aas" style="width:173px;">
					<?php 
					$res=mysqli_query($link,"select mag_name from magazine order by mag_id");
					echo "<option>--Select--</option>";
					while($row=mysqli_fetch_array($res))
					{
                        echo "<option value='".$row['mag_id']."'>".$row['mag_name']."</option>";
					}
					?>
					
				</select>				

			</td>
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