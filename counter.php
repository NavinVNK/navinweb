<?php
 // Connects to your Database 
// mysql_connect("mysql12.000webhost.com", "a1643956_navin", "shivanom") or die (mysql_error()); 
//mysql_select_db("a1643956_counter") or die(mysql_error()); 

 ($GLOBALS["___mysqli_ston"] = mysqli_connect("localhost",  "root",  "")) or die (mysqli_error($GLOBALS["___mysqli_ston"])); 

 mysqli_select_db($GLOBALS["___mysqli_ston"], counter) or die(mysqli_error($GLOBALS["___mysqli_ston"])); 
 //Adds one to the counter
 mysqli_query($GLOBALS["___mysqli_ston"], "UPDATE counter SET counter = counter + 1");

 //Retreives the current count
 $count = mysqli_fetch_row(mysqli_query($GLOBALS["___mysqli_ston"], "SELECT counter FROM counter"));

 //Displays the count on your site
 print "$count[0]";
 ?> 