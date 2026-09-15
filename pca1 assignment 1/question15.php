<!DOCTYPE html>
<html>
<body>

<form method="post">

    Enter Marks:
    <input type="number" name="marks">

    <input type="submit" value="Check Grade">

</form>

<?php

if (isset($_POST['marks'])) {

    $marks = $_POST['marks'];

    if ($marks > 800 && $marks <= 1000) {
        echo "Class I";
    }
    elseif ($marks > 600 && $marks <= 800) {
        echo "Class II";
    }
    elseif ($marks > 400 && $marks <= 600) {
        echo "Class III";
    }
    elseif ($marks >= 0 && $marks <= 400) {
        echo "Fail";
    }
    else {
        echo "Invalid marks";
    }
}

?>

</body>
</html>