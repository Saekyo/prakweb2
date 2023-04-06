<?php

class Purchase
{
	private $connection;

	public function __construct()
	{
		global $conn;
		$this->connection = $conn;
	}

	public function getAll()
	{
		$query = "SELECT pemb.*, prod.nama AS nama_produk, vend.nama AS nama_vendor,
					DATE_FORMAT(pemb.tanggal, '%d %M %Y') as tanggal_pesanan
					FROM pembelian pemb
					INNER JOIN produk prod ON prod.id = pemb.produk_id
					INNER JOIN vendor vend ON vend.id = pemb.vendor_id
					ORDER BY pemb.id ASC";
		$sql = $this->connection->prepare($query);
		$sql->execute();
		$data = $sql->fetchAll();

		return $data;
	}
}

?>