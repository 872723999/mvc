<?php 
namespace mvc\app\home\controller;

abstract class Base
{
	public $array;
	
	public function assign( $key, $val )
	{
		$this->array[$key] = $val;
	}

	public function fetch( $viewPath )
	{
		$viewPath = __DIR__ . DS . '..' . DS . 'view' . DS . $viewPath . '.html';
    	$viewPath = str_replace('/', '\\', $viewPath);
		extract($this->array);
		if(file_exists($viewPath)){ //模板存在就加载文件。
			include $viewPath;
		}
	}
	
}