<?php

// no argument
 	function writeMsg() {
 		echo "Hello world!";
 	}

 	writeMsg();

 	echo "\n-----------------------------------\n";

// 	//one argument
 	function familyName($fname) {
 		echo "$fname Refsnes.\n";
 	}

 	familyName("Jani");
 	familyName("Hege");
 	familyName("Stale");

 	echo "\n-----------------------------------\n";

// 	//two arguments
 	function familyName($fname, $year) {
 		echo "$fname Refsnes. Born in $year \n";
 	}

 	familyName("Hege","1975");
 	familyName("Stale","1978");
 	familyName("Kai Jim","1983");

 	echo "\n-----------------------------------\n";

