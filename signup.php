<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>DBCAFE</title>
    <link rel="stylesheet" type="text/css" href="lib/css/topbar.css" >
    <link rel="stylesheet" type="text/css" href="lib/css/signup.css" >
  </head>
  <body>
    <div class="signup">
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
      <form 
        action="check_signup.php" 
        method="post" 
        name="registform" 
        id="regist_form" 
        class="signupForm" 
        onsubmit="return sendit()">
        <h2>SIGN UP</h2>
        <div>
          <input class="signupIDInput" type="text" name="uid" id="uid" placeholder=" ID">
          <input class="checkBtn" type="button" id="checkIdBtn" value="check" onclick="checkId()">
        </div>
        <div class="checkTest" id="result" name="result">&nbsp;</div>
        <input class="signupInput" type="password" name="password" placeholder=" PASSWORD" required>
        <input class="signupInput" type="password" name="password_confirm" placeholder=" PASSWORD 확인" required>
        <input class="signupInput" type="text" name="name" placeholder=" USERNAME" required>
        <input class="signupBtn" type="submit" value="Sign Up"></div>
      </form>
    </div>
    <script src="./lib/js/regist.js"></script>
  </body>
</html>