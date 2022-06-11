<?php
    include './lib/include/sql_conn.php';

    session_start();
    
    $uid = $_SESSION['uid'];

    $oid = date("Ymd") ."_". substr(md5(microtime().mt_rand(1000,2000)),0,6); // 15자
    $odtime = date("y-m-d H:i:s");

    $sql = "INSERT INTO orders (oid, uid, odtime) VALUES ('$oid', '$uid', '$odtime')";
    $result = mysqli_query($conn, $sql);

    $_SESSION['table_oid'] = $oid;
?>

<script>
    alert('Success Order!');
    location.href='reserve.php';
</script>