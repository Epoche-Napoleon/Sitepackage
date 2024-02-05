<?php

defined('TYPO3_MODE') || die();

# Mit TYPO3 11 zu entfernen oder EXT:studiomitte/recordlist-thumbnail installieren

$GLOBALS['TCA']['tx_news_domain_model_news']['ctrl']['thumbnail'] = 'fal_media';
