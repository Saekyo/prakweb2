<?php

class Product
{
	private $connection;

	public function __construct()
	{
		global $conn;
		$this->connection = $conn;
	}

	public function getAll()
	{
		$query = "SELECT p.*, j.nama AS nama_jenis_produk			
		FROM produk p 
		INNER JOIN jenis_produk j ON j.id = p.jenis_produk_id
		ORDER BY p.id ASC";
		$sql = $this->connection->prepare($query);
		$sql->execute();
		$data = $sql->fetchAll();

		return $data;
	}
}

?>