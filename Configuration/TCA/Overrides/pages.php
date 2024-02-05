<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3_MODE') || die();

call_user_func(function () {
    /**
     * EXtension key
     */
    $extensionKey = 'sitepackage';

    /**
     * Default Typoscript
     */
    ExtensionManagementUtility::registerPageTSConfigFile(
        $extensionKey,
        'Configuration/PageTS/page.ts',
        'EPOCHE NAPOLEON Sitepackage'
    );
});

