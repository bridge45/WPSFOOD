<?php
define('DBROOT','../DB/wpsfood');
require '../function.php';//include the function

$cat=$_POST['cat'];
$dishName=$_POST['dishName'];
$dishPrice=$_POST['dishPrice'];
if(empty($dishName)||empty($dishPrice)) echo '<SCRIPT type=text/javascript>alert("The DishName or Price Can not be empty!");location.href="addDish.php";</script>';
$Arr=getDB();//连接数据库获取数据

//添加数据到数组
$Arr['cat'][$cat][]=array(
		'dishName'=>$dishName,
		'dishPrice'=>$dishPrice
		);
if(saveDB($Arr))//保存，然后跳转
	echo '<SCRIPT type=text/javascript>alert("Add successfully!");location.href="addDish.php";</script>';
else
	die('Error when adding a new user!');