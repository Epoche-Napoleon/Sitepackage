<?php

	declare(strict_types=1);

	use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

	defined('TYPO3_MODE') || die();

	ExtensionManagementUtility::addPageTSConfig('@import"EXT:sitepackage/Configuration/TsConfig/Page/Mod/All.tsconfig">');



