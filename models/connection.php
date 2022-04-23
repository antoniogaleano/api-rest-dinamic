<?php 
class Connection{
	static public function infoDatabase(){
		$infoDB = array('database' => "app" ,
						'user'=>"postgres",
						'pass' => "1347");
		// 
	
	return $infoDB;
	}
	static public function connect(){
		try {
			$link = new PDO('pgsql:host=localhost;dbname='.Connection::infoDatabase()["database"],Connection::infoDatabase()["user"],
				Connection::infoDatabase()["pass"]
			);
		} catch (Exception $e) {
			die("Error".$e->getMessage());
			echo $Exception->getMessage();
		}
		return $link;
	}
}