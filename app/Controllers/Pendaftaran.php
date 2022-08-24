<?php

namespace App\Controllers;

use \App\Models\UserModel;
use \App\Models\DaftarModel;

class Pendaftaran extends BaseController
{
    protected $daftarModel;
    protected $userModel;
    public function __construct()
    {
        $this->daftarModel = new DaftarModel();
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Form Tambah Data Pendaftaran',
            'validation' => \Config\Services::validation()
        ];

        return view('front/pendaftaran', $data);
    }

    public function save()
    {
        // validasi input
        // if (!$this->validate([
        //     'nama' => [
        //         'rules' => 'required',
        //         'errors' => [
        //             'required' => '{field} nama harus di isi.'
        //         ]
        //     ],
        //     'npm' => [
        //         'rules' => 'required',
        //         'errors' => [
        //             'required' => '{field} npm harus di isi.'
        //         ]
        //     ],
        //     'fakulas' => [
        //         'rules' => 'required',
        //         'errors' => [
        //             'required' => '{field} fakultas harus di isi.'
        //         ]
        //     ],
        //     'no_telepon' => [
        //         'rules' => 'required',
        //         'errors' => [
        //             'required' => '{field} no telepon harus di isi.'
        //         ]
        //     ],
        //     'alasan' => [
        //         'rules' => 'required',
        //         'errors' => [
        //             'required' => '{field} alasan harus di isi.'
        //         ]
        //     ]
        // ])) {
        //     return redirect()->to('formpendaftaran')->withInput();
        // }

        $fileNib = $this->request->getFile('nib_img');

        //cek gambar, apakah tetap gambar lama
        if ($fileNib->getError() == 4) {
            $namaNib = $this->request->getVar('nibLama');
        } else {
            //generate nama file random
            $namaNib = $fileNib->getRandomName();
            //pindahkan gambar
            $fileNib->move('img', $namaNib);
            //hapus file lama
            // unlink('img/' . $this->request->getVar('nibLama'));
        }

        $slug = url_title($this->request->getPost('namalengkap'), '-', true);
        $this->daftarModel->save([
            'namalengkap' => $this->request->getPost('namalengkap'),
            'slug' => $slug,
            'nomor_ktp' => $this->request->getPost('nomor_ktp'),
            'ttl' => $this->request->getPost('ttl'),
            'no_telp' => $this->request->getPost('no_telp'),
            'email' => $this->request->getPost('email'),
            'pendidikan' => $this->request->getPost('pendidikan'),
            'alamat' => $this->request->getPost('alamat'),
            'provinsi' => $this->request->getPost('provinsi'),
            'kabupaten' => $this->request->getPost('kabupaten'),
            'kecamatan' => $this->request->getPost('kecamatan'),
            'kelurahan' => $this->request->getPost('kelurahan'),
            'kode_pos' => $this->request->getPost('kode_pos'),
            'rtrw' => $this->request->getPost('rtrw'),
            'nama_usaha' => $this->request->getPost('nama_usaha'),
            'bentuk_usaha' => $this->request->getPost('bentuk_usaha'),
            'sektor_usaha' => $this->request->getPost('sektor_usaha'),
            'deskripsi_usaha' => $this->request->getPost('deskripsi_usaha'),
            'wilayah_usaha' => $this->request->getPost('wilayah_usaha'),
            'tahun_berdiri' => $this->request->getPost('tahun_berdiri'),
            'no_telp_usaha' => $this->request->getPost('no_telp_usaha'),
            'email_usaha' => $this->request->getPost('email_usaha'),
            'nib' => $this->request->getPost('nib'),
            'npwp' => $this->request->getPost('npwp'),
            'izin_usaha' => $this->request->getPost('izin_usaha'),
            'omzet' => $this->request->getPost('omzet'),
            'alamat_usaha' => $this->request->getPost('alamat_usaha'),
            'provinsi_usaha' => $this->request->getPost('provinsi_usaha'),
            'kabupaten_usaha' => $this->request->getPost('kabupaten_usaha'),
            'kecamatan_usaha' => $this->request->getPost('kecamatan_usaha'),
            'kelurahan_usaha' => $this->request->getPost('kelurahan_usaha'),
            'kode_pos_usaha' => $this->request->getPost('kode_pos_usaha'),
            'rtrw_usaha' => $this->request->getPost('rtrw_usaha'),
            'nib_img' => $namaNib
        ]);
        $data = $this->daftarModel->NyokotDataTerakhir();

        $this->userModel->save([
            'username' => $this->request->getPost('username'),
            'password_hash' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'email' => $this->request->getPost('email'),
            'fullname' => $this->request->getPost('namalengkap'),
            'daftar_id' => $data['id'],
            'role_id' => 2
        ]);

        session()->setFlashdata('pesan', 'Berhasil Daftar');

        return redirect()->to('/login');
    }
}
