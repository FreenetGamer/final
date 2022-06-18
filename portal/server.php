
<?php
session_start();


$limit = isset($limit)? $limit : 6;
$page = isset($_GET['page'])? $_GET['page'] : 1;
$start = ($page - 1) * $limit;


// initializing variables
$username = "";
$errors = array(); 



// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'final');
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
	ini_set('display_errors', 1); 
ini_set('log_errors', 1); 
ini_set('error_log','log'); 
error_reporting(E_ALL);

if(isset($_POST['submit']))
{		

	
	$username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    
  
    if (empty($username)) {
      array_push($errors, "Username is required");
    }
    if (empty($password)) {
      array_push($errors, "Password is required");
    }
    
    if (count($errors) == 0) 
    {
		
      $password =md5($password);
    //  if (($_POST['password']) !== $password)
		  if(md5($_POST['password']) !== $password)
		  
{
    echo "Password is invalid";
	  header('location: portal/loger.php');
	
	
}
	   
      $queryzzzx = "SELECT * FROM registered WHERE username='$username' AND password ='$password' and type = 1";
		$row=mysqli_fetch_assoc($results);
	    $results = mysqli_query($db, $queryzzzx);
		
		
      $res=mysqli_num_rows($results);
      if ($res) 
      {
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
		  $_SESSION['typea'] == 1;
		$_SESSION['type'] = "Admin";
		 header('location: /final/generator2.php');
		
		//require ("sydewuydfedrf");//Generated error freenet gamer hahaha basta cute ako hahaa
	
        
		
      }else{array_push($errors, "Wrong username/password combination");
	   $_SESSION['username'] = $username;
	      $_SESSION['mj'] = "invalid Username or Password";
	   header('location: /final/generator.php');
	  
	
		  
	  
	  }
	 
	
		   $querym = "SELECT * FROM registered WHERE username='$username' AND password ='$password' and type = 0";
		$rowm=mysqli_fetch_assoc($resultsm);
	    $resultsm = mysqli_query($db, $querym);
		
		
      $resm=mysqli_num_rows($resultsm);
      if ($resm) 
      {
       $_SESSION['type'] = "Cashier";
	   	  $_SESSION['typea'] == 0;
		 header('location: /final/generator2.php');
		
		
	
        
		
      }
		
	  
	  
	  
	  }}
// register new acc


 if (isset($_POST['reg_user'])) {
 
 $l = 1;
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
 $company_name = mysqli_real_escape_string($db, $_POST['company_name']);
 
$user_check_query = "SELECT * FROM registered WHERE username='$username' LIMIT $l";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  $password =md5($password);
  if ($user) {
    if ($user['username'] == $username) {
		
		
		  echo "Username already exists";

      array_push($errors, "Username already exists");}
	  }
 if (count($errors) == 0) {
  $queryzz = "INSERT INTO registered (username,password,company_name) 
  			  VALUES('$username', '$password','$company_name')";
  	mysqli_query($db, $queryzz);}} 
  
  //addproduct

		
	  

	  
   
   
 // change Company Info
 
 if (isset($_POST['change'])) {
	$company_name = mysqli_real_escape_string($db, $_POST['company_name']);
	$address = mysqli_real_escape_string($db, $_POST['address']);
	$contact = mysqli_real_escape_string($db, $_POST['contact']);
	$username = mysqli_real_escape_string($db, $_POST['username']);
	
	
	  $queryc = "UPDATE registered SET company_name='$company_name',address='$address',contact='$contact' WHERE username='$username'";
      mysqli_query($db, $queryc);	
	 header('location: product.php');   
   }
   
    if (isset($_POST['delete'])) {
	$product_id = mysqli_real_escape_string($db, $_POST['product_id']);
	
	  $query = "DELETE FROM product WHERE product_id='$product_id'";

      mysqli_query($db, $query);	
	 header('location: product.php');   
   }
   
   
    if (isset($_POST['change'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
 $img_name=$_FILES['my_image']['name'];
		$tmp_img_name=$_FILES['my_image']['tmp_name'];
		$folder='uploads/';
	

		move_uploaded_file($tmp_img_name,$folder.$img_name);
		 $queryv = "UPDATE registered SET logo='$img_name' WHERE username='$username'";
      mysqli_query($db, $queryv);	
	 header('location: index.php');   
   }
    
   
   
   //update product
   
    if (isset($_POST['update'])) {
	$product_id = mysqli_real_escape_string($db, $_POST['product_id']);
	$Price = mysqli_real_escape_string($db, $_POST['Price']);
	$Product_Name = mysqli_real_escape_string($db, $_POST['Product_Name']);
	$Quantity = mysqli_real_escape_string($db, $_POST['Quantity']);
	$Details = mysqli_real_escape_string($db, $_POST['Details']);
	
    $user_check_query = "SELECT * FROM product WHERE product_id='$product_id'";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) {
    if ($user['product_id'] === $product_id) {
       $queryb = "UPDATE product SET Price='$Price',Product_Name='$Product_Name',Quantity='$Quantity',Details='$Details' WHERE product_id='$product_id'";
      mysqli_query($db, $queryb);
	   header('location: product.php'); }} 
 if (count($errors) == 0) {
 
echo "Product Id Not found....!!!!!";
}}	
   
   //supplier 
   //add
   if (isset($_POST['supadd'])) {
 
  $NAME = mysqli_real_escape_string($db, $_POST['NAME']);
  $ADDRESS = mysqli_real_escape_string($db, $_POST['ADDRESS']);
 $PRODUCT = mysqli_real_escape_string($db, $_POST['PRODUCT']);
 $CONTACT = mysqli_real_escape_string($db, $_POST['CONTACT']);
 $TIMEANDDATE = mysqli_real_escape_string($db, $_POST['TIMEANDDATE']);
  
  $queryn = "INSERT INTO supply (NAME,ADDRESS,PRODUCT,CONTACT,TIMEANDDATE) 
  			  VALUES('$NAME', '$ADDRESS','$PRODUCT','$CONTACT','$TIMEANDDATE')";
  	mysqli_query($db, $queryn);
	
	 header('location: suplier.php');
	
	}
   //supdel
     if (isset($_POST['supdelete'])) {
	$NAME = mysqli_real_escape_string($db, $_POST['NAME']);
	
	  $querym = "DELETE FROM supply WHERE NAME='$NAME'";
      mysqli_query($db, $querym);	
	 header('location: suplier.php');
   }
   
  ?>
  