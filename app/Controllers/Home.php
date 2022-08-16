<?php

namespace App\Controllers;

use App\Models\KegiatanModel;

class Home extends BaseController
{
    protected $kegiatanModel;

    public function __construct()
    {
        $this->kegiatanModel = new KegiatanModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Home',
            'kegiatan' => $this->kegiatanModel->getKegiatan()
        ];

        return view('front/index', $data);
    }
}
