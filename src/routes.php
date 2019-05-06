<?php

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;

return function (App $app) {
	$container = $app->getContainer();

	$app->get('/[{name}]', function (Request $request, Response $response, array $args) use ($container) {
		$container->get('logger')->info("Slim-Skeleton '/' route");

		if (isset($name)) {
			$message = "Hello $name!";
		} else {
			$message = "Hello world!";
		}

		return $response->withJson(compact('message'), 200);
	});
};
