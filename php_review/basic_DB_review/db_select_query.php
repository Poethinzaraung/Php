<?php

define('DB_DATABASE','db_install');
define('DB_USERNAME','dbuser');
define('DB_PASSWORD','poepassword');
define('PDO_DSN','mysql:dbhost=localhost;dbname='.DB_DATABASE);


try{
	$db=new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
	$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	// select all
	$stmt = $db->query("select * from users");
	$users = $stmt->fetchAll (PDO::FETCH_ASSOC);
	foreach ($users as $user){
		var_dump($user);
	}
	echo $stmt->rowCount()."Records found.";


}catch (PDOException $e){
	echo $e->getMessage();
	exit;
}


