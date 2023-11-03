<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form action="p6.php" method="GET">
    Name: <input type="text" name="txt1"><br><br>
    Address: <textarea name="textarea" cols="25" rows="7"></textarea><br><br>
    Phone No: <input type="text" name="txt2"><br><br>
    Degree: <br>
    Msc(Ca&it): <input type="checkbox" name="degree[]" value="Msc(Ca&it)"><br>
    MCA: <input type="checkbox" name="degree[]" value="MCA"><br>
    BCA: <input type="checkbox" name="degree[]" value="BCA"><br>
    PGDCA: <input type="checkbox" name="degree[]" value="PGDCA"><br><br>

    Gender: 
    Male: <input type="radio" name="gender" value="Male">
    Female: <input type="radio" name="gender" value="Female"><br><br>

    Expected Salary: 
    <select name="salary">
        <option>5000 to 10000</option>
        <option>10000 to 15000</option>
        <option>15000 to 20000</option>
    </select><br><br>

    <input type="submit" value="Submit">
</form>
</body>
</html>
