<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title></title>
</head>
<body>
   <?php
    include './lib/include/sql_conn.php';

    session_start();
    
      
    //login.php에서 입력받은 id, password
    $uid = $_POST['uid'];
    $password = $_POST['password'];
      
    $q = "SELECT * FROM members WHERE uid = '$uid' AND password = '$password'";
    $result = $conn->query($q);
    $row = $result->fetch_array(MYSQLI_ASSOC);
      
    //결과가 존재하면 세션 생성
    if ($row != null) {
        $_SESSION['uid'] = $row['uid'];
        $_SESSION['name'] = $row['name'];
        echo "<script>location.replace('index.php');</script>";
        exit;
    }
      
    //결과가 존재하지 않으면 로그인 실패
    if($row == null){
        echo "<script>alert('Invalid username or password')</script>";
        echo "<script>location.replace('login.php');</script>";
        exit;
    }
    ?>
</body>
</html>