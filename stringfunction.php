<?php
$name="Jenisha kharbuja";
$level='Bachelor in computer application';
echo $name."<br>";
echo $level."<br>";
echo"<h2>String functions in php are:</h2>";
print(strlen($name))."<br>";
print(str_word_count($level));
echo(str_contains($name,"Jenny"))."<br>";  
var_dump(str_ends_with($level, "application"));
echo "<br>";
echo strtoupper($name)."<br>";
print str_replace("application","science",$level)."<br>";
echo strrev($name)."<br>";

$x=" `Hello world!` ";
echo trim($x)."<br>";
echo implode(", ", explode(" ", $x))."<br>";//turns string into array
echo $x. $name;
echo substr($name,0,7)."<br>";//returns substring from 0 to 7

#escape sequence
print "<h2>Escape sequence in php are:</h2>";
echo "Hello \"Jenisha\" how are you?<br>";
?>


