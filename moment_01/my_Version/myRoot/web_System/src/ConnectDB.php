<?php
class ConnectDB {
////////////////////////
//	Instans variabler
////////////////////////
	var $mysqli;
	
////////////////////////
//	Klass: Class Database Connect
//	
//	Konstruktor & Destruktor för CDBConnect.php
////////////////////////
	function __construct() {
		require_once( CF_CONFIG );
		$this->mysqli = new mysqli(DB_URL,DB_USER,DB_PASS,DB_NAME);
		if (mysqli_connect_errno()) {
		    printf("Connect failed: %s\n", mysqli_connect_error());
		    exit();
		}
	}
	
	function __destruct() {
		$this->mysqli->close();
	}
	
////////////////////////
//	Set Metoder
////////////////////////

////////////////////////
//	Get Metoder
////////////////////////

////////////////////////
//	Special Metoder
////////////////////////

////////////////////////
//	RSS Feed
////////////////////////

}
?>