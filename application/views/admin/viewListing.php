<table>
	<tr><th style="width: 10%;">Дата</th><th style="width: 20%;">Имя</th><th style="width: 20%;">Email</th><th style="width: 40%;">Редактировать</th><th style="width: 10%;">Удалить</th></tr>
	<?php
	foreach ($x as $i) {
	    echo '<tr>
	    <td style="width: 10%;">' . $i['date'] . '</td>
	    <td style="width: 20%;">' . $i['name'] . '</td>
	    <td style="width: 20%;">' . $i['email'] . '</td>
	    <td style="width: 40%;"><a href="/admin/edit/' . $i['id_guestbook'] . '">' . substr($i['comment'], 0, 50) . '</a></td>
	    <td style="width: 10%;"><a href="/admin/del/' . $i['id_guestbook'] . '">Удалить</a></td>
	    </tr>';
	}
	?>
</table>
