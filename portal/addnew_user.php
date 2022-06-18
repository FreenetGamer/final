<?php 
 include('server.php');
	error_reporting();

?>
<style>
body{
	margin: 0 auto;
	background-image: url("../images/mj.jpeg");
	background-repeat: no-repeat;
	background-size: 100% 720px;
}

.containera{

	width: 800px;
	height: 450px;
	text-align: center;
	margin: 0 auto;
	background-color: rgba(44, 62, 80,0.7);
	margin-top: 120px;
}

btn{
	padding: 10px 20px;
	border: none;
	background-color: #27ae60;
	color: #fff;
	margin-left: 50px;




</style>
<!DOCTYPE html>
<html>
<head>
  <title>Final</title>
  

  <script src="../portal/js/b5.js"></script>
</head>
<body>
<form method="POST" action="save_newuser.php">
	<div class="containera row"><br>
	<img style="height:100px; margin-top: 50px" class="rounded-circle" src="../images/newuser.png"/>
	<h1 style="color:#ffffff;"> New User </h1>
	
			<div class="row" style="margin-left: 10px">
				<label style="margin-right: 5px;	font-size: 20px; color: white;" >Username </label>
				<input required style="height: 40px; text-align: center;"  type="text" name="text" placeholder="Enter the User Name"/>	

   
			
			
		
<label style="	margin-left: 20px; font-size: 20px; color: white;" >Password</label>	<input required type="password" style="height: 40px; text-align: center; margin-left:10px; width: 150px;" type="text" name="password" placeholder="password"/>
<select style="height: 40px; width: 100px; margin-left:20px;" name="type"> 
  
     <option>Cashier</option>
	  <option>Admin</option>
	 </select>

</div>
  <div style="margin-left: 500px"><br><br><br><br>
			
			<button type="submit" name="suba" style="width: 100px; margin-right: 30px; font-size: 18px; background-color:#072BF7;color:#ffffff;border-radius:5px">ADD</button>
			<a href="user.php"><button type="button" style="margin-right: 30px; font-size: 18px; background-color:#F7072B;color:#ffffff;border-radius:5px">CLOSE</button>	</a>	
						
						 
	</div>

  </form>

	
</body>
</html>