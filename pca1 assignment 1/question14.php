<!DOCTYPE html>
<html>
<body>

<form method="post">

    Enter Radius:
    <input type="number" name="radius" step="any">

    <input type="submit" value="Calculate">

</form>

<?php

if (isset($_POST['radius'])) {

    $radius = $_POST['radius'];

    $circumference = 2 * pi() * $radius;
    $area = pi() * $radius * $radius;

    echo "Circumference = " . $circumference . "<br>";
    echo "Area = " . $area;
}

?>

</body>
</html>