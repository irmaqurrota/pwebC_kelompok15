<?php

class MahasiswaModel
{

	private $table = 'mahasiswa';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllMahasiswa()
	{
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}

	public function getMahasiswaByNim($Nim)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE Nim=:Nim');
		$this->db->bind('Nim', $Nim);
		return $this->db->single();
	}

	public function tambahMahasiswa($data)
	{
		$query = "INSERT INTO Mahasiswa (Nim, Nama_Mhs, Jenis_Kelamin, Program_Studi) VALUES(:Nim, :Nama_Mhs, :Jenis_Kelamin, :Program_Studi)";
		$this->db->query($query);
		$this->db->bind('Nim', $data['Nim']);
		$this->db->bind('Nama_Mhs', $data['Nama_Mhs']);
		$this->db->bind('Jenis_Kelamin', $data['Jenis_Kelamin']);
		$this->db->bind('Program_Studi', $data['Program_Studi']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function updateDataMahasiswa($data)
	{
		$query = "UPDATE Mahasiswa SET Nim=:Nim, Nama_Mhs=:Nama_Mhs, Jenis_Kelamin=:Jenis_Kelamin, Program_Studi=:Program_Studi WHERE Nim=:Nim";
		$this->db->query($query);
		$this->db->bind('Nim', $data['Nim']);
		$this->db->bind('Nim', $data['Nim']);
		$this->db->bind('Nama_Mhs', $data['Nama_Mhs']);
		$this->db->bind('Jenis_Kelamin', $data['Jenis_Kelamin']);
		$this->db->bind('Program_Studi', $data['Program_Studi']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function deleteMahasiswa($Nim)
	{
		$this->db->query('DELETE FROM ' . $this->table . ' WHERE Nim=:Nim');
		$this->db->bind('Nim', $Nim);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function cariMahasiswa()
	{
		$key = $_POST['key'];
		$this->db->query("SELECT * FROM " . $this->table . " WHERE Nim LIKE :key");
		$this->db->bind('key', "%$key%");
		return $this->db->resultSet();
	}
}
