<?php

namespace App\Middlewares;

class UserCheckAuth
{
	public function handle()
	{
		$userLogin = session()->segment->get('user_login');

		// TODO: 'logout' segmentini kontrol et!
		if (!$userLogin && !array_intersect(segments(), ['login', 'logout']))
		{
			header('Location: ' . site_url('panel/login'));
			exit;
		}

		if ($userLogin && array_intersect(segments(), ['login']))
		{
			header('Location: ' . site_url('panel/dashboard'));
			exit;
		}

		return true;
	}
}
