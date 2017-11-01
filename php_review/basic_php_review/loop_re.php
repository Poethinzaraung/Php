<?php

	//for loop
	for ($x = 0; $x <= 10; $x++) {
		echo "The number is: $x\n";
	}

	echo "-----------------------------------\n";

// 	//for loop
// 	for ($y = 10; $y >= 0; $y--) {
// 		echo "The number is: $y\n";
// 	}

// 	echo "-----------------------------------\n";

// 	//for loop with break
// 	//to end execution of the current iteration
// 	for ($x = 0; $x <= 10; $x++) {
// 		if ($x <= 5) {
// 			echo "The number is: $x\n";
// 		} else {
// 			break;
// 		}
// 	}

// 	echo "-----------------------------------\n";

// 	//for loop with multiple conditions
// 	for ($x = 0; $x <= 10; $x++) {
// 		if ($x > 2 && $x < 7) {
// 			echo "The number is: $x\n";
// 		}
// 	}

// 	echo "-----------------------------------\n";

// 	//for loop with multiple conditions
// 	for ($y = 0; $y <= 10; $y++) {
// 		if ($y > 0 && $y < 4 || $y > 6 && $y < 10) {
// 			echo "The number is: $y\n";
// 		}
// 	}

// 	echo "-----------------------------------\n";

// 	//for loop with continue
// 	//to skip the rest of the current loop iteration and continue execution at the condition evaluation and then the beginning of the next iteration
// 	for ($x = 0; $x <= 10; $x++) {
// 		if ($x <= 5) {
// 			continue;
// 		} else {
// 			echo "The number is: $x\n";
// 		}
// 	}

// 	echo "-----------------------------------\n";

	//foreach loop test
 	$arrFruits = array("orange", "banana", "apple", "mango" , "durian");
 	foreach ($arrFruits as $value) {
 		echo "$value";
 		echo "\n";
	}

 	echo "-----------------------------------\n";

// 	//while loop
// 	$x = 1;

// 	while($x <= 5) {
// 		echo "The number is: $x\n";
// 		$x++;
// 	}

// 	echo "-----------------------------------\n";

// 	//do while loop 1
// 	$y = 1;

// 	do {
// 		echo "The number is: $y\n";
// 		$y++;
// 	} while ($y <= 5);

// 	echo "-----------------------------------\n";

// 	//do while loop 2
// 	$z = 6;

// 	do {
// 		echo "The number is: $z\n";
// 		$z++;
// 	} while ($z <= 5);

// 	echo "-----------------------------------\n";

// 	//while loop with break
// 	$a = 1;

// 	while(true) {
// 		if ($a >= 5) {
// 			break;
// 		} else {
// 			echo "The number is: $a\n";
// 			$a++;
// 		}
// 	}

// 	echo "-----------------------------------\n";

// 	//while loop with continue
// 	$b = 1;

// 	while($b <= 10) {
// 		if ($b >= 5) {
// 			continue;
// 		} else {
// 			echo "The number is: $b\n";
// 			$b++;
// 		}
// 	}

?>