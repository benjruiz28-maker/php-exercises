<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text = $_POST["usertext"];
    $charCount = strlen($text);
    $wordCount = str_word_count($text);
    $upperText = strtoupper($text);
}
?>
<!DOCTYPE html>
<html>
<head><title>Text Analyzer</title></head>
<body>
<h2>Text Analyzer & Word Counter</h2>
<form method="post">
    <textarea name="usertext" rows="6" cols="50"><?php if(isset($_POST["usertext"])) echo htmlspecialchars($_POST["usertext"]); ?></textarea><br>
    <input type="submit" value="Analyze">
</form>

<?php if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>
<h3>Results:</h3>
<p>Total characters (including spaces): <?php echo $charCount; ?></p>
<p>Total word count: <?php echo $wordCount; ?></p>
<p>ALL CAPS: <?php echo htmlspecialchars($upperText); ?></p>
<?php } ?>
</body>
</html>