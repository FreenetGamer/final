<?php include('portal/server.php');

 ?>
 
 



<!DOCTYPE html>


<html lang="en">
<head>
  <title>Final</title>
  <meta charset="utf-3">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="portal/css/bootstrap.min.css" rel="stylesheet">
   <link href="portal/css/5.css" rel="stylesheet">
  <script src="portal/js/5.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 

  <script src="portal/js/b5.js"></script>
</head>
<body>


	<Style> 
	.modal{
	
	height: 100%;
	text-align: left;
	margin-top: 30px;
	margin-left: 50px;

}
.i{
	
	height: 20px;
	width: 100px;
	font-size: 18px;
	margin-bottom: 20px;
	background-color: #fff;

	
}

	
	body{
	margin: 0 auto;
	background-image: url("images/mj.jpeg");
	background-repeat: no-repeat;
	background-size: 100% 720px;

}

.container{
	width: 350px;
	height: 250px;
	text-align: center;

	background-color: rgba(44, 62, 80,0.7);
	margin-top: 120px;
	border: 4px solid #4CAF50;
	margin-left: 50px;
}


.container img{
	width: 100px;
	height: 100px;
	margin-top: -70px;
	
}

input[name="username"],input[name="password"]{
	margin-top: 20px;
	height: 30px;
	width: 200px;
	font-size: 18px;
	margin-bottom: 20px;
	background-color: #fff;
	text-align: center;
}



.btn-login{
	padding: 10px 20px;
	border: none;
	background-color: #27ae60;
	color: #fff;
	margin-left: 50px;
} </Style>


<head>
	
</head>
<body>
 <style>


</style>




<a href="#"><img width="30" height="30px"  class="rounded-circle float-end" style="margin-top: 20px; margin-right: 20px;" src="images/m.jpg"/><a/>
<a style="margin-top: 20px; margin-right: 20px;" class="text-center text-primary text-white float-end" data-bs-toggle="modal" data-bs-target="#mj"  style="margin-right: 28px; "><button>Register</button></a>



<section class="sign-in">
<div class="signin-form">


 <form method="POST" class="register-form" action="Main.php" id="login-form"><br><br>
<br><br>
<h3 class="text-left text-white" style="margin-left: 170px;">Welcome</h3>



	<div class="container">
	<img class="rounded-circle" src="images/logo.png"/>
		
			<div class="form-input">
			<label class="text-white">Username</label>
				   <input type="text" name="username" id="username" required="_required"placeholder="username"/>
			</div>
			
			<div class="form-input">
				<label class="text-white">Password</label>
				 <input type="password" name="password" id="password" required="_required" placeholder="Password"/>
			</div>
			
			<button class="btn btn-primary" type="submit" name="submit" id="submit" class="form-submit bg-primary" style="margin-left: 202px "><b>Log in</b></button>
			<footer>
			
			
			<footer>
		</form>
		
	</div>
	</div>

</section>

				  

<!-- The Modal -->
<div class="modal" id="mj">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Register your Company</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
   
	

		
		 <form method="POST" class="register-form" id="register-form" action="Main.php" enctype="multipart/form-data">

	<div class="mj">

		
			<div class="form-newcom">
			<div>
				  <div> <label> Company Name</label><input class="text-center" style="margin-left: 30px" type="company_name" name="company_name" required="_required" /></div>
				 <div>
				   <label > UserName</label><input  style="margin-left: 70px"name="username" required="_required" /> </div>
				   <label> Password</label> <input style="margin-left: 75px" type="password" name="password" required="_required"/>
	  
				
			</div>
			<?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
   

         

           
		   
   
			<div class="modal-footer">
		
				   <input name="reg_user" type="submit" id="reg_user" class="btn btn-primary"
                  
                  value="Register">
				  
     
      </div>
			 
		</form>
		  
	

 </div>
  </div>
</div>
</body>
</html>
