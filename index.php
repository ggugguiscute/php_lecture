<?php // 모든 php 코드를 감싸는 이니셜

  //echo "hello php"; php의 문자열 등의 내용을 출력

  session_start();
  if(isset($_SESSION['user'])){//isset:존재 여부 확인. 있을 시 true(1), 없을 시 false(0)
    $userid = $_SESSION['user'];
 } else {$userid = '';}

 echo isset($_SESSION['user']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <button class="login" onclick="goLogin()">Login</button>
  <button class="logout" onclick="goLogout()">Logout</button>

  <?php
    //php공간
    if(!$userid){
  ?>
      <p>로그인이 필요합니다.</p>
      <?php
    }else{
  
      ?>
      <p><?=$userid?>님이 로그인 했습니다.</p>
      
      <?php
      }
  ?>

  <script>
    function goLogin(){
      location.href="/php_lecture/php/login.php"
    }
    function goLogout(){
      location.href="/php_lecture/php/logout.php"
    }
  </script>
</body>
</html>