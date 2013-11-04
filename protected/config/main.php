<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'palCine',        
        'language'=>'es',
        'sourceLanguage' => 'es_es',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>false,
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
            
                'rbam'=>array(
                    // RBAM Configuration
                ),
	),

	// application components
	'components'=>array(
                'image'=>array(     
                    'class'=>'application.extensions.image.CImageComponent',            
                    'driver'=>'GD', 
                ), 
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'urlFormat'=>'path',
                        'showScriptName'=>true,
                        /*'caseSensitive'=>false,*/
			'rules'=>array(
                                'movie/<id:\d+>'=>'movie/view',
                                'movies/<tag:.*?>'=>'movie/index',
				
                            
                                // REST patterns
                                array('api/list', 'pattern'=>'api/<model:\w+>', 'verb'=>'GET'),
                                array('api/view', 'pattern'=>'api/<model:\w+>/<id:\d+>', 'verb'=>'GET'),
                            
                                // Other controllers
                                '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
                                '<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		
		 //MySQL database on PC Server
//                'db'=>array(
//                            'connectionString' => 'mysql:host=localhost;dbname=palcineweb',
//                            'emulatePrepare' => true,
//                            'username' => 'root',
//                            'password' => '',
//                            'charset' => 'utf8',
//                            'tablePrefix' => 'pal_',
//                    ),
            
////                //MySQL database on MAC Server
		'db'=>array(
			'connectionString' => 'mysql:host=127.0.0.1;port=8889;dbname=palcineweb;unix_socket:/Applications/MAMP/tmp/mysql/mysql.sock',
                        'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'root',
			'charset' => 'utf8',
                        'tablePrefix' => 'pal_',
		),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);