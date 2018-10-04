<?php
echo "test<br>";

exec("python test.py", $out, $status);

echo $out[0];

if($out[0]=="O"){
  include_once('mailer.lib.php');
  $con=mysqli_connect("35.192.224.122","lee","1","email");
  mysqli_set_charset($con,"utf8");
  if (mysqli_connect_errno($con)){
     echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $result = mysqli_query($con,"SELECT * FROM list");
  while($row = mysqli_fetch_array($result)){
    echo $row['email'];
    echo " / Transfer success<br>";
    mailer("PNU Email Alarm", "cruise82@naver.com", $row['email'] , "[부산대학교] 학기 성적이 공지되었습니다.", "학생지원시스템을 확인하세요", 1);
  }
}

?>
