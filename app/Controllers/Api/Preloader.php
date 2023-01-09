<?php

namespace App\Controllers\Api;

use App\Controllers\Api;
use Symfony\Component\HttpFoundation\Response;

class Preloader extends Api
{
	/**
	 * @param Response $response
	 * @return void
	 */
	public function index(Response $response): void
	{
		$texts = [];

		$json = json_encode($texts, JSON_UNESCAPED_UNICODE);

		$response->headers->set('Content-Type', 'application/json');
		$response->setStatusCode(200);
		$response->setContent($json);
		$response->send();
	}
}
