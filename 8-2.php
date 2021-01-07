<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
</head>
<body>
  <?php
    $password = $_GET["password"];
    if($password == "1111"){
        echo "로그인 성공";
    } else {
        echo "<a href="8-1".php>Err<.a>";
    }
   ?>
</body>
</html>
