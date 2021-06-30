<h1>Заполните, пожалуйста, форму</h1>
<?php include 'application/forms/formAdmin.php';
$edit = new FormAdmin();
echo $edit->edit($res);
