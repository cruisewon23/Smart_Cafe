<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

$con=mysqli_connect("35.192.224.122","lee","1","smartcafe");

mysqli_set_charset($con,"utf8");

if (mysqli_connect_errno($con))
{
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$shopid = $_POST['shopid'];
$shopname = $_POST['shopname'];
$password = $_POST['password'];

$result = mysqli_query($con,"INSERT INTO manager (shopid, shopname, password) VALUES ('$shopid', '$shopname', '$password')");

if($result){
  header("Location: http://104.196.137.191", true, 301);
  exit();
}
else{
  echo 'failure<br>';
  echo '다시 시도하세요.';
}
mysqli_close($con);
?>
