<?php 
namespace mvc\lib;
use mvc\core\Databaseint;

class PDO implements Databaseint
{
	protected $conn;

	function connect( $host, $user, $pwd, $dbname )
	{
		$conn = new \PDO( "mysql:host=$host;dbname=$dbname", $user, $password );
		$this->conn = $conn;
	}

	function query( $sql )
	{
		return $this->conn->query( $sql );
	}

	function close()
	{
		unset($this->conn);
	}

}