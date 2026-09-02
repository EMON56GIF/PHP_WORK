<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 3</title>
</head>

<body>

    <form method="POST" action="">

        <label>Enter First Number:</label>
        <input type="number" name="num1" required>
        <br><br>

        <label>Enter Second Number:</label>
        <input type="number" name="num2" required>
        <br><br>

        <input type="submit" name="submit" value="Submit">

    </form>

    <?php

    if (isset($_POST['submit'])) {

        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        if (
            ($num1 >= 40 && $num1 <= 50) &&
            ($num2 >= 40 && $num2 <= 50)
        ) {
            echo "<h3>True</h3>";
        } else {
            echo "<h3>False</h3>";
        }
    }

    ?>

</body>
</html>
