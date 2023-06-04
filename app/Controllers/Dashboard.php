<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    protected $usermodel;
    public function __construct()
    {
        $this->usermodel = new UserModel();
    }
    public function index()
    {
        $id_user = session('id_user');

        $data = [
            "page" => "Dashboard",
            "users" => $this->usermodel->getUserNameById($id_user)
        ];
        return view('dashboard/index', $data);
    }
}
