<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $namesList = $_POST["names"];
    $namesArray = explode(",", $namesList);
    $namesArray = array_map('trim', $namesArray);

    $winnerIndex = array_rand($namesArray);
    $winner = $namesArray[$winnerIndex];

    $drawTime = date("F j, Y \a\t h:i A");
}
?>
<!DOCTYPE html>
<html>
<head><title>Random Winner Picker</title></head>
<body>
<h2>Random Winner & Draw Timestamp</h2>
<form method="post">
    Participant Names (comma-separated): <input type="text" name="names" placeholder="Alice, Bob, Charlie, Diana"><br><br>
    <input type="submit" value="Draw Winner">
</form>

<?php if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>
<h3>Result:</h3>
<p>Winner: <?php echo htmlspecialchars($winner); ?>! (Drawn on <?php echo $drawTime; ?>)</p>
<?php } ?>
</body>
</html>