<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class InsertUsers extends Seeder
{
	public function run()
	{
		$data = [
			'name' => 'penjual',
			'email' => 'penjual@gmail.com',
			'password' => password_hash('penjual123', PASSWORD_BCRYPT),
			'role' => 'penjual'

		];
		$this->db->table('users')->Insert($data);
	}
}
