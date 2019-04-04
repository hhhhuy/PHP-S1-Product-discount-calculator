<html>
<head>
    <title>Product Discount Calculator</title>
    <style>
        #content {
            width: 450px;
            margin: 0 auto;
            padding: 0px 20px 20px;
            background: white;
            border: 2px solid navy;
        }
        h1 {
            color: navy;
        }
        label {
            width: 10em;
            padding-right: 1em;
            float: left;
        }
        #data input {
            float: left;
            width: 15em;
            margin-bottom: .5em;
        }
    </style>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $description = $_POST["description"];
    $price = $_POST["price"];
    $discount_percent = $_POST["discount_percent"];
    $discount_amount = ($price * $discount_percent)/100;
    $discount_price = $price - $discount_amount;
}
?>
<div id="content">
    <h1>Product Discount Calculator</h1>
    <label>Product Description: </label>
    <span><?php echo "$description" ?></span><br/>
    <label>Price: </label>
    <span><?php echo "$$price" ?></span><br/>
    <label>Discount Percent: </label>
    <span><?php echo "$discount_percent%" ?></span><br/>
    <label>Discount Amount: </label>
    <span><?php echo "$$discount_amount" ?></span><br/>
    <label>Discount Price: </label>
    <span><?php echo "$$discount_price" ?></span><br/>
</div>
</body>
</html>