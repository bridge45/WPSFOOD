<?php
define('DBROOT','../DB/wpsfood');
require '../function.php';//include the function

$catName=$_POST['catName'];
if(empty($catName)) echo '<SCRIPT type=text/javascript>alert("The SortName Can not be empty!");location.href="addCat.php";</script>';
$Arr=getDB();//连接数据库获取数据

if(isset($Arr['cat'])&&is_array($Arr['cat'])) {
	foreach ($Arr['cat'] as $key=>$value){//检查菜单类别(cat)是否存在
		if($catName == $key){
			echo '<SCRIPT type=text/javascript>alert("The Sort Name exists,please change another!");window.history.back(-1);</script>';
			die();
		}
	}
}

$Arr['cat']["$catName"]=array();
if(saveDB($Arr))//保存，然后跳转
	echo '<SCRIPT type=text/javascript>alert("add a new user success!");location.href="addCat.php";</script>';
else
	die('Error when adding a new user!');