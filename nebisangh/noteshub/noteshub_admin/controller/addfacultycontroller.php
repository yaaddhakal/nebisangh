<?php
class addfacultycontroller extends controller
{
	function __construct()
	{
		$this->uni = $this->loadmodel('university');
		$this->level = $this->loadmodel('level');
		$this->faculty = $this->loadmodel('faculty');
	}
	function index()
	{
		
		$this->university = $this->uni->showuniversity();

		$this->levels = $this->level->showlevel();
		$this->loadview('addfaculty');
	}
}