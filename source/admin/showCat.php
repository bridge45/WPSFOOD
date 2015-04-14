<?php
define('DBROOT','../DB/wpsfood');
require '../function.php';//include the function


$Arr=getDB();//连接数据库获取数据
if(!(isset($Arr['cat'])&&is_array($Arr['cat']))) die('暂无数据!');

$catArr=$Arr['cat'];

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
        echo '<table class="list">
                <tr style="height:45px">
                    <td colspan="2" style="font-size: 12px; color: #AA3939;"><strong>View Sort</strong></td>
                </tr>
                <tr><td>Sort</td><td>Action</td></tr>';

        foreach ($catArr as $key=>$value){
        echo '<tr><td>'.$key.'</td><td> <a href="delCat.php?catName='.$key.'">Delete</a></td></tr>';
    }
        echo '</table>';


    ?>
</div>

<div id="footer">Copyright © 2014 <a href="#">WPS</a>. All rigths reserved&nbsp;&nbsp;
    <a href="../index.php" target="_blank">Return Home</a>
</div>
</body>
</html>