<?php
	define('HOST', 'localhost');
	define('DB_name', 'assia');
	define('User', 'root');
	define('Pass', '');
	try {
		$db = new PDO("mysql:host="	.HOST 	.";dbname="	.DB_name,User,Pass );
		$db ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e) {
		echo $e;
	}
?>
	