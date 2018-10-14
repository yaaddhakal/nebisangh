<?php
class showsemestercontroller extends controller
{
	function __construct()
	{
		$this->uni = $this->loadmodel('university');
		$this->level = $this->loadmodel('level');
		$this->faculty = $this->loadmodel('faculty');
		$this->semester = $this->loadmodel('semester');
	}
	function index()
	{
		$this->sem = $this->semester->showsemester();
		$this->loadview('showsemester');
	}
}