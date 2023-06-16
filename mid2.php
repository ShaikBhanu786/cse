<?php
   if( $_POST["name"] || $_POST["email"] || $_POST["education"] || $_POST["gender"] || $_POST["hobbies"] || $_POST["comment"]) {
      if (preg_match("/[^A-Za-z'-]/",$_POST['name'] )) {
         die ("invalid name and name should be alpha");
      }
      echo "Welcome ". $_POST['name']. "<br />";
      echo "Your email is ". $_POST['email'] ."<br />";
      echo "Your education qualification ". $_POST['education']. "<br />";
      echo "Your gender ". $_POST['gender']. "<br />";
      echo "Your hobbies are ". $_POST['hobbies']. "<br />";
      echo "Comment ". $_POST['comment']. "<br />";
      exit();
   }
?>

<html>
<body>
<center>
<fontface="Arial Black" size="4"><br><br><br><br><br><br><br>
<form action = "<?php $_PHP_SELF ?>" method = "POST">
 <table frame="box" cellspacing="10">
 <tr>
  <td>Name</td>
  <td><input type="text" name="name" size="25"/></td>
 </tr>
 <tr>
  <td>Email</td>
  <td><input type="text" name="email" size="25"/></td>
  </tr>
  <tr>
  <td>Education</td>
  <td><input type="text" name="education" size="25"/> <br/>tell us about your education</td>
  </tr>
  <tr>
  <td>Gender</td>
  <td><input type="radio" name="gender" value="male"checked/>Male
    <input type="radio" name="gender" value="female"/>Female
    <br/> select your gender</td></tr>
  <tr>
  <td>Hobbies</td>
  <td><input type="checkbox" name="hobbies" selected>Drawing
    <input type="checkbox" name="hobbies">Singing
    <input type="checkbox" name="hobbies" >Dancing<br/>what are you hobbies</td></tr>
  <tr>
  <td>Comment</td>
  <td><textarea name="comment" cols="25" rows="5"/></textarea><br/>this field is required</td></tr>

  <tr>
  <td><input type="SUBMIT" value="submit"/></td> 
 </tr>
</form>
</table>
</center>
</body>
</html>