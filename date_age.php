<?php
$html = "
<form method='POST' action=''>
<label>Full Name</label><br>
<input name='fname' type='text'><br>
<label>Date of Birth</label><br>
<input name='dob' type='date'><br>
<button name='Age' type='submit'>Calculate</button>
</form>
";

echo $html;

if (isset($_POST["Age"])) {
    $fname = $_POST["fname"];
    $dob = $_POST["dob"];

  
    $datetime1 = date_create($dob);
    $datetime2 = date_create(date("Y-m-d")); 

    $interval = date_diff($datetime1, $datetime2);

   
    echo "Hello " . $fname . " your age is " . $interval->y;
}
?>