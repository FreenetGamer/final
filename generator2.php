 <?php
 session_start();
 
 
wh_log("========================================================");
wh_log("=                                                      =");
wh_log("=                   ".date('d-m-y H:i:s')."                  =");
wh_log("                   Log In Username:  ".$_SESSION['username']);
wh_log("                   Account Type:     ".$_SESSION['type']);
wh_log("=                  Log In Attemp:    Success           =");
wh_log("=                                                      =");

wh_log("========================================================");

function wh_log($log){
	$logfile = 'log';
	file_put_contents($logfile,$log. "\n", FILE_APPEND);
	
	
};?>

<?php
ini_set('display_errors', 1); 
ini_set('log_errors', 1); 
ini_set('error_log', 'log'); error_reporting(E_ALL);
$_SESSION['errorlogin'] = "Incorrect Password or Username";
$loginerror = $_SESSION['errorlogin'];
if ($_SESSION['type']=="Admin"){ header('location: portal/index.php');}else{ header('location: ../final/mycounter.php');}

?>

