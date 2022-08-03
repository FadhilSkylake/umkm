<?php

namespace App\Controllers;

use \App\Models\DaftarModel;

class Daftar extends BaseController
{
    protected $pendaftaranModel;
    public function __construct()
    {
        $this->daftarModel = new DaftarModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Pendaftaran Anggota Baru UKM',
            'daftar' => $this->daftarModel->getDaftar()
        ];

        return view('back/index', $data);
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'Detail Pendaftar',
            'daftar' => $this->daftarModel->getDaftar($slug)
        ];

        //jika data enggak ada
        if (empty($data['daftar'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Nama Pendaftar'   . $slug .  ' tidak ditemukan.');
        }

        return view('back/detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Form Tambah Data Pendaftaran',
            'validation' => \Config\Services::validation()
        ];

        return view('back/pendaftaran/create', $data);
    }

    public function save()
    {
        // validasi input
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} nama harus di isi.'
                ]
            ],
            'npm' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} npm harus di isi.'
                ]
            ],
            'fakulas' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} fakultas harus di isi.'
                ]
            ],
            'no_telepon' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} no telepon harus di isi.'
                ]
            ],
            'alasan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} alasan harus di isi.'
                ]
            ]
        ])) {
            return redirect()->to('/front/pendaftaran/create')->withInput();
        }


        $slug = url_title($this->request->getVar('nama'), '-', true);
        $this->pendaftaranModel->save([
            'nama' => $this->request->getVar('nama'),
            'slug' => $slug,
            'npm' => $this->request->getVar('npm'),
            'fakultas' => $this->request->getVar('fakultas'),
            'telepon' => $this->request->getVar('telepon'),
            'ukm' => $this->request->getVar('ukm'),
            'alasan' => $this->request->getVar('alasan')
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan.');

        return redirect()->to('/pendaftaran');
    }

    public function delete($id)
    {

        $this->pendaftaranModel->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus.');
        return redirect()->to('/daftar');
    }

    public function edit($slug)
    {
        $data = [
            'title' => 'Form Edit Pendaftar',
            'validation' => \Config\Services::validation(),
            'daftar' => $this->daftarModel->getDaftar($slug)
        ];

        return view('back/edit', $data);
    }

    public function update($id)
    {
        $daftarLama = $this->daftarModel->getDaftar($this->request->getVar('slug'));
        if ($daftarLama['nama_lengkap'] == $this->request->getVar('nama_lengkap')) {
            $rule_nama = 'required';
        } else {
            $rule_nama = 'required';
        }

        if (!$this->validate([
            'nama_lengkap' => [
                'rules' => $rule_nama,
                'errors' => [
                    'required' => '{field} nama harus di isi.'
                ]
            ]
        ])) {
            return redirect()->to('/daftar/edit/' . $this->request->getVar('slug'))->withInput();
        }


        $slug = url_title($this->request->getVar('nama_lengkap'), '-', true);
        $this->daftarModel->save([
            'id' => $id,
            'nama_lengkap' => $this->request->getVar('nama_lengkap'),
            'slug' => $slug,
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
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Diubah.');

        return redirect()->to('/daftar');
    }
}
