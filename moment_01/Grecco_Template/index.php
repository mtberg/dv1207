<?php
// ===========================================================================================
//
// index.php
//
// Description: Home page for the site.
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
<h1>Home page</h1>
<p>
This is the home page (index.php). Its a pure copy from the page template.php.
Edit this text to get going and to understand how it works. You can also create a new
page by copying the file template.php. You can review the sourcecode of these files
(and the entire collection of files) by choosing "Sourcecode" from the menu above.
</p>
</header>
EOD;


// -------------------------------------------------------------------------------------------
//
// Create and print out the html-page
//
$title 		= "Home page (edit this)";
require_once('page.php');


?>