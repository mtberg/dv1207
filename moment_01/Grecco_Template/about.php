<?php
// ===========================================================================================
//
// about.php
//
// Description: Show off the readme-file.
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
$readme = file_get_contents('README');

$html = <<<EOD
<header>
<h1>About Greco</h1>
<p>
The following text is from the file README.
</p>
</header>
<page>
<pre>
{$readme}
</pre>
</page>
EOD;


// -------------------------------------------------------------------------------------------
//
// Create and print out the html-page
//
$title 		= "About Greco";
require_once('page.php');


?>