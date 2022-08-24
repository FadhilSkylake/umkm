<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\DaftarModel;

class Kelola extends BaseController
{
    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->daftarModel = new DaftarModel();
    }
    public function index()
    {
        $session = session();
        $data = [
            'title' => 'Profile Umkm',
            'user' => $this->userModel->find($session->get('id')),
        ];
        $data['umkm'] = $this->userModel->join($session->get('id'));
        return view('profile/index', $data);
    }

    public function update($id)
    {
        $dataDiri = $this->userModel->find($id);

        $data = [
            'username' => $this->request->getVar('username'),
        ];
        $this->userModel->gantiDataUser($id, $data);
        $slug = url_title($this->request->getPost('namalengkap'), '-', true);
        $data2 = [
            'slug' => $slug,
            'nama_usaha' => $this->request->getVar('nama_usaha'),
            'namalengkap' => $this->request->getVar('namalengkap'),
        ];
        $this->daftarModel->gantiDataDaftar($dataDiri['daftar_id'], $data2);

        return redirect()->to('/kelola');
    }
}
