<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>

    <h2>Enter Three Values</h2>

    <form method="POST" action="question1.php">
        
        <label>Value A:</label>
        <input type="number" name="a" required>
        <br><br>

        <label>Value B:</label>
        <input type="number" name="b" required>
        <br><br>

        <label>Value C:</label>
        <input type="number" name="c" required>
        <br><br>

        <input type="submit" name="submit" value="Submit">

    </form>

    <?php

    if (isset($_POST['submit'])) {

        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];

        if (
            ($a >= 20 && $a <= 50) &&
            ($b >= 20 && $b <= 50) &&
            ($c >= 20 && $c <= 50)
        ) {
            echo "<h3>True</h3>"; 
        } else {
            echo "<h3>False</h3>";
        }
    }

    ?>

</body>
</html>
