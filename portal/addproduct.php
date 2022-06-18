 <?php $db = mysqli_connect('localhost', 'root', '', 'final');
 
  
 
 if (isset($_POST['addding'])) {


  $product_id = mysqli_real_escape_string($db, $_POST['product_id']);
  $Product_Name = mysqli_real_escape_string($db, $_POST['Product_Name']);
 $Quantity = mysqli_real_escape_string($db, $_POST['Quantity']);
 $Price = mysqli_real_escape_string($db, $_POST['Price']);
 $Details = mysqli_real_escape_string($db, $_POST['Details']);
  $date = mysqli_real_escape_string($db, $_POST['date']);
    $category = mysqli_real_escape_string($db, $_POST['category']);
$img_name=$_FILES['image']['name'];
$tmp_img_name=$_FILES['image']['tmp_name'];
$folder='../uploads/';
move_uploaded_file($tmp_img_name,$folder.$img_name);
				

  $queryss = "INSERT INTO `product`(`Price`, `product_id`, `Product_Name`, `Quantity`, `Details`, `image` ,`category`, `expired`) VALUES ('$Price','$product_id','$Product_Name','$Quantity','$Details','$img_name','$category','$date')";
			
  	mysqli_query($db, $queryss);
	
	
   header('location: product.php'); 
	
	
	
	

	
	}
	?>