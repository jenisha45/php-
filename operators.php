<?php
$a = 5;
$b = 10;
$c = $a + $b; // Addition
$d = $b - $a; // Subtraction
$e = $a * $b; // Multiplication
$f = $b / $a; // Division
$g = $b % $a; // Modulus
echo '<h1>Arithmetic Operators</h1>';
echo "Addition: " . $c . "<br>";
echo "Subtraction: " . $d . "<br>";
echo "Multiplication: " . $e . "<br>";
echo "Division: " . $f . "<br>";
echo "Modulus: " . $g . "<br>";

echo '<h1>Comparison Operators</h1>';
$x = 5;
$y = 10;
echo "Equal: " . ($x == $y) . "<br>"; // Equal
echo "Not Equal: " . ($x != $y) . "<br>"; // Not Equal
echo "Greater Than: " . ($x > $y) . "<br>"; // Greater Than
echo "Less Than: " . ($x < $y) . "<br>"; // Less Than
echo "Greater Than or Equal: " . ($x >= $y) . "<br>"; // Greater Than or Equal
echo "Less Than or Equal: " . ($x <= $y) . "<br>";

echo '<h1>Logical Operators</h1>';
$p = true;
$q = false;
echo "AND: " . ($p && $q) . "<br>"; // AND
echo "OR: " . ($p || $q) . "<br>"; // OR
echo "NOT: " . (!$p) . "<br>"; // NOT
?>
