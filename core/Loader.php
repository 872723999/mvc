<?php 
namespace mvc\core;

class Loader
{
	static function autoload ( $namespace )
	{
		require BASEDIR . DS . '..' . DS . '..' . DS . $namespace . '.php';
	}
}