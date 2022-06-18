  <?php 
  session_start(); 
$_SESSION['invalid'] = null;
  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: Main.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: ../final/Main.php");
  }
 $db = mysqli_connect('localhost', 'root', '', 'final');
 
$find = "SELECT company_name,logo FROM registered WHERE username = '$_SESSION[username]'";
    
$result=mysqli_query($db,$find);  
		$re=mysqli_fetch_assoc($result);
	    
	 $company_name =$re["company_name"];
 $logo =$re["logo"];


 $errors = array(); 
    

 $connect = mysqli_connect("localhost", "root", "", "final");  

 if(isset($_POST["add_to_cart"]))  
 {  
  
  
 
                             $today = date("Y-m-d");
                             $date = date("m");
							  
							   $abc = number_format($_POST["hidden_Quantity"]);
				              $Price =     number_format($_POST["hidden_price"]);
	                          $Product_Name = $_POST["hidden_name"];
							 
	                          $Quantity =  $_POST["quantity"] ;							  
					        $pid =  $_GET["id"] ;

							
							if($abc >= $Quantity){
								
								
								

								$totala =  $_POST["hidden_price"] * $_POST["quantity"];
							    $query = " INSERT INTO `purchase`(`Product_Name`, `Quantity`, `Price`, `product_id` ,`total`,`time_date`,`validation`,`date`) VALUES ('$Product_Name','$Quantity','$Price','$pid','$totala','$today','2','$date')";
							 $result = mysqli_query($connect, $query);  
							 
							 
							 $s = $abc-$_POST["quantity"] ; 
							 $up = "UPDATE `product` SET `quantity`='$s' WHERE id='$pid'";
							  mysqli_query($db, $up);
							$_SESSION['invalid']="";
						 header('location: mycounter.php'); 
								
							}else{$_SESSION['invalid']="<font-color: red>Invalid Quantity";};
							
							
						
						
         
        
				

 
 }
  
 if(isset($_GET["action"]))  
 { 

  
				
				if($_GET["action"] == "next")  
      {  	$query = "UPDATE purchase SET validation = 1 ";
             mysqli_query($connect, $query);
			 
			 
			 
                 header('location: mycounter.php'); 
		
					


				
                }; 
            
 }
 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Counter</title>  
       
            <link rel="stylesheet" href="portal/css/c.css">
         
  	   
      </head>  
      <body>  
	    <div class="wrapper">
        <!-- Sidebar  -->
       <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
	
    

	<style>
	/* colors
 #151A21; light 
 #512DA8 ; dark
*/

/* reset */
*{
    margin: 0;
    padding: 0;
    text-decoration: none;
}

body{
    box-sizing: border-box;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

/* Sidebar start here  */
.sidebar{
    position: fixed;
    background: #E6E6FA;
    width: 400px;
    height: 100%;
    top: 0;
    left: 0;
    z-index: 1;
}

.sidebar h2{
    text-align: center;
    font-size: 19px;
    text-transform: uppercase;
    color: #ffffff;
    background: #000080 ;
    padding: 20px;
    font-weight: bold;
	margin-top: 0px;
}




/* Sidebar end Here  */

/* Main Content Section Start Here  */

.main{
    margin-left: 400px;
    padding: 0px;
}

.main h3{
    text-align: center;
    font-size: 19px;
    text-transform: uppercase;
    color: #ffffff;
    background: #000080 ;
    padding: 20px;

    font-weight: bold;
	margin-top: 0px;
}
navbar {
  overflow: hidden;
  background-color: #999;
}


#navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px;
  text-decoration: none;
}


.content {
  padding: 16px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}


.sticky + .content {
  padding-top: 60px;
}


	</style>
	<style>*{padding:0;margin:0;}



.float{
	position:fixed;
	width:55px;
	height:55px;
	bottom:40px;
	right:40px;
	background-color:#FF6433;
	color:#FFF;
	border-radius:50px;
	text-align:center;
	box-shadow: 2px 2px 3px #084393;
}

.my-out{
	margin-top:15px;
}</style>
	
  </head>
  <body>
  
  
    <div class="sidebar">
     <h2>Counter</h2>
      <ul class="nav">
     <div class="container" style="width:400px;">
<h3 class="center">Order Details </h3>   <?php include('time.php') ?><div>
<div class="row">

