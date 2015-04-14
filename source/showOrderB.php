<?php
define('DBROOT', './DB/wpsfood');
require './function.php'; //include the function
checkLogin();

$username = $_COOKIE['username'];
$Arr = getDB(); //get the DB data


?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>WPSFOOD</title>
    <link href="html/style.css" rel="stylesheet" type="text/css" id="cssfile">
</head>
<body>
<div id="header">
    <h1>WPSFOOD</h1>
</div>
<div id="container">
    <div class="links">
        <a href="showDish.php">View Dish</a>
        <a href="showOrder.php">View Cart</a>
        <a href="showOrderB.php">View Order</a>
        <span class="user"><a href="loginOut.php">loginout</a></span>
        <span class="user"><a href=" AlterUser.php">Change Password</a></span>
        <span class="user"><?php echo $_COOKIE["username"];?></span>
    </div>

    <?php
    if(empty($Arr['orderB'][$username])){
        echo ' <tr>
                    <td colspan="4">Have No Data!</td>
                </tr>';
        die();
    }

    $orderArr=$Arr['orderB'][$username];
    $orderArr=array_reverse($orderArr);//逆序

    foreach ($orderArr as $value) {
        echo '<table class="list">
                <tr style="height:45px;background-color: rgb(248, 248, 207)">
                    <td>OrderNo:' . $value['orderNo'] . '</td>
                    <td>AllPrice:' . $value['allPrice'] . '</td>
                    <td style="color:red">Status:' . getStatus($value['status']) . '</td>
                    <td>Address' . $value['address'] . '</td>
                </tr>';
        foreach ($value['content'] as $key => $valueB) {
            echo '<tr style="height:45px">
                    <td colspan="4" style="font-size: 12px; color: #AA3939;"><strong>' . $key . '</strong></td>
                </tr>
                <tr>
                    <td width="50%" colspan="2">DishName</td>
                    <td width="30%">Price</td>
                    <td width="20%">Quantity</td>
                </tr>';
            foreach ($valueB as $keyC => $valueC) {
                echo ' <tr>
                        <td colspan="2">'.$keyC.'</td>
                        <td>'.$valueC['dishPrice'].'</td>
                        <td>'.$valueC['count'].'</td>
                      </tr>';
            }
        }
        echo '</table>';
    }
    ?>


</div>

<div id="footer">Copyright © 2014 <a href="#">WPS</a>. All rigths reserved&nbsp;&nbsp;
    <a href="admin" target="_blank">Manage</a>
</div>
</body>
</html>