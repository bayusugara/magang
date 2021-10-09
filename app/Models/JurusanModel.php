<?php

namespace App\Models;

use CodeIgniter\Model;

class JurusanModel extends Model
{
    protected $table = 'jurusan';
    protected $primaryKey = 'id_jurusan';

    public function tampil($id_fakultas)
    {
        // return $this->where(['id_fakultas' => $id_fakultas])->first();
        return $this->where(['id_fakultas' => $id_fakultas])->findAll();
    }
}
