<?php

class ProductCategory
{
	private $connection;

	public function __construct()
	{
		global $conn;
		$this->connection = $conn;
	}

	public function getAll()
	{
		$query = "SELECT * FROM jenis_produk j ORDER BY j.id ASC";
		$sql = $this->connection->prepare($query);
		$sql->execute();
		$data = $sql->fetchAll();

		return $data;
	}
}

?>