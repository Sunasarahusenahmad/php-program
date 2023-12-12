<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Details Form</title>
</head>
<body>

<?php
// Define variables to store employee details
$employeeName = $employeePosition = $employeeSalary = '';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve employee details from the form
    $employeeName = isset($_POST['employee_name']) ? $_POST['employee_name'] : '';
    $employeePosition = isset($_POST['employee_position']) ? $_POST['employee_position'] : '';
    $employeeSalary = isset($_POST['employee_salary']) ? $_POST['employee_salary'] : '';

    // Display the entered details
    echo "<h2>Employee Details:</h2>";
    echo "<p>Name: $employeeName</p>";
    echo "<p>Position: $employeePosition</p>";
    echo "<p>Salary: $employeeSalary</p>";
}
?>

<!-- HTML form to collect employee details -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <label for="employee_name">Employee Name:</label>
    <input type="text" name="employee_name" required><br>

    <label for="employee_position">Employee Position:</label>
    <input type="text" name="employee_position" required><br>

    <label for="employee_salary">Employee Salary:</label>
    <input type="text" name="employee_salary" required><br>

    <input type="submit" value="Submit">
</form>

</body>
</html>
