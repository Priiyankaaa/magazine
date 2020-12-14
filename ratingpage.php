<?php
                $link = mysqli_connect ("localhost","root","");
                mysqli_select_db ($link,"Magazine");
?>

<!DOCTYPE html>
<html>
<head>
<style>

body{
 background-image:url("back.jpg");
  background-repeat:no-repeat;
background-size:cover;
position:relative;
}
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

#custom tr:hover {background-color: lightgrey;}

#custom th {
    /*padding-top: 10px;
    padding-bottom: 10px;*/
    text-align: center;
    background-color: lightgrey;
    color: black;
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
    
	<center>
	<table border="1" Bgcolor="lightgrey"><h1><font color="#D3C3C3">RATE</font></h1>
		<form action="rating.php" name="ab" method="post">
		
            <tr>
			<td width=50%>MAGAZINE NAME</td>
			<td>

				<select name="m" style="width:120px;">
					<?php 
					$res=mysqli_query($link,"select mag_id,mag_name from magazine");
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
			<td width=50%>RATING</td>
			<td><input type="text"  name="rate" size="17" maxlength="10" required>
		</tr>
		
		
		<tr>
			<td></td>
			<td><input type="Submit" name="submit" value="submit">  
			<input type="reset" name="reset" value="reset"></td>
		</tr>
	</form>
</table>

        <h4><b><font color="#D3C3C3">(Rate Magazine out of 5)</font></b></h4>

<br/><br/>                          
<button class="button button5"><a href="logout1.php">LOG OUT</button>

</center> 
</body>
</html>