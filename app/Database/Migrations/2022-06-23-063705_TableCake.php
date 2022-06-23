<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TableCake extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'unsigned' => true,
				'auto_increment' => true,
			],
			'kode' => [
				'type' => 'INT',
				'constraint' => 3,
			],
			'nama' => [
				'type' => 'VARCHAR',
				'constraint' => 30,
			],
			'kategori' => [
				'type' => 'VARCHAR',
				'constraint' => 20,
			],
			'jumlah' => [
				'type' => 'INT',
				'constraint' => 5,
			],
			'harga' => [
				'type' => 'FLOAT',
				'constraint' => 7,
			],
			'deskripsi' => [
				'type' => 'VARCHAR',
				'constraint' => 100,
			]
		]);
		$this->forge->addPrimaryKey('id');
		$this->forge->addUniqueKey('kode');
		$this->forge->createTable('cake');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('cake');
	}
}
