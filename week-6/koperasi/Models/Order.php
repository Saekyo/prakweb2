
<?php

class Order
{
	private $connection;

	public function __construct()
	{
		global $conn;
		$this->connection = $conn;
	}

	public function getAll()
	{
		$query = "SELECT p.*, p2.nama,
		DATE_FORMAT(p.tanggal, '%d %M %Y') as tanggal_pesanan 
				from pesanan p 
				inner join pelanggan p2 on p2.id = p.pelanggan_id
				order by p.id";
		$sql = $this->connection->prepare($query);
		$sql->execute();
		$data = $sql->fetchAll();

		return $data;
	}
}

?>