<?php

$db = mysqli_connect('localhost', 'root', '', 'final');
if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

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
 
$find = "SELECT company_name,logo FROM registered WHERE username = '$_SESSION[username]'";
    
$result=mysqli_query($db,$find);  
		$re=mysqli_fetch_assoc($result);
	    
	 $company_name =$re["company_name"];
 $logo =$re["logo"];

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
        <nav id="sidebar">
            <div class="sidebar-header">
			<a href="index.php">
                <h5 class="text-center"><img class="center rounded"width="90" height="90px" src="../portal/uploads/<?php echo $logo  ?>"/><div><?php echo $company_name  ?></div></h5></a>
            </div>

            <ul class="list-unstyled components">
              <h5 class="text-center">SUPPLIER</h5>
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
                    <a href="index.php?logout='1'" class="download text-warning">Log Out</a>
                </li>
                <li>
                    <a href="#" class="article disabled">Store Account</a><a type="button" class="btn btn-primary disabled" data-toggle="modal" data-target="#myModal">Settings</a>
                </li>
				<li class="text-center"><?php include('gettime.php') ?></li>
            </ul>
			
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-transparent bg-transparent">
                <div class="container-fluid">

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
  <input type="text" placeholder="Product Info.." name="search2">
  <button class="bg-primary" type="submit"><i class="fa fa-search"></i></button>
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
  <div class="card shadow mb-4">
            <div class="card-header py-2 bg-primary">
              <h4 class="m-1 font-weight-bold text-white">SUPPLIER &nbsp </a>
			  &nbsp&nbsp&nbsp <img title="Add Product" type="button" data-toggle="modal" data-target="#amyModal" width="40px" height="40px" src="../images/add.png">
 &nbsp&nbsp&nbsp
<img title="Remove Product" type="button" data-toggle="modal" data-target="#bmyModal" width="35px" height="35px" src="../images/delete.png">


			  </h4>
                              

		   </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"> 
               <thead>
                   <tr>
                    
                                                    <th>NAME/COMPANY NAME</th>
                                                    <th>ADDRESS</th>
													 <th>PRODUCT</th>
													 <th>LAST TRANSACTION</th>
													  <th>CONTACT</th>
													   
                   </tr>
               </thead>
          <tbody>

<?php     
$db = mysqli_connect('localhost', 'root', '', 'final');
    
    $query = 'SELECT * FROM supply';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) {
                                 
                echo '<tr>';
                echo '<td>'. $row['NAME'].'</td>';
                echo '<td>'. $row['ADDRESS'].'</td>';
                echo '<td>'. $row['PRODUCT'].'</td>';
                echo '<td>'. $row['TIMEANDDATE'].'</td>';
				  echo '<td>'. $row['CONTACT'].'</td>';
				   echo '</tr> ';
				
                     
                        }
?> 
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                  </div>
        

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
      <label >Company Name&nbsp&nbsp&nbsp&nbsp</label><input class="text" name="company_name">
	   <div>
	    <label >Address&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label><input class="text" name="address">
	   </div>
	    <label >Contact &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label><input class="text" name="contact">
	   <div>
	   <div>
	   <input type="file" 
                  name="my_image"></div>
  <label >Confirm Password&nbsp </label><input class="text" Type="password"name="password">
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
<!---->


<!-- The Modal -->
  <div class="modal" id="amyModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add Supplier&nbsp&nbsp</h4><img width="40px" height="40px" src="../images/add.png">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
			<div class="text-left"align="center"><div>
			
			<form method="POST" class="supadd-form" action="server.php" id="supadd-form">
         <label>NAME/COMPANY <div><input type="text" id="NAME" name="NAME"></label></div>
		 </div><div>
		 <label>ADDRESS</label><div> <input type="text" id="ADDRESS" name="ADDRESS"></div>
			 </div><div>
		   <label>PRODUCT<div></label> <input type="text" id="PRODUCT" name="PRODUCT"></div>
		  	 </div><div>
			 <label>CONTACT </label><div><input type="text" id="CONTACT" name="CONTACT"></div><div>
		    <label>LAST DELIVERED</label><div><input type="date" id="TIMEANDDATE" name="TIMEANDDATE"></div>
			 </div>
	 </div>
	 
	 
	 
	 </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="submit" name="supadd" class="btn btn-primary">Add</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  
</div>

 
 



  <!-- Delete -->
  <div class="modal" id="bmyModal">
    <div class="modal-dialog">
      <div class="modal-content text-center">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Remove Supplier&nbsp&nbsp</h4><img width="35px" height="35px" src="../images/delete.png">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
		<form method="POST"class="delete-form" action="server.php" id="delete-form">
          <label>NAME/COMPANY&nbsp&nbsp</label><input type="text" name="NAME" Id="NAME">
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" Name="Preview"class="btn btn-primary" data-dismiss="modal">Preview</button>
		  <button type="submit" Name="supdelete" class="btn btn-danger">Delete</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  


  <!-- The Modal -->
  <div class="modal" id="cmyModalME">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Edit Supplier Info&nbsp&nbsp</h4><img width="40px" height="40px" src="../images/edit.png">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
		<form method="post" action="server.php">
         <label class="text-center">Confirm Product ID&nbsp&nbsp</label><input type="text" name="product_id" Id="product_id">
       
        <div>
		 <label>Product Name</label><div> <input type="text" id="Product_Name" name="Product_Name"></div>
			 </div><div>
		   <label>Quantity<div></label><input type="number" id="Quantity" name="Quantity"></div>
		  	 </div><div>
		    <label>Price</label><div><input type="number" id="Price" name="Price"></div>
			 </div><div>
			 <label>Details </label><div><input type="text" id="Details" name="Details"></div>
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