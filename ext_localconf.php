<?php
defined('TYPO3_MODE') or die();

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'FKU.fku_slider',
	'Slider',
	[
		'Slider' => 'list',
		
	],
	// non-cacheable actions
	[]
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:fku_slider/Configuration/TypoScript/contentElementWizard_TsConfig.txt">'
);