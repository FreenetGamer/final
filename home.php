  <?php   
 session_start();  
 $connect = mysqli_connect("localhost", "root", "", "tbl_product");  
 if(isset($_POST["add_to_cart"]))  
 {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
           if(!in_array($_GET["id"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_id'               =>     $_GET["id"],  
                     'item_name'               =>     $_POST["hidden_name"],  
                     'item_price'          =>     $_POST["hidden_price"],  
                     'item_quantity'          =>     $_POST["quantity"]  
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
           }  
           else  
           {  
               
               echo '<script>location:index.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
                'item_id'               =>     $_GET["id"],  
                'item_name'               =>     $_POST["hidden_name"],  
                'item_price'          =>     $_POST["hidden_price"],  
                'item_quantity'          =>     $_POST["quantity"]  
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
      }  
 }  
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                 
                     echo '<script>location:index.php"</script>';  
					 
                }  
           }  
      }  
 }  
 ?>  
 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
	 <title>Inventory Management</title>
    
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

	<style>
	/* colors
 #151A21; light 
 #512DA8 ; dark
*/

*{
    margin: 0;
    padding: 0;
    text-decoration: none;
}




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
    background: #512DA8 ;
    padding: 20px;
    font-weight: bold;
}
.body h4{
    text-align: center;
    font-size: 19px;
    text-transform: uppercase;
    color: #ffffff;
    background: #512DA8 ;
    padding: 20px;
    font-weight: bold;
}









	</style>
	 <body>
  
    <div class="sidebar">
      <h2>Counter</h2>
     <h3 class="center">Order Details</h3>  
                <div>  
                    &nbsp&nbsp <table class="table table-bordered ">  
                          <tr>  
                               <th>Item Name</th>  
                               <th>Quantity</th>  
                               <th>Price</th>  
                               <th>Total</th>  
                               <th>Action</th> 
                          </tr> 
 <td></td> 						  
                          <?php   
						  
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                          ?>  
                          <tr>  
                               <td><?php echo $values["item_name"]; ?></td>  
                               <td><?php echo $values["item_quantity"]; ?></td>  
                               <td>₱ <?php echo $values["item_price"]; ?></td>  
                               <td>₱ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>  
                               <td><a href="home.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>  
                          </tr>  
                          <?php  
                                    $total = $total + ($values["item_quantity"] * $values["item_price"]);  
                               }  
                          ?>  
                          <tr>  
                               <td colspan="3" align="right">Total</td>  
                               <td align="le">₱ <?php echo number_format($total, 2); ?></td>  
							    <td align="center"><button class="btn btn-primary" height="80px">Next</button></td>  
                               <td></td>  
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>  
                </div>  
</div>		   
    </div>
    </div>
	<div class="main" style="margin-left: 400px ">
	
   <nav>
  <div class="container">
 <h4 align="center">MENU</h4>
 
		 <div class"row">
           <div class="container" style="width:900px;">  
		       
               
                <?php  
                $query = "SELECT * FROM tbl_product ORDER BY id ASC";  
                $result = mysqli_query($connect, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>  
				
                <div class="col-sm-3">  
                     <form method="post" action="home.php?action=add&id=<?php echo $row["id"]; ?>">  
                          <div  style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">  
                             
							   <img class="center"width="100px" height="90px" src="images/<?php echo $row["image"]; ?>"/>
							   <br />  
                               <h4 class="text-info"><?php echo $row["name"]; ?></h4>  
                               <h4 class="text-danger">₱ <?php echo $row["price"]; ?></h4>  
                               <input type="text" name="quantity" class="form-control" value="1" />  
                               <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />  
                               <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />  
                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />  
                          </div>  
                     </form>  
                </div> 
                <?php  
                     }  
                }  
                ?>  
               
                
           </div> 
	   
       

 </div>
</nav>
	</div>