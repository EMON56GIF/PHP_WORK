<?php

if (
    isset($_SERVER['HTTPS']) &&
    $_SERVER['HTTPS'] !== 'off'
) {
    echo "The page is called through HTTPS";
}
else {
    echo "The page is called through HTTP";
}

?>