<?php
    include './lib/include/sql_conn.php';
    session_start();
    $uid = $_SESSION['uid'];

    if(isset($_GET["action"])){        
        if($_GET["action"]=="delete"){                
            $tid = $_GET["tid"];
            $sql = "DELETE FROM tables WHERE tid = '$tid'";
            $result = mysqli_query($conn, $sql);

            echo '<script>alert("삭제 되었습니다")</script>';                        
            echo '<script>window.location="mypage.php"</script>';
        }    
    }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>MYPAGE</title>
  <link rel="stylesheet" type="text/css" href="lib/css/topbar.css" >
  <link rel="stylesheet" type="text/css" href="lib/css/mypage.css" >
</head>
<body>
    <div class="mypage">
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
        <div class="table">    
            <h3>이용 좌석 확인</h3>                    
            <table class="mypage-table">                            
                <tr>                                
                    <th width="20%">이용중인 좌석</th>                                
                    <th width="30%">이용 시작 시간</th>                                
                    <th width="30%">이용 만료 시간</th>                                                         
                    <th width="20%"></th>                           
                </tr>
<?php
    $sql = "SELECT T.tid, T.startTime, T.endTime FROM orders O, tables T WHERE O.uid = '$uid' AND O.oid = T.oid";
    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_array($result)){
        $tid = $row['tid'];
        $startTime = $row['startTime'];
        $endTime = $row['endTime'];
?>
                <tr>
                    <td><?php echo $tid; ?></td>
                    <td><?php echo $startTime; ?></td>
                    <td><?php echo $endTime; ?></td>
                    <td><a href="mypage.php?action=delete&tid=<?php echo $tid?>"> <span class="delete">이용 완료</span> </a></td>         
                </tr>
<?php
    }
?>
            </table>
        </div>
    </div>
</body>
</html>