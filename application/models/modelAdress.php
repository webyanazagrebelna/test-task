<?php
class ModelAdress extends Model
{

	function list()
	{
		$res = $this->linkAdmin()->prepare('SELECT * FROM adress');
		$res->execute();
		$res = $res->fetchAll();
        return $res;
	}

	function add($name, $surname, $phone, $street, $city, $country)
	{
		$res = $this->linkAdmin()->prepare('INSERT INTO adress (date, name, surname, phone, street, city, country) VALUES (NOW(), ?, ?, ?, ?, ?, ?)');
		$res->execute(array($name, $surname, $phone, $street, $city, $country));		
	}
	
	function editEmpty($id)
	{
		$res = $this->linkAdmin()->prepare('SELECT * FROM adress WHERE id=?');
		$res->execute(array($id));
    	$res = $res->fetch();
        return $res;
	}
	
	function editIsset($id, $comment) {
		$res = $this->linkAdmin()->prepare('UPDATE adress SET comment=? WHERE id=?');
		$res->execute(array($comment, $id));
	}

	function del($id) {
		$res = $this->linkAdmin()->prepare('DELETE FROM adress WHERE id=?');
		$res->execute(array($id));
	}	

	function login() {
		$res = $this->linkAdmin()->prepare('SELECT * FROM users');
		$res->execute();
		$res = $res->fetch();
		return $res;
	}

	function createPass($login, $password) {
		$res = $this->linkAdmin()->prepare('UPDATE users SET login=?, password=? WHERE id_user=1');
		$res->execute(array($login, $password));
	}
}
