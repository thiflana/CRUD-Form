<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM product ORDER BY id ASC");
?>
 
<html>
<head>    
    <title>Product Homepage</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
 
<body>
<a href="add.php">Add New Product</a><br/><br/>

 
    <table width='80%' border=1>
 
    <tr>
        <th>ID</th> <th>Product</th> <th>Price</th><th>Color</th><th>Edit</th><th>Delete</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['id']."</td>";
        echo "<td>".$user_data['product_name']."</td>";
        echo "<td>".$user_data['price']."</td>";    
        echo "<td>".$user_data['Color']."</td>";
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a></td>";
        echo "<td><a href='delete.php?id=$user_data[id]'>Delete</a></td>";     
    }
    ?>
    </table>
</body>
</html>
