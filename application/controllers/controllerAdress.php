<?php
class ControllerAdress extends Controller
{

	function __construct()
	{
		$this->model = new ModelAdress();
		$this->view = new View();
	}
	
	function list()
	{
		$res = $this->model->list();
		$this->view->generate('view-template.php', 'adress/view-list.php', 'adress', $res);
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
   			$this->model->add($name, $surname, $phone, $street, $city, $country);
   			header('Location: /adress/list/'); 
   		}
   		else {
			$this->view->generate('view-template.php', 'adress/view-add.php', 'adress', $res);
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
