<?php
class ControllerUser extends Controller
{

	function __construct()
	{
		$this->model = new ModelUser();
		$this->view = new View();
	}
	
	function main()
	{
	    $this->view->generate('viewTemplate.php', 'user/viewMain.php', 'Главная');
	}
	
	function about()
	{
	    $this->view->generate('viewTemplate.php', 'user/viewAbout.php', 'Главная');
	}

	function blog()
	{
	    $this->view->generate('viewTemplate.php', 'user/viewBlog.php', 'Главная');
	}

	function contact()
	{
	    $this->view->generate('viewTemplate.php', 'user/viewContact.php', 'Главная');
	}

	function portfolio()
	{
	    $this->view->generate('viewTemplate.php', 'user/viewPortfolio.php', 'Главная');
	}

	function services()
	{
	    $this->view->generate('viewTemplate.php', 'user/viewServices.php', 'Главная');
	}



	function adding()
	{
   		if (!empty($_POST)) {
   			$name = strip_tags($_POST['name']);
   			$email = strip_tags($_POST['email']);
   			$comment = strip_tags($_POST['comment']);
   			$this->model->adding($name, $email, $comment);
   			header('Location: /user/listing/'); 
   		}
   		else {
   			include 'application/views/user/viewAdding.php';
   		}
	}
}
