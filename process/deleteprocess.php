<?php 

require_once('../dao/config.php');
require_once('../dao/crudDAO.php');

$id = $_GET['id'];
$delete = crudDAO::delete($id);

if($delete == true){
	header('Location: ../pages/read.php');
}else{
	echo "failed to delete";
}

 ?>