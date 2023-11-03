<?php
if (isset($_GET['txt1'])) {
    echo "Name: " . $_GET['txt1'] . "<br>";
}
if (isset($_GET['textarea'])) {
    echo "Address: " . $_GET['textarea'] . "<br>";
}
if (isset($_GET['txt2'])) {
    echo "Phone No: " . $_GET['txt2'] . "<br>";
}
if (isset($_GET['degree'])) {
    echo "Degree: " . implode(", ", $_GET['degree']) . "<br>";
}
if (isset($_GET['gender'])) {
    echo "Gender: " . $_GET['gender'] . "<br>";
}
if (isset($_GET['salary'])) {
    echo "Expected Salary: " . $_GET['salary'] . "<br>";
}
?>
