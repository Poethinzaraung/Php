<?php

	//if statement
	//every if statement - string is better
	$t = 5;

	if ($t <  20) {
		echo "Have a good day!\n";
	}

	//if...else statement
	$s = 5;

	if ($s >  20) {
		echo "Have a good day!\n";
	} else {
		echo "Have a good night!\n";
	}

	//if...else if....else statement
	$a = 5;

	if ($a <  10) {
		echo "Have a good morning!\n";
	} else if ($a <  20) {
		echo "Have a good day!\n";
	} else {
		echo "Have a good night!\n";
	}

	//switch - select one of many blocks of code to be executed
	//switch - integer or number is better

	$favcolor = "yellow";

	switch ($favcolor) {
		case "red":
			echo "Your favorite color is red!\n";
			break;
		case "blue":
			echo "Your favorite color is blue!\n";
			break;
		case "green":
			echo "Your favorite color is green!\n";
			break;
		default:
			echo "Your favorite color is neither red, blue, or green!\n";
	}

	//switch - multiple cases

	$favcolor = "yellow";

	switch ($favcolor) {
		case "red":
		case "blue":
			echo "Your favorite color is either red or blue!\n";
			break;
		case "blue":
		case "yellow":
			echo "Your favorite color is either blue or yellow!\n";
			break;
		case "green":
		case "blue":
			echo "Your favorite color is either green or blue!\n";
			break;
		default:
			echo "Your favorite color is neither red, blue, or green!\n";
	}

?>