<?php
class dashboardcontroller extends controller
{
	function index()
	{
		$this->loadview('dashboard',true,false);
	}
}