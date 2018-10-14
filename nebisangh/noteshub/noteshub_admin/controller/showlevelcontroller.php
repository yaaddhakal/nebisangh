<?php
class showlevelcontroller extends controller
{
	function __construct()
	{
		$this->level = $this->loadmodel('level');
		$this->uni = $this->loadmodel('university');
	}
	function index()
	{
		$this->showlevel = $this->level->showlevel();
		$this->loadview('showlevel');
	}
}