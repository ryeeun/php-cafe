<?php
    include './lib/include/sql_conn.php';

    $uid = $_GET['uid'];
    $sql = "SELECT uid FROM members WHERE uid='$uid'";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($result);

    echo isset($data['uid']) ? "X" : "O";
?>