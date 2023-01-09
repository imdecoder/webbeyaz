<?php

namespace App\Controllers\Client;

use App\Controllers\Client;

class Error extends Client
{
	/**
	 * @return string
	 */
	public function index(): string
	{
		return $this->view('client.pages.error', $this->data);
	}
}
