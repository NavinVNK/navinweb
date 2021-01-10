<?php
    require('dbconnect.php');
    // If the values are posted, insert them into the database.
    if (isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$profilephoto=($_FILES['fileToUpload']['name']);
		$query ='';
		if(!empty($profilephoto))
		{
			$fileExtension = strrchr($_FILES['fileToUpload']['name'], ".");
			$query = "INSERT INTO `registration`(username,photoext,email,password) VALUES ('$username','$fileExtension','$email','$password')";
		}
		else 
			{
				$query = "INSERT INTO `registration`(username,photoext,email,password) VALUES ('$username','noimage','$email','$password')";
			}
		
				
			
		
		include('upload.php');
		
		
        $result = mysqli_query($GLOBALS["___mysqli_ston"], $query);
        if($result){
        	$subject = "Welcome to Navins Android Tutorial";
            $message = "Dear ".$username."  you have sucessfully registered for Tutorial ";
          include ('sendmail.php');
			
			// header("location:http://nawinsandroidtutorial.site90.com/login.php");
			header("location:login.php");
        }
		else {
			echo"not done";
		}
    }
    ?>
