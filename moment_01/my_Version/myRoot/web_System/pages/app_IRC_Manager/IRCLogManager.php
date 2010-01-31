<?php
//////////////////////////
//	IRCLogManager.php
//
//	This app handles the reading and publishing of content from the irc logg.
/////////////////////////

/////////////////////////
//	Get the _GET variables.
//
$showNr = (empty($_GET['r']) ? 25 : $_GET['r']);
$ifGrep = (empty($_GET['grep']) ? '' : $_GET['grep']);

$maxNr = 250;
$minNr = 25;

$showNr         = ($showNr == $maxNr) ? $maxNr : $minNr;
$showNrInvert     = ($showNr == $maxNr) ? $minNr : $maxNr;
$ifGrep         = ($ifGrep == 'ignore') ? 'ignore' : 'show';
$ifGrepInvert     = ($ifGrep == 'ignore') ? 'show' : 'ignore';

/////////////////////////
//	Get content from log
//	
if( is_numeric($showNr) ) {
	$command = "tail -{$showNr} " . TP_LOGPATH . " | cat -n ";
	$command .= ($ifGrep == 'ignore') ? " |  grep -v ' has quit ' | grep -v ' has joined '" : "";
} else {
	$command = "tail -25 " . TP_LOGPATH . " | cat -n ";
	$command .= ($ifGrep == 'ignore') ? " |  grep -v ' has quit ' | grep -v ' has joined '" : "";
}

exec($command, $output);

$irc_log = "";
foreach( $output AS $row ) {
	$irc_log .= htmlentities( $row, ENT_NOQUOTES, 'UTF-8') . "<br />";
}
/////////////////////////
//	Create content for page
//
$content = <<<EOD
<header class='cElement'>
	<h1>Irc Logg</h1>
	<code>
	...<br />
		{$irc_log}
	</code>
	<p>
		&brvbar; <a href="?p=irc&amp;r={$showNr}&amp;grep={$ifGrep}">Uppdatera</a> &brvbar; 
		<a href="?p=irc&amp;r={$showNrInvert}&amp;grep={$ifGrep}">Visa {$maxNr}/{$minNr} rader</a> &brvbar; 
		<a href="?p=irc&amp;r={$showNr}&amp;grep={$ifGrepInvert}">Visa/dölj join/quit</a> &brvbar;
	</p>
<header>
EOD;

require_once(TP_SOURCEPATH.'CreateHTML.php');

$page = new CreateHTML(TP_STYLESHEETS);

$page->printHTMLHeader('IRC Logg Manager!');
$page->printPageHeader();
$page->printPageBody($content);
$page->printPageFooter();
?>