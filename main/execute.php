<?php
$con=mysqli_connect("35.192.224.122","lee","1","smartcafe");

mysqli_set_charset($con,"utf8");

if (mysqli_connect_errno($con))
{
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$light = $_POST['light'];
$curtain = $_POST['curtain'];

$result = mysqli_query($con,"INSERT INTO control (shopid, aircontrol, lightcontrol, curtaincontrol, freshercontrol) VALUES ('b','1','$light','$curtain','1')");
$row = mysqli_fetch_array($result);
if($result){
  header("Location: http://104.196.137.191/main/main.php", true, 301);
  exit();
}
mysqli_close($con);
?>
