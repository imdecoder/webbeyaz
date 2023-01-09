<?php

namespace Core;

use Aura\Session\Segment;
use Aura\Session\SessionFactory;

class Session
{
	/**
	 * @var Segment
	 */
	public Segment $segment;

	/**
	 * @var Session
	 */
	private static Session $instance;

	/**
	 * @return Session
	 */
	public static function getInstance(): Session
	{
		if (!isset(self::$instance))
		{
			self::$instance = new Session();
		}

		return self::$instance;
	}

	public function __construct()
	{
		$session_factory = new SessionFactory();
		$session = $session_factory->newInstance($_COOKIE);
		$this->segment = $session->getSegment('eniyisigorta');
	}

	/**
	 * @return void
	 */
	public function clear(): void
	{
		$this->segment->clear();
	}
}
