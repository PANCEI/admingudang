<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Gudang extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_gudang' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'gudang' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'gudang_created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'gudang_updated_at' => [
                'type' => 'DATETIME',
                'null' => true
            ]
        ]);
        $this->forge->addKey('id_gudang', true);
        $this->forge->createTable('gudang');
    }

    public function down()
    {
        $this->forge->dropTable('gudang');
    }
}
