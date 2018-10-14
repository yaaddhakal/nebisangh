<?php
class showfacultycontroller extends controller
{
	function __construct()
	{
		$this->level = $this->loadmodel('level');
		$this->uni = $this->loadmodel('university');
		$this->faculty = $this->loadmodel('faculty');
	}
	function index()
	{
		$this->showfaculty = $this->faculty->showfaculty();
		$this->loadview('showfaculty');
	}

}