<?php
// This is a single-line comment
# This is also a single-line comment

/* This is a
multi-line
comment */
$intro="This is an introduction to basic php";
print "<h2>". $intro . "</h2>";
print("print can be used with or without parenthesis()")."<br>";
echo "print and echo is used to display output"."<br>";
$a=321;
$b="jenisha kharbuja";
echo $a. "<br>";
echo $b. "<br>";
echo "Hello {$b} <br>";

print "<h2> Types of data in php are: </h2>";
var_dump(5);
echo "<br>";
var_dump("John");
echo "<br>";
var_dump(3.14);
echo "<br>";
var_dump(true);
echo "<br>";
var_dump([2, 3, 56]);
echo "<br>";
var_dump(NULL);
echo "<br>";

print "<h2>functions for type checking in php are: </h2>";
$x=10.e914;
$y=2.90;
var_dump(is_float($x));
echo "<br>";
var_dump(is_infinite($y));
echo "<br>";
var_dump(is_nan($a));
echo "<br>";
var_dump(is_numeric($b));
echo "<br>";
?>