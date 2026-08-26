<?php
$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL
$string = (string)$a; // typecasting to string
echo $string."<br>";   

$a = (object) $a;
$b = (array) $b;
$c = (float) $c;
$d = (int) $d;
$e = (bool) $e;

var_dump($a);
echo "<br>";

var_dump($b);
echo "<br>";

var_dump($c);
echo "<br>";

var_dump($d);
echo "<br>";

var_dump($e);
echo "<br>";
?>