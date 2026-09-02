<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 2</title>
</head>

<body>
    <form method="POST" action="question2.php">

        <label>Enter First Number:</label>
        <input type="number" name="num1" required>
        <br>`

        <label>Enter Second Number:</label>
        <input type="number" name="num2" required>
        <br>

        <input type="submit" name="submit" value="Submit">

    </form>

    <?php

    if (isset($_POST['submit'])) {

        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

       
        if (abs(100 - $num1) < abs(100 - $num2)) {
            echo "<h3>Result: $num1</h3>";
        }
        else {
            echo "<h3>Result: $num2</h3>";
        }
    }

    ?>

</body>
</html>
