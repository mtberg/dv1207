<?php
/////////////////////////////////////////
//	Detta är min PHP Frontcontroller.
//	
//	index.php
//	
/////////////////////////////////////////
//	
//	Hämta med require_once den fil som tar fram det som 
//	besökaren vill se.
//	Starta sessionen för besökaren.
//	Config.php kör generella server funktioner som gäller för alla sidor.
session_start();
require_once('../../config.php');

$indexIsVisited = TRUE;

/////////////////////////////////////////
//	
//	Kolla vad besökaren vill gå till för sida.
//	Hämta den php sida som ska visas.	
$page = isset($_GET['p']) ? $_GET['p'] : 'home';

switch($page) {
	//	En kontroll sats kollar vilken hemsida som ska visas
	//	
	//	Startsidan
	//	Ska visa Twitter feed. Finnas länk till RSS Flöde.
	case 'home':
		require_once(TP_PAGESPATH.'app_Home/PHome.php'); 
		break;
	
	//
	// default
	//	Dit du ska komma om du bara anger web addressen.
	//	www.coolcoreaudio.com
	default:
		echo 'default';
		//require_once(TP_PAGESPATH.'app_home/PIndex.php'); 
		break;
}
?>