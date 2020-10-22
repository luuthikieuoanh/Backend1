<?php

$i = 0;

// su dung loop while
while ($i < 9) {
    echo "abc ";
    $i++;
}

echo "<br>";

// su dung loop do-while

do {
    echo "xyz ";
    $i--;
} while ($i > 0);

echo "<br>";
// su dung loop for

for ($i = 1; $i <= 9; $i++) {
    echo "$i ";
}

echo "<br>";

echo "<ul>";
for ($i; $i >= 0; $i--) {
    echo "<li>item $i</li>";
}
echo "</ul>";
