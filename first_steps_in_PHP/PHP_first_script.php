<?php

echo "Hello everyone!";
$date = date('d.m y');
echo "Current date is $date";

for ($mark = 4; $mark >= 0; $mark-=2) {
    echo "<p>Квадрат числа $mark равен ". ($mark * $mark)."</p>";
}
?>
