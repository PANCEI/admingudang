<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table            = 'user';
    protected $primaryKey       = 'id_user';
    protected $allowedFields    = ['id_akses', 'username', 'password', 'telpon', 'aktif', 'foto'];

    // Dates
    protected $useTimestamps = true;
    protected $createdField  = 'user_created_at';
    protected $updatedField  = 'user_updated_at';

    // join table 
    protected $table2   = "akses";
    protected $on       = "akses.id_akses = user.id_akses";
    protected $table3 = "gudang";
    protected $on2 = "gudang.id_gudang = user.id_gudang";

    public function getUsername($username)
    {
        return $this->where(['username' => $username])
            ->join($this->table2, $this->on)
            ->join($this->table3, $this->on2)
            ->first();
    }
    public function getUserNameById($id)
    {
        return $this->where(['id_user' => $id])
            ->join($this->table2, $this->on)
            ->join($this->table3, $this->on2)
            ->first();
    }
}
