<!DOCTYPE html>
<html lang='en'>
<head>
	
    <meta charset="UTF-8" /> 
        <title>
       Download Code
    </title>
    <?php
			ob_start();
			session_start();
			?>
			
			<style>
			<style type=”text/css”>
body {
	margin:50px 0px; padding:0px;
	text-align:center;
	background-image:url("../images/androidsc2.jpg");
	}
	
#centered {
	width:500px;
	margin:250px auto;
	text-align:left;
	padding:15px;
	border:1px dashed #333;
	background-color:#eee;
	}
</style>
           </style>
    </head>
<body>
	<div id="centered">
		<?php
			if(isset($_SESSION['username']))
			{?>
			   <a href="download.php?filename=SRM_AndroidTutorial.rar">Code Download</a>
			<?php } else { ?> <h3>Please login to download code</h3>  <?php } ?>
	</div>
	
			
	
</body>

</html>