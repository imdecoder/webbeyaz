<?php

namespace App\Middlewares;

class UserCheckAuth
{
	public function handle()
	{
		$panelLogin = session()->segment->get('panel_login');

		// TODO: 'logout' segmentini kontrol et!
		if (!$panelLogin && !array_intersect(segments(), ['login', 'logout']))
		{
			header('Location: ' . site_url('panel/login'));
			exit;
		}

		if ($panelLogin && array_intersect(segments(), ['login']))
		{
			header('Location: ' . site_url('panel/dashboard'));
			exit;
		}

		return true;
	}
}
