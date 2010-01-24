<?php
class CreateXHTML {
	////////////////////////
	//	Instans variabler
	////////////////////////
	protected $RefStylesheet;
	protected $iPageBodyMain;
	
	////////////////////////
	//	Konstruktor
	////////////////////////
	function __construct($stylesheet) {
		$this->RefStylesheet	= $stylesheet;
		$this->iPageBodyMain	= "";
	}
	
	////////////////////////
	//	Dekonstruktor
	////////////////////////
	function __destruct() {
		;
	}
	
	////////////////////////
	//	Funktioner
	////////////////////////
	
	function getLoginLogoutMenu() {
		;
	}
	
	function printHTMLHeader($aTitle) {
		$htmlHead = '<?xml version="1.0" encoding="iso-8859-4"?>';
		$htmlHead .= <<<EOD
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<title>{$aTitle}</title>
		<link rel='stylesheet' href='{$this->RefStylesheet}' type='text/css' media='screen' />
		<link rel='alternate' type='application/rss+xml' href='http://www.mtberg.se/DV1106/examination/?p=rss' title='RSS feed for FloggerBlogger' />
	</head>
EOD;
		print $htmlHead;
	}
	function printPageHeader($myTitle = WS_TITLE) {
		
		
		$htmlHead = <<<EOD
\n	<body>
		<div class='wrapper'> <!-- Öppna wrapper -->
			<div class='pageHeader'>
			</div>\n
EOD;
		print $htmlHead;
	}
	function printPageBody($aBody = '') {
		require_once(TP_SOURCEPATH.'ConnectDB.php');
		$db = new ConnectDB();
				
		$content .= <<<EOD
\n	<div class='pageBody'>
		{$aBody}
		{$pageBodyMain}
		<div class='clear'>&nbsp;</div>
	</div>
EOD;
		print $content;
	}
	
	function printPageFooter() {		
		$content = <<<EOD
		</div> <!-- stänga wrapper -->
	</body>
</html>
EOD;

		print $content;
	}
}	// END OF CLASS
?>