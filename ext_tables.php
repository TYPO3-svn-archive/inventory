<?php
if (!defined ('TYPO3_MODE')) die ('Access denied.');

Tx_Extbase_Utility_Extension::registerPlugin($_EXTKEY, 'List', 'The Inventory List');

t3lib_extMgm::allowTableOnStandardPages('tx_inventory_domain_model_product');
$TCA['tx_inventory_domain_model_product'] = array (
	'ctrl' => array (
		'title' => 'Lagerbestand',
		'label' => 'name',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/product.gif'
	),
	'columns' => array(
		'name' => array(
			'label' => 'Produktbezeichnung',
			'config' => array(
				'type' => 'input',
				'eval' => 'trim,required'
			)
		),
		'description' => array(
			'label' => 'Produktbeschreibung',
			'config' => array(
				'type' => 'text',
				'eval' => 'trim'
			)
		),
		'quantity' => array(
			'label' => 'Lagerbestand',
			'config' => array(
				'type' => 'input',
				'size' => '4',
				'eval' => 'int'
			)
		),
	),
	'types' => array(
		'0' => array('showitem' => 'name, description, quantity')
	)
);

?>