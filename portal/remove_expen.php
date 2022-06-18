  <?php 
  include('server.php');
$del = $_GET['id'];
  $queryaas = "DELETE FROM transaction WHERE CODE='$del'";
    mysqli_query($db, $queryaas);	
	header('location: expen.php'); 
	?>