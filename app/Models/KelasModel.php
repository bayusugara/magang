<?php

namespace App\Models;

use CodeIgniter\Model;

class KelasModel extends Model
{
    protected $table = 'kelas';
    protected $primaryKey = 'id_kelas';

    public function tampil($id_jurusan)
    {
        // return $this->where(['id_fakultas' => $id_fakultas])->first();
        return $this->where(['id_jurusan' => $id_jurusan])->findAll();
    }
}
