<?php

// Display
$name="Poe";
echo "$name";
var_dump ($name);


# multiple variables assign
$name = "POE";
$int = 9;
$float = 900.99;
$bool = true;
echo "My name is $name. My number is $int. My float number is $float. This is the boolean value: $bool.";

//contanst
define ("MY_EMAIL","@a.com");
echo MY_EMAIL;
echo "\n";

//Quatation
/*
 * ""=(\n,\t) process the sign/operator
 * ''= to show the string only.
 */
$n = "poe";
$s1 = "hi $n! \n hi again!";
var_dump($s1)."\n";

$s1 = 'hi $n! \n hi again!';
var_dump($s1)."\n";

//separating the variable and string
echo "hi {$n}! \n hi again!";
?>