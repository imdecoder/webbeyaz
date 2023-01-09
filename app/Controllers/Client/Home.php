<?php

namespace App\Controllers\Client;

use App\Controllers\Client;

class Home extends Client
{
	/**
	 * @return string
	 */
	public function index(): string
	{
		return $this->view('client.pages.home', $this->data);
	}
}
