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
        $this->set('slug', $data['slug']);
        $this->set('namalengkap', $data['namalengkap']);
        $this->set('nomor_ktp', $data['nomor_ktp']);
        $this->set('ttl', $data['ttl']);
        $this->set('no_telp', $data['no_telp']);
        $this->set('email', $data['email']);
        $this->set('pendidikan', $data['pendidikan']);
        $this->set('alamat', $data['alamat']);
        $this->set('provinsi', $data['provinsi']);
        $this->set('kabupaten', $data['kabupaten']);
        $this->set('kecamatan', $data['kecamatan']);
        $this->set('kelurahan', $data['kelurahan']);
        $this->set('kode_pos', $data['kode_pos']);
        $this->set('rtrw', $data['rtrw']);
        $this->set('nama_usaha', $data['nama_usaha']);
        $this->set('bentuk_usaha', $data['bentuk_usaha']);
        $this->set('sektor_usaha', $data['sektor_usaha']);
        $this->set('deskripsi_usaha', $data['deskripsi_usaha']);
        $this->set('wilayah_usaha', $data['wilayah_usaha']);
        $this->set('tahun_berdiri', $data['tahun_berdiri']);
        $this->set('no_telp_usaha', $data['no_telp_usaha']);
        $this->set('email_usaha', $data['email_usaha']);
        $this->set('nib', $data['nib']);
        $this->set('npwp', $data['npwp']);
        $this->set('izin_usaha', $data['izin_usaha']);
        $this->set('provinsi_usaha', $data['provinsi_usaha']);
        $this->set('kabupaten_usaha', $data['kabupaten_usaha']);
        $this->set('kecamatan_usaha', $data['kecamatan_usaha']);
        $this->set('kelurahan_usaha', $data['kelurahan_usaha']);
        $this->set('kode_pos_usaha', $data['kode_pos_usaha']);
        $this->set('rtrw_usaha', $data['rtrw_usaha']);
        if (count($data) == 34) {
            $this->set('nib_img', $data['nib_img']);
        }

        $this->where('id', $id);
        return $this->update();
    }
}
