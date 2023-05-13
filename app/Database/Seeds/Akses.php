<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Akses extends Seeder
{
    public function run()
    {
        $data = [
            "akses" => "Super Admin",
            "akses_created_at" => Time::now(),
            "akses_updated_at" => Time::now(),

        ];
        $this->db->table('akses')->insert($data);
    }
}
