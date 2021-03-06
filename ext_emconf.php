<?php

########################################################################
# Extension Manager/Repository config file for ext "displaycontroller_advanced".
#
# Auto generated 10-07-2012 12:08
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Advanced Controller  - Tesseract project',
	'description' => 'This extension manages relations between Tesseract components and produces output in the FE.  More info on http://www.typo3-tesseract.com',
	'category' => 'plugin',
	'author' => 'Francois Suter (Cobweb), Fabien Udriot (Ecodev)',
	'author_email' => 'typo3@cobweb.ch,fabien.udriot@ecodev.ch',
	'shy' => '',
	'dependencies' => 'cms,tesseract,displaycontroller',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author_company' => '',
	'version' => '1.3.0',
	'constraints' => array(
		'depends' => array(
			'cms' => '',
			'typo3' => '6.1.0-6.2.99',
			'tesseract' => '1.4.0-0.0.0',
			'displaycontroller' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'suggests' => array(
	),
	'_md5_values_when_last_written' => 'a:24:{s:9:"ChangeLog";s:4:"7c36";s:38:"class.tx_displaycontrolleradvanced.php";s:4:"74eb";s:46:"class.tx_displaycontrolleradvanced_service.php";s:4:"0c8d";s:16:"ext_autoload.php";s:4:"bb6f";s:21:"ext_conf_template.txt";s:4:"7ed3";s:12:"ext_icon.gif";s:4:"bdad";s:17:"ext_localconf.php";s:4:"94b0";s:14:"ext_tables.php";s:4:"d124";s:14:"ext_tables.sql";s:4:"2aa6";s:13:"locallang.xml";s:4:"60ef";s:27:"locallang_csh_ttcontent.xml";s:4:"a95d";s:16:"locallang_db.xml";s:4:"bdd8";s:10:"README.txt";s:4:"319e";s:64:"Configuration/TCA/tx_displaycontrolleradvanced_providergroup.php";s:4:"eb82";s:63:"Resources/Public/Images/displaycontroller_advanced_typeicon.png";s:4:"3419";s:70:"Resources/Public/Images/tx_displaycontrolleradvanced_providergroup.png";s:4:"d3db";s:39:"Resources/Public/Images/wizard_icon.png";s:4:"1f5c";s:14:"doc/manual.pdf";s:4:"2633";s:14:"doc/manual.sxw";s:4:"125c";s:14:"doc/manual.txt";s:4:"b8dc";s:46:"pi1/class.tx_displaycontrolleradvanced_pi1.php";s:4:"842a";s:54:"pi1/class.tx_displaycontrolleradvanced_pi1_wizicon.php";s:4:"26e9";s:46:"pi2/class.tx_displaycontrolleradvanced_pi2.php";s:4:"b939";s:54:"pi2/class.tx_displaycontrolleradvanced_pi2_wizicon.php";s:4:"132d";}',
);

?>