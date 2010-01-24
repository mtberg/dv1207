<?php
// ===========================================================================================
//
// template.php
//
// Description: A template page, copy this and edit to get started.
//
//
// Author: Mikael Roos
//


// -------------------------------------------------------------------------------------------
//
// Error handling on/off
//
error_reporting(E_ALL | E_STRICT);
$debug = "";
$debugEnable = FALSE;  // TRUE to enable debugging, FALSE to not print out debug information


// -------------------------------------------------------------------------------------------
//
// Take care of GET variables
//
//$getId = (empty($_GET['id']) ? "" : $_GET['id']);


// -------------------------------------------------------------------------------------------
//
// The content of the page
//
$html = <<<EOD
<header>
<h1>Template page</h1>
<p>
This is the template page. Create a copy of this page and edit this text to get going.
You can review the sourcecode of the entire collection of files by choosing 
"Sourcecode" from the menu above.
</p>
</header>
EOD;


// -------------------------------------------------------------------------------------------
//
// Create and print out the html-page
//
$title 		= "Template page (edit this)";
require_once('page.php');


?>