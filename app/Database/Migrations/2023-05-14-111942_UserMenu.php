<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserMenu extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_menu' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_menu' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'urutan_menu' => [
                'type'       => 'INT',
                'constraint' => 5,
            ],
            'menu_created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'menu_updated_at' => [
                'type' => 'DATETIME',
                'null' => true
            ]
        ]);
        $this->forge->addKey('id_menu', true);
        $this->forge->createTable('usermenu');
    }

    public function down()
    {
        $this->forge->dropTable('usermenu');
    }
}
