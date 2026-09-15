<!DOCTYPE html>
<html>
<body>

<form method="post">

    <label>Enter Paragraph:</label><br>
    <textarea name="paragraph" rows="5" cols="50"></textarea>
    <br><br>

    <label>Enter Search Word:</label>
    <input type="text" name="word">

    <br><br>

    <input type="submit" value="Search">

</form>

<?php

if (isset($_POST['paragraph']) && isset($_POST['word'])) {

    $paragraph = $_POST['paragraph'];
    $word = $_POST['word'];

    $count = substr_count(
        strtolower($paragraph),
        strtolower($word)
    );

    echo "The word '$word' occurs $count time(s).";
}

?>

</body>
</html>