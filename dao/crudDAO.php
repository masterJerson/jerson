<?php

class CrudDAO {

	public function create($name, $email, $address, $mob) {
		global $db;
		$sql = ("INSERT INTO users(name,email,address,mob)VALUES('$name', '$email', '$address', '$mob')");
		$result = $db -> query($sql);

		if($result){
			return $result;
		}else{
			return false;
		}
	}

	public function read() {
		global $db;
		$sql = "SELECT * FROM users ORDER BY id";
		$result = $db->query($sql);

		if($result->num_rows > 0){
			$i = 0;
			$list = "";	
			while ($row = $result -> fetch_assoc()){
				$list[$i] = $row;
				$i++;
			}
			return $list;
		}else{
			return false;
		}
	}

	public function GetEdit($id) {
		global $db;
		$sql = "SELECT * FROM users WHERE id = '{$id}'";
		$result = $db->query($sql);

		if($result->num_rows > 0){
			$row = $result -> fetch_assoc();
			return $row;
		}else{
			return false;
		}
	}

	public function update($id, $name, $email, $address, $mob) {
		global $db;
		$sql = "UPDATE users SET name = '$name', email = '$email', address = '$address', mob = '$mob' WHERE id = '{$id}' ";
		$result = $db->query($sql);

		if ($result) {
			return $result;
		} else {
			return false;
		}
		
	}

	public function delete($id) {
		global $db;
		$sql = "DELETE FROM users WHERE id = '{$id}'";
		$result = $db->query($sql);

		if($result){
			return $result;
		}else{
			return false;
		}
	}
}


?>