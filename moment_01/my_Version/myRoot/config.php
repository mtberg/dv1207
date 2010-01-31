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
define('TP_LOGPATH',		dirname(__FILE__).'/web_System/irc_log/irc_log.txt');	// Filepath to irc log file.
define('TP_IMAGESPATH',		dirname(__FILE__).'/web_System/images/');		// Images
define('WS_SITELINK',		'http://dv1207mom01.mtberg.se/');				//	Adress till sidan.

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