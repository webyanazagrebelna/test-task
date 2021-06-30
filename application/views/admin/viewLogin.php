<h1 style="text-align: center">Авторизация</h1>
<?php include 'application/forms/formAdmin.php';
$login = new FormAdmin();
echo $login->login($message);
