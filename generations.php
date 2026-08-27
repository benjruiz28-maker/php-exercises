<?php
$html = "
<form method='POST' action=''>
<label>Birth Year</label><br>
<input name='birth_year' type='number' min='1900' max='2026'><br>
<button name='FindInfo' type='submit'>Find Out</button>
</form>
";

echo $html;

if (isset($_POST["FindInfo"])) {
    $birthYear = (int) $_POST["birth_year"];

    if (($birthYear % 4 == 0 && $birthYear % 100 != 0) || ($birthYear % 400 == 0)) {
        $leapMessage = $birthYear . " was a Leap Year!";
    } else {
        $leapMessage = $birthYear . " was not a Leap Year.";
    }

    if ($birthYear >= 2013 && $birthYear <= 2026) {
        $generation = "Gen Alpha";
    } elseif ($birthYear >= 1997 && $birthYear <= 2012) {
        $generation = "Gen Z";
    } elseif ($birthYear >= 1981 && $birthYear <= 1996) {
        $generation = "Millennial";
    } elseif ($birthYear >= 1965 && $birthYear <= 1980) {
        $generation = "Gen X";
    } elseif ($birthYear >= 1946 && $birthYear <= 1964) {
        $generation = "Baby Boomer";
    } else {
        $generation = "an earlier or unrecognized";
    }

    echo $leapMessage . " Based on your birth year, you belong to the " . $generation . " generation.";
}
?>