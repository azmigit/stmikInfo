<?php

/**
* Class Mahasiswa
*/
class Mahasiswa
{
	private $dbName = "mahasiswa";
	private $conn;

	public $nim, $nama, $tmptLahir, $tglLahir, $alamat, 
			$jk, $telp, $email, $thn_msk, $kelas, $pass, $photo, $kdJur;

	function __construct($db)
	{
		$this->conn = $db;
	}

	function getData(){
		$query = "SELECT
					nim, nama, tmptLahir, tglLahir, alamat, jk, telp, email, thn_msk, kelas
				  FROM
				  	". $this->dbName ."
				  ORDER BY nim ASC";
		$data = $this->conn->prepare($query);
		$data->execute();

		return $data;
	}

	function insertData(){
		$query = "INSERT INTO 
					". $this->dbName ."
					(nim, nama, tmptLahir, tglLahir, alamat, jk, telp, email, thn_msk, kelas, pass, photo, kdJur)
				  VALUES
					(:nim, :nama, :tmptLahir, :tglLahir, :alamat, :jk, :telp, :email, :thn_msk, :kelas, :pass, :photo, :kdJur)";
		$data = $this->conn->prepare($query);

		$data->bindParam(':nim', $this->nim);
		$data->bindParam(':nama', $this->nama);
		$data->bindParam(':tmptLahir', $this->tmptLahir);
		$data->bindParam(':tglLahir', $this->tglLahir);
		$data->bindParam(':alamat', $this->alamat);
		$data->bindParam(':jk', $this->jk);
		$data->bindParam(':telp', $this->telp);
		$data->bindParam(':email', $this->email);
		$data->bindParam(':thn_msk', $this->thn_msk);
		$data->bindParam(':kelas', $this->kelas);
		$data->bindParam(':pass', $this->pass);
		$data->bindParam(':photo', $this->photo);
		$data->bindParam(':kdJur', $this->kdJur);

		if ($data->execute()){
			return true;
		} else {
			return false;
		}
	}
}

?>