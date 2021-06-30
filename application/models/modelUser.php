<?php
class ModelUser extends Model
{
	
	function listing($startPos, $perpage)
	{
		$res = $this->linkGuest()->prepare('SELECT * FROM guestbook LIMIT ' . $startPos . ', ' . $perpage . '');
		$res->execute();
		$res = $res->fetchAll();
        return $res;
	}

	function adding($name, $email, $comment)
	{
		$res = $this->linkGuest()->prepare('INSERT INTO guestbook (date, name, email, comment) VALUES (NOW(), ?, ?, ?)');
		$res->execute(array($name, $email, $comment));		
	}

	function counts()
	{
	    $res = $this->linkGuest()->prepare('SELECT count(*) FROM guestbook');
	    $res->execute();
	    $counts = $res->fetch()[0];
	    return $counts;
	}
}
