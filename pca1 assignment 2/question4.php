<?php

$str = "hello";

if (strlen($str) >= 3) {

    $result = substr($str, 0, -3) . strtoupper(substr($str, -3));

    echo $result;

}
else {

    echo strtoupper($str);

}

?>