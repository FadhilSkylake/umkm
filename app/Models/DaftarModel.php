<?php

namespace App\Models;

use CodeIgniter\Model;

class DaftarModel extends Model
{
    protected $table = 'daftar';
    protected $allowedFields = ['namalengkap', 'slug', 'nomor_ktp', 'ttl', 'no_telp', 'email', 'pendidikan', 'alamat', 'provinsi', 'kabupaten', 'kecamatan', 'kelurahan', 'kode_pos', 'rtrw', 'nama_usaha', 'bentuk_usaha', 'sektor_usaha', 'deskripsi_usaha', 'wilayah_usaha', 'no_telp_usaha', 'email_usaha', 'nib', 'npwp', 'izin_usaha', 'omzet', 'alamat_usaha', 'provinsi_usaha', 'kabupaten_usaha', 'kecamatan_usaha', 'kelurahan_usaha', 'kode_pos_usaha', 'rtrw_usaha'];

    public function getDaftar($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
