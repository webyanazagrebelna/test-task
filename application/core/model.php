<?php

namespace Application\Core;

class Model
{
	private $link;

    function __construct()
    {
        // создание базы данных
        try {
        	$link = new \PDO("mysql:host=localhost", "user-db", "pass-db");
        }
       	catch (\PDOException $e) {
       		exit('not comnnect db');
       	} 
        $link->query('CREATE DATABASE IF NOT EXISTS adressbook');
        // создание таблиц
		try {        
        $link = new \PDO("mysql:host=localhost; dbname=adressbook", "user-db", "pass-db");
        }    
       	catch (\PDOException $e) {
       		exit('not comnnect db');
       	} 
		$link->query('CREATE TABLE IF NOT EXISTS adress(id INTEGER PRIMARY KEY AUTO_INCREMENT, date DATETIME, name CHAR(50), surname CHAR(50), phone CHAR(50), street CHAR(50), city CHAR(50), country CHAR(50))');
        $this->link = $link;
    }

    function linkAdmin()
    {
    	$this->link->query("CREATE USER IF NOT EXISTS admin@localhost IDENTIFIED BY '12345'");
		$this->link->query("GRANT SELECT,DELETE,INSERT,UPDATE ON adressbook.adress TO admin@localhost");
		$this->link->query("FLUSH PRIVILEGES");
		try {
		$linkAdmin = new \PDO("mysql:host=localhost; dbname=adressbook", "admin", "12345");
		}
       	catch (\PDOException $e) {
       		exit('not comnnect db');
       	} 
		return $linkAdmin;    	
    }
}
