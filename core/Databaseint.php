<?php 
namespace mvc\core;

// 数据库接口
interface Databaseint
{
	// 创建连接
	function connect( $host, $user, $pwd, $dbname );
	// 查询
	function query( $sql );
	// 关闭连接
	function close();
}