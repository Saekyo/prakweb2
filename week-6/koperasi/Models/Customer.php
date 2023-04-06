<?php

class Customer
{
	private $connection;

	public function __construct()
	{
		global $conn;
		$this->connection = $conn;
	}

	public function getAll()
	{
		$query = "SELECT 
		p.*, k.nama AS nama_kartu, 
		CASE 
			WHEN p.jk = 'l' THEN 'Laki - Laki' 
			ELSE 'Perempuan' 
		END as jenis_kelamin,
		DATE_FORMAT(p.tgl_lahir, '%d %M %Y') as tanggal_lahir
		FROM pelanggan p 
		INNER JOIN kartu k ON k.id = p.kartu_id
		ORDER BY p.id ASC";

		$sql = $this->connection->prepare($query);
		$sql->execute();
		$data = $sql->fetchAll();

		return $data;
	}
}

?>