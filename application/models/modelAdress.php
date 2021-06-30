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
	
	function editIsset($id, $name, $surname, $phone, $street, $city, $country) {
		$res = $this->linkAdmin()->prepare('UPDATE adress SET date=NOW(), name=?, surname=?, phone=?, street=?, city=?, country=? WHERE id=?');
		$res->execute(array($name, $surname, $phone, $street, $city, $country, $id));
	}

	function del($id) {
		$res = $this->linkAdmin()->prepare('DELETE FROM adress WHERE id=?');
		$res->execute(array($id));
	}	
}
