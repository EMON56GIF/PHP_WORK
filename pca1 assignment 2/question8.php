<?php

$str1 = "abcd";
$str2 = "XYZ";

$middle = strlen($str1) / 2;

$result = substr($str1, 0, $middle)
        . $str2
        . substr($str1, $middle);

echo $result;

?>