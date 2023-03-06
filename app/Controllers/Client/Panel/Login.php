<?php

namespace App\Controllers\Client\Panel;

use App\Controllers\Client;
use PDO;
use Symfony\Component\HttpFoundation\Request;

class Login extends Client
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
			    status = 1 AND deleted_at IS NULL AND
			    (username = '{$username}' AND password = '{$password}')";

				$query = $this->db->query($sql)->fetch(PDO::FETCH_OBJ);

				if ($query)
				{
					session()->segment->set('user_login', true);
					session()->segment->set('user_id', $query->id);

					header('Location: ' . site_url());
					exit;
				}
				else
				{
					$error = [
						'class' => 'danger',
						'text' => 'Kullanıcı adı veya şifre yanlış.'
					];
				}
			}
			else
			{
				$error = [
					'class' => 'warning',
					'text' => 'Lütfen boş alan bırakmayın.'
				];
			}
		}

		$this->data['error'] = $error;

		return $this->view('pages.panel.login', $this->data);
	}
}
