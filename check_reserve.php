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
    $oid = $_SESSION['table_oid'];

    if(isset($_POST['seat'])) {
        $tid = $_POST['seat'];

        date_default_timezone_set('Asia/Seoul');
        $startTime = date("Y-m-d H:i:s");
        $timestamp = strtotime("+3 hours");
        $endTime = date("Y-m-d H:i:s", $timestamp);

        $sql = "UPDATE tables SET oid = '$oid', startTime = '$startTime', endTime = '$endTime' WHERE tid = '$tid'";
        $result = mysqli_query($conn, $sql);


        echo "<script>alert('$oid')</script>";
        echo "<script>location.replace('index.php');</script>";
    }
    else{
        echo "<script>alert('Fail Reserve!')</script>";
        echo "<script>location.replace('reserve.php');</script>";
    }
?>
</body>
</html>