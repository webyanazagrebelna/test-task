<?php
class FormAdmin extends Form
{
	function edit($res)
	{
    	return '<form action="/admin/edit/' . $res['id_guestbook'] . '" method="post">
   <p>Ответ:&nbsp;<input name="comment" type="text" value="' . $res['comment'] . '" required></p>
   <p><input type="submit"></p></form>';
    }   

    function login($message) {
    	return '<form action="" method="post">
<table>
	<tr>
		<p style="text-align: center">' . $message . '</p>
	</tr>
	<tr style="background: LightSkyBlue">
		<th style="text-align: left">Логин:</th>
		<th><input type="text" name="login" required></th>
	</tr>
	<tr style="background: LightSkyBlue">
		<th style="text-align: left">Пароль:</th>
		<th><input type="password" name="password" required></th>
	</tr>
	<th><input style="width: 150px; height: 30px;" type="submit" value="Войти"></th>
</table>
</form>';
    }
}
