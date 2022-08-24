<?php

namespace App\Controllers;

use App\Models\KegiatanModel;
use App\Models\DaftarModel;
use App\Models\UserModel;

class Dashboard extends BaseController
{
    protected $kegiatanModel;

    public function __construct()
    {
        $this->kegiatanModel = new KegiatanModel();
        $this->daftarModel = new DaftarModel();
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $session = session();
        $data = [
            'title' => 'Website DKUPP',
            'kegiatan' => $this->kegiatanModel->getKegiatan(),
            'daftar' => $this->daftarModel->countAllResults(),
            'user' => $this->userModel->find($session->get('id'))
        ];

        return view('back/dashboard/index', $data);
    }
}
