<?php

// Generate an error
echo $abc;

$error = error_get_last();

if ($error) {
    echo "<pre>";
    print_r($error);
    echo "</pre>";
}

?>