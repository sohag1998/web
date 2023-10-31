<?php
    $result="";
    $num1=null;
    $num2=null;
    if(isset($_GET['submit'])){
        if(isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['operation'])){
            $num1 = $_GET['num1'];
            $num2 = $_GET['num2'];
            $op = $_GET['operation'];
            $result = "";
            switch($op){
                case "add":
                    $r = $num1 + $num2;
                    $result = "Addtion is: $num1 + $num2 = $r";
                    break;
                case "sub":
                    $r = $num1 - $num2;
                    $result = "Substarction is: $num1 - $num2 = $r";
                    break;
                case "mul":
                    $r = $num1 * $num2;
                    $result = "Multiplication is: $num1 * $num2 = $r";
                    break;
                case "div":
                    $r = $num1 / $num2;
                    $result = "Division is: $num1 / $num2 = $r";
                    break;

            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <style>
        body{
                font-family: monospace;
            }
            .container {
                width: 50%;
                margin: 0 auto;
            }

            form{
                margin-top: 60px;
            }
            form label{
                display: block;
                font-size: 16px;
                margin-top: 15px;
            }
            form input{
                margin-top: 5px;
            }
    </style>
</head>
<body>
    <div class="container">
        <form method="GET">
            <label for="num1">Enter your first number</label>
            <input type="text" id="num1" name="num1" value="<?php echo $num1 ?>"required>
            <label for="num2">Enter your second number</label>
            <input type="text" id="num2" name="num2" value="<?php echo $num2 ?>"required>
            <label for="op">Select a operation</label>
            <select id="op" name="operation">
                <option value="add">Addition</option>
                <option value="sub">Substraction</option>
                <option value="mul">Multiplication</option>
                <option value="div">Division</option>
            </select>
            <br>
            <input type="submit" name="submit" value="submit">
        </form>
        <?php echo  "<p>$result</p>"?>
    </div>
</body>
</html>