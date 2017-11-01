<?php

	//array stores multiple values in one single variable
	$cars = array("Volvo", "BMW", "Toyota");
	echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

	echo "\n-----------------------------------\n";

	//looping the array
	$cars = array("Volvo", "BMW", "Toyota");
	$arrlength = count($cars);

	for($x = 0; $x <  $arrlength; $x++) {
		echo $cars[$x];
		echo "\n";
	}

	echo "-----------------------------------\n";

	//add more value at the end of the array
	$cars = array("Volvo", "BMW", "Toyota");
	array_push($cars, "Nissan");
	$arrlength = count($cars);

	for($x = 0; $x <  $arrlength; $x++) {
		echo $cars[$x];
		echo "\n";
	}

	echo "-----------------------------------\n";

	//adding value to the empty array
	$cart = array();
	$cart[] = 13;
	$cart[] = 14;
	$arrlength = count($cart);

	for($x = 0; $x <  $arrlength; $x++) {
		echo $cart[$x];
		echo "\n";
	}

	echo "-----------------------------------\n";

	//add more value to the start of the array
	$queue = array("orange", "banana");
	array_unshift($queue, "apple", "raspberry");
	print_r($queue);

	echo "\n-----------------FOOO4------------------\n";

	//add more value to any position of the array
	$original = array( 'a','b','c','d','e' );
	$inserted = array( 'x' );

	array_splice( $original, 3, 0, $inserted ); // splice in at position 3
	print_r($original);

	echo "\n-----------------------------------\n";

	//removing element from array
	//Notice that the index remains unchanged
	$arr = array("V", "W", "X", "Y", "Z");
	unset($arr[2]);
	var_dump($arr);

	echo "\n-----------------------------------\n";

	//removing element from array
	//re-index style
	$arr3 = array("F", "G", "H", "I", "J");
	unset($arr3[2]);
	$foo3 = array_values($arr3);
	print_r($foo3);

	echo "\n-----------------------------------\n";

	//removing last element from array
	$arr4 = array("K", "L", "M", "N", "O");
	array_pop($arr4);
	print_r($arr4);

	echo "\n-----------------------------------\n";

	//combining arrays
	//merge() same key - override***
	$arr1=array("red","green");
	$arr2=array("blue","yellow");
	print_r(array_merge($arr1,$arr2));

	echo "\n-----------------------------------\n";

	//copy array by value
	$arrOriginal = ["A", "B", "C", "D", "E"];
	$arrCopy = $arrOriginal;

	array_splice( $arrCopy, 3, 0, "X" ); // splice in at position 3

	echo "Original Array: ";
	print_r($arrOriginal);

	echo "\n";

	echo "Copy Array: ";
	print_r($arrCopy);

	echo "\n-----------------------------------\n";

	//copy array by reference
	//if by reference changes the original too
	$arrRefOriginal = ["A", "B", "C", "D", "E"];
	$arrRefCopy = &$arrRefOriginal;

	array_splice( $arrRefCopy, 3, 0, "X" ); // splice in at position 3

	echo "Original Array Ref: ";
	print_r($arrRefOriginal);

	echo "\n";

	echo "Copy Array Ref: ";
	print_r($arrRefCopy);

	echo "\n-----------------------------------\n";

	//making string from array
	$arr = array('Hello','World!','Beautiful','Day!');
	echo implode(" ",$arr);

	echo "\n-----------------------------------\n";

	//sorting with value
	$arrFruits = array("orange", "banana", "apple", "mango" , "durian");
	$arrlength = count($arrFruits);

	echo "Before Sorting:\n";

// 	for($x = 0; $x <  $arrlength; $x++) {
// 		echo $arrFruits[$x];
// 		echo "\n";
// 	}

	foreach ($arrFruits as $value) {
	    echo "$value";
	    echo "\n";
	}

	sort($arrFruits);

	echo "After Sorting:\n";

