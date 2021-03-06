<?php
    session_start();
    include './lib/include/sql_conn.php';

    if(!isset($_SESSION['name'])) {
        echo "<script>location.replace('login.php');</script>";
    }

    if(isset($_POST["add_to_cart"]))    {       
        //쇼핑카트 세션 배열이 존재한다면        
        if(isset($_SESSION["shopping_cart"])){                      
            $item_array_id = array_column($_SESSION["shopping_cart"],"item_id");                
            //클릭한 상품의 id가 $item_array_id 배열에 존재 하지 않으면                
            if(!in_array($_GET["bid"], $item_array_id))                {                      
                //shopping_cart 세션 배열에 들어있는 배열의 수                    
                $count =  count($_SESSION["shopping_cart"]);                                      
                //클릭한 상품의 데이터를 배열에 넣는다.                        
                $item_array = array(                        
                    "item_id" => $_GET["bid"],                        
                    "item_name" => $_POST["hidden_name"],
                    "item_num" => 1,                        
                    "item_price" => $_POST["hidden_price"],                                         
                );                        
                //shopping_cart 세션 배열에서 그 다음 방부터 차례로 넣는다.                        
                $_SESSION["shopping_cart"][$count] = $item_array;                
            }
            else{                        
                //클릭한 상품의 id가 $item_array_id 배열에 존재한다면   
                $index = array_search($_GET["bid"], $item_array_id); 
                $num = $_SESSION["shopping_cart"][$index]['item_num'];
                $_SESSION["shopping_cart"][$index]['item_num'] = $num + 1;               
            }        
            //쇼핑카트 세션 배열이 존재하지 않는다면(즉, 제일 처음 카트 버튼을 눌렀을 때)        
        }
        else{           
            $item_array = array(                
                'item_id' => $_GET["bid"],                
                'item_name' => $_POST["hidden_name"],
                'item_num' => 1,                
                'item_price' => $_POST["hidden_price"],                     
            );            
                //key 값이 shopping_cart 인 배열 0번 방에 상품 배열을 넣었다.            
                $_SESSION["shopping_cart"][0] = $item_array;                          
        }    
    } 

    if(isset($_GET["action"])){        
        if($_GET["action"]=="delete"){                
            //shopping_cart 세션 배열에 존재하는 배열들을 $values 에 넣는다.                
            foreach($_SESSION["shopping_cart"] as $keys => $values) {                       
                //배열의 item_id 값이 클릭한 id 값과 같으면                    
                if($values["item_id"] == $_GET["bid"]){                           
                    //세션에서 제거한다.                        
                    unset($_SESSION["shopping_cart"][$keys]);                        
                    echo '<script>alert("삭제 되었습니다")</script>';                        
                    echo '<script>window.location="order.php"</script>';                    
                }                
            }        
        }    
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>DBCAFE</title>
    <link rel="stylesheet" type="text/css" href="lib/css/topbar.css" >
    <link rel="stylesheet" type="text/css" href="lib/css/order.css">
</head>
<body>
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
    <div class="container">
        <div class="itemlist">
<?php
    $sql = "SELECT bid, bname, bprice, image FROM beverage";
    $result = mysqli_query($conn, $sql);

    while($data = mysqli_fetch_array($result)){
        $bid = $data['bid'];
        $bname = $data['bname'];
        $bprice = $data['bprice'];
?>
            <div>
                <form method="post" action="order.php?action=add&bid=<?php echo $data['bid']; ?> ">
                    <div class="item">
                        <img src="<?php echo "./lib/image/".$data['image']; ?>" class="beverageImg" /> 
                        </br>
                        <span class="itemName"> <?php echo $data["bname"]; ?> </span>
                        <span class="itemPrice"> <?php echo $data["bprice"]."원"; ?> </span>
                                       
                        <input type="hidden" name="hidden_name" value="<?php echo $data["bname"] ?>" />                                        
                        <input type="hidden" name="hidden_price" value="<?php echo $data["bprice"] ?>" />     
                        <input class="addBtn" type="submit" name="add_to_cart" value="추가" />
                    </div>
                </form>
            </div>
<?php        
    }
?>
        </div>
        <form class="basket" action="check_order.php" name="order_info" method="post">
            <h3>장바구니</h3>                    
            <div class="table">                        
                <table class="basket-table">                            
                    <tr>                                
                        <th width="40%">상품</th>                                
                        <th width="20%">수량</th>                                
                        <th width="20%">가격</th>                                                         
                        <th width="20%">옵션</th>                           
                    </tr>
            <?php 
            if(!empty($_SESSION["shopping_cart"])) {                                
                $total = 0;                                
                foreach($_SESSION["shopping_cart"] as $keys => $values)                                
                {         
            ?>  
                    <tr>                            
                        <td><?php echo $values["item_name"]; ?></td>    
                        <td><?php echo $values["item_num"]; ?></td>                                             
                        <td><?php echo $values["item_price"]; ?></td>                                                        
                        <td>
                            <a href="order.php?action=delete&bid=<?php echo $values["item_id"]?>">
                             <span class="text-danger">삭제</span> 
                            </a>
                        </td>                        
                    </tr>  
            <?php                                    
                    $total = $total + $values["item_num"] * $values["item_price"];                                
                }   //foreach 끝                            
            ?> 
                    <tr>
                        <td colspan="3" class="total">총금액</td>
                        <td><?php echo number_format($total);?></td>
                        <td></td>
                    </tr>
            <?php
            }
            ?>
                </table>
            </div>
            <h3>이용 방법을 선택해주세요</h3>
            <div class="pickup">
                <div class="radio">
                    <input type="radio" id="inhere" name="pickup" value="inhere">
                    <label for="inhere">매장 이용</label>

                    <input type="radio" id="takeout" name="pickup" value="takeout">
                    <label for="takeout">테이크아웃</label>
                </div>
            </div>
            <input class="btn" type="button" name="go-to-reserve" value="주문하기" onClick="location.href='check_order.php'"/>
        </form>  
    </div>
</body>
</html>


