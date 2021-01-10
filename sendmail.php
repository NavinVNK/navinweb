  <?php
  $to = $email;
   # Open a file
  $file = fopen( "files/user.txt", "r" );
  if( $file == false )
  {
     echo "Error in opening file";
     exit();
  }
  # Read the file into a variable
  $size = filesize("files/user.txt");
  $content = fread( $file, $size);

  # encode the data for safe transit
  # and insert \r\n after every 76 chars.
  $encoded_content = chunk_split( base64_encode($content));
  
  # Get a random 32 bit number using time() as seed.
  $num = md5( time() );

 
  # Define the main headers.
  $header = "From:nav_wins@navinsandroidtutorial.esy.es\r\nReply-To:nav_wins@navinsandroidtutorial.comlu.com";
  $header .= "MIME-Version: 1.0\r\n";
  $header .= "Content-Type: multipart/mixed; ";
  $header .= "boundary=$num\r\n";
  $header .= "--$num\r\n";

  # Define the message section
  $header .= "Content-Type: text/plain\r\n";
  $header .= "Content-Transfer-Encoding:8bit\r\n\n";
  $header .= "$message\r\n";
  $header .= "--$num\r\n";

  # Define the attachment section
  $header .= "Content-Type:  multipart/mixed; ";
  $header .= "name=\"user.txt\"\r\n";
  $header .= "Content-Transfer-Encoding:base64\r\n";
  $header .= "Content-Disposition:attachment; ";
  $header .= "filename=\"user.txt\"\r\n\n";
  $header .= "$encoded_content\r\n";
  $header .= "--$num--";
  # Send email now
  $retval = mail ( $to, $subject, $message, $header );
  if( $retval == true )
   {
      //echo "Message sent successfully...";
   }
   else
   {
     // echo "Message could not be sent...";
   }
   ?>