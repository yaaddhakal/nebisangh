<?php
class updateusercontroller extends controller
{
	function __construct()
	{
		$this->admin= $this->loadmodel('admin');
	}
	function index($id)
	{

		$this->showadminbyid = $this->admin->showadminbyid($id);
		$this->loadview('updateadmin',true,false);
	}
}