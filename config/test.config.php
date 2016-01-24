<?php

return [

	'App' => [
		'namespace' => 'App',
		'view' => dirname(__FILE__) . '/../src/View',
		'layout' => dirname(__FILE__) . '/../src/Layout'
		'element' => dirname(__FILE__) . '/../src/View/Element'
	],
	'Database'=>[
		'MySql'=>[
			'dns'=>'mysql:dbname=example;host=localhost;charset=utf8;',
			'user'=>'****',
			'password'=>'****'
		],
		'Sqlite'=>[
			'dns'=>'sqlite:test.sqlite3'
		]
	],
	'Security'=>[
		'salt' => 'dfadfas4fq34t98t53qq98gq85g9q3gq389grkgklfmba'
	],
	'Debug'=>[
		'level'=>1
	]


];
