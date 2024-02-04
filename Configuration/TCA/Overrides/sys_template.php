<?php

	declare(strict_types=1);

	defined('TYPO3') || die();

	call_user_func(function () {
	/**
	 * Extension key
	 */
	$extensionKey = 'sitepackage';

	/**
	 * Add default TypoScript (constants and setup)
	 */
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
		$extensionKey,
		'Configuration/TypoScript',
		'EPOCHE NAPOLEON Site Package'
	);
});