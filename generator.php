 <?php
 session_start();
 
wh_log("========================================================");
wh_log("=                                                      =");
wh_log("=                   ".date('d-m-y H:i:s')."                  =");
wh_log("                   Log In Username:  ".$_SESSION['username']);
wh_log("       Log In Reason:  ".$_SESSION['mj']);
wh_log("       Account Type:  ".$_SESSION['type']);
wh_log("=                  Log In Attemp: Error                =");
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


 header('location: Main.php');
?>

