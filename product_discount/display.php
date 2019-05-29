<?php
//this part gets information from the form
$product_description = $_POST['product_description'];
$list_price = $_POST['list_price'];
$discount_percent = $_POST['discount_percent'];

//calculate the discount
$discount = $list_price * $discount_percent * .01;
$discount_price = $list_price - $discount;

//applying the currency format
$list_price_f = "$".number_format($list_price, 2);
$discount_price_f = "$".number_format($discount_price, 2);
$discount_f = "$".number_format($discount, 2);
$discount_percent_f = $discount.'%';

//Escape unformatted input
$product_description_escaped = htmlspecialchars($product_description);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <main>
    <h1>Product Discount Calculator</h1>
    
    <label>Product Description:</label>
    <span> <?php echo $product_description_escaped;?></span><br>

    <label>List Price</label>
    <span> <?php echo $list_price_f;?></span><br>

    <label>Standard Discount:</label>
    <span> <?php echo $discount_percent_f;?></span><br>

    <label>Discount Amount:</label>
    <span> <?php echo $discount_f;?></span><br>

    <label>Discount Price:</label>
    <span> <?php echo $discount_price_f;?></span><br>

    </main>
</body>
</html>