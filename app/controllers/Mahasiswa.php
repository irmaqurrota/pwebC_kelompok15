<?php

class Mahasiswa extends Controller
{

	public function __construct()
	{
		if ($_SESSION['session_login'] != 'sudah_login') {
			Flasher::setMessage('Login', 'Tidak ditemukan.', 'danger');
			header('location: ' . base_url . '/login');
			exit;
		}
	}

	public function index()
	{
		$data['title'] = 'Data Mahasiswa';
		$data['mahasiswa'] = $this->model('MahasiswaModel')->getAllMahasiswa();
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('mahasiswa/index', $data);
		$this->view('templates/footer');
	}


	public function edit($Nim)
	{

		$data['title'] = 'Detail Mahasiswa';
		$data['mahasiswa'] = $this->model('MahasiswaModel')->getMahasiswaByNim($Nim);
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('mahasiswa/edit', $data);
		$this->view('templates/footer');
	}

	public function tambah()
	{
		$data['title'] = 'Tambah Mahasiswa';
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('mahasiswa/create', $data);
		$this->view('templates/footer');
	}

	public function simpanMahasiswa()
	{

		if ($this->model('MahasiswaModel')->tambahMahasiswa($_POST) > 0) {
			Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
			header('location: ' . base_url . '/mahasiswa');
			exit;
		} else {
			Flasher::setMessage('Gagal', 'ditambahkan', 'danger');
			header('location: ' . base_url . '/mahasiswa');
			exit;
		}
	}

	public function updateMahasiswa()
	{
		if ($this->model('MahasiswaModel')->updateDataMahasiswa($_POST) > 0) {
			Flasher::setMessage('Berhasil', 'diupdate', 'success');
			header('location: ' . base_url . '/mahasiswa');
			exit;
		} else {
			Flasher::setMessage('Gagal', 'diupdate', 'danger');
			header('location: ' . base_url . '/mahasiswa');
			exit;
		}
	}

	public function hapus($Nim)
	{
		if ($this->model('MahasiswaModel')->deleteMahasiswa($Nim) > 0) {
			Flasher::setMessage('Berhasil', 'dihapus', 'success');
			header('location: ' . base_url . '/mahasiswa');
			exit;
		} else {
			Flasher::setMessage('Gagal', 'dihapus', 'danger');
			header('location: ' . base_url . '/mahasiswa');
			exit;
		}
	}
}
