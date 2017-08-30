<?php 

session_start();
if ($lvl == null) {
	header('Location: read.php');
} 
require_once('../dao/config.php');
$error=''; //Variable to Store error message;
if(isset($_POST['login'])){
	if(empty($_POST['user']) || empty($_POST['pass'])){
		$error = "Username or Password is Invalid";
	}
	else
	{

		$user=$_POST['user'];
		$pass=$_POST['pass'];
		
		$conn = mysqli_connect("localhost", "root", "");		
		$db = mysqli_select_db($conn, "oop_crud");

		$query = mysqli_query($conn, "SELECT * FROM user WHERE username='$user' AND password='$pass'");
		$rows = mysqli_num_rows($query);
		if($rows == 1){
			$res = mysqli_fetch_assoc($query);
			$_SESSION['lvl'] = $res['user_level'];
			$lvl = $_SESSION['lvl'];
			header("Location: read.php"); 
		}
		else
		{
			$error = "Username of Password is Invalid";
		}
		mysqli_close($conn);
	}
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>

<style type="text/css">
	.login{
		width:300px;
		margin:50px auto;
		border-radius: 10px;
		border:1px solid;
	}
</style>

</head>
<body>
	<div>
		<div class="login">
			<form action="" method="POST" style="text-align:center">
				user:     	<input type="text" name="user"><br />
				password: 	<input type="password" name="pass"><br />
							<input type="submit" name="login" value="Login">
							<span><?php echo $error; ?></span>
			</form>
		</div>
	</div>
</body>
</html>