<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;
use App\Models\JurusanModel;
use App\Models\FakultasModel;
use App\Models\KelasModel;

class Home extends BaseController
{
	public function index()
	{
		$mahasiswamodel = new MahasiswaModel();
		
		$data =
			[
				'title' => "Data Mahasiswa",
				'mhs' => $mahasiswamodel->tampil()->getResult()
			];
		return view('welcome_message', $data);
	}

	public function tambah()
	{
		$fakultasmodel = new FakultasModel();
		// $jurusanModel = new KelasModel();
		// $tes = $jurusanModel->tampil(7);
		// print_r($tes);
		// exit();
		$data =
			[
				'title' => "Tambah Mahasiswa",
				'fak' => $fakultasmodel->tampil()->getResult()
			];
		return view('tambah', $data);
	}

	public function simpan(){
		$model = new MahasiswaModel();

		$nim = $this->request->getVar('nim');
        $nama = $this->request->getVar('nama');
        $fakultas = $this->request->getVar('fakultas');
        $jurusan = $this->request->getVar('jurusan');
        $kelas = $this->request->getVar('kelas');

        $data = [
            'nim' => $nim,
            'nama' => $nama,
            'fakultas' => $fakultas,
            'jurusan' => $jurusan,
            'kelas' => $kelas
        ];

        $model->simpan($data);
        return redirect()->to('/home');
	}

	public function edit($nim){
		$model = new MahasiswaModel();
		$fakultasmodel = new FakultasModel();

		$edit = $model->tampil_edit($nim);
        $data = [
            'title' => "Edit",
            'edit' => $edit,
			'fak' => $fakultasmodel->tampil()->getResult()
        ];

        return view('edit', $data);
	}

	public function hapus($nim){
		$model = new MahasiswaModel();
		$model->hapus($nim);
        return redirect()->to('/home');
	}

	public function tampil_jurusan()
	{
		$jurusanmodel = new JurusanModel();

		$id_fakultas = $this->request->getPost('id');
		// $data = $jurusanmodel->tampil($id_fakultas);
		$data = $jurusanmodel->tampil($id_fakultas);
		echo json_encode($data);
	}

	public function tampil_kelas($id_jurusan)
	{
		$kelasmodel = new KelasModel();

		// $id_jurusan = $this->request->getPost('id');
		// $data = $jurusanmodel->tampil($id_fakultas);
		$data = $kelasmodel->tampil($id_jurusan);
		echo json_encode($data);
	}
}
