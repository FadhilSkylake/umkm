<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['username', 'password_hash', 'email', 'role_id', 'is_active', 'image', 'daftar_id', 'role_id'];

    public function join($id)
    {
        $builder = $this->db->table('users');
        $builder->select('users.id, users.username, users.role_id, daftar.*');
        $builder->join('daftar', 'users.daftar_id = daftar.id');
        $builder->where('users.id', $id);
        $query = $builder->get();
        return $query->getRowArray();
    }

    public function gantiDataUser($id, $data)
    {
        $this->set('username', $data['username']);
        $this->where('id', $id);
        return $this->update();
    }
}
