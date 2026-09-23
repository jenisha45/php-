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
function multiply($a,$b,$c)
{
    $result= $a * $b * $c;
    echo "The product of $a, $b and $c is: $result<br>";
}
?>
