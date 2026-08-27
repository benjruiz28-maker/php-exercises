<?php
$html = "
<form method='POST' action=''>
<label>Event Name</label><br>
<input name='event_name' type='text'><br>
<label>Event Date</label><br>
<input name='event_date' type='date'><br>
<button name='Countdown' type='submit'>Calculate</button>
</form>
";

echo $html;

if (isset($_POST["Countdown"])) {
    $eventName = $_POST["event_name"];
    $eventDate = $_POST["event_date"];

    $today = date_create(date("Y-m-d"));
    $event = date_create($eventDate);

    $interval = date_diff($today, $event);
    $daysLeft = $interval->days;

    if ($event < $today) {
        echo $eventName . " has already passed!";
    } elseif ($event == $today) {
        echo $eventName . " is today!";
    } else {
        echo "There are " . $daysLeft . " days left until " . $eventName . "!";
    }
}
?>