<?php
$con=mysqli_connect("35.192.224.122","lee","1","smartcafe");

mysqli_set_charset($con,"utf8");

if (mysqli_connect_errno($con))
{
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$light = $_GET["light"];
$humid = $_GET["humid"];
$tempe = $_GET["tempe"];
$finedust = $_GET["finedust"];

$result = mysqli_query($con,"INSERT INTO energy(shopid, light, humid, tempe, finedust) values ('b','$light','$humid','$tempe','$finedust')");
$row = mysqli_fetch_array($result);
if($result){
  echo "success";
}
else{
  echo "failed";
}
mysqli_close($con);
?>
