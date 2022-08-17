<?php

namespace App\Controllers;

use \App\Models\DaftarModel;

class Umkm extends BaseController
{
    public function __construct()
    {
        $this->daftarModel = new DaftarModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Halaman Data Umkm',
            'daftar' => $this->daftarModel->getDaftar()
        ];

        return view('front/umkm', $data);
    }
}
