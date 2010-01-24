<?php
/////////////////////////////////////////
//	
//	PHome.php
//	
/////////////////////////////////////////
//	
//	Startsida. Här ska det visas nyheter, från olika kategorier.
//	Det ska visas ett Twitter flöde från CCA pojkarna.
//	Man ska kunna premunera på nyheterna via en RSS Länk.
//
/////////////////////////////////////////

	$content = <<<EOD
<h1>Welcome to DV1207 course page!</h1>
<p>
	This is my new template for my course DV1207!<br />
	With this page i will create a new design and show my visitors <br />
	an irc logg from MangaONE where i help as a distributor. <br />
	I am also aiming for showing the content of the distribution bots <br />
	with a search function (future goal). <br />
	My aim is to have this template available for other mangascan groups to use <br />
	for mainting news and releases as well as easy to get contact information and.<br />
	Blabla...<br />
	blabla...<br />
	blabla...<br />
</p>
EOD;

/////////////////////////////////////////
//	
//	Hämta filen som skriver ut innehållet och
//	skriver ut xHTML taggar.
//
/////////////////////////////////////////
require_once(TP_SOURCEPATH.'CreateXHTML.php');

$page = new CreateXHTML(WS_STYLESHEET);

$page->printHTMLHeader('Cool Core Audio Webpage!');
$page->printPageHeader();
$page->printPageBody($content);
$page->printPageFooter();

?>