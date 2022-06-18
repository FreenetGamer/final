<?php 
 include('server.php');
	error_reporting();



 if (isset($_POST['suba'])) {
 

  $username = mysqli_real_escape_string($db, $_POST['text']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
 $type = mysqli_real_escape_string($db, $_POST['type']);
 if ($type=="Cashier"){$typee="0";}else{$typee="1";};
 
$user_check_query = "SELECT * FROM registered WHERE username='$username' LIMIT l";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  $password =md5($password);
  if ($user) {
    if ($user['username'] == $username) {
		
		
		  echo "Username already exists";

      array_push($errors, "Username already exists");}
	  }
 if (count($errors) == 0) {
  $queryzz = "INSERT INTO registered (username,password,type) 
  			  VALUES('$username', '$password','$typee')";
  	mysqli_query($db, $queryzz);}} 
  

 header('location: user.php');
?>