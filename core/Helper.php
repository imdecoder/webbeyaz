<?php

use Arrilot\DotEnv\DotEnv;
use Core\Session;
use Core\Upload;
use Core\Redirect;

/**
 * @param $key
 * @param $default
 * @return mixed
 */
function config($key, $default = null): mixed
{
	return DotEnv::get($key, $default);
}

/**
 * @return Session
 */
function session(): Session
{
	return Session::getInstance();
}

/**
 * @param $name
 * @return Upload
 */
function upload($name): Upload
{
	return Upload::getInstance($name);
}

/**
 * @param $url
 * @return Redirect
 */
function redirect($url): Redirect
{
	return Redirect::getInstance($url);
}

/**
 * @param $name
 * @return bool|string
 */
function cookie($name): bool|string
{
	if (isset($_COOKIE[$name]))
	{
		return rawurldecode($_COOKIE[$name]);
	}

	return false;
}

/**
 * @param string $url
 * @return string
 */
function site_url(string $url = ''): string
{
	return config('BASE_URL') . '/' . $url;
}

/**
 * @param string $url
 * @return string
 */
function asset_url(string $url = ''): string
{
	return site_url('public/assets/' . $url);
}

/**
 * @param string $url
 * @return string
 */
function upload_url(string $url = ''): string
{
	return site_url('uploads/' . $url);
}
