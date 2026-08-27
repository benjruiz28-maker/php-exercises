<?php
$html = "
<form method='POST' action=''>
<label>Select a Date</label><br>
<input name='selected_date' type='date'><br>
<button name='FindDay' type='submit'>Find Day</button>
</form>
";

echo $html;

if (isset($_POST["FindDay"])) {
    $selectedDate = $_POST["selected_date"];

    $date = date_create($selectedDate);

    $formattedDate = date_format($date, "F j, Y");
    $dayOfWeek = date_format($date, "l");

    echo $formattedDate . " fell on a " . $dayOfWeek . ".";
}
?>