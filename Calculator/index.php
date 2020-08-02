<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Calculator</title>
</head>
<body>

<form action="./includes/calculate.php" method="post">
    <input type="number" name="num1" placeholder="Number 1" value=<?php isset($_GET["num1"]) ==true ? $_GET["num1"] : "" ?>>
    <select name="calOption" style="width:90px;margin: 10px;font-size: medium;font-weight: 600">
        <option value="Add">+</option>
        <option value="Mult">*</option>
        <option value="Sub">-</option>
    </select>
    <input type="number" name="num2" placeholder="Number 2" value=<?php isset($_GET["num2"]) ==true ? $_GET["num2"] : "" ?>>
    <input type="submit" name="submit" value="Calculate">
    <br>
    <input type="text" name="Answer" placeholder="Answer" value=<?php isset($_GET["answer"]) ==true ? $_GET["answer"] : "" ?>>
</form>

</body>
</html>