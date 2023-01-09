<?php

use Carbon\Carbon;

/**
 * @param $date
 * @return string
 */
function timeAgo($date): string
{
	return Carbon::parse($date)->diffForHumans();
}

/**
 * @param $date
 * @param $format
 * @return string
 */
function timeConvert($date, $format): string
{
	return Carbon::parse($date)->translatedFormat($format);
}

/**
 * @param int|null $index
 * @return mixed
 */
function segments(int $index = null): mixed
{
	$baseUrl = config('BASE_URL');
	$baseArray = explode('/', trim(parse_url($baseUrl, PHP_URL_PATH) ?? '', '/'));

	$requestUri = $_SERVER['REQUEST_URI'];
	$parsedUrl = parse_url($requestUri, PHP_URL_PATH);
	$requestArray = explode('/', trim($parsedUrl ?? '', '/'));

	$diffArray = array_values(array_diff($requestArray, $baseArray));

	if ($index || $index === 0)
	{
		if (isset($diffArray[$index]))
		{
			return $diffArray[$index];
		}
		else
		{
			return false;
		}
	}
	else
	{
		return $diffArray;
	}
}

/**
 * @param float $par
 * @return string
 */
function turkishLira(float $par): string
{
	return number_format($par, 2, ',', '.');
}

/**
 * @param int $limit
 * @return string
 * @noinspection PhpLoopNeverIteratesInspection
 */
function hashid(int $limit = 11): string
{
	$chars = 'bcdfghjklmnpqrstvwxyz';
	$chars .= 'BCDFGHJKLMNPQRSTVWXYZ';
	$chars .= '0123456789';

	while (1)
	{
		$key = '';
		srand((double) microtime() * 1000000);

		for ($i = 0; $i < $limit; $i++)
		{
			$key .= substr($chars, (rand() % (strlen($chars))), 1);
		}

		break;
	}

	return $key;
}
