<?php 
namespace mvc\app\home\controller;

class Index extends Base
{
	function index()
	{
		// echo __NAMESPACE__."<br/>";
		$nav = '测试';
		$data = array('a','b','c');
		$this->assign('nav',$nav);
		$this->assign('data',$data);
		$this->fetch('index/index');
	}
}