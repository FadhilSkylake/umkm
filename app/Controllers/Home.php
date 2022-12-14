<?php

namespace App\Controllers;

use App\Models\KegiatanModel;
use App\Models\DaftarModel;

class Home extends BaseController
{
    protected $kegiatanModel;

    public function __construct()
    {
        $this->kegiatanModel = new KegiatanModel();
        $this->daftarModel = new DaftarModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Website DKUPP',
            'kegiatan' => $this->kegiatanModel->getKegiatan(),
            'daftar' => $this->daftarModel->countAllResults()
        ];

        return view('front/index', $data);
    }
}
