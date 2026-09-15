<?php

$url = "https://www.3resource.com/php-exercises/php-basic-exercises.php";

echo "Scheme: " . parse_url($url, PHP_URL_SCHEME) . "<br>";
echo "Host: " . parse_url($url, PHP_URL_HOST) . "<br>";
echo "Path: " . parse_url($url, PHP_URL_PATH) . "<br>";
echo "File: " . basename(parse_url($url, PHP_URL_PATH));

?>