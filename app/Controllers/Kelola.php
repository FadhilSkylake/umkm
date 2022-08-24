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
            'namalengkap' => $this->request->getVar('namalengkap'),
            'nomor_ktp' => $this->request->getVar('nomor_ktp'),
            'ttl' => $this->request->getVar('ttl'),
            'no_telp' => $this->request->getVar('no_telp'),
            'email' => $this->request->getVar('email'),
            'pendidikan' => $this->request->getVar('pendidikan'),
            'alamat' => $this->request->getVar('alamat'),
            'provinsi' => $this->request->getVar('provinsi'),
            'kabupaten' => $this->request->getVar('kabupaten'),
            'kecamatan' => $this->request->getVar('kecamatan'),
            'kelurahan' => $this->request->getVar('kelurahan'),
            'kode_pos' => $this->request->getVar('kode_pos'),
            'rtrw' => $this->request->getVar('rtrw'),
            'nama_usaha' => $this->request->getVar('nama_usaha'),
            'bentuk_usaha' => $this->request->getVar('bentuk_usaha'),
            'sektor_usaha' => $this->request->getVar('sektor_usaha'),
            'deskripsi_usaha' => $this->request->getVar('deskripsi_usaha'),
            'wilayah_usaha' => $this->request->getVar('wilayah_usaha'),
            'tahun_berdiri' => $this->request->getVar('tahun_berdiri'),
            'no_telp_usaha' => $this->request->getVar('no_telp_usaha'),
            'email_usaha' => $this->request->getVar('email_usaha'),
            'nib' => $this->request->getVar('nib'),
            'npwp' => $this->request->getVar('npwp'),
            'izin_usaha' => $this->request->getVar('izin_usaha'),
            'omzet' => $this->request->getVar('omzet'),
            'alamat_usaha' => $this->request->getVar('alamat_usaha'),
            'provinsi_usaha' => $this->request->getVar('provinsi_usaha'),
            'kabupaten_usaha' => $this->request->getVar('kabupaten_usaha'),
            'kecamatan_usaha' => $this->request->getVar('kecamatan_usaha'),
            'kelurahan_usaha' => $this->request->getVar('kelurahan_usaha'),
            'kode_pos_usaha' => $this->request->getVar('kode_pos_usaha'),
            'rtrw_usaha' => $this->request->getVar('rtrw_usaha')

        ];
        $this->daftarModel->gantiDataDaftar($dataDiri['daftar_id'], $data2);

        return redirect()->to('/kelola');
    }
}
