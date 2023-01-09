<?php

namespace Core;

use Jenssegers\Blade\Blade;
use Valitron\Validator;

class View
{
	/**
	 * @var Validator
	 */
	private Validator $validator;

	public function __construct(Validator $validator)
	{
		$this->validator = $validator;
	}

	/**
	 * @param $view
	 * @param $data
	 * @return string
	 */
	public function show($view, $data): string
	{
		$blade = new Blade(
			dirname(__DIR__) . '/public/views',
			dirname(__DIR__) . '/public/cache'
		);

		$blade->share('errors', $this->validator->errors());

		return $blade->render($view, $data);
	}
}
