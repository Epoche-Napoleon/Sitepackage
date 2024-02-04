<?php

	declare(strict_types=1);

	call_user_func(function()
	{
		/**
		 * Temporary variables
		 */
		$extensionKey = 'sitepackage';

		/**
		 * Default PageTS for Sitepackage
		 */

		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
			'$extensionKey',
			'Configuration/TsConfig/Page/All.tsconfig',
			'EPOCHE NAPOLEON Sitepackage'
		);
	});
	/**
	* Use doktype and fe_group as default values for new pages
	 */
	 $GLOBALS['TCA']['pages']['ctrl']['useColumnsForDefaultValues'] = 'doktype, fe_group';
