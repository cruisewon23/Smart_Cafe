<?php
$con=mysqli_connect("35.192.224.122","lee","1","smartcafe");

mysqli_set_charset($con,"utf8");

if (mysqli_connect_errno($con))
{
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$name = $_POST['name'];
$shopid = $_POST['shopid'];
$cost = $_POST['cost'];
$result = mysqli_query($con,"INSERT INTO menu values ('$shopid','$name', '$cost')");
$row = mysqli_fetch_array($result);
if($result){
  header("Location: http://104.196.137.191/main/main.php", true, 301);
  exit();
}
mysqli_close($con);
?>
