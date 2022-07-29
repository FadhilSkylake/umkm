<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Pendaftaran Anggota Baru UKM',
            'daftar' => $this->daftarModel->getDaftar()
        ];

        return view('back/login', $data);
    }
}
