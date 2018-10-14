<?php
class addlevelcontroller extends controller
{
	function __construct()
	{
		$this->uni = $this->loadmodel('university');
		$this->level = $this->loadmodel('level');
	}
	function index()
	{
		$this->showuni= $this->uni->showuniversity();
		$this->loadview('addlevel');
	}
}