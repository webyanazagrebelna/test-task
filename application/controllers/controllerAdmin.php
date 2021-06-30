<?php
class ControllerAdmin extends Controller
{

	function __construct()
	{
		$this->model = new ModelAdmin();
		$this->view = new View();
	}
	
	function listing()
	{
	    session_start();
	    if (isset($_SESSION['aut']) && $_SESSION['aut'] === 1) {
    	    $res = $this->model->listing();
    		$this->view->generate('viewTemplate.php', 'admin/viewListing.php', 'Админка', $res);
    	}
    	else {
    	    header('Location: /admin/login/');
    	}    	
	}

	function edit($id)
	{
	    session_start();
	    if (isset($_SESSION['aut']) && $_SESSION['aut'] === 1) {
    		if (!empty($_POST)) {
    			$comment = strip_tags($_POST['comment']);
    			$this->model->editIsset($id, $comment);
    			header('Location: /admin/listing/'); 
    		}
    		else {
                $res = $this->model->editEmpty($id);		    
    			include 'application/views/admin/viewEdit.php';
    		}
    	}
    	else {
    	    header('Location: /admin/login/');
    	}    	
	}	

	function del($id)
	{
	    session_start();
	    if (isset($_SESSION['aut']) && $_SESSION['aut'] === 1) {
    	    $this->model->del($id);
    	    header('Location: /admin/listing/');
    	}
    	else {
    	    header('Location: /admin/login/');
    	}    	
	}

	function login()
	{
		session_start();
		if (isset($_SESSION['aut']) && $_SESSION['aut'] === 1) {
			header('Location: /admin/listing/');
			exit;
		}
		if (empty($_POST)) {
			$message = 'Введите логин и пароль';
		}
		else {
			$login = strip_tags($_POST['login']);
			$password = strip_tags($_POST['password']);
			$aut = $this->model->login();
			if ($login == $aut['login'] && password_verify($password, $aut['password'])) {
				$_SESSION['aut'] = 1;
				header('Location: /admin/listing/');
				exit;
			}
			else {
				$message = 'Неправильный логин или пароль';
			}
		}
		include 'application/views/admin/viewLogin.php';
	}
	
	function exiting()
	{
	    session_start();
	    session_destroy();
	    header('Location: /user/listing/');
	}
	

	function createPass()
	{
		$login = 'admin';
		$password = password_hash('12345', PASSWORD_DEFAULT);
		$this->model->createPass($login, $password);
	}

}
