<?php

class Payment
{
	private $connection;

	public function __construct()
	{
		global $conn;
		$this->connection = $conn;
	}

	public function getAll()
	{
		$query = "SELECT p.*, p3.nama, 
				DATE_FORMAT(p.tanggal, '%d %M %Y') as tanggal_pembayaran
				from pembayaran p 
				inner join pesanan p2 on p2.id = p.pesanan_id 
				inner join pelanggan p3 on p3.id = p2.pelanggan_id
				order by p.id asc";
		$sql = $this->connection->prepare($query);
		$sql->execute();
		$data = $sql->fetchAll();

		return $data;
	}
}

?>