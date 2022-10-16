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

// icon registration for Typo3 version 10 (not used for version 11 anymore)
$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
$iconRegistry->registerIcon(
   'fku-slider',
   \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
   ['source' => 'EXT:fku_slider/Resources/Public/Icons/Extension.svg']
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('@import "EXT:fku_slider/Configuration/TsConfig/contentElementWizard.tsconfig"');
