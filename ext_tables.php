<?php
    defined('TYPO3_MODE') || die();

    if (getenv('TYPO3_ENV') !== "Production") {
        $GLOBALS['TBE_STYLES']['stylesheet'] = 'EXT:sitepackage/Resources/Public/Css/backend.css';
    }
