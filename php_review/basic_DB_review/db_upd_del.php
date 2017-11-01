<?php

define('DB_DATABASE','db_install');
define('DB_USERNAME','dbuser');
define('DB_PASSWORD','poepassword');
define('PDO_DSN','mysql:dbhost=localhost;dbname='.DB_DATABASE);


try{
	$db=new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
	$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	//update
	$stmt =  $db->prepare("update users set age = :age where name = :name");
	$stmt->execute([':age'=>20,':name'=>'yuki']);
	echo 'row updated: '.$stmt->rowCount();

	//delete
	$stmt=$db->prepare("delete from users where name = :name");
	$stmt->execute([':name'=>'shigure']);
	echo 'row deleted: '.$stmt->rowCount();

}catch (PDOException $e){
	echo $e->getMessage();
	exit;
}


