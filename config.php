<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Config file </title>
</head>

<body>
<?php
		//set off all error for security purposes
	error_reporting(0);


		//define some contstant
	define( "DB_DSN", "lis875b.cjjpubs7eqv8.us-west-2.rds.amazonaws.com:3306" ); //this constant will be use as our connectionstring/dsn

	define( "DB_USERNAME", "root" ); //username of the database
	define( "DB_PASSWORD", "spring14" ); //password of the database
	define( "CLS_PATH", "celebrityvet" ); //the class path of our project

		//include the classes
	include_once( CLS_PATH . "/login.php" );

?>
</body>
</html>