<?php
echo "<table border='1' style='width:100%; height:100%; background:yellow; border-collapse: collapse;text-align: center' >";
for ($i = 1; $i <= 7; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 7; $j++) {
        echo "<td>" . $i * $j . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
