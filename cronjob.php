<?php
require('dbconnect.php');
$sql = sprintf('SELECT * FROM `registration`');
        $results = mysqli_query($GLOBALS["___mysqli_ston"], $sql);
		if (!$results) {
    $message  = 'Invalid query: ' . mysqli_error($GLOBALS["___mysqli_ston"]) . "\n";
    $message .= 'Whole query: ' . $sql;
    die($message);
}
		while($result = mysqli_fetch_assoc($results)){
			$email = $result['email'];
			echo "$email";
			$subject = "K.Navin's Daily wishes";
            $message = "Have a Nice Day";
		    include ('sendmail.php');
		}

?>
			