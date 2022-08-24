<?php

namespace App\Models;

use CodeIgniter\Model;

class DaftarModel extends Model
{
    protected $table = 'daftar';
    protected $allowedFields = ['namalengkap', 'slug', 'nomor_ktp', 'ttl', 'no_telp', 'email', 'pendidikan', 'alamat', 'provinsi', 'kabupaten', 'kecamatan', 'kelurahan', 'kode_pos', 'rtrw', 'nama_usaha', 'bentuk_usaha', 'sektor_usaha', 'deskripsi_usaha', 'wilayah_usaha', 'no_telp_usaha', 'email_usaha', 'nib', 'npwp', 'izin_usaha', 'omzet', 'alamat_usaha', 'provinsi_usaha', 'kabupaten_usaha', 'kecamatan_usaha', 'kelurahan_usaha', 'kode_pos_usaha', 'rtrw_usaha', 'nib_img'];

    public function getDaftar($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    public function NyokotDataTerakhir()
    {
        $builder = $this->db->table('daftar');
        $builder->limit(1)->orderBy('id', 'desc');
        return $builder->get()->getRowArray();
    }

    public function gantiDataDaftar($id, $data)
    {
        $this->set('nama_usaha', $data['nama_usaha']);
        $this->set('slug', $data['slug']);
        $this->set('namalengkap', $data['namalengkap']);
        $this->where('id', $id);
        return $this->update();
    }
}
