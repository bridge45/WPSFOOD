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



    <form action="addCatSave.php" method="POST">
        <table>
            <tr style="height:45px">
                <td colspan="2" style="font-size: 12px; color: #AA3939;"><strong>Add Sort</strong></td>
            </tr>
            <tr><td>catName</td><td><input type="text" id="catName" name="catName" placeholder="input catName" ></td></tr>
            <tr><td><input type="submit" value="Add" id="submit" name="submit"></td></tr>
        </table>
    </form>
</div>

<div id="footer">Copyright © 2014 <a href="#">WPS</a>. All rigths reserved&nbsp;&nbsp;
    <a href="../index.php" target="_blank">Return Home</a>
</div>
</body>
</html>