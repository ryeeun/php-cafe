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
  <link rel="stylesheet" type="text/css" href="lib/css/index.css" >
</head>
<body>
    <div class="index">
        <div class="background">
        </div>
        <div class="mainBox">
                <span class="text"><?php echo "Hi, $name"; ?></span>
                <div>
                    <button type="button" class="btn" onClick="location.href='order.php'">
                        ORDER
                    </button>
                    <button type="button" class="btn" onClick="location.href='logout.php'">
                        LOGOUT
                    </button>
                </div>
            </div>
    </div>
</body>
</html>
