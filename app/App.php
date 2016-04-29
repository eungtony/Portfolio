<?php 

class App {

	const db_name = 'test';
	const db_user = 'root';
	const db_mdp = '';
	const db_host = 'localhost';

	private static $database;
	protected $db;
	protected $lastId;
	protected $pdo;

	public static function getDb(){
		if (self::$database === null) {
			self::$database = new database(self::db_name,self::db_host,self::db_user,self::db_mdp);
					}

		return self::$database;
	}


	public static function lastId(){
		$this->lastId = self::$database->lastInsertId();
		return self::$lastId;
	}

}



 ?>