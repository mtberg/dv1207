<?php
// ===========================================================================================
//
// common.php
//
// Description: Use for header, footer and general links.
//
// Author: Mikael Roos
//


// -------------------------------------------------------------------------------------------
//
// Common header
//
$header = <<<EOD
<nav class='top'>
<ul>
<li><a href="index.php">Home</a>
<li><a href="template.php">Template</a>
<li><a href='source.php'>Sourcecode</a>
<li><a href='about.php'>About</a>
</ul>
</nav>
EOD;


// -------------------------------------------------------------------------------------------
//
// Common footer, including helpful validation tools.
//

// Create link to current page
$refToThisPage  = "http";
$refToThisPage .= (@$_SERVER["HTTPS"] == "on") ? 's' : '';
$refToThisPage .= "://";
$serverPort 	= ($_SERVER["SERVER_PORT"] == "80") ? '' : ":{$_SERVER['SERVER_PORT']}";
$refToThisPage .= $serverPort . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];

$footer = <<<EOD
<div class='copyright'>
<pre>
 .                        
..:    &copy; Mikael Roos, 2010
</pre>
</div>
<nav class='general-links'>
	<ul>
	<li><a href="http://catb.org/esr/faqs/hacker-howto.html">How to become a hacker</a>
	<li><a href="http://www.alistapart.com/">A List Apart</a>
	<li><a href="http://html5.org/">html5.org</a>
	<li><a href="http://webdesignledger.com/tools/10-super-useful-tools-for-choosing-the-right-color-palette">ColorTools</a>
	</ul>
</nav>
<nav class='validation-tools'>
	<ul>
	<li><a href='http://jigsaw.w3.org/css-validator/check/referer'>CSS</a>
	<li><a href='http://validator.w3.org/check/referer'>XHTML</a>
	<li><a href='http://validator.w3.org/checklink?uri={$refToThisPage}'>Links</a>
	<li><a href='http://html5.validator.nu/?doc={$refToThisPage}'>HTML5</a>
	</ul>
</nav>
EOD;


?>