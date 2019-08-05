<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Test Online</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <div class="login-wrap">
  <div class="login-html">
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Đăng nhập</label>
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Đăng ký</label>
    <div class="login-form">
      <form class="sign-in-htm" action="login.php" method="POST">
        <div class="group">
          <label for="user" class="label">Tài khoản</label>
          <input id="username" name="username" type="text" class="input">
        </div>
        <div class="group">
          <label for="pass" class="label">Mật khẩu</label>
          <input id="password" name="password" type="password" class="input" data-type="password">
        </div>
        <div class="group">
          <input id="check" type="checkbox" class="check" checked>
          <label for="check"><span class="icon"></span> Nhớ mật khẩu</label>
        </div>
        <div class="group">
          <input type="submit" name="loginuser" class="button" value="Đăng nhập">
        </div>
        <div class="hr"></div>
        <div class="foot-lnk">
          <a href="#forgot">Quên mật khẩu?</a>
        </div>
      </form>
      <form class="sign-up-htm" action="register.php" method="POST">
        <div class="group">
          <label for="user" class="label">Tài khoản</label>
          <input id="username" name="username" type="text" class="input">
        </div>
        <div class="group">
          <label for="pass" class="label">Mật khẩu</label>
          <input id="password" name="password" type="password" class="input" data-type="password">
        </div>
        <div class="group">
          <label for="pass" class="label">Nhập lại mật khẩu</label>
          <input id="pass" name="repassword" type="password" class="input" data-type="password">
        </div>
        <div class="group">
          <label for="category" class="label">Đăng ký là</label>
          <select id="category" name="category" class="input">
          	<option>Admin</option>
          	<option>User</option>
          </select>
        </div>
        <div class="group">
          <input type="submit" class="button" name="registeruser" value="Đăng ký">
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>