<?php

$a = 85;
$b = 95;

if ($a == $b) {

    echo "0";

}
elseif (abs(100 - $a) < abs(100 - $b)) {

    echo "$a is nearest to 100";

}
else {

    echo "$b is nearest to 100";

}

?>