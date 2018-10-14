<?php
class logincontroller extends controller
{
	function __construct()
	{
		$this->admin = $this->loadmodel('admin');
	}
	function index()
	{
		$this->loadview('index',false,false);
	}
}
?>