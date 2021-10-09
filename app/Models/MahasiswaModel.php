<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table = 'mahasiswa';
    protected $primaryKey = 'nim';
    protected $allowedFields = ['nim','nama','fakultas','jurusan','kelas'];

    public function tampil()
    {
        return $this->get();
    }

    public function simpan($data)
    {
        $this->insert($data);
    }

    public function tampil_edit($data)
    {
        return $this->where(['nim' => $data])->first();
    }

    public function hapus($nim)
    {
        $this->delete($nim);
    }

    public function edit($nim, $data)
    {
        $this->update($nim, $data);
    }
}
