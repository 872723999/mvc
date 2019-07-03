<?php 
namespace mvc\lib;
use mvc\core\Databaseint;

// Mysql 连接类
class Mysql implements Databaseint
{

	protected $conn;

	function connect( $host, $user, $pwd, $dbname )
	{
		$conn = mysql_connect( $host, $user, $passwd );
		mysql_select_db( $dbname, $conn );
		$this->conn = $conn;
	}

	function query( $sql )
	{
		$res = mysql_query( $sql,$this->conn );
		return $res;
	}

	function close()
	{
		mysqli_close( $this->conn );
	}

}