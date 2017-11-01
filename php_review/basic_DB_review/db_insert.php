<?php

define('DB_DATABASE','db_install');
define('DB_USERNAME','dbuser');
define('DB_PASSWORD','poepassword');
define('PDO_DSN','mysql:dbhost=localhost;dbname='.DB_DATABASE);


try{
	//connect
	$db=new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
	$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	//insert (1) exec()
	$db->exec("insert into users (name;age;score) values ('yuki',20,90)");
	echo "user added!";

	//insert (2) prepare()
	$stmt = $db->prepare("insert into users (name,age,score) values (?,?,?)");
	$stmt->execute(['kyo',30,55]);
	echo "inserted: ". $db->lastInsertID();

	//insert (3) prepare()
	$stmt = $db->prepare("insert into users (name,age,score) values (:name,:age,:score)");
	$stmt->execute([':name'=>'shigure',':age'=>60,':score'=>99]);
	echo "inserted: ". $db->lastInsertID();

	//disconnect
//	$db=null;

}catch (PDOException $e){
	echo $e->getMessage();
	exit;
}

