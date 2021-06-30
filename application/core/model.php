<?php
class Model
{
	private $link;

    function __construct()
    {
        // создание базы данных
        try {
        	$link = new PDO("mysql:host=localhost", "root", "111");
        }
       	catch (PDOException $e) {
       		exit('Отсутствует соединение с базой данных');
       	} 
        $link->query('CREATE DATABASE IF NOT EXISTS guestbook');
        // создание таблиц
		try {        
        $link = new PDO("mysql:host=localhost; dbname=guestbook", "root", "111");
        }    
       	catch (PDOException $e) {
       		exit('Отсутствует соединение с базой данных');
       	} 
        $link->query('CREATE TABLE IF NOT EXISTS guestbook(id_guestbook INTEGER PRIMARY KEY AUTO_INCREMENT, date DATETIME, name CHAR(20), email CHAR(50), comment TEXT)');
        $link->query('CREATE TABLE IF NOT EXISTS users(id_user INTEGER PRIMARY KEY AUTO_INCREMENT, login CHAR(30), password CHAR(255))');
        $this->link = $link;
    }

	function linkGuest()
	{
		$this->link->query("CREATE USER IF NOT EXISTS guest@localhost IDENTIFIED BY '123'");
		$this->link->query("GRANT SELECT,INSERT ON guestbook.guestbook TO guest@localhost");
		$this->link->query("FLUSH PRIVILEGES");
		try {
		$linkGuest = new PDO("mysql:host=localhost; dbname=guestbook", "guest", "123");
		}
       	catch (PDOException $e) {
       		exit('Отсутствует соединение с базой данных');
       	} 
		return $linkGuest;
	}

    function linkAdmin()
    {
    	$this->link->query("CREATE USER IF NOT EXISTS admin@localhost IDENTIFIED BY '12345'");
		$this->link->query("GRANT SELECT,DELETE,INSERT,UPDATE ON guestbook.guestbook TO admin@localhost");
		$this->link->query("GRANT SELECT,UPDATE ON guestbook.users TO admin@localhost");
		$this->link->query("FLUSH PRIVILEGES");
		try {
		$linkAdmin = new PDO("mysql:host=localhost; dbname=guestbook", "admin", "12345");
		}
       	catch (PDOException $e) {
       		exit('Отсутствует соединение с базой данных');
       	} 
		return $linkAdmin;    	
    }
}