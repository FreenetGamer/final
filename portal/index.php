


<?php

$db = mysqli_connect('localhost', 'root', '', 'final');
if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>
<?php 
  session_start(); 
$admin = 1;

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
	
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
		
            <h5 class="text-center"> <img class="center rounded"width="90" height="90px" src="../portal/uploads/<?php echo $logo  ?>"/><div><?php echo $company_name  ?> </div></h5> 
            </div>

            <ul class="list-unstyled components">
              <h5 class="text-center">Dashboard</h5>
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
                
					<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Settings</a>
					<a type="button" class="btn btn-success"  data-toggle="modal" data-target="#myModal01">Backup/Restore</a>
					    <a class="btn" href="user.php" > Store Account</a>
                </li>
				  <li>
                    <a href="index.php?logout='1'" class="download text-warning">Log Out</a>
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
			
			<br><br>
	<h4 Class="text-center" ><?php include('gettime.php') ?></h4><br><br><br><br>
           
		  
		  
		<div class="container mt-6">

<div class="row">
<div class="col-md-3">
<div class="card text-center">
<div class="card-header bg-primary text-white">
<div class="row align-items-center">
<div class ="col">
<h5>Stocks</h5>
</div>
<div class="col">
<h5 class="display-6"><?php 
                       
							
						echo "$mj";
                          ?></h5>
<label class="text-white">Record(s)</label>


</div>
</div>
</div>
</div>
</div>

<div class="col-md-3 ">
<div class="card text-center">
<div class="card-header bg-success text-white">
<div class="row align-items-center">
<div class ="col">
<h6>Category</h6>
</div>
<div class="col">
<h5 class="display-6">
3</h5>
  
<label class="text-white">Record(s)</label>


</div>
</div>
</div>
</div>
</div>




<div class="col-md-3 ">
<div class="card text-center">
<div class="card-header bg-secondary text-white">
<div class="row align-items-center">
<div class ="col">
<h5>User</h5>
</div>
<div class="col">
<h5 class="display-6">
                       <?php 
                        $query = "SELECT COUNT(*) FROM registered";
						
                        $result = mysqli_query($db, $query) or die(mysqli_error($db));
                        while ($row = mysqli_fetch_array($result)) {
						echo "$row[0]";
                          }?></h5>
<label class="text-white">Record(s)</label>


</div>
</div>
</div>
</div>
</div>



<div class="col-md-3 ">
<div class="card text-center">
<div class="card-header bg-warning text-white">
<div class="row align-items-center">
<div class ="col">
<h5>Product</h5>
</div>
<div class="col">
<h5 class="display-6"> <a class="text-white">
<?php 
                        $query = "SELECT COUNT(*) FROM product";
						
                        $result = mysqli_query($db, $query) or die(mysqli_error($db));
                        while ($row = mysqli_fetch_array($result)) {
						echo "$row[0]";
                          }?>
</h5> <label class="text-white">Record(s)</label></a>

</div>
</div>
</div>
</div>
</div>

</div>
</div><br><br>


			<div class="container mt-6">
<div class="row">




<div class="col-md-3 ">
<div class="card text-center">
<div class="card-header bg-info text-white">
<div class="row align-items-center">
<div class ="col">
<Label>Transaction</Label>
</div>
<div class="col">
<h5 class="display-6 text-white"><?php 
                        $query = "SELECT COUNT(*) FROM transaction";
						
                        $result = mysqli_query($db, $query) or die(mysqli_error($db));
                        while ($row = mysqli_fetch_array($result)) {
						echo "$row[0]";
                          }?></h5>
<label class="text-white">Record(s)</label>


</div>
</div>
</div>
</div>
</div>

<div class="col-md-3 ">
<div class="card text-center">
<div class="card-header bg-dark text-white">
<div class="row align-items-center">
<div class ="col">
<h5>Income</h5>
</div>
<div class="col">
<h5 class="display-7 text-white">₱    <?php 
                        echo  $mja;?></h5>
<label class="text-white">This Month</label>


</div>
</div>
</div>
</div>
</div>
</div>
</div>

	  
		
		

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
    <form method="POST" class="change-form" action="server.php" id="change-form" enctype='multipart/form-data'>
      <label >Company Name&nbsp&nbsp&nbsp&nbsp&nbsp</label><input class="text" name="company_name"  required="_required" value="<?php echo $company_name  ?>">
	   <div>
	    <label >Address&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
		<input class="text" name="address"  required="_required">
	   </div>
	    <label >Contact &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </label>
		<input class="text" name="contact" required="_required" >
	   <div>
	   <div> <label>Logo</label>
	   <input type="file" 
                  name="my_image"  required="_required" style="margin-left: 100px width: 100px" align="center" value=""></div>
  <label >Confirm Username&nbsp </label><input class="text" Type="text"name="username">
	    </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
 <button class="btn-primary" name="change" > Update</button>
		 </form>
       
		
		 
		 
        </div>
        
      </div>
    </div>
  </div>
  
</div>



  <!-- The Modal -->
  <div class="modal" id="myModal01">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">BACKUP AND RESTORE</h4>
        
        </div><br><br>
		<div class ="row"><a href="backup/backup.php">
		 <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px; height:130px; width: 200px; margin-left: 47px" >  
         <div style="margin-left: 50px">
		  <img  class="center rounded"width="90" height="90px" src="../portal/uploads/backup-copy.png"/>
		  <label>&nbsp&nbspBACKUP</label>
		  </div></a>
		 </div>
		  <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px; height:130px; width: 200px; margin-left: 30px" >  
         <div style="margin-left: 50px">
		  <img  class="center rounded"width="90" height="90px" src="../portal/uploads/synchronize.png"/>
		  <label>&nbsp&nbspRESTORE</label>
		  </div>
		 </div>
		 
		 <br>
		 </div>
        <!-- Modal body -->
        <div class="modal-body">
		
        <div class="modal-footer">
 <button class="btn btn-primary" class="close" data-dismiss="modal"> CLOSE</button>
       
		
       
		 
		 
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
</body>

</html>