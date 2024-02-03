<?php

	defined('TYPO3') or die('Access denied.');

	use \Typo3\CMS\Core\Utility\GeneralUtility;

	/***************
	 * Add default RTE configuration
	 */
	$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['sitepackage'] = 'EXT:sitepackage/Configuration/RTE/Sitepackage.yaml';
	/***************
	 * PageTS (if TYPO3 version is below 12, otherwise it is included in Configuration/TsConfig/Page/All.tsconfig)
	 */
	$versionInformation = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Information\Typo3Version::class);
	if ($versionInformation->getMajorVersion() < 12) {
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:sitepackage/Configuration/TsConfig/Page/All.tsconfig">');
	}

	/***************
	 * Include UserTS
	 */
	$versionInformation = GeneralUtility::makeInstance(\TYPO3\CMS\Core\Information\Typo3Version::class);
	if ($versionInformation->getMajorVersion() < 13) {
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:sitepackage/Configuration/user.tsconfig">');
	}
