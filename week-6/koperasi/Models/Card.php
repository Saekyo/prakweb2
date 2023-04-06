<?php

class Card
{
	private $connection;

	public function __construct()
	{
		global $conn;
		$this->connection = $conn;
	}

	public function getAll()
	{
		$query = "SELECT * FROM kartu order by id";
		
		$sql = $this->connection->prepare($query);
		$sql->execute();
		$data = $sql->fetchAll();

		return $data;
	}
}

?>