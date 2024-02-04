<?php

	declare(strict_types=1);

	defined('TYPO3') or die('Access denied.');

	# Load the backend css file only in development mode
	if (getenv('TYPO3_ENV') == "Development") {
		$GLOBALS['TBE_STYLES']['stylesheet'] = 'EXT:sitepackage/Resources/Public/Css/backend.css';
	}

