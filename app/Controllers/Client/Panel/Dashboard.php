<?php

namespace App\Controllers\Client\Panel;

use App\Controllers\Client;

class Dashboard extends Client
{
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * @return string
	 */
	public function index(): string
	{
		return $this->view('panel.pages.dashboard', $this->data);
	}
}
