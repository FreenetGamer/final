<?php 
 $connect = mysqli_connect("localhost", "root", "", "final");  
$query = "UPDATE purchase SET validation = 1 ";
             mysqli_query($connect, $query);
			 
			 header('location: mycounter.php');
			 
			 ?>