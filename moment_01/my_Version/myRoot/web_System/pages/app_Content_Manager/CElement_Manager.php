<?php
////////////////////////////
//	Course Element Manager
//	CElement_Manager.php
//
//	Denna fil ska visa mina moment som jag har gjort
//	och fungera som en redovisnings sida.
	
/////////////////////////
//	Create content for page
//
$content = <<<EOD
<header class='cElement'>
	<h1>Use Case: Course Elements</h1>
	<p>
		Here i will show you all the elements in the course "DV1207" that i have completed.<br />
	</p>
<header>
<div class='cElement'>
	<h2>Course Element 01</h2>
	<p>
		Introduction to HTML5.<br />
		Shows us example and offers articles on HTML 5.<br />
		Also introducing us, the students, to several templates created by <a href='http://www.student.bth.se/~mos/me/hem.php' title='Mikael Roos, autobiography'>Mikael Roos</a>
		
	</p>
</div>
EOD;

require_once(TP_SOURCEPATH.'CreateHTML.php');

$page = new CreateHTML(TP_STYLESHEETS);

$page->printHTMLHeader('Use Case: Course Elements!');
$page->printPageHeader();
$page->printPageBody($content);
$page->printPageFooter();
?>