<?php

namespace App\Controllers\Client\Panel\Auth;

use App\Controllers\Client;

class Logout extends Client
{
	public function index()
	{
		session()->clear();

		header('Location: ' . site_url('panel/login'));
		exit;
	}
}
