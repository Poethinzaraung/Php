<?php

define('DB_DATABASE','db_install');
define('DB_USERNAME','dbuser');
define('DB_PASSWORD','poepassword');
define('PDO_DSN','mysql:dbhost=localhost;dbname='.DB_DATABASE);


try{
	$db=new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
	$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

// transaction
	$db->beginTransaction();
	$db->exec("update users set score=score-5 where name='yuki'");
	$db->commit();

}catch (PDOException $e){
	$db->rollback();
	echo $e->getMessage();
	exit;
}


