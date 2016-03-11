<?php
class DBConfig {
	private $dbh = null;

	function __construct() {

		$this -> dbh = new PDO('mysql:host=localhost;dbname=healthcenter_db', 'root', 'root', array(
							PDO::ATTR_PERSISTENT => false));
		$this -> dbh -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}

	function getConnection() {
		return $this -> dbh;
	}

	function closeConnection() {
		$this -> dbh = null;
	}

	function __destruct() {
		if($this -> dbh != null)
			$this -> dbh = null;
	}

}
