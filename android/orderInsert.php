
<?php
  $con=mysqli_connect("35.192.224.122","lee","1","smartcafe");

  mysqli_set_charset($con,"utf8");

  if (mysqli_connect_errno($con))
  {
     echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $shopid = $_POST['shopid'];
  $userid = $_POST['userid'];
  $name = $_POST['name'];
  $quantity = $_POST['quantity'];
  $size = $_POST['size'];
  $tempe = $_POST['tempe'];

  $result = mysqli_query($con,"insert into `order` (shopid, userid, name, quantity, size, tempe) values ('$shopid','$userid','$name','$quantity','$size','$tempe')");

  if($result){
    echo 'success';
  }
  else{
    echo 'failure';
  }


  mysqli_close($con);
?>
