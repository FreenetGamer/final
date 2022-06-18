<?php

$db = mysqli_connect('localhost', 'root', '', 'final');
if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>
<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: ../Main.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: ../Main.php");
  }
  
 $db = mysqli_connect('localhost', 'root', '', 'final');
 
$find = "SELECT company_name,logo FROM registered WHERE username = '$_SESSION[username]'";
 
$result=mysqli_query($db,$find);  
		$re=mysqli_fetch_assoc($result);
		
	     $company_name =$re["company_name"];
         $logo =$re["logo"];
 

 $errors = array(); 
    

?>


 



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="css/cdn.css">
    <!-- Our Custom CSS -->
  <style>body{
	font-family: 'Poppins', sans-serif;
	background: #fafafa;
}
p{
	font-family: 'Poppins', sans-serif;
	font-size: 1.1em;
	font-weight: 300;
	line-height: 1.7em;
	color: #999;
}
a,
a:hover,
a:focus{
	color: inherit;
	text-decoration: none;
	transition: all 0.3s;
}

/* Side Bar*/



#sidebar.active {
    margin-left: -250px;
}
.wrapper{
	display: flex;
	text-decoration: none;
	transition: all 0.3s;
}

#sidebar{
	min-width: 250px;
	max-width: 250px;
	background: #7386D5;
	color: #fff;
	transition: all 0.3s;
}

ul.CTAs a {
	
    text-align: center;
    font-size: 0.9em !important;
    display: block;
    border-radius: 5px;
    margin-bottom: 5px;
	margin-left: 25px;
	width: 200px;
}


a.download {
    background: #fff;
    color: #7386D5;
}

a.article,
a.article:hover {
    background: #6d7fcc !important;
    color: #fff !important;
}
#sidebar .sidebar-header{
	padding: 20px;
	background: #6d7fcc;
}
#sidebar ul.components{
	padding: 20px 0;
	border-bottom: 1px solid #47748b;
}

#sidebar ul p{
	color: #fff;
	padding: 10px;
}

#sidebar ul li a{
	padding: 10px;
	font-size: 1.1em;
	display: block;
}

#sidebar ul li a:hover{
	color: #7386D5;
	background: #fff;
}
#sidebar ul li.active>a,
a[aria-expanded="true"] {
	color: #fff;
	background: #6d7fcc;
}

a[data-toggle="collapse"]{
	position: relative;
}

.dropdown-toggle::after{
	display: block;
	position: absolute;
	top: 50%;
	right: 20%;
	transform: translateY(-50%);
}
ul ul a{
	font-size: 0.9em !important;
	padding-left: 30px !important;
	background: #6d7fcc;
}

#content{
	width: 100%;
	padding: 20px;
	min-height: 100vh;
	transition: all 0.3s;
}

.navbar {
    padding: 15px 10px;
    background: #fff;
    border: block;
    border-radius: 1;
    margin-bottom: 40px;
    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
}
@media (max-width: 768px) {
    #sidebar {
        margin-left: -250px;
    }
    #sidebar.active {
        margin-left: 0;
    }
    #sidebarCollapse span {
        display: none;
    }
}







