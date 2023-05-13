<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class User extends Seeder
{
    public function run()
    {
        $data = [
            "username" => "aswar",
            "id_akses" => 1,
            "id_gudang" => 1,
            "password" => "$2y$10$6747HLPski/LmgxsK41CK.IPw2aZ98Xr1hNfx54gsq7L816aedvq6",
            "telpon" => "081343469728",
            "aktif" => 1,
            "foto" => "default.png",
            "user_created_at" => Time::now(),
            "user_updated_at" => Time::now(),

        ];
        $this->db->table('user')->insert($data);
    }
}
