<?php

$array = array(10, 20, 30, 40);

$first = array_shift($array);

$array[] = $first;

echo "Rotated array: ";

print_r($array);

?>