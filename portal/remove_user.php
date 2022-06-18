  <?php 
  include('server.php');
$del = $_GET['id'];
  $queryaas = "DELETE FROM registered WHERE id='$del'";
    mysqli_query($db, $queryaas);	
	header('location: user.php'); 
	?>