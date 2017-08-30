<?php

require_once('../dao/config.php');
require_once('../dao/crudDAO.php');

$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$mob = $_POST['mob'];

if(!empty($name) && !empty($email) && !empty($address) && !empty($mob)){
	$create = crudDAO::create($name, $email, $address, $mob);
	if($create == true){
		header('Location: ../pages/create.php');
	}else{
		echo "failed to add";
	}
}else{
	echo "Please complete all fields";
}

?>