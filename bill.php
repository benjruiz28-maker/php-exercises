<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bill = $_POST["bill"];
    $tipPercent = $_POST["tip"];
    $people = $_POST["people"];

    $tipAmount = $bill * ($tipPercent / 100);
    $total = $bill + $tipAmount;
    $perPerson = $total / $people;
}
?>
<!DOCTYPE html>
<html>
<head><title>Tip Calculator</title></head>
<body>
<h2>Simple Tip & Split Bill Calculator</h2>
<form method="post">
    Total Bill Amount: <input type="number" name="bill" step="0.01"><br><br>
    Tip Percentage: <input type="number" name="tip" step="0.01"><br><br>
    Number of People: <input type="number" name="people"><br><br>
    <input type="submit" value="Calculate">
</form>

<?php if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>
<h3>Results:</h3>
<p>Total Tip: $<?php echo number_format($tipAmount, 2); ?></p>
<p>Grand Total: $<?php echo number_format($total, 2); ?></p>
<p>Each person pays: $<?php echo number_format($perPerson, 2); ?></p>
<?php } ?>
</body>
</html>