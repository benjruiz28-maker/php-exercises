<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST["password"];

    if (strlen($password) < 8) {
        $message = "Password is too short! Must be at least 8 characters.";
    } else {
        $expireDate = date("F j, Y", strtotime("+90 days"));
        $message = "Password set successfully! Your password will expire on $expireDate.";
    }
}
?>
<!DOCTYPE html>
<html>
<head><title>Password Checker</title></head>
<body>
<h2>Password Strength & Expiration Checker</h2>
<form method="post">
    Password: <input type="password" name="password"><br><br>
    <input type="submit" value="Submit">
</form>

<?php if (isset($message)) { ?>
<h3>Result:</h3>
<p><?php echo $message; ?></p>
<?php } ?>
</body>
</html>