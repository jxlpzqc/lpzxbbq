<?php 
	define('DB_NAME','love');
	define('DB_USER','root');
	define('DB_PASSWD','');
	define('DB_HOST','localhost');
	define('DB_TYPE','mysql');
	$db = new PDO(DB_TYPE.':host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASSWD);
	
?>                                                                                                                                                                   