// 	for($x = 0; $x <  $arrlength; $x++) {
// 		echo $arrFruits[$x];
// 		echo "\n";
// 	}

	foreach ($arrFruits as $value) {
		echo "$value";
		echo "\n";
	}

	echo "-----------------------------------\n";

	//sorting with key
	$assoArrFruits = array("d"=>"orange", "g"=>"banana", "j"=>"apple", "c"=>"mango" , "a"=>"durian");

	echo "Before Sorting:\n";
	foreach($assoArrFruits as $key => $key_value) {
		echo "Key=" . $key . ", Value=" . $key_value;
		echo "\n";
	}

	ksort($assoArrFruits);
	echo "After Sorting:\n";
	foreach($assoArrFruits as $key => $key_value) {
		echo "Key=" . $key . ", Value=" . $key_value;
		echo "\n";
	}

	echo "-----------------------------------\n";

// 	//Associative Arrays are arrays that use named keys that you assign to them
// 	$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
// 	echo "Peter is " . $age['Peter'] . " years old.";
// 	echo "\n";
// 	echo "Ben is " . $age['Ben'] . " years old.";
// 	echo "\n";
// 	echo "Joe is " . $age['Joe'] . " years old.";

// 	echo "\n-----------------------------------\n";

// 	//looping the associative array
// 	$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

// 	foreach($age as $key => $key_value) {
// 		echo "Key=" . $key . ", Value=" . $key_value;
// 		echo "\n";
// 	}

// 	echo "-----------------------------------\n";

	echo "\n----------2-Dimension-Array--------\n";

	//create a 2D array
	$cars = array
	(
		array("Volvo",22,18),
		array("BMW",15,13),
		array("Saab",5,2),
		array("Land Rover",17,15)
	);

	echo $cars[0][0] . ": In stock: " . $cars[0][1] . ", sold: " . $cars[0][2] . "\n";
	echo $cars[1][0] . ": In stock: " . $cars[1][1] . ", sold: " . $cars[1][2] . "\n";
	echo $cars[2][0] . ": In stock: " . $cars[2][1] . ", sold: " . $cars[2][2] . "\n";
	echo $cars[3][0] . ": In stock: " . $cars[3][1] . ", sold: " . $cars[3][2] . "\n";

	echo "-----------------------------------\n";

	//create a 2D array without array()
	$arr2Dim = [
		["ID1","Chan Myae","Phyo"],
		["ID2","Han","Swe"],
		["ID3","War War","Khaing"],
		["ID4","Monster","Hunter"]
	];

	//looping the 2D array twice
	foreach ($arr2Dim as $v1) {
	    foreach ($v1 as $v2) {
	        echo "$v2\n";
	    }
	}

// 	//2D array output test
// 		$array = array(
// 				"Server 1" => array("C" => "85791338496", "D" => "322119397376"),
// 				"Server 2" => array("C" => "268327448576", "E" => "536733544448", "H" => "274874757120"),
// 				"Server 3" => array("C" => "42947571712", "E" => "214744166400"),
// 				"Server 4" => array("C" => "64317550592", "D" => "150320705536"),
// 				"Server 5" => array("C" => "64317550592")
// 		);

// 		foreach ($array as $server => $disks) {
// 			echo $server .' has the following disks : ';
// 			echo "\n";
// 			foreach ($disks as $disk => $available_space) {
// 				echo $disk .' has '. $available_space . ' available space!';
// 				echo "\n";
// 			}
// 		}

// 		echo "\n-----------------------------------\n";

// 	//2D Associative Array
// 	$myArray = array (
// 			'at home' => array(
// 					'laundry', 'dishes'
// 			),
// 			'shopping' => array(
// 					'milk', 'bread','pasta'
// 			),
// 			'at work'=>array(
// 					'Hans','copy folder 1'
// 			)
// 	);

// 	// On the line below, output one of the values to the page:
// 	echo $myArray ['shopping'][2]."\n";

// 	echo "-----------------------------------\n";

// 	// On the line below, loop through the array and output *all* of the values
// 	foreach ($myArray as $place => $task) {
// 		foreach ($task as $thingToDo){
// 			echo $thingToDo."\n";
// 		}
// 	}

