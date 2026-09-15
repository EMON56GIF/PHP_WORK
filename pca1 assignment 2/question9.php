<?php

$str1 = "Hello";
$str2 = "Hi";

if (strlen($str1) > strlen($str2)) {

    $long = $str1;
    $short = $str2;

}
else {

    $long = $str2;
    $short = $str1;

}

$result = $long . $short . $long;

echo $result;

?>