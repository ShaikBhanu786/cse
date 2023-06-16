<html>      
<head>      
<title>Writing a file using PHP</title>   
</head>     
 <body>
<?php
         $filename = "hii.txt";
         $file = fopen( $filename, "r" );
         
         if( $file == false ) {
            echo ( "Error in opening file" );
            exit();
         }
         
         $filesize = filesize( $filename );
         $filetext = fwrite( $file,"this is copy file" );
         
         fclose( $file );
         
         echo ( "File size : $filesize bytes" );
         echo ( "$filetext" );
         echo("file name: $filename");
      ?>
      </body></html>

