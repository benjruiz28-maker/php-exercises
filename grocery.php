<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $itemsList = $_POST["items"];
    $pricePerItem = $_POST["price"];

    $itemsArray = explode(",", $itemsList);
    $itemCount = count($itemsArray);

    $subtotal = $itemCount * $pricePerItem;
    $tax = $subtotal * 0.08;
    $total = $subtotal + $tax;
}
?>
<!DOCTYPE html>
<html>
<head><title>Grocery Calculator</title></head>
<body>
<h2>Grocery List & Total Cost Calculator</h2>
<form method="post">
    Items List (comma-separated): <input type="text" name="items" placeholder="Rice, Beans, Chicken, Dip"><br><br>
    Price Per Item: <input type="number" name="price" step="0.01"><br><br>
    <input type="submit" value="Calculate">
</form>

<?php if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>
<h3>Results:</h3>
<p>Number of items: <?php echo $itemCount; ?></p>
<p>Subtotal: $<?php echo number_format($subtotal, 2); ?></p>
<p>Tax (8%): $<?php echo number_format($tax, 2); ?></p>
<p>Total Cost: $<?php echo number_format($total, 2); ?></p>
<?php } ?>
</body>
</html>