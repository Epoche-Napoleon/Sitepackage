<?php

	declare(strict_types=1);

	$ExtensionKey = 'sitepackage';

	defined('TYPO3_MODE') or die();

	call_user_func(function () {
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
			$ExtensionKey,
			'Configuration/TypoScript',
			'EPOCHE NAPOLEON Sitepackage'
		);
	});

