<?php


$html = "
<form method='POST' action=''>
<label>Date of Birth</label><br>
<input name='dob' type='date'><br>
<label>Current Year</label><br>
<input name='cy' type='date'><br>
<button name='Age' type='submit'>Subtract</button>
</form>
";

if(isset($_POST["Age"])){
// Creates DateTime objects
$datetime1 = date_create("dob");
$datetime2 = date_create("cy");

// Calculates the difference between DateTime objects
$interval = date_diff($datetime1, $datetime2);

// Display the result
echo $interval->format("Difference between two dates: %R%a days");
}

?>
