<!DOCTYPE html>
<html>
<body>

<form method="post">
    Enter your name:
    <input type="text" name="name">
    <input type="submit" value="Submit">
</form>

<?php
if (isset($_POST['name'])) {
    echo "Hello, " . $_POST['name'];
}
?>

</body>
</html>