<?php
return [
	'ctrl' => [
		'title'	=> 'LLL:EXT:fku_slider/Resources/Private/Language/locallang_db.xlf:tx_fkuslider_domain_model_item',
		'label' => 'title',
        'sortby' => 'sorting',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'versioningWS' => TRUE,

		'delete' => 'deleted',
		'enablecolumns' => [
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		],
		'searchFields' => 'title, caption,',
		'iconfile' => 'EXT:fku_slider/Resources/Public/Icons/tx_fkuslider_domain_model_item.gif'
	],
	'interface' => [
		'showRecordFieldList' => 'hidden, title, link, picture, starttime, endtime',
	],
	'types' => [
		'1' => ['showitem' => '--palette--;;general, --palette--;;access, picture'],
	],
	'palettes' => [
		'1' => ['showitem' => ''],
		'access' => ['showitem' => 'starttime, endtime, hidden'],
		'general' => ['showitem' => 'title, link'],
	],
	'columns' => [
	
		'hidden' => [
			'exclude' => 1,
			'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
			'config' => [
				'type' => 'check',
			],
		],
		'starttime' => [
			'exclude' => 1,
			'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
			'config' => [
				'type' => 'input',
				'renderType' => 'inputDateTime',
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => [
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				],
			],
		],
		'endtime' => [
			'exclude' => 1,
			'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
			'config' => [
				'type' => 'input',
				'renderType' => 'inputDateTime',
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => [
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				],
			],
		],

		'title' => [
			'exclude' => 1,
			'label' => 'LLL:EXT:fku_slider/Resources/Private/Language/locallang_db.xlf:tx_fkuslider_domain_model_item.title',
			'config' => [
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			],
		],
        'link' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:fku_slider/Resources/Private/Language/locallang_db.xlf:tx_fkuslider_domain_model_item.link',
            'config' => [
                'type' => 'input',
				'renderType' => 'inputLink',
				'fieldControl' => [
					'linkPopup' => [
						'options' => [
							'blindLinkOptions' => 'mail,spec,url,file,folder'
						]
					]
                ]
            ],
        ],
		'picture' => [
			'exclude' => 1,
			'label' => 'LLL:EXT:fku_slider/Resources/Private/Language/locallang_db.xlf:tx_fkuslider_domain_model_item.picture',
			'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
				'picture', 
				[
					'appearance' => ['createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:media.addFileReference'],
					'foreign_match_fields' => ['fieldname' => 'picture', 'tablenames' => 'tx_fkuslider_domain_model_item', 'table_local' => 'sys_file'],
					'minitems' => 1,
					'maxitems' => 1,
				],
				$GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
			)
		],
	],
];