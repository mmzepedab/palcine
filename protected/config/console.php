<?php

// This is the configuration for yiic console application.
// Any writable CConsoleApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Console Application',

	// preloading 'log' component
	'preload'=>array('log'),

	// application components
	'components'=>array(
//                MySQL database on PC Server
//                'db'=>array(
//                            'connectionString' => 'mysql:host=localhost;dbname=palcineweb',
//                            'emulatePrepare' => true,
//                            'username' => 'root',
//                            'password' => '',
//                            'charset' => 'utf8',
//                            'tablePrefix' => 'pal_',
//                    ),
            
//                //MySQL database on MAC Server
		'db'=>array(
			'connectionString' => 'mysql:host=127.0.0.1;port=8889;dbname=palcineweb;unix_socket:/Applications/MAMP/tmp/mysql/mysql.sock',
                        'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'root',
			'charset' => 'utf8',
                        'tablePrefix' => 'pal_',
		),
            
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
			),
		),
	),
    
        // Command Map
          'commandMap'=>array(
            'migrate'=>array(
              'class'=>'system.cli.commands.MigrateCommand',
              'migrationPath'=>'application.migrations',
              'migrationTable'=>'pal_migration',
              'connectionID'=>'db',
              //'templateFile'=>'application.migrations.template',
            ),
          ),
);