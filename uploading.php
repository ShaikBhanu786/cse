<?php
   if(isset($_POST['upload'])){
   
     $file_name= $_FILES['file']['name'];
     $file_type= $_FILES['file']['type'];
     $file_size= $_FILES['file']['size'];
     $file_temp_Loc= $_FILES['file']['tmp_name'];
     $file_store= "/home/rgukt/Desktop/".$file_name;
      
     move_uploaded_file($file_temp_Loc,$file_store);
   }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Uploading file</title>
    </head>
    <body>
        <form action="?" method="post" enctype="multipart/form-data">
        <label>Uploading files</label>
        <p><input type="file" name="file"/></p>
        <p><input type="submit" name="upload" value="Upload image"/></p> 


        </form>
    </body> 
</html>

















</html>