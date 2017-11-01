<?php

	$str1 = "Poe Thinzar";
	$str2 = "Aung";

	//string concatenation
	echo $str1 . $str2;

	echo "\n-----------------------------------\n";

	//size of string
	echo strlen($str1);

	echo "\n-----------------------------------\n";

	//sub string
	echo substr($str1, 5);
	//echo substr($str1, 5, 1);

	echo "\n-----------------------------------\n";

	//$str1 = NULL;
 	//echo substr($str1, 5, 1);

 	//echo "\n-----------------------------------\n";

	$res = strpos($str1,"C");
	echo $res;

	echo "\n-----------------------------------\n";

	//$str1 = "Poe TThinzar";
	//echo substr($str1, "T", 5);

	//echo "\n-----------------------------------\n";

	//finding next occurance
	$str = "Poe TThinzar";
	$strlen = strlen( $str );
	$result = 0;
	for( $i = 0; $i <= $strlen; $i++ ) {

	    $result = strpos($str, "T", ($result + 1));
	    echo "Position : " . $result;
	    echo "\n";

		if($result === false){
			break;
		}
	}

	echo "\n-----------------------------------\n";

	//finding every occurance
	//***
	$str = "Poe TThinzar";
	$result = -1;
// 	for( $i = 0; ; $i++ ) {
	while (true) {

		$result = strpos($str, "T", ($result + 1));
		echo "Position : " . $result;
		echo "\n";

		if($result === false){
			break;
		}
	}


	echo "\n-----------------------------------\n";

	// We can search for the character, ignoring anything before the offset
	// by using Offset
	$newstring = 'abcdef abcdef abcdef';
	$pos = strpos($newstring, 'a', 8); // $pos = 7, not 0
	echo $pos;

	echo "\n-----------------------------------\n";

	//string replace
	$str = "Poe Poe Poe Thinzar";
	echo str_replace("P","X", $str);

	echo "\n-----------------------------------\n";

	$string = "   Poe Aung  ";
	echo "($string)";
	echo "\n";

	//trim()  - both sides
	//ltrim() - only left side
	//rtrim() - only right side
	$string = rtrim($string);
	echo "($string)";

	echo "\n-----------------------------------\n";

	//making array from string
	$str = "Hello world. It's a beautiful day.";
	print_r (explode(" ",$str));

	echo "\n-----------------------------------\n";

?>