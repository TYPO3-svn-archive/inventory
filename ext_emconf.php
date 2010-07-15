<?php

########################################################################
# Extension Manager/Repository config file for ext "inventory".
#
# Auto generated 15-07-2010 11:22
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Inventory List',
	'description' => 'This is just a very basic example for an extension based on Extbase. It was taken from the book "Zukunftssichere TYPO3-Extensions mit Extbase und Fluid".',
	'category' => 'example',
	'author' => 'Jochen Rau',
	'author_company' => 'typoplanet',
	'author_email' => '',
	'dependencies' => 'extbase,fluid',
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
	'version' => '1.0.0',
	'constraints' => array(
		'depends' => array(
			'php' => '5.2.0-0.0.0',
			'typo3' => '4.3.0-0.0.0',
			'extbase' => '1.0.2-0.0.0',
			'fluid' => '1.0.2-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'suggests' => array(
	),
	'_md5_values_when_last_written' => 'a:9:{s:12:"ext_icon.gif";s:4:"e922";s:17:"ext_localconf.php";s:4:"c7d1";s:14:"ext_tables.php";s:4:"8b07";s:14:"ext_tables.sql";s:4:"a3a1";s:42:"Classes/Controller/InventoryController.php";s:4:"0459";s:32:"Classes/Domain/Model/Product.php";s:4:"7bfb";s:47:"Classes/Domain/Repository/ProductRepository.php";s:4:"ba14";s:47:"Resources/Private/Templates/Inventory/list.html";s:4:"7539";s:34:"Resources/Public/Icons/product.gif";s:4:"905a";}',
);

?>