<?php
// ===========================================================================================
//
// page.php
//
// Description: Prints out a HTML-page. 
//
// Author: Mikael Roos
//


// -------------------------------------------------------------------------------------------
//
// Create and print out the html-page
//
require_once('common.php');
$title 		= (empty($title)) ? "No title set, define '$title'" : $title;
$charset    = "utf-8";
$language   = "en";
$stylesheet = "stylesheet.css";
$favicon 	= "favicon.ico";
$debug 		= @$debugEnable ? $debug : "";

$html = <<< EOD
<!DOCTYPE html>
<html lang="{$language}">
    <head>
        <meta charset="{$charset}" />
        <title>{$title}</title>
        <link rel="stylesheet" href="{$stylesheet}" />
        <link rel="shortcut icon" href="{$favicon}" />
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    </head>
    <body>
		<div class='wrapper-page'>	
			<div class='wrapper-header'>{$header}</div>
			<div class='wrapper-body'>{$html}</div>
			<div class='wrapper-footer'>{$footer}</div>
			<div class='wrapper-debug'>{$debug}</div>			
		</div>
    </body>
</html>
EOD;


// Print the header and page
header("Content-Type: text/html; charset={$charset}");
echo $html;
exit;


?>