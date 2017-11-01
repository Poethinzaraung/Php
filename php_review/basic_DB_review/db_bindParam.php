<?php

define('DB_DATABASE','db_install');
define('DB_USERNAME','dbuser');
define('DB_PASSWORD','poepassword');
define('PDO_DSN','mysql:dbhost=localhost;dbname='.DB_DATABASE);


try{
	$db=new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
	$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	//insert
	//bindParam; once declaration of bindParam, many data can be added.
	$stmt = $db->prepare("insert into users (name,age,score) values (?,?,?)");

	$name = 'yuki';
	$stmt->bindValue(1,$name,PDO::PARAM_STR);

	$stmt->bindParam(2,$age,PDO::PARAM_INT);
	$stmt->bindParam(2,$score,PDO::PARAM_INT);

	$age = 25;
	$score = 45;
	$stmt->execute();

//	$age = 20;
	$score = 50;
	$stmt->execute();

	$age = 18;
	$stmt->execute();

}catch (PDOException $e){
	echo $e->getMessage();
	exit;
}



