<?php
$name = "C0218G";
function checkValidateClass($name)
{
    $pattern = '/^([CAP])([0-9]{4})([G-M])$/';
    if (preg_match($pattern, $name)) {
        echo "Hop le";
    } else {
        echo "Khong hop le";
    }
}
checkValidateClass($name);