<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Akses extends Migration
{

    public function up()
    {
        $this->forge->addField([
            'id_akses' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'akses' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'akses_created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'akses_updated_at' => [
                'type' => 'DATETIME',
                'null' => true
            ]
        ]);
        $this->forge->addKey('id_akses', true);
        $this->forge->createTable('akses');
    }

    public function down()
    {
        $this->forge->dropTable('akses');
    }
}
