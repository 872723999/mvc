<?php

define( 'BASEDIR', __DIR__);

define( 'DS', DIRECTORY_SEPARATOR );

require BASEDIR . DS . '..' . DS . 'core' . DS . 'Loader.php';

spl_autoload_register('\\mvc\\core\\Loader::autoload');


$i = new \mvc\app\home\controller\Index();
$i->index();
// $db = new \mvc\lib\Mysqli();
// $db->connect('127.0.0.1','root','root','test');
// $sql = "INSERT INTO user ".
//         "(name,mobile, rand) ".
//         "VALUES ".
//         "('a2','222',222)";

// $result = $db->query( $sql );
// $info = $db->close();


/**
 * mysqli_fetch_all($result);
 * 返回的是所有满足条件的数据，一个二维数组
 */

/**
 * mysqli_fetch_assoc($result);
 * 返回的是第一条满足条件的数据
 */


