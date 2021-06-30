<table>
	<tr>
		<th style="width: 10%;">date</th>
		<th style="width: 10%;">name</th>
		<th style="width: 10%;">surname</th>
		<th style="width: 10%;">phone</th>
		<th style="width: 10%;">street</th>
		<th style="width: 10%;">city</th>
		<th style="width: 10%;">country</th>
		<th style="width: 20%;">edit</th>
		<th style="width: 10%;">delete</th>
	</tr>
	<?php
	foreach ($res as $item) {
	    echo '<tr>
	    <td style="width: 10%;">' . $item['date'] . '</td>
	    <td style="width: 10%;">' . $item['name'] . '</td>
	    <td style="width: 10%;">' . $item['surname'] . '</td>
	    <td style="width: 10%;">' . $item['phone'] . '</td>
	    <td style="width: 10%;">' . $item['street'] . '</td>
	    <td style="width: 10%;">' . $item['city'] . '</td>
	    <td style="width: 10%;">' . $item['country'] . '</td>
	    <td style="width: 20%;"><a style="color: blue;" href="/adress/edit/' . $item['id'] . '">edit</a></td>
	    <td style="width: 10%;"><a style="color: blue;" href="/adress/del/' . $item['id'] . '">delete</a></td>
	    </tr>';
	}
	?>
</table>
