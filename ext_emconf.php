<?php

$EM_CONF[$_EXTKEY] = array(
	 'title' => 'Mask',
	 'description' => 'Create your own content elements and page templates. Easy to use, even without programming skills because of the comfortable drag&drop system. Stored in structured database tables.',
	 'category' => 'plugin',
	 'author' => 'TYPO3.experten Team',
	 'author_email' => 'office@typo3experten.com',
	 'author_company' => 'WEBprofil - Gernot Ploiner e.U.',
	 'shy' => '',
	 'priority' => '',
	 'module' => '',
	 'state' => 'stable',
	 'internal' => '',
	 'uploadfolder' => '0',
	 'createDirs' => '',
	 'modify_tables' => '',
	 'clearCacheOnLoad' => 1,
	 'lockType' => '',
	 'version' => '1.1.1',
	 'constraints' => array(
		  'depends' => array(
				'typo3' => '6.2.0-7.6.99',
		  ),
		  'conflicts' => array(),
		  'suggests' => array(
				'gridelements' => ''
		  ),
	 ),
	 'autoload' =>
	 array(
		  'psr-4' =>
		  array(
				"MASK\\Mask\\" => "Classes/"
		  )
	 )
);
