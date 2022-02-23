<?php
defined('TYPO3_MODE') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('fku_slider', 'Configuration/TypoScript', 'FKU Slider');

foreach (['item'] as $table) {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_fkuslider_domain_model_' . $table);
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_fkuslider_domain_model_' . $table, 
	'EXT:fku_silder/Resources/Private/Language/locallang_csh_tx_fkuslider_domain_model_' . $table . '.xlf');
}

?>