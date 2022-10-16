<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "fku_slider"
 *
 * Manual updates:
 * Only the data in the array - anything else is removed by next write.
 * "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
	'title' => 'FKU Slider',
	'description' => '',
	'category' => 'plugin',
	'author' => 'Daniel Widmer',
	'author_email' => 'daniel.widmer@fku.ch',
	'dependencies' => 'extbase,fluid',
	'state' => 'alpha',
	'internal' => '',
	'uploadfolder' => '0',
	'createDirs' => '',
	'clearCacheOnLoad' => 0,
	'version' => '1.0.2',
	'constraints' => [
		'depends' => [
			'typo3' => '9.5.0 - 10.4.99',
		],
		'conflicts' => [],
		'suggests' => [],
	],
];
/***********************************************
 * Version 1.0.1
 * -------------
 * composer.json added
 * Added class img-fluid to each slider image
 *
 * Version 1.0.2
 * -------------
 * Rename typoscript and tsconfig files
 * Correct implementation of content element with its icon
 *

**/