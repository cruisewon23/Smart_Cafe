<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <style>
      @import url("http://fonts.googleapis.com/earlyaccess/nanumgothic.css");
      html {
        height: 100%;
      }
      body {
          width:100%;
          height:100%;
          margin: 0;
          padding-top: 80px;
          padding-bottom: 40px;
          font-family: "Nanum Gothic", arial, helvetica, sans-serif;
          background-repeat: no-repeat;
          background:linear-gradient(to bottom right, #0098FF, #6BA8D1);
      }
        .card {
            margin: 0 auto;
            float: none;
            margin-bottom: 10px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      }
      .form-signin .form-control {
          position: relative;
          height: auto;
          -webkit-box-sizing: border-box;
          -moz-box-sizing: border-box;
               box-sizing: border-box;
          padding: 10px;
          font-size: 16px;
      }
    </style>
    <script type="text/javascript">
		  function mailCheck(){
      var emailVal = $("#email").val();

      var regex=/([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
			if(regex.test(emailVal) === false){
        alert("이메일을 다시 확인하세요.");
			}else{
        alert("저장 되었습니다.");
        <?php
          $con=mysqli_connect("35.192.224.122","lee","1","email");
          mysqli_set_charset($con,"utf8");
          $email = $_POST['email'];
          if (mysqli_connect_errno($con)){
             echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }
          $result = mysqli_query($con,"INSERT INTO list(name,email) VALUES ('name','$email')");
        ?>
			}
		}
		</script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>PNU Email Alarm</title>

  </head>

  <body cellpadding="0" cellspacing="0" marginleft="0" margintop="0" width="100%" height="100%" align="center">

	<div class="card align-middle" style="width:25rem; border-radius:20px;">
		<div class="card-title" style="margin-top:30px;">
			<h2 class="card-title text-center" style="color:#113366;">PNU Email Alarm</h2>
		</div>
		<div class="card-body">
      <form class="form-signin" method="POST" onSubmit="logincall();return false">
        <h5 class="form-signin-heading">이메일 정보를 입력하세요</h5>
        <input type="text" id="email" name="email" class="form-control" placeholder="Your Email" required autofocus><br>
        <button id="btn-Yes" onclick="mailCheck()" class="btn btn-lg btn-primary btn-block" type="submit">등&nbsp;&nbsp; 록</button><br>
        <p style="font-size:4px;">* 수집된 개인정보는 알림 이외의 목적으로 사용되지 않습니다. </p>
      </form>
		</div>
	</div>

	<div class="modal">
	</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
