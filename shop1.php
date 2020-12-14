<?php

session_start();

$connect = mysqli_connect("localhost", "root", "", "Magazine");

if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["mag_id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["mag_id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["mag_id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["mag_id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="shop1.php"</script>';
			}
		}
	}
}

?>
<!DOCTYPE html>
<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<style>
            
	.button {
    background-color: lightgrey; 
    border: none;
    color: white;
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

	</style></head>
    
<body>
 <img src="cover1.png" height=200px width=100% align="center" >

	<center>
		<br />
		<div class="container" style="width:700px;">
            <h2 align="center"><b><font color="#262626">SHOPPING CART</font></b></h2><br />
			<?php
				$query = "SELECT * FROM magazine ORDER BY mag_id ASC";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
		<div class="col-md-4">
				<form method="post" action="shop1.php?action=add&mag_id=<?php echo $row["mag_id"]; ?>">
                    
					<div style="border:5px solid lightgrey; 
                        background-color:#262626; border-radius:10px; padding:10px;" align="center"> 
                        
                    <img src="<?php echo $row["mag_img"]; ?>" class="img-responsive" /><br>
                         
                     <h4 class="text-info"><font color="#E2D3D3"><?php echo $row["mag_name"]; ?></font></h4>
                        
                        <h4 class="text-danger"><font color="#E2D3D3">Rs. <?php echo $row["mag_price"]; ?></font></h4>
					<input type="text" name="quantity" value="1" class="form-control" />

						<input type="hidden" name="hidden_name" value="<?php echo $row["mag_name"]; ?>" />

						<input type="hidden" name="hidden_price" value="<?php echo $row["mag_price"]; ?>" />

						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="BUY" />
								</div>
				</form>
			</div>
			<?php
					}
				}
			?> 
			<div style="clear:both" ></div>
			<br />
            <h2><b><font color="#262626">DETAILS</font></b></h2>
			<div class="table-responsive">
               <table class="table table-bordered">
                   <tr>
                        <th width="40%" >Magazine</th>
						<th width="10%" >Quantity</th>
						<th width="20%" >Price</th>
						<th width="15%" >Total</th>
						<th width="5%">Remove</th>
                        
                   </tr>
                   
					<?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
					<tr>
						<td><?php echo $values["item_name"]; ?></td>
						<td><?php echo $values["item_quantity"]; ?></td>
						<td>Rs. <?php echo $values["item_price"]; ?></td>
						<td>Rs. <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
						<td><a href="shop1.php?action=delete&mag_id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
					</tr>
					<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
						}
					?>
					<tr>
						<td colspan="3" align="right">Total</td>
						<td align="right">Rs. <?php echo number_format($total, 2); ?></td>
						<td></td>
					</tr>
					<?php
					}
					?>
						
				</table>
			</div>
		</div>
	</div>
	<br />
	<button class="button button5"><a href="done1.php">DONE</button></a></p>
	</center>
	</body>
</html>




