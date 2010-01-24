<?php
////////////////////////////////////////
//	config.php
//	Konfigurations fil för CoolCoreAudio
//
////////////////////////////////////////
//	
//	Define värden.
////////////////////////////////////////
define('CF_CONFIG', dirname(__FILE__).'/config.php');										// Config filens fil address.

define('TP_SOURCEPATH',		dirname(__FILE__).'/web_System/src/');			// Classes, functions, code
define('TP_PAGESPATH',		dirname(__FILE__).'/web_System/pages/');		// Pagecontrollers and modules
define('TP_IMAGESPATH',		dirname(__FILE__).'/web_System/images/');		// Images
define('TP_STYLESHEETS', 	dirname(__FILE__).'/web_System/stylesheet');	// Stylesheets

define('TF_FILEPATH', 	dirname(__FILE__).'/file_System/files');			// Stored files. Uploaded with upload function.

////////////////////////////////////////
//	Hämta databas filen.
require_once(TP_SOURCEPATH.'ConnectDB.php');

////////////////////////////////////////
//	Definera anslut värden för databasen.
define('DB_USER', "mtberg_se");
define('DB_PASS', "incadbyr0b1nb3rg");
define('DB_URL', "localhost");
define('DB_NAME', "mtberg_se");

////////////////////////////////////////
//	Testa att ansluta till databasen.
$db = new ConnectDB();

?>