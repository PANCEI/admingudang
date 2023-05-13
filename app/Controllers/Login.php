<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Login extends BaseController
{
    public function index()
    {
        helper('form');
        if (!$this->request->is('post')) {
            return view('login/index');
        }

        $post = $this->request->getPost(['username', 'password']);
        if (!$this->validateData($post, [
            'username' => 'required',
            'password'  => 'required',
        ])) {
            // The validation fails, so returns the form.
            return view('login/index');
        }else{
            
        }
    }
}