<label style="margin-left:90px;">Total</label> <label style="margin-left:135px;">Payment</label></div>

 <?php  
				
                $queryaa = "SELECT * FROM purchase WHERE validation = 2";  
                $resultaa = mysqli_query($connect, $queryaa);  
                if(mysqli_num_rows($resultaa) > 0)  
                {  $sum = 0;
                     while($rowaa = mysqli_fetch_array($resultaa))  
                     { 
				 
		
               
                $rowaa['Price'];
                $rowaa['Quantity'];
				$new =  $rowaa['Price'] *  $rowaa['Quantity'];
				$sum = $new + $sum;
				
				};}else {$sum = "0.00";};
                ?>
				<script>
    function payment() {
        var price =  <?php  echo $sum;  ?>;
       
        var delivery = document.getElementById("inputDelivery").value;
        var total = +delivery -  +price;
		 document.getElementById("totalPrice").innerHTML = total;
       
      
    }
</script>
<form method="POST" action="success.php">
    <label class="text-center" style="width: 175px; height: 40px"><b>₱  <?php  echo $sum;  ?></b></label>       

    <input  required class="text-center"type="number" style="width: 190px; height: 40px" id="inputDelivery" oninput="payment()"> </input>    

</div>

<div><label>Exchange :   ₱ </label><label class="text-center text-primary" style="width: 135px;" id="totalPrice">0.00</label>
   <button  Type="submit" name="pay" class="btn bg-primary"type="button" style="margin-left:90px;"> Next </button>
</div></form>
<br>
 <table class="table bg-info">
    <thead class="bg-primary">
	
      <tr >
        <th>Item</th>
        <th>Quantity</th>
        <th>Price</th> <th>Action</th>
      </tr>
    </thead>
    <tbody>
	
	  <?php  
				
                $queryaa = "SELECT * FROM purchase WHERE validation = 2";  
                $resultaa = mysqli_query($connect, $queryaa);  
                if(mysqli_num_rows($resultaa) > 0)  
                {  
                     while($rowaa = mysqli_fetch_array($resultaa))  
                     { 
				
				 echo '<tr>';
               
                echo '<td>'. $rowaa['Product_Name'].'</td>';
                echo '<td>'. $rowaa['Quantity'].'</td>';
				echo '<td> ₱ '. $rowaa['total'].'</td>';
				echo '<td ><a href="del.php?&id='.$rowaa['id'].'
				"><img style="margin-left: 20px"  type="button" width="20px" height="20px" src="images/close.png"></a>
				</td>  ';


             
				};}
					
                ?>  
			
				
      <?php echo $_SESSION['invalid'];?>
     </tr>
    </tbody>

  </table>




	  <a href="mycounter.php?logout='1'" class="float"><?php $_SESSION['out']="log out"; ?>
<img class="my-out" src="images/exit.png" width="30px" height="30px"></img>
</a>   
</div>

	
</div>
	   
    </div>



    <div class="main">
 <nav class="navbar navbar-expand navbar-dark bg-dark">
  <div class="container-fluid">
 <h3 align="center" class="text-white">MENU</h3><br />


 </div>
</nav>

  
       

         
		 <div class="row">
           <div class="container" Style="width: 1070px;" >  
		       
               
                <?php  
				$nowdate = date('Y-m-d');
	$todaydate = strtotime($nowdate);
                $query = "SELECT * FROM product ORDER BY id ASC";  
                $result = mysqli_query($connect, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     { 
                ?>  
				
                <div class="col-sm-3">  
                     <form method="post" action="mycounter.php?action=add&id=<?php echo $row["id"]; ?>">  <label type="text" />Available: <?php echo $row["Quantity"]; ?></label>
                          <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px; height:260px" align="center">  
                             
							   <img class="center rounded"width="100px" height="90px" src="uploads/<?php echo $row["image"]; ?>"/>
							   <br />  
                               <h4 class="text-info"><?php echo $row["Product_Name"]; ?></h4>  
                               <h4 class="text-danger">₱ <?php echo $row["Price"]; ?></h4>  
                               <input type="text" name="quantity" class="form-control" value="1" />  
                               <input type="hidden" name="hidden_name" value="<?php echo $row["Product_Name"]; ?>" />  
                               <input type="hidden" name="hidden_price" value="<?php echo $row["Price"]; ?>" /> 
                               <input type="hidden" name="hidden_Quantity" value="<?php echo $row["Quantity"]; ?>" /> 
                               <input type="hidden" name="time" value="" />  							   
							   <?php
							$exp = $row['expired'];
$producrexp = strtotime($exp);

                if ($todaydate >= $producrexp){echo '<input type="button" name="add_to_cart" style="margin-top:5px;" class="btn btn-danger" value="EXPIRED" />';}else{
	 if ($row["Quantity"] <=0){echo '<input type="button" name="add_to_cart" style="margin-top:5px;" class="btn btn-warning" value="Out of stock" />';}else
							   {echo '<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" /> ';}							   
							   
}
							  
							   ?>
                              
                          </div>  
                     </form>  
                </div> 
                <?php  
                     }  
                }  
                ?> 
		
               
           
          </div> 
	   
           <br />

</div>			

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Modal body..
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>


      </body>  
 </html>