</style>

    <!-- Font Awesome JS -->
    <script defer src="js/a.js"></script>
    <script defer src="js/b.js"></script>

	<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar" style="width: 200px;">
            <div class="sidebar-header bg-succes-succes"   >
				<a href="index.php">
 <h5 class="text-center"><img class="center rounded"width="90" height="90px" src="../portal/uploads/<?php echo $logo  ?>"/><div><?php echo $company_name  ?></div></h5></a>
    
            </div>

            <ul class="list-unstyled components" >
              <h5 class="text-center">PRODUCT</h5>
                <li class="">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Product</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                           <a href="product.php">Product</a>
                        </li>
                        <li>
                            <a href="purchasehistory.php">Purchase history</a>
                        </li>
                     
                    </ul>
                </li>
				 <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Inventory</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="report.php">Reports</a>
                        </li>
                        <li>
                            <a href="expen.php">Expenses</a>
                        </li>
						   <li>
                            <a href="suplier.php">Supplier</a>
                        </li>
                            <!--   <li>
                            <a href="Documents.php">Documents</a>
                        </li>-->
                    </ul>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
               
             
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="product.php?logout='1'" class="download text-dark">Log Out</a>
                </li>
                <li>
                    <a href="#" class="article">Store Account</a><a type="button" class="btn btn-primary disabled" data-toggle="modal" data-target="#myModal">Settings</a>
                </li>
				<li class="text-center"><?php include('gettime.php') ?></li>
            </ul>
			
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav style="height: 50px;" class="navbar navbar-expand-sm navbar-transparent bg-transparent">
                <div class="container">

                    <button type="button" id="sidebarCollapse" class="btn btn-info" >
                        <i class="fas fa-align-left"></i>
                        <span></span>
						
						
                    </button>
				<h3 class="m-1 font-weight-bold">&nbsp&nbsp&nbsp&nbspWelcome  <?php echo $_SESSION['username']  ?></h3>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
					
					
                           <form class="example" action="/action_page.php" style="margin:auto;max-width:300px">
 
</form>
                            <li class="nav-item">
							
                                <a class="nav-link" href="#"><img width="30" height="30px" src="../images/store.png"/></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

          <!--Body-->
<br>
<div class="mj">
  <div class="card shadow mb-6">
            <div class="card-header py-2 bg-primary">
              <h4 class="m-1 font-weight-bold text-white">PRODUCTS&nbsp </a>
			  &nbsp&nbsp&nbsp <img title="Add Product" type="button" data-toggle="modal" data-target="#amyModal" width="40px" height="40px" src="../images/add.png">
 &nbsp&nbsp&nbsp

 &nbsp&nbsp&nbsp
<img title="Edit Product" type="button" data-toggle="modal" data-target="#cmyModal" width="40px" height="40px" src="../images/edit.png"> 

			  </h4>
                              

		   </div>
            <div class="card-body ">
              <div class="table-responsive ">
                <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0"> 
               <thead class="text-white">
                   <tr class="bg-dark">
                     <th>Product ID</th>
                     <th>PRODUCT NAME</th>
                     <th>STOCKS</th>
                     <th>PRICE</th>
					  <th>PRODUCT STATUS</th>
					   <th>EXPIRATION DATE</th>
					  <th>ACTION</th>
                   </tr>
               </thead>
          <tbody>
		  			<script>
    function payment() {
       
       
        var delivery = document.getElementById("a").value;
        var total = delivery;
		 document.getElementById("b").innerHTML = total;
       
         
    }
</script>



