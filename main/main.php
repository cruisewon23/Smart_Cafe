<!DOCTYPE html>
<html lang="en">

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
    <style>
      table {
        width: 70%;
        margin-left: 30px;
      }
      table, th, td {
        border: 1px solid #bcbcbc;
      }

      th{
        background-color: #BD5D38;
        color: white;
        text-align: center;
      }

      td{
        text-align: center;
      }
    </style>


    <!-- Custom styles for this template -->
    <link href="css/resume.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery.min.js"></script>
    <script>

      $(document).ready(function(){
        var slider1 = $(".slider1");
        var slider2 = $(".slider2");

        slider1.change(function(){
          if(slider1.val()>80){
            $("#lightText").text("현재 상태: 5단계");
            $("#lightText").css("color","blue");
            $("#lightText").css("font-size","20px");
          }
          if(slider1.val()<=80 && slider1.val()>60 ){
            $("#lightText").text("현재 상태: 4단계");
            $("#lightText").css("color","#80FF00");
            $("#lightText").css("font-size","20px");
          }
          if(slider1.val()<=60 && slider1.val()>40 ){
            $("#lightText").text("현재 상태: 3단계");
            $("#lightText").css("color","#FF8000");
            $("#lightText").css("font-size","20px");
          }
          if(slider1.val()<=40 && slider1.val()>20 ){
            $("#lightText").text("현재 상태: 2단계");
            $("#lightText").css("color","#F7F700");
            $("#lightText").css("font-size","20px");
          }
          if(slider1.val()<=20){
            $("#lightText").text("현재 상태: 1단계");
            $("#lightText").css("color","black");
            $("#lightText").css("font-size","20px");
          }
        });

        slider2.change(function(){
          if(slider2.val()>80){
            $("#curtainText").text("현재 상태: 5단계");
            $("#curtainText").css("color","blue");
            $("#curtainText").css("font-size","20px");
          }
          if(slider2.val()<=80 && slider2.val()>60 ){
            $("#curtainText").text("현재 상태: 4단계");
            $("#curtainText").css("color","#80FF00");
            $("#curtainText").css("font-size","20px");
          }
          if(slider2.val()<=60 && slider2.val()>40 ){
            $("#curtainText").text("현재 상태: 3단계");
            $("#curtainText").css("color","#FF8000");
            $("#curtainText").css("font-size","20px");
          }
          if(slider2.val()<=40 && slider2.val()>20 ){
            $("#curtainText").text("현재 상태: 2단계");
            $("#curtainText").css("color","#F7F700");
            $("#curtainText").css("font-size","20px");
          }
          if(slider2.val()<=20){
            $("#curtainText").text("현재 상태: 1단계");
            $("#curtainText").css("color","black");
            $("#curtainText").css("font-size","20px");
          }
        });

        $("#airBtnOn").click(function(){
            $("#airText").text("현재 상태: 동작 중");
            $("#airText").css("color","blue");
            $("#airText").css("font-size","20px");
            $("#airBtnOn").css("background-color","orange");
            $("#airBtnOff").css("background-color","#008CBA");
        });
        $("#airBtnOff").click(function(){
            $("#airText").text("현재 상태: 동작 중지");
            $("#airText").css("color","red");
            $("#airText").css("font-size","20px");
            $("#airBtnOff").css("background-color","orange");
            $("#airBtnOn").css("background-color","#008CBA");
        });
        $("#conditionorBtnOn").click(function(){
            $("#conditionorText").text("현재 상태: 동작 중");
            $("#conditionorText").css("color","blue");
            $("#conditionorText").css("font-size","20px");
            $("#conditionorBtnOn").css("background-color","orange");
            $("#conditionorBtnOff").css("background-color","#008CBA");
        });
        $("#conditionorBtnOff").click(function(){
            $("#conditionorText").text("현재 상태: 동작 중지");
            $("#conditionorText").css("color","red");
            $("#conditionorText").css("font-size","20px");
            $("#conditionorBtnOff").css("background-color","orange");
            $("#conditionorBtnOn").css("background-color","#008CBA");
        });
      });

    </script>
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

      function stockMod(){
        document.mod_stock_form.action="/main/stockMod.php";
        document.mod_stock_form.method="POST";
        document.mod_stock_form.submit();
      }
      function stockDelete(){
        document.delete_stock_form.action="/main/stockDelete.php";
        document.delete_stock_form.method="POST";
        document.delete_stock_form.submit();
      }
      function stockAdd(){
        document.add_stock_form.action="/main/stockInsert.php";
        document.add_stock_form.method="POST";
        document.add_stock_form.submit();
      }
      function menuAdd(){
        document.add_form.action="/main/menuInsert.php";
        document.add_form.method="POST";
        document.add_form.submit();
      }
      function menuDelete(){
        document.delete_form.action="/main/menuDelete.php";
        document.delete_form.method="POST";
        document.delete_form.submit();
      }
      function execute(){
        document.execute_form.action="/main/execute.php";
        document.execute_form.method="POST";
        document.execute_form.submit();
      }
      function showValue(newValue){
        document.getElementById("range").innerHTML=newValue;
      }
    </script>
  </head>

  <body id="page-top">
    <?php
      $con=mysqli_connect("35.192.224.122","lee","1","smartcafe");

      mysqli_set_charset($con,"utf8");

      if (mysqli_connect_errno($con))
      {
         echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
      $shopid = $_POST['shopid'];
      $password = $_POST['password'];
      if($shopid==""){
        $shopid="b";
      }
      else{
        $result = mysqli_query($con,"SELECT password FROM manager where shopid='$shopid'");
        $row = mysqli_fetch_array($result);
        $data = $row[0];

        if($data==$password&&$data!= ""){
          // 로그인 성공
        }
        else{
          echo '<script>alert("아이디나 비밀번호를 확인 하세요");</script>';
          echo "<script>location.href='http://104.196.137.191/';</script>";
          exit();
        }
      }
    ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-block d-lg-none">Smart Cafe</span>
        <span class="d-none d-lg-block">
          <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/profile.jpg" alt="Coffee picture">
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#Environment">Environment</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#Control">Control</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#PlaceManagement">Place Management</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#Order">Order</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#Menu">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#InventoryManagement">Inventory Management</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container-fluid p-0">

      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="Environment">
        <div class="my-auto" id='graph'>
          <h2 class="mb-5">Energy use
            <span class="text-primary1">Status</span>
          </h2>
          <div class="hGraph">
          	<ul>
              <?php
                $result = mysqli_query($con,"SELECT light, humid, tempe, finedust FROM energy where shopid='b' and ID = (SELECT MAX(ID) FROM energy)");
                $row = mysqli_fetch_array($result);
                if($row['light']<=30)
                  echo '<li><span class="gTerm">조도  </span><span class="gBar1" style="width:';
                else if($row['light']>30 && $row['light']<=60 )
                  echo '<li><span class="gTerm">조도  </span><span class="gBar2" style="width:';
                else if($row['light']>60)
                  echo '<li><span class="gTerm">조도  </span><span class="gBar3" style="width:';
                echo $row['light'];
                echo '%"><span>';
                echo $row['light'];
                echo ' %</span></span></li><br>';

                if($row['humid']<=30)
                  echo '<li><span class="gTerm">습도  </span><span class="gBar1" style="width:';
                else if($row['humid']>30 && $row['humid']<=60 )
                  echo '<li><span class="gTerm">습도  </span><span class="gBar2" style="width:';
                else if($row['humid']>60)
                  echo '<li><span class="gTerm">습도  </span><span class="gBar3" style="width:';
                echo $row['humid'];
                echo '%"><span>';
                echo $row['humid'];
                echo ' %</span></span></li><br>';

                if($row['tempe']<=30)
                  echo '<li><span class="gTerm">온도  </span><span class="gBar1" style="width:';
                else if($row['tempe']>30 && $row['tempe']<=60 )
                  echo '<li><span class="gTerm">온도  </span><span class="gBar2" style="width:';
                else if($row['tempe']>60)
                  echo '<li><span class="gTerm">온도  </span><span class="gBar3" style="width:';
                echo $row['tempe'];
                echo '%"><span>';
                echo $row['tempe'];
                echo ' ℃</span></span></li><br>';


                if($row['finedust']<=30)
                  echo '<li><span class="gTerm">미세먼지  </span><span class="gBar1" style="width:';
                else if($row['finedust']>30 && $row['finedust']<=60 )
                  echo '<li><span class="gTerm">미세먼지  </span><span class="gBar2" style="width:';
                else if($row['finedust']>60)
                  echo '<li><span class="gTerm">미세먼지  </span><span class="gBar3" style="width:';
                echo $row['finedust'];
                echo '%"><span>';
                echo $row['finedust'];
                echo ' ㎛</span></span></li><br>';
              ?>
          	</ul>
          </div>
        </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="Control">
        <div class="my-auto">
          <h2 class="mb-5">Control</h2>
          <form name="execute_form">
            <div class="resume-item d-flex flex-column flex-md-row mb-5">
              <div class="resume-content mr-auto">
                <h3 class="mb-5">에어컨</h3>
                <button type="button" id="airBtnOn">Turn ON</button> <button type="button" id="airBtnOff">Turn OFF</button>
              </div>
              <div class="resume-date text-md-right">
                <p id="airText"><span class="text-primary" >현재 상태: 동작 중지</span></p>
              </div>
            </div>

            <div class="resume-item d-flex flex-column flex-md-row mb-5">
              <div class="resume-content mr-auto">
                <h3 class="mb-5">공기청정기</h3>
                <button type="button" id="conditionorBtnOn">Turn ON</button> <button type="button" id="conditionorBtnOff">Turn OFF</button>
              </div>
              <div class="resume-date text-md-right">
                <p id="conditionorText"><span class="text-primary" >현재 상태: 동작 중지</span></p>
              </div>
            </div>

            <div class="resume-item d-flex flex-column flex-md-row mb-5">
              <div class="resume-content mr-auto">
                <h3 class="mb-5">조도 조절</h3>
                0 <input type="range" class="slider1" name='light' value="50" min="0" max="100" style="width: 280px;"/> 100
              </div>
              <div class="resume-date text-md-right">
                <p id="lightText"><span class="text-primary">현재 상태: 1단계</span></p>
              </div>
            </div>

            <div class="resume-item d-flex flex-column flex-md-row mb-5">
              <div class="resume-content mr-auto">
                <h3 class="mb-5">커튼 조절</h3>
                0 <input type="range" class="slider2" name='curtain' value="50" min="0" max="100" style="width: 280px;"> 100
              </div>
              <div class="resume-date text-md-right">
                <p id="curtainText"><span class="text-primary">현재 상태: 1단계</span></p>
              </div>
            </div>

            <input type="button" value="실행" id="executeBtn" onClick="execute()">
          </form>
        </div>

      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="PlaceManagement">
        <div class="my-auto">
          <h2 class="mb-5">자리 관리</h2>

          <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
                <!-- 4seats table 1,2 / t1-1~4  t2-1~4 -->
                <button type="button" id="t1-1" name="chair">SEAT1</button>&nbsp;<button type="button" id="t1-2" name="chair">SEAT1</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button type="button" id="t2-1" name="chair">SEAT2</button>&nbsp;<button type="button" id="t2-2" name="chair">SEAT2</button><br><br>
                <button type="button" id="t1" name="table4">TABLE1</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
                <p align="right" style="text-align:right;"> * PC 이외의 환경에서는 정상적으로 보이지 않을 수 있습니다. </p>
            </div>



        </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="Order">
        <div class="my-auto">
          <h2 class="mb-5">주문 현황</h2>
          <div id='order'>
            <table>
             <thead>
               <tr>
                 <th>이름</th> <th>음료</th> <th>수</th> <th>사이즈</th> <th>온도</th>
               </tr>
             </thead>
             <tbody>
              <ul class="mb-2">
              <?php
                $result = mysqli_query($con,"SELECT * FROM `order` where shopid='$shopid'");
                while($row = mysqli_fetch_array($result)){
                  echo '<tr>';
                  echo '<td>';  echo $row['userid'];  echo '</td>';
                  echo '<td>';  echo $row['name'];    echo '</td>';
                  echo '<td>';  echo $row['quantity'];echo '</td>';
                  echo '<td>';  echo $row['size'];    echo '</td>';
                  echo '<td>';  echo $row['tempe'];   echo '</td>';
                  echo '</tr>';
                }
              ?>
              </tbody>
            </table>
            </ul>
        </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="Menu">
        <div class="my-auto">
          <h2 class="mb-5">메뉴 관리</h2>
          <h4>현재 메뉴</h4>
          <?php
            $result = mysqli_query($con,"SELECT name, cost FROM menu where shopid='$shopid'");
            while($row = mysqli_fetch_array($result)){
              echo '<div style="border:1px solid; padding:10px; border-radius: 5px; width: 30%; min-width: 390px; float:left; height: 140px;">';
              echo '<img src="img/';
              echo $row['name'];
              echo '.jpg" style=" min-width: 140px; width: 100%; height:100%; border:1px solid; max-width: 130px; vertical-align: middle"/>';
              echo "&nbsp;&nbsp; <strong>";
              echo $row['name'];
              echo ' / ';
              echo $row['cost'];
              echo '원</strong></div>';
            }
          ?>
        </div>
        <div>
          <br><h4>메뉴 추가</h4>
          <form action="#" name="add_form">
            <input type="text" placeholder="메뉴 이름" name="name">
            <input type="text" placeholder="가 격" name="cost" style="width:100px;">
            <input type="hidden" name="shopid" value="<?=$shopid?>">
            <input type="button" value="추가" id="addBtn" onClick="menuAdd()">
          </form>

          <br><h4>메뉴 삭제</h4>
          <form action="#" name="delete_form">
            <input type="text" placeholder="메뉴 이름" name="name">
            <input type="hidden" name="shopid" value="<?=$shopid?>">
            <input type="button" value="삭제" id="deleteBtn" onClick="menuDelete()">
          </form>
        </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="InventoryManagement">
        <div class="my-auto">
          <h2 class="mb-5">재고 관리</h2>
          <h4>사용 가능한 재고</h4>
          <ul class="mb-2">
            <?php
              $result = mysqli_query($con,"SELECT name, count FROM stock where shopid='$shopid'");
              while($row = mysqli_fetch_array($result)){
                echo '<form action="stockMod.php" method="POST" >';
                echo '<input type="hidden"  name="item_name" value="';
                echo $row['name'];
                echo '">';
                echo '<li><i class="fa-li fa fa-trophy text-warning"></i>';
                echo $row['name'];
                echo '이(가)  ';
                echo '<input type="text" style="width:30px;" name="mod_count" value="';
                echo $row['count'];
                echo '">';
                echo '개 남아있습니다.';
                echo '<input type="hidden" name="shopid" value="';
                echo $shopid;
                echo '">';
                echo ' <input type="submit" value="수정">';
                echo '</li><br>';
                echo '</form>';
              }
            ?>
          </ul>
          <br><h4>재고 추가</h4>
          <form action="#" name="add_stock_form">
            재고 이름: <input type="text" placeholder="재고이름" name="name">
            <input type="hidden" name="shopid" value="<?=$shopid?>">
            개수: <input type="text" placeholder="개수" name="count" style="width:100px;">
            <input type="button" value="추가" id="addBtn" onClick="stockAdd()">
          </form>

          <br><h4>재고 삭제</h4>
          <form action="#" name="delete_stock_form">
            재고 이름: <input type="text" placeholder="재고이름" name="name">
            <input type="hidden" name="shopid" value="<?=$shopid?>">
            <input type="button" value="삭제" id="deleteBtn" onClick="stockDelete()">
          </form>
        </div>
      </section>

    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/resume.js"></script>

  </body>

</html>
