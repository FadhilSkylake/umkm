<?php

namespace App\Models;

use CodeIgniter\Model;

class KegiatanModel extends Model
{
    protected $table = 'kegiatan';
    // protected $useTimestamps = true;
    protected $allowedFields = ['nama_kegiatan', 'slug', 'deskripsi', 'tempat_kegiatan', 'waktu_kegiatan', 'waktu_dibuat', 'dokumentasi'];

    public function getKegiatan($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
