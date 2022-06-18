			<script>
    function payment() {
       
       
        var delivery = document.getElementById("a").value;
        var total = delivery;
		 document.getElementById("b").innerHTML = total;
       
         
    }
</script>
<form method="POST" action= "a.php">
   <select  id="a" oninput="payment()" style=" height: 30px; margin-top: 5px; margin-left: 5px; width: 200px;" name="Category">
		<option>All</option>
		<option>Food</option>
   <option>Softdrinks</option>
   <option>Others</option>
   </select>
   
   <label id="b" name="value" ></label><button type="submit" name="a">submit</button>
   </form>
   
   
  <?php 
  $db = mysqli_connect('localhost', 'root', '', 'final');
     if (isset($_POST['a'])) {
 
  $name = mysqli_real_escape_string($db, $_POST['value']);

	error_reporting();
	

	$myquery = "SELECT * FROM product where category = '$name'";
	$nn = mysqli_query($db, $myquery);
	 while($row = mysqli_fetch_array($nn)){
 
			$category = $row['category'];
	
   
	 }
	echo $category;
	};
?>
   
   