<?php
$b = '<input type="hidden" id="b">';

        if (isset($_GET['page'])) {
            $page = $_GET['page'];
        } else {
            $page = 1;
        }
        $no_of_records_per_page = 6;
        $offset = ($page-1) * $no_of_records_per_page;

        $conn=mysqli_connect('localhost', 'root', '', 'final');
        // Check connection
        if (mysqli_connect_errno()){
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            die();
        }

        $total_pages_sql = "SELECT COUNT(id) FROM product";
        $result = mysqli_query($conn,$total_pages_sql);
		
		

	$nowdate = date('Y-m-d');
	$todaydate = strtotime($nowdate);
	   $total_rows = mysqli_fetch_array($result)[0];
	  
        $total_pages = ceil($total_rows / $no_of_records_per_page);
		  $sql = "SELECT * FROM product ORDER BY id DESC LIMIT $offset, $no_of_records_per_page";
        $res_data = mysqli_query($conn,$sql);

        while($row = mysqli_fetch_array($res_data)){
$exp = $row['expired'];
$producrexp = strtotime($exp);

				
                              if ($row["Quantity"] <=0) {

							   
							array_push($errors, "Some Product Need Your Attention!");
								   
							   
								   
								  
               		if ($todaydate >= $producrexp )
			{  echo '<tr class="bg-danger " style="color: #ffffff";>';
                echo '<td>'. $row['product_id'].'</td>';
                echo '<td>'. $row['Product_Name'].'</td>';
                echo '<td>'. $row['Quantity'].'</td>';
                echo '<td> ₱ '. $row['Price'].'</td>';
								  echo '<td>'."EXPIRED & OUT OF STOCKS".'</td>';
								    echo '<td>'.$row['expired'].'</td>';}else{
				
				 echo '<tr class="table-warning">';
                echo '<td>'. $row['product_id'].'</td>';
                echo '<td>'. $row['Product_Name'].'</td>';
                echo '<td>'. $row['Quantity'].'</td>';
                echo '<td> ₱ '. $row['Price'].'</td>';
								  echo '<td>'."OUT OF STOCKS".'</td>';
								  echo '<td>'.$row['expired'].'</td>';
				}
				  
				  
				echo '<td ><a href="remove.php?&id='.$row['product_id'].'
				"><img style="margin-left: 20px"  type="button" width="20px" height="20px" src="../images/close.png"></a>
				
				
				<a href="edit_product.php?&id='.$row['product_id'].'
				"><img style="margin-left: 20px"  type="button" width="20px" height="20px" src="../images/edit.png"></a>
				</td>  ';
							  }   else {  
				if ($todaydate >= $producrexp ){ echo '<tr class="bg-danger " style="color: #ffffff";>';
                echo '<td>'. $row['product_id'].'</td>';
                echo '<td>'. $row['Product_Name'].'</td>';
                echo '<td>'. $row['Quantity'].'</td>';
                echo '<td> ₱ '. $row['Price'].'</td>';
								  echo '<td>'."EXPIRED".'</td>';
								    echo '<td>'.$row['expired'].'</td>';}else{
				
				 echo '<tr class="bg-success" style="color: #ffffff";>';
                echo '<td>'. $row['product_id'].'</td>';
                echo '<td>'. $row['Product_Name'].'</td>';
                echo '<td>'. $row['Quantity'].'</td>';
                echo '<td> ₱ '. $row['Price'].'</td>';
				
								  echo '<td>'."ACTIVE PRODUCT".'</td>';
								    echo '<td>'.$row['expired'].'</td>';
				}
							 
								  
								  
								  
				echo '<td ><a href="remove.php?&id='.$row['product_id'].'
				"><img style="margin-left: 20px"  type="button" width="20px" height="20px" src="../images/close.png"></a>
				
				<a href="edit_product.php?&id='.$row['product_id'].'
				"><img style="margin-left: 20px"  type="button" width="20px" height="20px" src="../images/edit.png"></a>
			</td>  ';
				
				}
               ?>
				
				
				<?php echo '</tr> ';
                     
                        }
?>  <div class="row" style="margin-left: 5px; pad">
 
  <ul class="pagination" style=" height: 30px;">
 
	
    <li class="page-item <?php if($page <= 1){ echo 'disabled'; } ?>"><a class="page-link" href="<?php if($page <= 1){ echo '#'; } else { echo "?page=".($page - 1); } ?>">Prev</a></li>
	
    <li class="page-item <?php if($page >= $total_pages){ echo 'disabled'; } ?>"><a class="page-link" href="<?php if($page >= $total_pages){ echo '#'; } else { echo "?page=".($page + 1); } ?>">Next</a></li>
	 
 
	 
	 
	 

	
	 
	 
  </ul>   <label align="center" style="margin-top: 6px; margin-left: 20px;">Category</label>
        <select  id="a" oninput="payment()" style=" height: 30px; margin-top: 5px; margin-left: 5px; width: 200px;" name="Category">
		<option>All</option>
		<option>food</option>
   <option>Softdrinks</option>
   <option>others</option>
   </select>

</div>
                                    
                                </tbody>
								
                            </table>
                        </div>
                    </div>
                  </div>
   
   <!---->
   
