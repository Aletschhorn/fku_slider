<?php
// Adds the content element to the "Type" dropdown
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
   'tt_content',
   'CType',
    [
        'LLL:EXT:fku_slider/Resources/Private/Language/locallang.xlf:content_element_title',
        'fku_slider',
        'EXT:fku_slider/Resources/Public/Icons/tx_fkuslider_domain_model_slider.gif',
    ],
    'textmedia',
    'after'
);

// Adds fields to tt_content
$temporaryColumn = [
   'tx_fkuslider_interval' => [
      'exclude' => 1,
      'label' => 'LLL:EXT:fku_slider/Resources/Private/Language/locallang_db.xlf:tt_content.tx_fkuslider_interval',
      'config' => [
		'type' => 'input',
		'eval' => 'int',
		'size' => '10',
		'default' => '5000',
      ],
   ],
   'tx_fkuslider_autoplay' => [
      'exclude' => 1,
      'label' => 'LLL:EXT:fku_slider/Resources/Private/Language/locallang_db.xlf:tt_content.tx_fkuslider_autoplay',
      'config' => [
		'type' => 'check',
		'renderTypes' => 'default',
		'default' => 1,
      ],
   ],
   'tx_fkuslider_items' => [
      'exclude' => 1,
      'label' => 'LLL:EXT:fku_slider/Resources/Private/Language/locallang_db.xlf:tt_content.tx_fkuslider_items',
      'config' => [
		'type' => 'inline',
		'foreign_table' => 'tx_fkuslider_domain_model_item',
		'foreign_field' => 'sliderid',
		'foreign_table_field' => 'slidertable',
		'appearance' => [
			'levelLinksPosition' => 'top',
			'showSynchronizationLink' => true,
            'useSortable' => true,
		],
      ],
   ],
];
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $temporaryColumn);

// Configure the default backend fields for the content element
$GLOBALS['TCA']['tt_content']['types']['fku_slider'] = [
   'showitem' => '
         --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;;general,
            header; Internal title (not displayed),
			--palette--;;fku_slider_parameters,
			tx_fkuslider_items,
         --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            --palette--;;hidden,
            --palette--;;access,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
            categories,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
            rowDescription,
   ',
];
$GLOBALS['TCA']['tt_content']['palettes']['fku_slider_parameters'] = ['showitem' => 'tx_fkuslider_interval, tx_fkuslider_autoplay'];

?>