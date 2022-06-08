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
            <div class='part1'>
                <div class='line'>
                    <input type="radio" name="seat" id="seat1" value="1" class='radio' />
                    <label for="seat1" class='seatlabel'>1</label>
                    <input type="radio" name="seat" id="seat2" value="2" class='radio'/>
                    <label for="seat2" class='seatlabel'>2</label>
                    <input type="radio" name="seat" id="seat3" value="3" class='radio'/>
                    <label for="seat3" class='seatlabel'>3</label>
                </div>
                 <div class='line'>
                    <input type="radio" name="seat" id="seat4" value="4" class='radio' />
                    <label for="seat4" class='seatlabel'>4</label>
                    <input type="radio" name="seat" id="seat5" value="5" class='radio'/>
                    <label for="seat5" class='seatlabel'>5</label>
                    <input type="radio" name="seat" id="seat6" value="6" class='radio'/>
                    <label for="seat6" class='seatlabel'>6</label>
                </div>
                <div class='line'>
                    <input type="radio" name="seat" id="seat7" value="7" class='radio' />
                    <label for="seat7" class='seatlabel'>7</label>
                    <input type="radio" name="seat" id="seat8" value="8" class='radio'/>
                    <label for="seat8" class='seatlabel'>8</label>
                    <input type="radio" name="seat" id="seat9" value="9" class='radio'/>
                    <label for="seat9" class='seatlabel'>9</label>
                </div>
            </div>
            <div class='part2'>
                <input type="radio" name="seat" id="seat10" value="10" class='radio' />
                <label for="seat10" class='seatlabel2'>10</label>
                <input type="radio" name="seat" id="seat11" value="11" class='radio'/>
                <label for="seat11" class='seatlabel2'>11</label>
                <input type="radio" name="seat" id="seat12" value="12" class='radio'/>
                <label for="seat12" class='seatlabel2'>12</label>
                <input type="radio" name="seat" id="seat13" value="13" class='radio'/>
                <label for="seat13" class='seatlabel2'>13</label>
            </div>
        </div>
        <button class='tablesbtn'>RESERVE</button>
    </div>

</body>
</html>