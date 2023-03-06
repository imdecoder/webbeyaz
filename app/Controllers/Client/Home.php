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
		return $this->view('pages.home', $this->data);
	}
}
