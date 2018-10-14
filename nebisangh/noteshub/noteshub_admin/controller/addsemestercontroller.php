<?php
class addsemestercontroller extends controller
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
		$this->university = $this->uni->showuniversity();

		$this->levels = $this->level->showlevel();
		$this->faculty = $this->faculty->showfaculty();
		$this->loadview('addsemester');
	}
}
?>