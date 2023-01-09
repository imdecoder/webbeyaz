<?php

namespace Core;

class Controller extends Bootstrap
{
	/**
	 * @param $view
	 * @param array $data
	 * @return string
	 */
	public function view($view, array $data = []): string
	{
		return $this->view->show($view, $data);
	}
}
