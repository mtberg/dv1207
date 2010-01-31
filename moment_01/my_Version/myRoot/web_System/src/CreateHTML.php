<?php
class CreateHTML {
	////////////////////////
	//	Instans variabler
	////////////////////////
	protected $RefStylesheet;
	protected $iPageBodyMain;
	
	////////////////////////
	//	Konstruktor
	////////////////////////
	function __construct($stylesheet) {
		$this->RefStylesheet	= 'stylesheets/';
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
/*		$htmlHead = '<?xml version="1.0" encoding="iso-8859-4"?>';
*/
		
		$htmlHead .= <<<EOD
<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>{$aTitle}</title>
		<link rel='stylesheet' href='{$this->RefStylesheet}screen.css' />
		<link rel='stylesheet' href='{$this->RefStylesheet}nav.css' />
		<link rel='stylesheet' href='{$this->RefStylesheet}style.css' />
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	</head>
EOD;
		print $htmlHead;
	}
	function printPageHeader($myTitle = WS_TITLE) {
		
		
		$htmlHead = <<<EOD
\n	<body>
		<div id='wrapper'>
			<div class=wBanner>
			<h1>ChocoLove Template</h1>
			</div>
			<div class='wHead'>
				<nav class='menu'>
					<ul>
						<li>
							<a href='?p=home'>Hem</a>
						</li>
						<li>
							<a href='?p=irc'>IRC Logg</a>
						</li>
						<li>
							<a href='?p=redo'>Use Case</a>
						</li>
						<li>
							<a href=''>Jordgubbe</a>
						</li>
					</ul>
				</nav>
			</div>\n
EOD;
		print $htmlHead;
	}
	function printPageBody($aBody = '') {
		require_once(TP_SOURCEPATH.'ConnectDB.php');
		$db = new ConnectDB();
		if( $_GET['p'] == 'irc' ) {
			$sideBar = '';
		} else {
			$sideContent = '';
			
			$sideBar = <<<EOD
			<div class='wSidebar' >
				<div class='userProfile'>
					<h3>Author: Robin Berg</h3>
					<ul>
						<li>Born: Sweden</li>
						<li>Age: 26</li>
						<li>Occupation: Student,</li>
						<li>Employee at Systembolaget</li>
					</ul>
				</div>
				<div class='CELinkList'>
					<ul>
						<li><a href=''>Course Element 01</a></li>
						<li><a href=''>Course Element XX</a></li>
						<li><a href=''>Course Element XX</a></li>
						<li><a href=''>Course Element XX</a></li>
					</ul>
				</div>
				{$sideContent}
			</div>
EOD;
		}
		$content .= <<<EOD
			<div class='wBody'>
				{$aBody}
			</div>
			{$sideBar}
EOD;
		print $content;
	}
	
	function printPageFooter() {		
		$content = <<<EOD
\n		</div> <!-- stänga wrapper -->
	</body>
</html>
EOD;

		print $content;
	}
}	// END OF CLASS
?>