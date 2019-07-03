<?php 
namespace mvc\lib;
use mvc\core\Databaseint;

class Mysqli implements Databaseint
{
	protected $conn;

	function connect( $host, $user, $pwd, $dbname )
	{
		$conn = mysqli_connect( $host, $user, $pwd, $dbname );
		$this->conn = $conn;
	}

	function query( $sql )
	{
		return mysqli_query( $this->conn, $sql );
	}

	function close()
	{
		return mysqli_close( $this->conn );
	}

	/**
	 * 返回前一次 MySQL 操作所影响的记录行数。
	 */
	function affected_rows()
	{
		return mysqli_affected_rows( $this->conn );
	}

}