<?php

$email1 = "abc@gmail.com";
$email2 = "test@example.com";

if (
    filter_var($email1, FILTER_VALIDATE_EMAIL) &&
    filter_var($email2, FILTER_VALIDATE_EMAIL)
) {
    echo "Both email addresses are valid";
}
else {
    echo "One or both email addresses are invalid";
}

?>