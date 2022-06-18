 <?php $db = mysqli_connect('localhost', 'root', '', 'final');
 
  
 
 if (isset($_POST['addexpen'])) {


  $tno = mysqli_real_escape_string($db, $_POST['tno']);
  $date = mysqli_real_escape_string($db, $_POST['date']);
 $tran = mysqli_real_escape_string($db, $_POST['tran']);
  $amount = mysqli_real_escape_string($db, $_POST['amount']);
 $auto = mysqli_real_escape_string($db, $_POST['auto']);
  $w3review = mysqli_real_escape_string($db, $_POST['w3review']);

  $queryss = "INSERT INTO `transaction`(`CODE`, `DATE`, `TRANSACTION`, `AMOUNT`,`Autorized`,`Details`) VALUES ('$tno','$date','$tran','$amount','$auto','$w3review')";
			
  	mysqli_query($db, $queryss);
	
	
   header('location: expen.php'); 
	
	
	
	

	
	}
	?>