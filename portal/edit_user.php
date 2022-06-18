<?php 
 include('server.php');

	error_reporting();
	
	$del = $_GET['id'];
	$myquery = "SELECT * FROM registered WHERE id = '$del'";
	$nn = mysqli_query($db, $myquery);
	 while($row = mysqli_fetch_array($nn)){
    $username = $row['username'];
	
    $num2 = $row['type'];
	if ($num2==0){$typee="Cashier";}else{$typee="Admin";};
	
	
	};
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
<form method="POST" action="update_user.php">
	<div class="containera row"><br>
	<img style="height:100px " class="rounded-circle" src="../images/newuser.png"/>
	
	<br><br>
		
			<div class="row" style="margin-left: 10px">
				<label style="margin-right: 5px;	font-size: 20px; color: white;" >Username </label><input required value="<?php echo $username;?>" style="height: 40px; text-align: center;"  type="text" name="text" placeholder="Enter the User Name"/>	
<input type="hidden" name="id" value="<?php echo $del;?>">
   <select style="height: 40px; width: 100px; margin-left:20px;" name="type"> 
  <option style="background-color:#6D75A6;" ><?php echo $typee;?></option>
     <option>Cashier</option>
	  <option>Admin</option>
	 </select>
			</div>
			
				
			<br>
<label style="	margin-left: 20px; font-size: 20px; color: white;" >Password</label>	<input required  style="height: 40px; text-align: center; margin-left:10px; margin-right:150px; width: 150px;" type="password" name="password" placeholder="password"/>
<div><br>
  <label style="	 font-size: 20px; color: white;" >Confirm Password</label><input required  style="margin-right:204px;  width: 150px; margin-left:15px; height: 40px; text-align: center;" type="password" name="password1" placeholder="password"/></div>
  <div style="margin-left: 500px"><br><br><br><br>
			
			<button type="submit" name="sub" style="margin-right: 30px; font-size: 18px; background-color:#072BF7;color:#ffffff;border-radius:5px">UPDATE</button>
			<a href="user.php"><button type="button" style="margin-right: 30px; font-size: 18px; background-color:#F7072B;color:#ffffff;border-radius:5px">CLOSE</button>	</a>	
						
						 
	</div>

  </form>

	
</body>
</html>