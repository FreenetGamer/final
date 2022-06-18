  <?php 
  include('server.php');
$del = $_GET['id'];
  $queryaas = "DELETE FROM product WHERE product_id='$del'";
    mysqli_query($db, $queryaas);	
	header('location: product.php'); 
$_SESSION['invalid']="";	?>