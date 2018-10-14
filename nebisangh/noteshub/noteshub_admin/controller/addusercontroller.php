<?php
class addusercontroller extends controller
{
	function __construct()
	{
		$this->admin= $this->loadmodel('admin');
	}
	function index($url)
	{
		if($url=='adduser'){

		$this->loadview('addadmin',true,false);
	}
	elseif($url=='showadmin')
	{
		$this->admins=$this->admin->showadmin();
		$this->loadview('showadmin',true,false);
	}
	}
}
?>