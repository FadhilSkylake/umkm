<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Pendaftaran Anggota Baru UKM',
        ];

        return view('back/login');
    }
}
