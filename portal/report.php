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
<?php
   $today = date("m");
  $a = "Select SUM(total) As sum FROM purchase WHERE date = '$today'";
  $b = mysqli_query($db ,$a);
  while($row = mysqli_fetch_assoc($b)){
  $mj = $row['sum'];
   $queryx = "UPDATE sales SET sales='$mj' WHERE date='$today'";
      mysqli_query($db, $queryx);	
	  
  }
?>
<?php
$con  = mysqli_connect("localhost","root","","final");
 if (!$con) {
     # code...
    echo "Problem in database connection! Contact administrator!" . mysqli_error();
 }else{
         $sql ="SELECT * FROM sales ORDER BY id ASC ";
         $result = mysqli_query($con,$sql);
         $chart_data="";
         while ($row = mysqli_fetch_array($result)) { 
 
            $productname[]  = $row['Month']  ;
			  $sales[]  = $row['sales']  ;
           
        }
 
 
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
              <h5 class="text-center">REPORT</h5>
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
                    <a href="report.php?logout='1'" class="download text-warning">Log Out</a>
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




<!--body close-->
  <!-- The Modal -->
</div>
<!---->


<html lang="en"> 
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
    </head>
    <body>
	<div class="row"> <div class="card">
    <div class="card-body" style="width:700PX">
 
        <div  style="width:665px;hieght:300px;text-align:center; margin-left: 15px;">
            <h2 class="page-header" ><b>SALES</b>  </h2>
            <div>Monthly Sales : Real Time</div>
            <canvas   id="chartjs_bar"></canvas> 
					
		</div> </div></div>
			
			<div> <div class="card bg-secondary  " style="margin-left: 9px; ">
    <div class="card-body" style="width:520PX;" >
	
	<table class="table table-striped"><tr>
    <h4 class="text-center text-white"><b>Top Product</b></h4>
    
 <tr class="bg-primary text-white">
 <th>Product Name</th>
  <th>Quantity</th>
  <th>₱ Sales</th>

 </tr>
	<?php   $date = date("m");
$co  = mysqli_connect("localhost","root","","final");
 if (!$co) {
     # code...
    echo "Problem in database connection! Contact administrator!" . mysqli_error();
 }else{
         $sq ="SELECT * FROM purchase WHERE validation = 1 and date = '$date' ORDER BY Quantity DESC LIMIT 7 ";
         $result = mysqli_query($co,$sq);
		  while ($row = mysqli_fetch_array($result)) { 
		 if (!$result == null){
        
 
          
              echo '<tr class="bg-white text-dark">';
                echo '<td>'. $row['Product_Name'].'</td>';
                echo '<td>'. $row['Quantity'].'</td>';
				  echo '<td>'."₱ ". $row['total'].'</td>';
               
				 echo '</tr>';}else{ echo "<tr>NO DATA</tr>";};
         
        }
 
 
 }
 
 
?>
	 </tr>
		
  
  
  
  
</table>
	</div>	
		
		
		
		  </div></div>	
			
        </div></div>    
		

		
		
		
		
    </body>
  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script type="text/javascript">
      var ctx = document.getElementById("chartjs_bar").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels:<?php echo json_encode($productname); ?>,
                        datasets: [{
                            backgroundColor: [
                               "#5969ff",
                                "#ff407b",
                                "#25d5f2",
                                "#ffc750",
                                "#2ec551",
                                "#7040fa",
                                "#ff004e",
								"#0000FF",
								"#FF00FF",
								"#800080",
								"#008000",
								"#5969ff",
                                "#ff407b",
                                "#25d5f2",
                                "#ffc750",
                                "#2ec551",
                                "#7040fa",
                                "#ff004e",
								"#0000FF",
								"#FF00FF",
								"#800080",
								"#008000",
                            ],
                            data:<?php echo json_encode($sales); ?>,
                        }]
                    },
                    options: {
                           legend: {
                        display: true,
                        position: 'bottom',
 
                        labels: {
                            fontColor: '#71748d',
                            fontFamily: 'Circular Std Book',
                            fontSize: 14,
                        }
                    },
 
 
                }
                });
    </script>
</html>
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