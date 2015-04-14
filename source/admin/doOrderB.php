<?php
define('DBROOT','../DB/wpsfood');
require '../function.php';//include the function
$Arr=getDB();//连接数据库获取数据
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>WPSFOOD</title>
    <link href="../html/style.css" rel="stylesheet" type="text/css" id="cssfile">
</head>
<body>
<div id="header">
    <h1>WPSFOOD</h1>
</div>
<div id="container">
    <div class="links">
        <a href="addCat.php">Add Sort</a>
        <a href="addDish.php">Add Dish</a>
        <a href="doOrderB.php">View Order</a>
        <a href="showCat.php">View Sort</a>
        <a href="showDish.php">View Dish</a>
        <span class="user"><a href="../index.php">Return Home</a></span>
    </div>
    <?php
    if(!(isset($Arr['orderB']))) die('No data!');

    foreach ($Arr['orderB'] as $User=>$value){
        echo '<table class="list">
                <tr style="height:45px">
                    <td colspan="5" style="font-size: 12px; color: #AA3939;">User:<strong>'.$User.'</strong></td>
                </tr>
                <tr><td width="20%">OrderNo</td><td width="10%">AllPrice</td><td width="50%">
                Address</td><td width="10%">Details</td><td width="10%">Action</td></tr>';

        $value=array_reverse($value);//逆序
        foreach($value as $valueB){
            echo '<tr><td>'.$valueB['orderNo'].'</td><td>'.$valueB['allPrice'].'</td><td>'.$valueB['address'].'</td>
                   <td><a href="orderBDetail.php?username='.$User.'&orderNo='.$valueB['orderNo'].'">details</a></td>
                   <td>'.changStatusLink($User,$valueB['orderNo'],$valueB['status']).'</td>
            </tr>';
        }
        echo '</table>';

    }

    ?>
</div>

<div id="footer">Copyright © 2014 <a href="#">WPS</a>. All rigths reserved&nbsp;&nbsp;
    <a href="../index.php" target="_blank">Return Home</a>
</div>
</body>
</html>
