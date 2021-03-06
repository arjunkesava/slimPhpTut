<?php

require __DIR__ .'/../vendor/autoload.php';

$app = new \Slim\App([
    'settings' => [
		'displayErrorDetails' => true,
		'debug' => true,
		'determineRouteBeforeAppMiddleware' => true,
		'addContentLengthHeader' => false
    ]
]);

$container = $app->getContainer();

$container['view'] = function ($container) {
	$view = new \Slim\Views\Twig(__DIR__ . '/../resources/views',[
		'cache' => false,
	]);

	$view->addExtension(new \Slim\Views\TwigExtension(
		$container->router,
		$container->request->getUri()
	));

	return $view;
};

require __DIR__.'/../app/routes.php';