<?php

namespace App\Controllers;

use \App\Models\KegiatanModel;
use App\Models\UserModel;

class kegiatan extends BaseController
{
    protected $kegiatanModel;
    public function __construct()
    {
        $this->kegiatanModel = new KegiatanModel();
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $session = session();
        $data = [
            'title' => 'Kelola Kegiatan',
            'kegiatan' => $this->kegiatanModel->getKegiatan(),
            'user' => $this->userModel->find($session->get('id'))
        ];
        return view('kegiatan/index', $data);
        // return view('template/index');
    }

    public function detail($slug)
    {
        $session = session();
        $data = [
            'title' => 'Detail Kegiatan',
            'kegiatan' => $this->kegiatanModel->getKegiatan($slug),
            'user' => $this->userModel->find($session->get('id'))
        ];

        //jika data enggak ada
        if (empty($data['kegiatan'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Kegiatan'   . $slug .  ' tidak ditemukan.');
        }

        return view('kegiatan/detail', $data);
    }

    public function create()
    {
        $session = session();
        $data = [
            'title' => 'Tambah Kegiatan',
            'validation' => \Config\Services::validation(),
            'user' => $this->userModel->find($session->get('id'))
        ];
        return view('kegiatan/create', $data);
        // return view('template/index');
    }

    public function save()
    {
        // validasi input
        // if (!$this->validate([
        //     'logo' => [
        //         'rules' => 'is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png]',
        //         'errors' => [
        //             // 'max_size' => 'ukuran nya kegedean',
        //             'is_image' => 'yang kamu pilih bukan gambar',
        //             'mime_in' => 'yang kamu pilih bukan gambar'
        //         ]
        //     ]
        // ])) {
        //     return redirect()->to('/pdapus/create')->withInput();
        // }

        //ambil gambar
        $fileDokumentasi = $this->request->getFile('dokumentasi');

        //jika gaada gambar yang di upload
        if ($fileDokumentasi->getError() == 4) {
            $namaDokumentasi = 'default.jpg';
        } else {

            //generate nama sampul random
            $namaDokumentasi = $fileDokumentasi->getRandomName();

            //pindahkan file gem img
            $fileDokumentasi->move('img', $namaDokumentasi);
        }



        $slug = url_title($this->request->getVar('nama_kegiatan'), '-', true);
        $this->kegiatanModel->save([
            'nama_kegiatan' => $this->request->getVar('nama_kegiatan'),
            'slug' => $slug,
            'deskripsi' => $this->request->getVar('deskripsi'),
            'tempat_kegiatan' => $this->request->getVar('tempat_kegiatan'),
            'waktu_kegiatan' => $this->request->getVar('waktu_kegiatan'),
            'waktu_dibuat' => $this->request->getVar('waktu_dibuat'),
            'dokumentasi' => $namaDokumentasi
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan.');

        return redirect()->to('/kegiatan');
    }

    public function delete($id)
    {
        //cari gambar berdasarkan id
        $kegiatan = $this->kegiatanModel->find($id);

        //jika gambar default
        if ($kegiatan['dokumentasi'] != 'default.jpg') {

            //hapus gambar
            unlink('img/' . $kegiatan['dokumentasi']);
        }

        $this->kegiatanModel->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus.');
        return redirect()->to('/kegiatan');
    }

    public function edit($slug)
    {
        $session = session();
        $data = [
            'title' => 'Edit Kegiatan',
            'validation' => \Config\Services::validation(),
            'kegiatan' => $this->kegiatanModel->getKegiatan($slug),
            'user' => $this->userModel->find($session->get('id'))
        ];
        return view('kegiatan/edit', $data);
        // return view('template/index');
    }

    public function update($id)
    {
        $kegiatanLama = $this->kegiatanModel->getKegiatan($this->request->getVar('slug'));
        if ($kegiatanLama['nama_kegiatan'] == $this->request->getVar('nama_kegiatan')) {
            $rule_kegiatan = 'required';
        } else {
            $rule_kegiatan = 'required';
        }

        if (!$this->validate([
            'nama_kegiatan' => [
                'rules' => $rule_kegiatan,
                'errors' => [
                    'required' => '{field} nama harus di isi.',
                ]
            ],
            'dokumentasi' => [
                'rules' => 'is_image[dokumentasi]|mime_in[dokumentasi,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'is_image' => 'yang kamu pilih bukan gambar',
                    'mime_in' => 'yang kamu pilih bukan gambar'
                ]
            ]
        ])) {
            return redirect()->to('/kegiatan/edit/' . $this->request->getVar('slug'))->withInput();
        }

        $fileDokumentasi = $this->request->getFile('dokumentasi');

        //cek gambar, apakah tetap gambar lama
        if ($fileDokumentasi->getError() == 4) {
            $namaDokumentasi = $this->request->getVar('dokumentasiLama');
        } else {
            //generate nama file random
            $namaDokumentasi = $fileDokumentasi->getRandomName();
            //pindahkan gambar
            $fileDokumentasi->move('img', $namaDokumentasi);
            //hapus file lama
            unlink('img/' . $this->request->getVar('dokumentasiLama'));
        }

        $slug = url_title($this->request->getVar('nama_kegiatan'), '-', true);
        $this->kegiatanModel->save([
            'id' => $id,
            'nama_kegiatan' => $this->request->getVar('nama_kegiatan'),
            'slug' => $slug,
            'deskripsi' => $this->request->getVar('deskripsi'),
            'tempat_kegiatan' => $this->request->getVar('tempat_kegiatan'),
            'waktu_kegiatan' => $this->request->getVar('waktu_kegiatan'),
            'waktu_dibuat' => $this->request->getVar('waktu_dibuat'),
            'dokumentasi' => $namaDokumentasi
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Diubah.');

        return redirect()->to('/kegiatan');
    }
}
