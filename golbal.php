<?php

echo "types of global variable in php <br>";
$x = "jenisha kharbuja";
function function1()
{
    global $x; //$GLOBALS['x'];
    echo $x;
}

function1();
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<hr>";

echo 'Regular expressions <br>';
$str = "The rain in SPAIN falls mainly on the plains.";
echo $str . "<br>";
$pattern = "/ain/i";
echo preg_match_all($pattern, $str) . "<br>";// print how many times it has repeated ;
echo preg_replace($pattern, " jenisha", $str) . "<br>";//replace the string with indicated string
$text = "apple banana,  orange,mango";
$fruits = preg_split("/[\s,]+/", $text);// [\s,]+ to split text wherever there is a comma, a space, or a cluster 
print_r($fruits);
echo "<br>";
$fruit = ["apple", "banana", "orange", "pineapple", "pine"];
$result = preg_grep("/^p/i", $fruit);//returns only the array containing the match pattern
$result = preg_grep("/^p/i", $fruit, PREG_GREP_INVERT);//returns the array NOT containing the match pattern
print_r($result);
echo '<br>';

$email = "apple.name+jenisha@gmail.com";
$pattern = '/^[a-z0-9.]+(\+[a-z0-9.]+)?@gmail\.com$/i';

if (preg_match($pattern, $email)) {
    echo "Valid Gmail address.";
} else {
    echo "Invalid Gmail address.";
}
?>
