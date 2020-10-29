<?php
function check($value)
{

    if ($value > 30) {
        return "$value > 30";
    } else if ($value > 20) {
        return " 20 < $value <= 30";
    } else if ($value > 10) {
        return " 10 < $value <= 20";
    }
    return "$value < 10";
}

$result = check(20);

echo $result;
