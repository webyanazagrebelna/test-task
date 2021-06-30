<?php
class ModelAdmin extends Model
{

	function listing()
	{
		$res = $this->linkAdmin()->prepare('SELECT * FROM guestbook');
		$res->execute();
		$res = $res->fetchAll();
        return $res;
	}
	
	function editEmpty($id)
	{
		$res = $this->linkAdmin()->prepare('SELECT * FROM guestbook WHERE id_guestbook=?');
		$res->execute(array($id));
    	$res = $res->fetch();
        return $res;
	}
	
	function editIsset($id, $comment) {
		$res = $this->linkAdmin()->prepare('UPDATE guestbook SET comment=? WHERE id_guestbook=?');
		$res->execute(array($comment, $id));
	}

	function del($id) {
		$res = $this->linkAdmin()->prepare('DELETE FROM guestbook WHERE id_guestbook=?');
		$res->execute(array($id));
	}	

	function login() {
		$res = $this->linkAdmin()->prepare('SELECT * FROM users');
		$res->execute();
		$res = $res->fetch();
		return $res;
	}

	function createPass($login, $password) {
		$res = $this->linkAdmin()->prepare('UPDATE users SET login=?, password=? WHERE id_user=1');
		$res->execute(array($login, $password));
	}
}
