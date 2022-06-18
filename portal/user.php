


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



<?php
  $db = mysqli_connect('localhost', 'root', '', 'final');
  $a = "Select SUM(Quantity) As sum FROM product";
  $b = mysqli_query($db ,$a);
  while($row = mysqli_fetch_assoc($b)){
  $mj = $row['sum'];
  }
?><?php
$date = date("m");
  $dba = mysqli_connect('localhost', 'root', '', 'final');
  $aa = "Select SUM(total) As sum FROM purchase WHERE date = '$date'";
  $ba = mysqli_query($dba ,$aa);
  while($rowa = mysqli_fetch_assoc($ba)){
  $mja = $rowa['sum'];
  }
?>
	
	
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="../portal/css/cdn.css">
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
    <script defer src="../portal/js/a.js"></script>
    <script defer src="../portal/js/b.js"></script>
	
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
			<a href="index.php">
            <h5 class="text-center"> <img class="center rounded"width="90" height="90px" src="../portal/uploads/<?php echo $logo  ?>"/><div><?php echo $company_name  ?> </div></h5> 
            </div>

            <ul class="list-unstyled components">
              <h5 class="text-center">Manage User</h5>
                <li class="">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Product</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="product.php"></i>Product</a>
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
                    <a class="article disabled" href="#" > Store Account</a>
					<a type="button" class="btn btn-primary disabled" data-toggle="modal" data-target="#myModal">Settings</a>
					<a type="button" class="btn btn-success disabled"  data-toggle="modal" data-target="#myModal01">Backup/Restore</a>
                </li>
				
            </ul>
			
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-transparent bg-transparent">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info" >
                        <i class="fas fa-align-left"></i>
                        
                    </button>
						<h3>&nbsp&nbsp&nbsp&nbspWelcome  <?php echo $_SESSION['username']  ?></h3>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
					
					
                           <form class="example" action="/action_page.php" style="margin:auto;max-width:300px">
  <input type="text" placeholder="Search.." name="search2">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>
                            <li class="nav-item">
							
                                <a class="nav-link" href="#"><img width="30" height="30px" src="../images/store.png"/></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
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
   
	

		
		
		  
	 </div>
 </div>
 </div>
  </div>
			<br><br>
	<h4 Class="text-center" ><?php include('gettime.php') ?></h4>
           
		  <div class="mj">
  <div class="card shadow mb-6">
            <div class="card-header py-2 bg-primary">
              <h4 class="m-1 font-weight-bold text-white">ACCOUNTS&nbsp </a> 
			  &nbsp&nbsp&nbsp <a href="addnew_user.php"><img title="Add Product" type="button"  width="40px" height="40px" src="../images/add.png"></a>
 &nbsp&nbsp&nbsp


			  </h4>
                              

		   </div>
            <div class="card-body ">
              <div class="table-responsive ">
                <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0"> 
               <thead class="text-white">
                   <tr class="bg-dark">
                     <th>ACCOUNT TYPE 
</th>
					 <th>USERNAME</th>
                      <th>PASSWORD</th>
					  <th>ACTION</th>
                   </tr>
               </thead>
          <tbody>

<?php

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
		
		

	
	
	
	  
      
		  $sql = "SELECT * FROM registered ORDER BY id DESC LIMIT $offset, $no_of_records_per_page";
        $res_data = mysqli_query($conn, $sql);

        while($row = mysqli_fetch_array($res_data)){


				
                             
							   if($row['type']==1){echo '<tr>';
								    echo '<td>'."Admin".'</td>';
                echo '<td>'. $row['username'].'</td>';
               
           echo '<td>'. $row['password'].'</td>';
		   echo '<td ><a href="edit_user.php?&id='.$row['id'].'
				"><img style="margin-left: 20px"  type="button" width="20px" height="20px" src="../images/edit.png"></a>
				
			</td>  ';
		   
		   }else{echo '<tr>';
								    echo '<td>'."Cashier".'</td>';
                echo '<td>'. $row['username'].'</td>';
               
           echo '<td>'. $row['password'].'</td>';
		 echo '<td >
		 <a href="edit_user.php?&id='.$row['id'].'
				"><img style="margin-left: 20px"  type="button" width="20px" height="20px" src="../images/edit.png"></a>
		 <a href="remove_user.php?&id='.$row['id'].'
				"><img style="margin-left: 20px"  type="button" width="20px" height="20px" src="../images/close.png"></a>
				
			</td>  ';
		   }

								   
							   
								   
								   
			
				
				
               ?>
				
				
				<?php echo '</tr> ';
				
                     
                        }
?>  <div class="row" style="margin-left: 5px; pad">

	 
	 

	
   
  

</div>
                                    
                                </tbody>
								
                            </table>
                        </div>
                    </div>
                  </div>
   
   <!---->
   


		
       
		 
		 
        </div>
        
      </div>
    </div>
  </div>
  
</div>



    <script src="js/3.js"></script>
    <!-- Popper.JS -->
    <script src="js/2.js"></script>
    <!-- Bootstrap JS -->
    <script src="js/1.js"></script>    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
	
	

</div>
</body>

</html>