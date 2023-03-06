<?php

namespace App\Controllers;

use Core\Controller;
use PDO;

class Client extends Controller
{
	public array $data = [];

	public function __construct()
	{
		parent::__construct();

		$this->data['user_logged'] = $this->userLogged();
		$this->data['user_data'] = $this->userData();
	}

	public function userLogged()
	{
		return session()->segment->get('user_login');
	}

	public function userData()
	{
		$id = session()->segment->get('user_id');

		$query = $this->db->query("
			SELECT *
			FROM users
			WHERE
			    (status = 1 AND deleted_at IS NULL) AND
				id = '{$id}'
		")->fetch(PDO::FETCH_OBJ);

		return $query ?: null;
	}
}
