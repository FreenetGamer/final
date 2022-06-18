<?php 
 include('server.php');
	error_reporting();



 if (isset($_POST['subaa'])) {
 

  $productn = mysqli_real_escape_string($db, $_POST['productn']);
  $stock = mysqli_real_escape_string($db, $_POST['stock']);
 $price = mysqli_real_escape_string($db, $_POST['price']); 
$w3review = mysqli_real_escape_string($db, $_POST['w3review']); 
$image = mysqli_real_escape_string($db, $_POST['image']); 
$id = mysqli_real_escape_string($db, $_POST['id']); 
$expired = mysqli_real_escape_string($db, $_POST['expired']); 
$category = mysqli_real_escape_string($db, $_POST['category']); 
if ($image == null){ $queryb = "UPDATE `product` SET `Price`='$price',`Product_Name`='$productn',`Quantity`='$stock',`Details`='$w3review',`category`='$category',`expired`='$expired' WHERE product_id = '$id'";
 }else{ $queryb = "UPDATE `product` SET `Price`='$price',`Product_Name`='$productn',`Quantity`='$stock',`Details`='$w3review',`image`='$image',`category`='$category',`expired`='$expired' WHERE product_id = '$id'";
 }

        
	mysqli_query($db, $queryb);
  

 header('location: product.php');}
?>