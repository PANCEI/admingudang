<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use \App\Models\UserModel;

class Login extends BaseController
{
    protected $usermodel;
    public function __construct()
    {
        helper('form');
        $this->usermodel = new UserModel();
    }
    public function index()
    {
        return view("login/index");
    }
    public function cek()
    {


        if (!$this->validate([
            "username" => "required",
            "password" => "required"
        ])) {
            // $validasi = \Config\Services::validation();

            return redirect()->to('/login')->withInput();
        }
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        // cek user dalam database 
        $user = $this->usermodel->getUsername($username);
        //jika user ada 
        if ($user) {
            var_dump($user);
            // periksa apakah user ada atau tidak
            if ($user['aktif'] == 1) {
                // cek password
                if (password_verify($password, $user['password'])) {
                    // buat session yang akan di gunakan nanti
                    $data = [
                        "id_user" => $user['id_user'],
                        "id_gudang" => $user['gudang'],
                        'id_akses' => $user['id_akses']
                    ];
                    session()->set($data);
                    return redirect()->to('Dashboard');
                } else {
                    session()->setFlashdata('error', 'Password Yang Anda Masukan Salah');
                    return redirect()->to('/login')->withInput();
                }
            } else {
                session()->setFlashdata('error', 'Akun Anda Tidak Aktif Silahhka Hubungi Admin');
                return redirect()->to('/login')->withInput();
            }
        } else {
            session()->setFlashdata('error', 'Username Yang Anda masukan Tidak Terdaftars');
            return redirect()->to('/login')->withInput();
        }
    }
    public function Out()
    {
        $data = ["id_user", "id_akses", "id_gudang"];
        session()->remove($data);
        session()->set('');
        session()->setFlashdata('success', "Log Out Berhasil");
        return redirect()->to('/Login');
    }
}
