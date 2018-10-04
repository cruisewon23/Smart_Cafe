<?php
  $con=mysqli_connect("35.192.224.122","lee","1","smartcafe");

  mysqli_set_charset($con,"utf8");

  if (mysqli_connect_errno($con))
  {
     echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $id1 = $_POST['id1'];
  $password1 = $_POST['password1'];


  $result = mysqli_query($con,"insert into user (id1,password1) values ('$id1','$password1')");

  if($result){
    echo 'success';
  }
  else{
    echo 'failure';
  }


  mysqli_close($con);
?>
