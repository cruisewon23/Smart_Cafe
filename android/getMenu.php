<?php
  $con=mysqli_connect("35.192.224.122","lee","1","smartcafe");
  mysqli_set_charset($con,"utf8");
  if (mysqli_connect_errno($con))
  {
     echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  $result = mysqli_query($con,"SELECT * FROM menu where shopid='b'");

  while($row = mysqli_fetch_array($result)){
    echo $row['name'];
    echo '/';
    echo $row['cost'];
    echo '/';
  }

  mysqli_close($con);
?>
