<?php

require_once('../dao/config.php');
require_once('../dao/crudDAO.php');

$list = crudDAO::read();

?>
<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body>
	<div>
		<div>
			<table>
				<tr>
					<td>Id</td>
					<td>Name</td>
					<td>Email</td>
					<td>Address</td>
					<td>Mobile no.</td>
					<td>Action</td>
				</tr>
				<?php 
				foreach ($list as $key => $value) { ?>
					<tr>
					<td><?= $value['id']?></td>
					<td><?= $value['name']?></td>
					<td><?= $value['email']?></td>
					<td><?= $value['address']?></td>
					<td><?= $value['mob']?></td>
					<td><a href="edit.php?id=<?php echo $value['id']?>">edit</a> | <a href="../process/deleteprocess.php?id=<?php echo $value['id']?>">delete</a></td>
					</tr>
				<?php } ?>
				 
			</table>
		</div>
	</div>
</body>
</html>