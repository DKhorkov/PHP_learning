<?php
$a = 2;
$b = $a;  # Переменная 'b' становится равной значению переменной 'a', но при изменении 'a' перменная 'b' не меняется.
$a += 2;
echo "<p>$a, $b</p>";

$b =& $a;  # а так меняется, но при изменении 'b' изменится и 'a'!
$a = 5;
echo "<p>$a, $b</p>";

$a = strval($a);
echo "<p>a type is ".gettype($a)."</p>";

$c = $a % 2;
echo "<p>Remainder of the division 5 on 2 is $c, end";

# Регулярные и логические выражение:
$x = 10 * 20;
$check = $x < 199;
echo var_dump($check); # Используем отладочную функцию для вывода булевого значения, а не строчного представления.

$hell = 'Hell';
echo "<p>${hell}o world!</p>"; # Один из способов конкатенации с переменными в строке.

$array = array(
    "a" => 1,
    "b" => 2,
);
echo "<p>Array first element is {$array['a']}</p>"; # Другой способ конкатенации с переменной в строке.

# Операции со строками:
$string = "Some text";
echo "<p> $string[-1]</p>";
$slice = substr($string, -3,-1);
echo "<p> $slice</p>";
$slice = substr($string, 2,5);
echo "<p> $slice</p>";

$message = "New";
echo "<p>$message</p>";
$message.= " message";
echo "<p>$message</p>";

# Иникрементация и декрементация:
$a = 1;
echo "<p>a=$a</p>";
$a++;
echo "<p>a=$a</p>";

# Сравнение и эквивалентность:
$x = array(1, 2, 3);
$y = array(1, 2, "3");
if ($x == $y) echo "Равны"; # Выдаст, что равны.
if ($x === $y) echo "Эквиваленты"; # Выдаст пустую строку.
?>

