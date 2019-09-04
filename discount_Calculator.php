<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div id="content">
    <h1>Product Discount Calculator</h1>
    <form method="post">
        <div id="data">
            <label>Product Description:</label>
            <input type="text" name="description"/><br/>
            <label>List Price:</label>
            <input type="text" name="price"/><br/>
            <label>Discount Percent:</label>
            <input type="text" name="discount_percent"/>(%)<br/>
        </div>
        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Calculate Discount"/>
        </div>
    </form>
</div>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $productDescription=$_POST["description"];
    $listPrice=$_POST["price"];
    $discountPercent=$_POST["discount_percent"];

    $discountAmount=$listPrice* $discountPercent* 0.1 ;
    $discountPrice=$listPrice-$discountAmount;

    echo "luong duoc chiet khau la".$discountAmount;
    echo "<br>";
    echo "gia sp sau khi chiet khau la".$discountPrice;
}
?>
</body>
</html>
