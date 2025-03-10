<html>
<head>
	<title>Add Product</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
 
<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>
 
	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Product Name</td>
				<td><input type="text" name="product_name"></td>
			</tr>
			<tr> 
				<td>Price</td>
				<td><input type="text" name="price"></td>
			</tr>
            <tr> 
				<td>Color</td>
				<td><input type="text" name="Color"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$name = $_POST['product_name'];
		$price = $_POST['price'];
        $color = $_POST['Color'];
		
		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO product(product_name,price,Color) VALUES('$name','$price','$color')");
		
		// Show message when user added
		echo "Product added successfully. <a href='index.php'>View Product</a>";
	}
	?>
</body>
</html>