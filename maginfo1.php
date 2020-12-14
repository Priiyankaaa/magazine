<!DOCTYPE html>
<html>
<head>
<style>
span{
 background-color: #d0e3e1;
}
#custom {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 70%;
}

#custom td, #custom th {
    border: 1px solid #ddd;
    padding: 8px;
}

#custom tr {
	background-color: white;
}

#custom tr:hover {background-color: lightgrey;}

#custom th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color:lightgrey;
    color: white;
}   
</style>
</head>
<body bgcolor="#262626">

<img src="cover1.png" height=200px width=100% >
 <center>
     <h1><font color="#D3C3C3">INFORMATION</font></h1>

     <br>
     
<table id="custom">
	<tr>
		<th>MAGAZINE NAME</th>
		<th>MAGAZINE PRICE</th>
		<th>PUBLICATION</th>
        <th>CATERGORY</th>
        <th>RATING</th>
	</tr>
	<?php
	$conn = mysqli_connect("localhost","root","","Magazine");
	if($conn-> connect_error){
		die("Connection failed:".$conn->connect_error);

	}
	$sql = "SELECT mag_name,mag_price,pub_name,cat_name,rate from magazine m, categories c,publisher p,rating r where m.cat_id=c.cat_id and m.pub_id=p.pub_id and r.mag_id=m.mag_id";
	$result = $conn-> query($sql);
	if($result-> num_rows > 0){
		while ($row = $result-> fetch_assoc()) {
			echo "<tr><td>". $row["mag_name"]."</td><td>". $row["mag_price"]."</td><td>". $row["pub_name"]."</td><td>".$row["cat_name"]."</td><td>".$row["rate"]."</td></tr>";
            
		}
		echo "</table>";
	}
	else
	{
		echo "0 result";
	}

	$conn-> close();
	?>

</table>
		

<html>
<head>
<style>
.button {
    background-color: lightgrey; 
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    margin: 4px 2px;
    cursor: pointer;
}

.button5 {font-size: 24px;}
span{
 background-color: #D3C3C3
}
</style>
</head>

<body>
	<center>

<p>
<br />
<br />

<button class="button button5"><a href="project1.php">HOME</button></a></p>


</center> 
</body>
</html>