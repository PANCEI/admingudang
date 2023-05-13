<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Gudang extends Seeder
{
    public function run()
    {
        $data = [
            "gudang" => "All",
            "gudang_created_at" => Time::now(),
            "gudang_updated_at" => Time::now(),

        ];
        $this->db->table('gudang')->insert($data);
    }
}
