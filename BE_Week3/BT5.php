<?php
$value = 8;
echo "Value is now $value <br>" .
    "Add 2, Value is now " . ($value = $value + 2) . " <br>" .
    "Subtract 4, Value is now " . ($value = $value - 4) . " <br>" .
    "Multiply by 5 ,Value is now " . ($value = $value * 5) . " <br>" .
    "Divide by 3, Value is now " . ($value = $value / 3) . " <br>" .
    "Increment value by one, Value is now " . $value++ . " <br>" .
    "Decrement value by one, Value is now " . $value-- . " <br>";
