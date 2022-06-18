<?php 
 include('server.php');
	error_reporting();
	
	$del = $_GET['id'];
	$myquery = "SELECT * FROM product WHERE Product_id = '$del'";
	$nn = mysqli_query($db, $myquery);
	 while($row = mysqli_fetch_array($nn)){
    $Product_Name = $row['Product_Name'];
	  $Quantity = $row['Quantity'];
	    $Price = $row['Price'];
		  $Details = $row['Details'];
		    $image = $row['image'];
	  $expired = $row['expired'];
	  $category = $row['category'];
   
	
	
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
	height: 500px;
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
<form method="POST" action="update_product.php">
	<div class="containera row"><br>
	<img style="height:100px " class="rounded-circle" src="../uploads/<?php echo $image; ?>"/>
	<input style="color: white; margin-left: 70px;"name="image" type="file" >
	<br><br>
		
			<div class="row" >
				<label style="font-size: 20px; color: white; margin-left: 65px;" >Product Name  </label>
				<input value="<?php echo $Product_Name; ?>" required style="height: 40px; text-align: center;"  type="text" name="productn" placeholder="Product Name"/>	
<input type="hidden" name="id" value="<?php echo $del;?>">
  
			
			
	
<label style="	margin-left: 50px; font-size: 20px; color: white;" >STOCKS</label>	<input value="<?php echo $Quantity; ?>" required  style="height: 40px; text-align: center; margin-left:10px; margin-right:150px; width: 150px;" type="text" name="stock" placeholder="Stocks"/>
<div style="margin-right: 120px"><br>
  <label style=" font-size: 20px; color: white; margin-left: 30px" >EXPIRATION</label>
  <input required type="date" name="expired" id ="expired" value="<?php echo $expired; ?>" style="height: 40px; text-align: center; margin-left:2px; margin-right:80px; width: 170px;">
  
  <label style=" font-size: 20px; color: white;" >PRICE</label>
  <input value="<?php echo $Price; ?>" required  style=" width: 150px;  height: 40px; text-align: center;" type="text" name="price" placeholder="Price"/></div>
  <div>
  <label style=" font-size: 20px; color: white;" >CATEGORY</label><br>
  <select required name ="category" id="category" style="margin-left: 10px; width: 100px; height: 30px;">
  <option> <?php echo $category;?> </option>  
  <?php  $sql = "SELECT category FROM category";
        $res_data = mysqli_query($db,$sql);

        while($row = mysqli_fetch_array($res_data)){
			echo '<option>'.$row['category'].'</option>';
		}
		
		
		?></select>
 </div><div><br>
  <label style=" font-size: 20px; color: white;" >DETAILS</label></div><DIV>
 <textarea style="margin-left: 35px;" id="w3review" name="w3review" rows="4" cols="57"><?php echo $Details; ?></textarea></div>
  
  <br><br>
  <div style="margin-left: 500px">
			</div>
			<button type="submit" name="subaa" style="margin-right: 30px; font-size: 18px; background-color:#072BF7;color:#ffffff;border-radius:5px">UPDATE</button>
			<a href="product.php"><button type="button" style="margin-right: 30px; font-size: 18px; background-color:#F7072B;color:#ffffff;border-radius:5px">CLOSE</button>	</a>	
						
						 
	</div>

  </form>

	
</body>
</html>

