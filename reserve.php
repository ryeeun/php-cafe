<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>RESERVE</title>
  <link rel="stylesheet" type="text/css" href="lib/css/tables.css" >
</head>
<body>
    <div class='tables'>
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
        $num = $row['num'];
        $isempty = $row['isempty'];
?>
<?php        
        if($num <= 9){
            if($isempty == 1){
?>
            <input type="radio" name="seat" id=<?php echo $num; ?> value=<?php echo $num; ?> class='radio' />
            <label for=<?php echo $num; ?> class='seatlabel'><?php echo $num; ?></label>
<?php
            }
            else{
?>
                <input type="radio" name="seat" id=<?php echo $num; ?> value=<?php echo $num; ?> class='radio' />
                <label for=<?php echo $num; ?> class='seatlabel using'><?php echo $num; ?></label>
<?php
            }
        }
    }
?>      
            
        </div>
        <button class='tablesbtn'>RESERVE</button>
    </div>

</body>
</html>