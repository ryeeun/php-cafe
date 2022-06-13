<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>LOGIN</title>
  <link rel="stylesheet" type="text/css" href="lib/css/topbar.css" >
  <link rel="stylesheet" type="text/css" href="lib/css/login.css" >
</head>
<body>
  <div class="login">
    <div class="topbar">
      <ul class="topList">
        <li class="topListItem">
          <a href="index.php">HOME</a>
        </li>
        <li class="topListItem">
          <a href="order.php">ORDER</a>
        </li>
        <li class="topListItem">
          <a href="mypage.php">MYPAGE</a>
        </li>
      </ul>
    </div>
    <form method="post" action="check_login.php" class="loginForm">
      <h2>Login</h2>
      <div class="idForm">
        <input type="text" name="uid" class="loginInput" placeholder=" ID">
      </div>
      <div class="pwForm">
        <input type="password" name="password" class="loginInput" placeholder=" Password">
      </div>
      <button type="submit" class="loginBtn" onclick="button()">
        LOGIN
      </button>
      <div class="bottomText">
        <a href="signup.php">Sign up</a>
      </div>
    </form>
  </div>

</body>
</html>