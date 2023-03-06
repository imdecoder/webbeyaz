<?php

$app->router->notFound(function () {
	$error = new App\Controllers\Client\Error;
	return $error->index();
});

$app->router->error(function () {
	$error = new App\Controllers\Client\Error;
	return $error->index();
});

/*
 * Client Routes
 */
$app->router->get('/', 'Client.Home@index');

$app->router->group('/araclar', function ($router) {
	$router->get('/', 'Client.Vehicles@index');
	$router->get('/:slug', 'Client.Vehicles@detail');
});

$app->router->group('/panel', function ($router) {
	$router->get('/', function () {
		header('Location: ' . site_url('panel/profile'));
		exit;
	});

	$router->any('/login', 'Client.Panel.Login@index');
	$router->get('/logout', 'Client.Panel.Logout@index');

	$router->get('/dashboard', 'Client.Panel.Dashboard@index');
}, ['before' => 'UserCheckAuth']);

/*
 * API Routes
 */
$app->router->group('/api', function ($router) {
	//$router->xget('/preloader', 'Api.Preloader@index');
});
