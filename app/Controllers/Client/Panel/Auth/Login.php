<?php

namespace App\Controllers\Panel\Auth;

use App\Controllers\Panel;
use Symfony\Component\HttpFoundation\Request;
use PDO;

class Login extends Panel
{
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * @param Request $request
	 * @return string
	 */
	public function index(Request $request): string
	{
		$error = [];

		if ($request->getMethod() == 'POST')
		{
			$rules = [
				'required' => [
					'username',
					'password'
				]
			];

			$this->validator->rules($rules);

			if ($this->validator->validate())
			{
				$data = $this->validator->data();

				$username = $data['username'];
				$password = md5($data['password']);

				$sql = "SELECT
					id
				FROM users
				WHERE
				    banned = 0 AND
				    status = 1 AND
				    (username = '$username' AND password = '$password')";

				$query = $this->db->query($sql)->fetch(PDO::FETCH_OBJ);

				if ($query)
				{
					session()->segment->set('panel_login', true);
					session()->segment->set('user_login', true);
					session()->segment->set('user_id', $query->id);

					header('Location: ' . site_url('panel/dashboard'));
					exit;
				}
				else
				{
					$error = [
						'class' => 'danger',
						'text' => 'Credentials incorrect.'
					];
				}
			}
			else
			{
				$error = [
					'class' => 'warning',
					'text' => 'Please don\'t leave any blank spaces.'
				];
			}
		}

		$this->data['error'] = $error;

		return $this->view('panel.pages.auth.login', $this->data);
	}
}
