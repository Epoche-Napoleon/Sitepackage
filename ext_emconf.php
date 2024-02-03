<?php
	$EXTKEY = 'sitepackage';

	$EM_CONF[$_EXTKEY] = array(
		'title' => 'EPOCHE NAPOLEON Stepackage',
		'description' => 'TYPO3 Sitepackage for Website EPOCHENAPOLEON-From the French Revolution to Waterloo. The sitepackage is based on Benjamin Kott\'s BootstrapPackage.',
		'category' => 'templates',
		'constraints' => array(
			'depends' => array(
				'typo3' => ' 11.5.0-11.5.99 || 12.4.0-12.4.99',
				'php' => '7.4.0 - 8.1.99',
				'bootstrap_package' => '12.0.0-13.9.99'
			),
			'conflicts' => array(),
		),
		'autoload' => array(
			'psr-4' => array(
				'EpocheNapoleon\\Sitepackage\\' => 'Classes',
			),
		),
		'state' => 'stable',
		'uploadfolder' => 0,
		'createDirs' => '',
		# Depricatatet in TYPO3 12.1
		'clearCacheOnLoad' => 1,

		'author' => 'Michael Gnessner',
		'author_email' => 'michael@epoche-napoleon.net',
		'author_company' => 'EPOCHE NAPOLEON'
	);

