<!DOCTYPE html>
<html>
<body>

<h2>Creating an Object from a JSON String</h2>
<p id="demo"></p>
<script>
const txt = '{"name":"John", "age":30, "city":"New York"}'
const obj = JSON.parse(txt);
document.getElementById("demo").innerHTML = obj.name + " is " + obj.age +" year old.He lives in "+obj.city +" city. ";
</script>
<?php
echo "JSON encode";
echo "<br>";
$age = array("Peter"=>35,"Ben"=>37,"Joe"=>43);
echo json_encode($age);

echo "<br>";

$cars =array("Volvo","BMW","Toyota");
echo json_encode($cars);

echo "<br>";
echo "JSON decode";
echo "<br>";
$jsonobj ='{"Peter":35,"Ben":37,"Joe":43}';
echo json_decode($age);
?>
</body>
</html>