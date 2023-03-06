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
		return $this->view('pages.error', $this->data);
	}
}
