<?php
$student = array(
    "HINDI" => array("marks" => "96", "grade" => "1st"),
    "ENGLISH" => array("marks" => "92", "grade" => "1st")
);

foreach ($student as $subject => $sub) {
    echo "Subject: $subject<br>";
    foreach ($sub as $marks => $number) {
        echo "$marks = $number ";
    }
    echo "<br/>";
}
?>

