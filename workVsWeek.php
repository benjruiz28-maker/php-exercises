<?php
$html = "
<form method='POST' action=''>
<label>Select a Date</label><br>
<input name='target_date' type='date'><br>
<button name='CheckDay' type='submit'>Check Day</button>
</form>
";

echo $html;

if (isset($_POST["CheckDay"])) {
    $targetDate = $_POST["target_date"];

    $date = date_create($targetDate);

    $formattedDate = date_format($date, "F j, Y");
    $dayName = date_format($date, "l");
    $dayNumber = date_format($date, "N");

    if ($dayNumber >= 1 && $dayNumber <= 5) {
        echo $formattedDate . " is a " . $dayName . ", which means it is a Workday!";
    } else {
        echo $formattedDate . " is a " . $dayName . ", so it is the Weekend!";
    }
}
?>