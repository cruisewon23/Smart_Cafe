<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- 페이지 새로고침 <meta http-equiv="refresh" content="60">  -->
  <title>SmartCafe - Main</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="vendor/devicons/css/devicons.min.css" rel="stylesheet">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/resume.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery.min.js"></script>
  <script type="text/javascript">
  // checkSeat function
    $(document).ready(function(){
      <?php
        $con=mysqli_connect("35.192.224.122","lee","1","smartcafe");
        mysqli_set_charset($con,"utf8");
        $result = mysqli_query($con,"SELECT * FROM seat where ID = (SELECT MAX(ID) FROM seat)");
        $row = mysqli_fetch_array($result);
        if($row['c1']=="1")
          echo 'document.getElementById("t1-1").style.backgroundColor="orange";';
        else
          echo 'document.getElementById("t1-1").style.backgroundColor="#FFFFFF";';
        if($row['c2']=="1")
          echo 'document.getElementById("t1-2").style.backgroundColor="orange";';
        else
          echo 'document.getElementById("t1-2").style.backgroundColor="#FFFFFF";';
        if($row['c3']=="1")
          echo 'document.getElementById("t1-3").style.backgroundColor="orange";';
        else
          echo 'document.getElementById("t1-3").style.backgroundColor="#FFFFFF";';
        if($row['c4']=="1")
          echo 'document.getElementById("t1-4").style.backgroundColor="orange";';
        else
          echo 'document.getElementById("t1-4").style.backgroundColor="#FFFFFF";';

        if($row['c9']=="1")
          echo 'document.getElementById("t3-1").style.backgroundColor="orange";';
        else
          echo 'document.getElementById("t3-1").style.backgroundColor="#FFFFFF";';
        if($row['c10']=="1")
          echo 'document.getElementById("t3-2").style.backgroundColor="orange";';
        else
          echo 'document.getElementById("t3-2").style.backgroundColor="#FFFFFF";';

      ?>
    });
  </script>

  <style>
    section.resume-section .resume-item button[name="table4"]  {
        background-color: #BD5D38;
        border: 1px;
        color: white;
        padding: 9px 18px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        border-radius: 5px;
        font-size: 40px;
        border-style: groove;
        border-color: skyblue;
    }
    section.resume-section .resume-item button[name="chair"]  {
        background-color: #ffffff;
        border: 1px;
        color: black;
        padding: 9px 18px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        border-radius: 5px;
        font-size: 13px;
        min-width: 90px;
        width: auto;
        border-style: groove;
        border-color: skyblue;
    }
    section.resume-section .resume-item button[name="table2"]  {
        background-color: #BD5D38;
        border: 1px;
        color: white;
        padding: 9px 18px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        border-radius: 5px;
        min-width: 90px;
        width: auto;
        font-size: 13px;
        border-style: groove;
        border-color: skyblue;
    }
    section.resume-section {
      padding-top: 0 !important;
    }
    body {
      padding-top: 0px;
      color: #262e36;
    }
  </style>
</head>
<section class="resume-section" id="PlaceManagement">
  <div >
    <h3 class="mb-5" style="background-Color:orange; color:white; height: 40px; text-align:center;">자리 관리</h3>

    <div class="resume-item d-flex flex-column flex-md-row mb-5">
      <div class="resume-content mr-auto">
          <!-- 4seats table 1,2 / t1-1~4  t2-1~4 -->
          <button type="button" id="t1-1" name="chair">SEAT1</button>&nbsp;<button type="button" id="t1-2" name="chair">SEAT1</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <button type="button" id="t2-1" name="chair">SEAT2</button>&nbsp;<button type="button" id="t2-2" name="chair">SEAT2</button><br><br>
          <button type="button" id="t1" name="table4">TABLE1</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <button type="button" id="t2" name="table4">TABLE2</button><br><br>
          <button type="button" id="t1-3" name="chair">SEAT1</button>&nbsp;<button type="button" id="t1-4" name="chair">SEAT1</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <button type="button" id="t2-3" name="chair">SEAT2</button>&nbsp;<button type="button" id="t2-4" name="chair">SEAT2</button><br><br><br><br>
          <!-- 2seats table 3,4,5 / t3-1~2 t4-1~2 t5-1~2 -->
          <button type="button" id="t3-1" name="chair">SEAT3</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <button type="button" id="t4-1" name="chair">SEAT4</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <button type="button" id="t5-1" name="chair">SEAT5</button><br><br>
          <button type="button" id="t3" name="table2">TABLE3</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <button type="button" id="t4" name="table2">TABLE4</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <button type="button" id="t5" name="table2">TABLE5</button><br><br>
          <button type="button" id="t3-2" name="chair">SEAT3</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <button type="button" id="t4-2" name="chair">SEAT4</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <button type="button" id="t5-2" name="chair">SEAT5</button><br><br><br>
      </div>

  </div>
</section>
