<?php

namespace App\Controllers\Client\Panel;

use App\Controllers\Client;

class Logout extends Client
{
	public function index()
	{
		session()->clear();

		header('Location: ' . site_url());
		exit;
	}
}
