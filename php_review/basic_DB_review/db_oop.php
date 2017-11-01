<?php

define('DB_DATABASE','db_install');
define('DB_USERNAME','dbuser');
define('DB_PASSWORD','poepassword');
define('PDO_DSN','mysql:dbhost=localhost;dbname='.DB_DATABASE);

class User{
	public function show(){
		echo "$this->name($this->age, $this->score)";
	}
}

try{
	$db=new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
	$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	//PDO::FETCH_CLASS
	// select all
	$stmt = $db->query("select * from users");
	$users = $stmt->fetchAll (PDO::FETCH_CLASS,'User');
	foreach ($users as $user){
		$user->show();
	}


}catch (PDOException $e){
	echo $e->getMessage();
	exit;
}

