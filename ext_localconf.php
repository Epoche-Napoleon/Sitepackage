<?php
defined('TYPO3_MODE') || die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT:source="FILE:EXT:epochenapoleon_sitepackage/Configuration/TSConfig/page.tsconfig">'
);
// Individual RTE Configuration
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['epochenapoleon_preset'] = 'EXT:epochenapoleon_sitepackage/Configuration/RTE/Yaml/epochenapoleon_preset.yaml';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['fluid']['namespaces']['EventLinkViewHelper'] = ['epochenapoleon\\epochjenapoleon_sitepackage\\ViewHelpers'];
$GLOBALS['TCA']['tx_news_domain_model_news']['ctrl']['thumbnail'] = 'fal_media';

// Erweiterung Glossary2
// $GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['glossary2']['extender']['CLASSNAME']['epochenapoleon_sitepackage'] =
    \Vendor\EXTKEY2\Domain\Model\CLASSNAME::class;

// $GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['glossary2']['extender']['CLASSNAME']['epochenapoleon_sitepackage'] =
    'EXT:EXTKEY2/Classes/Domain/Model/CLASSNAME.php';

// $GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['glossary2']['extender']['CLASSNAME']['epochenapoleon_sitepackage'] =
    'Domain/Model/SingleModel';
