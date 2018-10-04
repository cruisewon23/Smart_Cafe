<?php
  $con=mysqli_connect("35.192.224.122","lee","1","smartcafe");

  if (mysqli_connect_errno($con))
  {
     echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  $id1 = $_GET['id1'];
  $password1 = $_GET['password1'];
  $result = mysqli_query($con,"SELECT password1 FROM user where id1='$id1'");

  $row = mysqli_fetch_array($result);
  $data = $row[0];
  //echo $result;
  if($data){
  echo $data;
  }
  mysqli_close($con);
?>