// 	echo "-----------------------------------\n";

	echo "\n----------3-Dimension-Array--------\n";

// 	//create a 3D array
// 	$games = array
// 	(
// 			array(
// 					array("3DS",22,18),
// 					array("Wii U",11,23)
// 			),
// 			array(
// 					array("PS3",10,15),
// 					array("PS4",20,44)
// 			),
// 			array(
// 					array("XBone",50,10),
// 					array("XB360",20,30)
// 			),
// 			array(
// 					array("NES",13,14),
// 					array("SNES",11,23)
// 			),
// 	);

// 	echo $games[0][0][0] . ": In stock: " . $games[0][0][1] . ", sold: " . $games[0][0][2] . "\n";
// 	echo $games[0][1][0] . ": In stock: " . $games[0][1][1] . ", sold: " . $games[0][1][2] . "\n";
// 	echo $games[1][0][0] . ": In stock: " . $games[1][0][1] . ", sold: " . $games[1][0][2] . "\n";
// 	echo $games[1][1][0] . ": In stock: " . $games[1][1][1] . ", sold: " . $games[1][1][2] . "\n";
// 	echo $games[2][0][0] . ": In stock: " . $games[2][0][1] . ", sold: " . $games[2][0][2] . "\n";
// 	echo $games[2][1][0] . ": In stock: " . $games[2][1][1] . ", sold: " . $games[2][1][2] . "\n";
// 	echo $games[3][0][0] . ": In stock: " . $games[3][0][1] . ", sold: " . $games[3][0][2] . "\n";
// 	echo $games[3][1][0] . ": In stock: " . $games[3][1][1] . ", sold: " . $games[3][1][2] . "\n";

// 	echo "-----------------------------------\n";

// 	//looping the 3D array thrice or 3x times
// 	foreach ($games as $v1) {
// 		foreach ($v1 as $v2) {
// 			foreach ($v2 as $v3) {
// 				echo "$v3\n";
// 			}
// 		}
// 	}

// 	echo "-----------------------------------\n";

	//3D Associative Array
	$myArray = array (
			'at home' => array(
						'day' => array("Laundry", "TV"),
						'night' => array("Dishes", "Sleep")
			),
			'shopping' => array(
						'day' => array("Bread", "Milk"),
						'night' => array("Cola", "Cheese")
			),
			'at work'=> array(
						'day' => array("Copy", "Paste"),
						'night' => array("Backup", "Maintenance")
			)
	);

// 	// On the line below, output one of the values to the page:
// 	echo $myArray ['shopping']['day'][0]."\n";

//  	echo "-----------------------------------\n";

// 	// On the line below, loop through the array and output *all* of the values
// 	foreach ($myArray as $place => $time) {
// 		echo "$place : \n";
// 		foreach ($time as $task => $thingToDo){
// 			echo "$task : \n";
// 			foreach ($thingToDo as $activity){
// 				echo $activity."\n";
// 			}
// 		}
// 	}

	echo "-----------------------------------\n";

	$myCarArray = array (
						'Head-Office' => array(
							'Volvo' => array("22","18"),
							'BMW' => array("15","13"),
						),
						'Branch Office-1' => array(
							'Saab' => array("5","2"),
							'Land Rover' => array("17","15"),
							'Volvo' => array("13","14"),
							'BMW' => array("4","2")
						),
						'Branch Office-2'=> array(
							'BMW' => array("10","21"),
							'Saab' => array("15","4"),
							'Volvo' => array("3","8")
						)
	);

	foreach ($myCarArray as $place => $shop) {
		echo "$place :: \n";
		foreach ($shop as $type => $cars){
			echo "$type ~ \n";
			foreach ($cars as $sold){
				echo "Number of Cars: " . $sold."\n";
			}
		}
	}

	echo "-----------------------------------\n";

	//checking if its not array or not
	$yes = array('this', 'is', 'an array');

	echo is_array($yes) ? 'Array' : 'not an Array';
	echo "\n";

	$no = 'this is a string';

	echo is_array($no) ? 'Array' : 'not an Array';

	echo "\n-----------------------------------\n";

?>