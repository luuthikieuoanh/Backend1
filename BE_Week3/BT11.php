<?php
function calculateArea($width, $height)
{
    $area = $width * $height;
    return " A rectangle of	length $height and width $width has an are of $area";
}

$result = calculateArea(8, 5);
echo $result;
