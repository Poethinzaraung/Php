<?php

define('DB_DATABASE','db_install');
define('DB_USERNAME','dbuser');
define('DB_PASSWORD','poepassword');
define('PDO_DSN','mysql:dbhost=localhost;dbname='.DB_DATABASE);


try{
	$db=new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
	$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	//select
	$stmt = $db->prepare("select score from users where score > ?");
	$stmt->execute([10]);

	$stmt = $db->prepare("select age from users");
	$stmt->execute();

	$stmt = $db->prepare("select name from users where name like ?");
	$stmt->execute(['%y%']);

	// desc or asce orderings are exception; use bindValue
	$stmt = $db->prepare("select score from users order by score desc limit ?");
	$stmt->bindValue (1,1,PDO::PARAM_INT);
	$stmt->execute();

	$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
	foreach($users as $user){
		var_dump($user);
	}

	echo $stmt->rowCount()."Records found.";


}catch (PDOException $e){
	echo $e->getMessage();
	exit;
}

