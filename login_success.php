 
<?php
// Check if session is not registered, redirect back to main page. 
// Put this code in first line of web page.
session_start();
if(isset($_SESSION['username'])){
header("location:index.php");
	
}
else {
// status value will display Login failure in login page for failed login 	
 $_SESSION['status'] ="Login Failure";
		header("location:login.php");
		//header("location:http://nawinsandroidtutorial.site90.com/login.php");
	exit;

}
?>

