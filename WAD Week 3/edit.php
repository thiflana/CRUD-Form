<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$name=$_POST['product_name'];
	$price=$_POST['price'];
	$color=$_POST['Color'];
		
	// update user data
	$result = mysqli_query($mysqli, "UPDATE product SET product_name='$name',price='$price',Color='$color' WHERE id=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php");

    
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM product WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$name = $user_data['product_name'];
	$price = $user_data['price'];
	$color = $user_data['Color'];
}
?>
<html>
<head>	
	<title>Edit Product Data</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
 
<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Product Name</td>
				<td><input type="text" name="product_name" value=<?php echo $name;?>></td>
			</tr>
			<tr> 
				<td>Price</td>
				<td><input type="text" name="price" value=<?php echo $price;?>></td>
			</tr>
			<tr> 
				<td>Color</td>
				<td><input type="text" name="Color" value=<?php echo $color;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
