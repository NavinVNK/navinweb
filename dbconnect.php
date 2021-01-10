<?php
($GLOBALS["___mysqli_ston"] = mysqli_connect("localhost",  "root",  "")) or die (mysqli_error($GLOBALS["___mysqli_ston"])); 
// mysql_connect("mysql12.000webhost.com", "a1643956_navin", "shivanom") or die //(mysql_error()); 
//mysql_select_db("a1643956_counter") or die(mysql_error()); 
mysqli_select_db($GLOBALS["___mysqli_ston"], "counter") or die(mysqli_error($GLOBALS["___mysqli_ston"])); 
mysqli_select_db($GLOBALS["___mysqli_ston"], "registration") or die(mysqli_error($GLOBALS["___mysqli_ston"])); 

 ?>