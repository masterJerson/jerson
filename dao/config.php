<?php
$config = array('host' => 'localhost',
				'username' => 'root',
				'password' => '',
				'database' => 'oop_crud');

$db = new mysqli($config['host'],
				 $config['username'],
				 $config['password'],
				 $config['database']);

if(mysqli_connect_errno()){
	echo "error: could not connect to database";
}
?>