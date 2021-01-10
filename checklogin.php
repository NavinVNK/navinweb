<?php

ob_start();
$host="localhost"; // Host name
$username="root"; // mysql username
$password=""; // mysql password
$db_name="registration"; // Database name
$tbl_name="registration"; // Table name

// Connect to server and select databse.
($GLOBALS["___mysqli_ston"] = mysqli_connect("$host",  "$username",  "$password"))or die("cannot connect");
mysqli_select_db($GLOBALS["___mysqli_ston"], $db_name)or die("cannot select DB");
//require('dbconnect.php');

// Define $myusername and $mypassword 
$myusername=$_POST['username'];
$mypassword=$_POST['password'];

// To protect mysql injection (more detail about mysql injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $myusername);
$mypassword = mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $mypassword);
$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result=mysqli_query($GLOBALS["___mysqli_ston"], $sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
	// Register $myusername, $mypassword and redirect to file "login_success.php"
	echo "phpsucess";
session_start();
$_SESSION['username']= $myusername;
$_SESSION['password']= $mypassword;
if (isset($_POST["remember"]))
    setcookie("username",$_POST["username"], time() + (60*60*24));
// Set up associative array
 //   $data = array('success'=> true,'message'=>'Success message: hooray!');
    // JSON encode and send back to the server
//    echo json_encode($data);
header("location:login_success.php");
}
else {
	// Set up associative array
	echo "phpfailed";
echo "fail";
   // $data = array('success'=> false,'message'=>'Failure message: boo!');
    // JSON encode and send back to the server
    //echo json_encode($data);
	header("location:login_success.php");
//echo "Wrong Username or Password";
}
ob_end_flush();

?>