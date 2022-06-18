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
    <link rel="stylesheet" href="css/style.css">

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
              <h5 class="text-center">DOCUMENTS</h5>
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
                        <li>
                            <a href="Documents.php">Documents</a>
                        </li>
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
                    <a href="Documents.php?logout='1'" class="download text-warning">Log Out</a>
                </li>
                <li>
                    <a href="#" class="article">Store Account</a><a type="button" class="btn btn-primary disabled" data-toggle="modal" data-target="#myModal">Settings</a>
                </li>
				
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
	<p class="bg-primary"><?php include('gettime.php') ?></p>
          <!--Body-->


            <div class="card shadow mb-4">
            <div class="card-header py-2 bg-primary">
              <h4 class="m-1 font-weight-bold text-white">Document&nbsp </a>
			  &nbsp&nbsp&nbsp 
 &nbsp&nbsp&nbsp
<img title="Edit Product" type="button" data-toggle="modal" data-target="#cmyModal" width="40px" height="40px" src="../images/p.png">
			  </h4>
                              

		   </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"> 
               <thead>
                   <tr>
                     <th>CODE</th>
                     <th>DATE</th>
                     <th>TRANSACTION</th>
                     <th>AMOUNT </th>
                   </tr>
               </thead>
          <tbody>

<?php     
$db = mysqli_connect('localhost', 'root', '', 'final');
    
    $query = 'SELECT * FROM transaction';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) {
                                 
                echo '<tr>';
                echo '<td>'. $row['CODE'].'</td>';
                echo '<td>'. $row['DATE'].'</td>';
                echo '<td>'. $row['TRANSACTION'].'</td>';
                echo '<td>'."₱ ". $row['AMOUNT'].'</td>';
                     
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