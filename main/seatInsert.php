<?php
$con=mysqli_connect("35.192.224.122","lee","1","smartcafe");

mysqli_set_charset($con,"utf8");

if (mysqli_connect_errno($con))
{
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$c1 = $_GET["c1"];
$c2 = $_GET["c2"];
$c3 = $_GET["c3"];
$c4 = $_GET["c4"];
$c9 = $_GET["c9"];
$c10 = $_GET["c10"];

$result = mysqli_query($con,"INSERT INTO seat(shopid, c1, c2, c3, c4, c9, c10) values ('b','$c1','$c2','$c3','$c4','$c9','$c10')");
$row = mysqli_fetch_array($result);
if($result){
  echo "success";
}
else{
  echo "failed";
}
mysqli_close($con);
?>
