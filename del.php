<?php
include('portal/server.php');
	error_reporting();
	
	$del = $_GET['id'];
	$myquery = "SELECT Quantity,product_id FROM purchase WHERE id = '$del' AND validation = 2";
	$nn = mysqli_query($db, $myquery);
	 while($row = mysqli_fetch_array($nn)){
    $id = $row['product_id'];
	$num1 = $row['Quantity'];
	echo $row['Quantity']."   "."   ";
	
	
	
	};
		$my = "SELECT Quantity FROM product WHERE id = '$id'";
	$n = mysqli_query($db, $my);
	 while($ro = mysqli_fetch_array($n)){
    

	$num2 = $ro['Quantity'];
	echo $ro['Quantity'];
	
	};
	
	$up = $num1 + $num2;
	
	echo "Sum ".$up;
	
    $quer = "UPDATE product SET Quantity='$up'  WHERE id='$id'";
    mysqli_query($db, $quer);	
	
	
	
	
    $query = "DELETE FROM purchase WHERE id='$del'";
    mysqli_query($db, $query);	
	header('location: mycounter.php'); 
$_SESSION['invalid']="";	
	

?>

