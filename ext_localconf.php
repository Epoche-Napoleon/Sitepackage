<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Information\Typo3Version;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;

defined('TYPO3_MODE') || die();

/*
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT:source="FILE:EXT:sitepackage/Configuration/TSConfig/page.tsconfig">'
);
*/
// Individual RTE Configuration
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['epochenapoleon_preset'] = 'EXT:sitepackage/Configuration/RTE/Yaml/epochenapoleon_preset.yaml';
$GLOBALS['TCA']['tx_news_domain_model_news']['ctrl']['thumbnail'] = 'fal_media';

$versionInformation = GeneralUtility::makeInstance(Typo3Version::class);
// Only include page.tsconfig if TYPO3 version is below 12 so that it is not imported twice.
if ($versionInformation->getMajorVersion() < 12) {
	ExtensionManagementUtility::addPageTSConfig('
      @import "EXT:sitepackage/Configuration/TsConfig/Page.tsconfig"
   ');
}
// Adding the default user.tsconfig
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig(
	'<INCLUDE_TYPOSCRIPT: source="FILE:EXT:sitepackage/Configuration/TsConfig/User.tsconfig">'
);