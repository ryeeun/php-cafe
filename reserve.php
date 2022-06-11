<?php
    session_start();

    $uid = $_SESSION['uid'];

    if(isset($_SESSION['table_oid'])) {
        $oid = $_SESSION['table_oid'];
    }
    
?> 
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>RESERVE</title>
  <link rel="stylesheet" type="text/css" href="lib/css/tables.css" >
</head>
<body>
    <form class='tables' action="check_reserve.php" name="reserve" method="post">
        <div class='tablesStates'>
            <div class='tablesState'>
                <span class='color Using'></span>
                <span>이용불가</span>
            </div>
            <div class='tablesState'>
                <span class='color Available'></span>
                <span>선택가능</span>
            </div>
            <div class='tablesState'>
                <span class='color Selected'></span>
                <span>선택됨</span>
            </div>
        </div>
        <div class='floor'>
<?php
    include './lib/include/sql_conn.php';
      
    $sql = "SELECT * FROM tables";
    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_array($result)){
        $tid = $row['tid'];
        $num = $row['num'];
        $oid = $row['oid'];
?>
<?php        
        if($num <= 9){
            if($oid == null){
?>
            <input type="radio" name="seat" id=<?php echo $tid; ?> value=<?php echo $tid; ?> class='radio' />
            <label for=<?php echo $tid; ?> class='seatlabel'><?php echo $num; ?></label>
<?php
            }
            else{
?>
            <input type="radio" name="seat" id=<?php echo $tid; ?> value=<?php echo $tid; ?> class='radio' />
            <label for=<?php echo $tid; ?> class='seatlabel using'><?php echo $num; ?></label>
<?php
            }
        }
    }
?>      
            
        </div>
        <button type="submit" class="tablesbtn" onclick="button()">
        RESERVE
        </button>
    </form>

</body>
</html>