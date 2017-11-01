<?php

define('DB_DATABASE','db_install');
define('DB_USERNAME','dbuser');
define('DB_PASSWORD','poepassword');
define('PDO_DSN','mysql:dbhost=localhost;dbname='.DB_DATABASE);


try{
	$db=new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
	$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	//insert
	//bindValue; bind jaut a value. It is like a hardcopy. Unless the execute() is called, the procecess will not perform.
	$stmt = $db->prepare("insert into users (name,age,score) values (?,?,?)");

	$name = 'yuki';
	$stmt->bindValue(1,$name,PDO::PARAM_STR);

	$age = 20;
	$stmt->bindValue(2,$age,PDO::PARAM_INT);
	$stmt->execute();

	$age = 18;
	$stmt->bindValue(2,$age,PDO::PARAM_INT);
	$stmt->execute();

}catch (PDOException $e){
	echo $e->getMessage();
	exit;
}


