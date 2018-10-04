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
$password = $_POST['password'];


$result = mysqli_query($con,"SELECT password FROM manager where shopid='$shopid'");
$row = mysqli_fetch_array($result);
$data = $row[0];
//echo $result;
if($data==$password&&$data!= ""){
  header("Location: http://104.196.137.191/main/main.php", true, 301);
  exit();
}
else{
  header("Location: http://104.196.137.191", true, 301);
  exit();
}
mysqli_close($con);
?>
