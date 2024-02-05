<?php
defined('TYPO3_MODE') || die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT:source="FILE:EXT:sitepackage/Configuration/TSConfig/page.tsconfig">'
);
// Individual RTE Configuration
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['epochenapoleon_preset'] = 'EXT:sitepackage/Configuration/RTE/Yaml/epochenapoleon_preset.yaml';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['fluid']['namespaces']['EventLinkViewHelper'] = ['epochenapoleon\\sitepackage\\ViewHelpers'];
$GLOBALS['TCA']['tx_news_domain_model_news']['ctrl']['thumbnail'] = 'fal_media';