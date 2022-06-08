<?php
    include './lib/include/sql_conn.php';

    $uid = $_POST['uid'];
    $password = $_POST['password'];
    $name = $_POST['name'];

    $sql = "INSERT INTO members (uid, password, name) VALUES ('$uid', '$password', '$name')";
    $result = mysqli_query($conn, $sql);

?>

<script>
    alert('Success Sign Up!');
    location.href='login.php';
</script>