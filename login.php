<!DOCTYPE html>
<html lang='en'>
<head>
	
    <meta charset="UTF-8" /> 
   <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
    <script src="js/jquery-1.10.2.js"></script>
    <title>
       Login Page
    </title>
    <link rel="stylesheet" type="text/css" href="css/style_li.css" />
</head>
<body>

<form name="Login" method="post" action="checklogin.php">
  <h1>Log in</h1>
  <div class="inset">
  <p>
    <label for="email">USER NAME</label>
    <input type="text" name="username" id="username" value=<?php echo cookiesetting()?> >
  </p> 
  <p>
    <label for="password">PASSWORD</label>
    <input type="password" name="password" id="password">
  </p>
  <p>
    <input type="checkbox" name="remember" id="remember">
    <label for="remember">Remember me for 1 Day</label>
  </p>
  </div>
  <p class="p-container">
    <span id="passw"><?php 	session_start();  if( isset($_SESSION['status'])){echo $_SESSION['status'];unset($_SESSION['status']);}?></span>
    <input type="submit" name="go" id="go" value="Log in">
  </p>
  
</form>
<script type="text/javascript">
 $('form').submit(function () {

    // Get the Login Name value and trim it
    var name = $.trim($('#username').val());

    // Check if empty of not
    if (name  === '') {
        $("#passw").html("User name field Empty");
        return false;
    }
}); 
</script>

</body>
<?php 
  function cookiesetting()
 {
  if(!isset($_COOKIE["username"])) return "";
else return $_COOKIE["username"]  ;
 }
?> 
</html>
