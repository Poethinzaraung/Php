<?php

	//operator test
	$num1=10;
	$num2=5;
	echo ($num1 + $num2) . "\n";	// outputs 15
	echo ($num1 - $num2) . "\n";	// outputs 5
	echo ($num2 - $num1) . "\n";	// outputs -5
	echo ($num1 * $num2) . "\n";	// outputs 50
	echo ($num1 / $num2) . "\n";	// outputs 2
	echo ($num2 / $num1) . "\n";	// outputs 0.5
	echo ($num1 % $num2) . "\n";	// outputs 0

	//increment test
	$x=10;
	echo ++$x;	// outputs 11

	$y=10;
	echo $y++; // outputs 10

	$z=5;
	echo --$z; // outputs 4

	$i=5;
	echo $i--; // outputs 5
	echo "\n";

	$z=9;
	$z++;
	var_dump($z). "\n";
	$z--;
	echo "$z \n";

	$a=5;
	echo $a*=2;
?>