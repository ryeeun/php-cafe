<?php
    session_start();
    if(!isset($_SESSION['name'])) {
        echo "<script>location.replace('login.php');</script>";
    }
    else{
        $uid = $_SESSION['uid'];
        $name = $_SESSION['name'];
    }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>LOGIN</title>
  <link rel="stylesheet" type="text/css" href="lib/css/topbar.css" >
  <link rel="stylesheet" type="text/css" href="lib/css/index.css" >
</head>
<body>
    <div class="index">
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
            <button type="button" class="logoutBtn" onClick="location.href='logout.php'">
                LOGOUT
            </button>
        </div>
        <div class="background">
        </div>
        <div class="mainBox">
                <span class="text"><?php echo "Hi, $name"; ?></span>
                <div>
                    <button type="button" class="orderBtn" onClick="location.href='order.php'">
                        ORDER
                    </button>
                </div>
            </div>
    </div>
</body>
</html>
