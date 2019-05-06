<?php
return [
	'settings' => [
		'displayErrorDetails' => true,
		'addContentLengthHeader' => false,
		'logger' => [
			'name' => 'slim-app',
			'path' => isset($_ENV['docker']) ? 'php://stdout' : __DIR__ . '/../logs/app.log',
			'level' => \Monolog\Logger::DEBUG
		],
	],
];
