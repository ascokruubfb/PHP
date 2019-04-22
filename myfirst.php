<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

</head>
<body style="text-align: center">
<div style="background-color: #d4d0c8;width: 448px;height: 128px;position: absolute;left: 40%;top: 40%;text-align: center">
    <h3>计算器 PHP 应用程序</h3>
    <form  method="get">
        <input type="text" name="add1">
        <select name="what">
            <option value="m">加</option>
            <option value="n">减</option>
            <option value="b">乘</option>
            <option value="v">除</option>
        </select>
        <input type="text" name="add2">
        <input type="submit" value="等于">
        <?php
        $add1=@$_GET['add1'];
        $add2=@$_GET['add2'];
        $what=@$_GET['what'];
        if(isset($add1)){
            if($what=="m"){
                echo "<p style='font-size: 20px'>" . $add1 . " 加 " . $add2 . " 等于 " . strval($add1+$add2) . "</p>";
            }elseif ($what=="n"){
                echo  "<p style='font-size: 20px'>" . $add1 . " 减 " . $add2 . " 等于 " . strval($add1-$add2) . "</p>";
            }elseif ($what=="b"){
                echo  "<p style='font-size: 20px'>" . $add1 . " 乘 " . $add2 . " 等于 " . strval($add1*$add2) . "</p>";
            }elseif ($what=="v"){
                echo  "<p style='font-size: 20px'>" . $add1 . " 除 " . $add2 . " 等于 " . strval($add1/$add2) . "</p>";
            }
        }
        ?>
    </form>
</div>
</body>
</html>
