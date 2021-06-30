<?php

namespace Application\Controllers;

use Application\Core\Controller;
use Application\Core\View;
use Application\Models\ModelAdress;

class ControllerAdress extends Controller
{

	function __construct()
	{
		$this->model = new ModelAdress();
		$this->view = new View();
	}
	
	function list()
	{
   		if (!empty($_GET['sort'])) {
   			$sort = $_GET['sort'];
			$res = $this->model->list($sort);
			$this->view->generate('view-template.php', 'adress/view-list.php', 'adress', $res);
   		}
   		else {
			$res = $this->model->list();
			$this->view->generate('view-template.php', 'adress/view-list.php', 'adress', $res);
   		}
	}
	
	function add()
	{
   		if (!empty($_POST)) {
   			$name = strip_tags($_POST['name']);
   			$surname = strip_tags($_POST['surname']);
   			$phone = strip_tags($_POST['phone']);
   			$street = strip_tags($_POST['street']);
   			$city = strip_tags($_POST['city']);
   			$country = strip_tags($_POST['country']);

   			$name = substr($name, 0, 50);
   			$surname = substr($surname, 0, 50);
   			$phone = substr($phone, 0, 50);
   			$street = substr($street, 0, 50);
   			$city = substr($city, 0, 50);
   			$country = substr($country, 0, 50);

   			$this->model->add($name, $surname, $phone, $street, $city, $country);
   			header('Location: /adress/list/'); 
   		}
   		else {
			$this->view->generate('view-template.php', 'adress/view-add.php', 'adress');
   		}
	}

	function edit($id)
	{
		if (!empty($_POST)) {
   			$name = strip_tags($_POST['name']);
   			$surname = strip_tags($_POST['surname']);
   			$phone = strip_tags($_POST['phone']);
   			$street = strip_tags($_POST['street']);
   			$city = strip_tags($_POST['city']);
   			$country = strip_tags($_POST['country']);

   			$name = substr($name, 0, 50);
   			$surname = substr($surname, 0, 50);
   			$phone = substr($phone, 0, 50);
   			$street = substr($street, 0, 50);
   			$city = substr($city, 0, 50);
   			$country = substr($country, 0, 50);

			$this->model->editIsset($id, $name, $surname, $phone, $street, $city, $country);
			header('Location: /adress/list/'); 
		}
		else {
			$res = $this->model->editEmpty($id);		    
			$this->view->generate('view-template.php', 'adress/view-edit.php', 'adress', $res);
		}
	}	

	function del($id)
	{
		$this->model->del($id);
		header('Location: /adress/list/'); 
	}
}
