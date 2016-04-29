<?php

use \PDO;

class database {

	protected $pdo;

	private function getPDO(){
		if ($this->pdo === null) {
			$pdo = new PDO ('mysql:dbname=portfolio;host=localhost','root','');
			$pdo->query("SET NAMES 'utf8'");
			$this->pdo = $pdo;
		}
		return $this->pdo;
	}

	public function query($requete){
		$req = $this->getPDO()->query($requete);
		$datas = $req->fetchAll();
		return $datas;
	}

	public function query_prepare($requete,$set){
		$req = $this->getPDO()->prepare($requete);
		$req->execute($set);
		$req->fetchAll(PDO::FETCH_OBJ);
	}

}



 ?>
