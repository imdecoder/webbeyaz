<?php

namespace App\Controllers\Client;

use App\Controllers\Client;

class Vehicles extends Client
{
	/**
	 * @return string
	 */
	public function index(): string
	{
		return $this->view('pages.vehicles.index', $this->data);
	}

	/**
	 * @param $slug
	 * @return string
	 */
	public function detail($slug): string
	{


		return $this->view('pages.vehicles.detail', $this->data);
	}
}
