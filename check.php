<?php
 
  //mysql_connect("localhost","root","");
  //mysql_select_db("registration")or  die ("Oops! DB not connected");
   require('dbconnect.php');
   $username=$_POST["username"];
  $query=mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * from registration where username='$username' ");
 
  $find=mysqli_num_rows($query);
 
  echo $find;
 
?>