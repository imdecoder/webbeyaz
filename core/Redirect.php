<?php

namespace Core;

use Symfony\Component\HttpFoundation\RedirectResponse;

class Redirect
{
	/**
	 * @var Redirect
	 */
	private static Redirect $instance;

	/**
	 * @var string
	 */
	public string $url;

	/**
	 * @var int
	 */
	public int $statusCode = 302;

	/**
	 * @param $url
	 * @return Redirect
	 */
	public static function getInstance($url): Redirect
	{
		if (!isset(self::$instance))
		{
			self::$instance = new self($url);
		}

		return self::$instance;
	}

	public function __construct($url)
	{
		$this->url = $url ?? site_url();
	}

	/**
	 * @param $statusCode
	 * @return $this
	 */
	public function statusCode($statusCode): static
	{
		$this->statusCode = $statusCode;
		return $this;
	}

	/**
	 * @param $msg
	 * @return $this
	 */
	public function with($msg): static
	{
		setcookie('msg', rawurlencode($msg), time() + 1, '/');
		return $this;
	}

	/**
	 * @return void
	 */
	public function send(): void
	{
		if ($this->url === 'referer')
		{
			$this->url = $_SERVER['HTTP_REFERER'] ?? site_url();
		}

		$redirect = new RedirectResponse($this->url, $this->statusCode);
		$redirect->send();
	}
}