<!--body close-->
  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Update Company Info</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
		<div class="text-left">
	<form method="POST" class="change-form" action="server.php" id="change-form">
      <label >Company Name&nbsp&nbsp&nbsp&nbsp</label><input class="text" name="company_name" required="_required">
	   <div>
	    <label >Address&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label><input class="text" name="address" required="_required">
	   </div>
	    <label >Contact &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label><input class="text" name="contact" required="_required">
	   <div>
	   <div>
	   <input type="file" 
                  name="my_image"></div>
  <label >Confirm Password&nbsp </label><input class="text" Type="password"name="password" required="_required">
	    </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
     <button class="btn-warning"> Change Password</button> <button class="btn-primary" name="change"> Update</button>
		 </form>
		 
        </div>
        
      </div>
    </div>
  </div>
  
</div>
</div>
</div>
<!---->






  <!-- The Modal -->
  <div class="modal" id="amyModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add Product&nbsp&nbsp</h4><img width="40px" height="40px" src="../images/add.png">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
			<div class="text-left"align="center"><div>
			
			<form method="POST"  action="addproduct.php" enctype="multipart/form-data">
          <label style="margin-right: 65px">Product ID </label><input type="text" id="product_id" name="product_id" value="<?php
echo date("Ymdhis");
?>">
		 </div><div>
		 <label style ="font-size: 20px; margin-right: 5px">Product Name</label><input required type="text" id="Product_Name" name="Product_Name" >
			 </div><div>
		   <label style ="font-size: 20px; margin-right: 84px">Stocks</label><input required type="number" id="Quantity" name="Quantity" >
		  	 </div><div>
		    <label style ="font-size: 20px; margin-right: 100px">Price</label><input required type="number" id="Price" name="Price"></div>
			 </div><div>
			 <label style ="font-size: 20px; margin-right: 81px">Details </label><input required type="text" id="Details" name="Details"></div>
			   <div>
			    <label style ="font-size: 20px;">Expiration date </label><input required type="date" id="date" name="date" style ="width: 205px"></div>
				 <label style=" font-size: 20px; margin-right: 30px" >CATEGORY</label>
  <select required name ="category" id="category" style="margin-left: 10px; width: 202px; height: 30px;">
  <option></option>  
  <?php  $sql = "SELECT category FROM category";
        $res_data = mysqli_query($db,$sql);

        while($row = mysqli_fetch_array($res_data)){
			echo '<option>'.$row['category'].'</option>';
		}
		
		
		?></select>
			   <div>
			<input required type="file" 
                  name="image"><label style=" font-size: 20px;"> Image </label></div>
				  
	 </div>
	 
	       <div class="modal-footer">
          <button type="submit" name="addding" class="btn btn-primary">Add</button>
        </div>
	 
	 </div>
        <!-- Modal footer -->
  
        </form>
      </div>
    </div>
  </div>
  
</div>

 
 



  


  <!-- The Modal -->
  <div class="modal" id="cmyModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Edit Product&nbsp&nbsp</h4><img width="40px" height="40px" src="../images/edit.png">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
		<form method="post" action="server.php" enctype="multipart/form-data">
         <label class="text-center">Confirm Product ID&nbsp&nbsp</label><input type="text" name="product_id" Id="product_id">
       
        <div>
		 <label>Product Name</label><div> <input type="text" id="Product_Name" name="Product_Name" required="_required"> 
		 
		 </div>
			 </div> <div>
		   <label>Quantity<div></label><input type="number" id="Quantity" name="Quantity" required="_required"></div>
		  	 </div><div>
		    <label>Price</label><div><input type="number" id="Price" name="Price" required="_required"></div>
			 </div><div>
			 
			 <label>Details </label><div><input type="text" id="Details" name="Details" required="_required"></div>
			  <label> Image </label><br><input type="file" 
                  name="image" id = "image"></div>
				<div> 
				
				
				</div>  
				  
				  
	 </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="submit" name="update" class="btn btn-primary">Update</button>
        </div>
        </form>
      </div>
    </div>
  </div>

 
 
    <script src="js/3.js"></script>
    <!-- Popper.JS -->
    <script src="js/2.js"></script>
    <!-- Bootstrap JS -->
    <script src="js/1.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>