<?php
function greeting()
{
    echo "Hello, welcome to the PHP function world!<br>";
}
function add($a, $b=90)
{
    return $a + $b;
}
function sum($a, $b)
{
    $result= $a + $b;
    echo "The sum of $a and $b is: $result<br>";
}

function multiply($a, $b)
{
    $result= $a * $b;
    echo "The product of $a and $b is: $result<br>";
}
greeting();
$sum_result = add(10, 20);
echo "The sum is: $sum_result<br>";
$prod_result = multiply(5, 6);
echo "The product is: $prod_result<br>";
sum(15, 25);
?>
