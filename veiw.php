!Doctype html>
<html>
    <head>
    <title>view</title>
</head>
<body><a href="index.php">&#8592;</a>
<?php
 $sql="SELECT * FROM images ORDER BY id DESC";
 $res=mysqli_query($conn,$sql);
 if(mysqli_num_rows($res)>0){
     while($images=mysqli_fetch_assoc($res)){
        <div class="alb">
        <img src="uploads/<?=$images['img_url']?>">
    </div>
?>}}   
 </body>
 </html>