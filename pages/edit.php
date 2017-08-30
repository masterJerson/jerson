<?php 

require_once('../dao/config.php');
require_once('../dao/crudDAO.php');

$id = $_GET['id'];
$edit = crudDAO::GetEdit($id);
 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body>
	<div>
		<div>
			<form method="post" action="../process/editprocess.php">
				<input type="text" value="<?= $edit['id'];?>" hidden name="id"><br />
				Name: <input type="text" value="<?= $edit['name'];?>" name="name"><br />
				Email: <input type="text" value="<?= $edit['email'];?>" name="email"><br />
				Address: <input type="text" value="<?= $edit['address'];?>" name="address"><br />
				Moblie no.:<input type="text" value="<?= $edit['mob'];?>" name="mob"><br />
				<input type="submit" value="submit"><br />
			</form>
		</div>
	</div>
</body>
</html>