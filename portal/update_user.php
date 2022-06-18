<?php
 include('server.php');
	error_reporting();
	session_start();
	$username = null;




//update product
   
    if (isset($_POST['sub'])) {
	$username = mysqli_real_escape_string($db, $_POST['text']);
	$password = mysqli_real_escape_string($db, $_POST['password']);
		$password1 = mysqli_real_escape_string($db, $_POST['password1']);
	$type = mysqli_real_escape_string($db, $_POST['type']);
	$id = mysqli_real_escape_string($db, $_POST['id']);
	
	if($password == $password1){
		  $password =md5($password);
	if ($type=="Cashier"){$typee="0";}else{$typee="1";};
	
 $queryb = "UPDATE registered SET username='$username',password='$password',type='$typee' WHERE id='$id'";
      mysqli_query($db, $queryb);
	  
echo $username."  ".$password."   ".$id." ".$typee;
	}else{
		$_SESSION['updateusererror'] ="Password not Match";
	}
	
	
	   
 




};	




header('location: user.php'); 
 ?>