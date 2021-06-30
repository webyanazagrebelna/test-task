<?php
class FormUser extends Form
{
	function adding()
	{
    	return '<form action="" method="post">
   <p>Имя:&nbsp;<input name="name" type="text" pattern="^[a-zA-Z0-9]+$" required></p>
   <p>Email:&nbsp;<input name="email" type="text" pattern="^[-a-zA-Z0-9_]+@[a-zA-Z0-9]+\.[a-zA-Z0-9]+$" required></p>
   <p>Отзыв:&nbsp;<input name="comment" type="text" pattern="^[^<>]+$" required></p>
   <p><input type="submit"></p></form>';
    }   
}
