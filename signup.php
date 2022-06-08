<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원 가입</title>
    <link rel="stylesheet" type="text/css" href="lib/css/signup.css" >
  </head>
  <body>
    <div class="signup">
        <form action="check_signup.php" method="post" name="registform" id="regist_form" class="signupForm" onsubmit="return sendit()">
          <h2>SIGN UP</h2>
          <div><input class="signupIDInput" type="text" name="uid" id="uid" placeholder=" ID"><input class="checkBtn" type="button" id="checkIdBtn" value="check" onclick="checkId()"></div>
          <div class="checkTest" id="result" name="result">&nbsp;</div>
          <div><input class="signupInput" type="password" name="password" placeholder=" PASSWORD" required></div>
          <div><input class="signupInput" type="password" name="password_confirm" placeholder=" PASSWORD 확인" required></div>
          <div><input class="signupInput" type="text" name="name" placeholder=" USERNAME" required></div>
          <div><input class="signupBtn" type="submit" value="Sign Up"></div>
        </form>
    </div>
    <script src="./lib/js/regist.js"></script>
  </body>
</html>