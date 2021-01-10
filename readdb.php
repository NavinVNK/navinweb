<?PHP

$user_name = "root";
$password = "";
$database = "registration";
$server = "127.0.0.1";

$db_handle = ($GLOBALS["___mysqli_ston"] = mysqli_connect($server,  $user_name,  $password));
$db_found = mysqli_select_db( $db_handle, $database);

if ($db_found) {

$SQL = "SELECT * FROM registration";
$result = mysqli_query($GLOBALS["___mysqli_ston"], $SQL);

while ( $db_field = mysqli_fetch_assoc($result) ) {


print $db_field['id'] . "<BR>";
print $db_field['username'] . "<BR>";
print $db_field['password'] . "<BR>";

}

((is_null($___mysqli_res = mysqli_close($db_handle))) ? false : $___mysqli_res);

}
else {

print "Database NOT Found ";
((is_null($___mysqli_res = mysqli_close($db_handle))) ? false : $___mysqli_res);

}

?>