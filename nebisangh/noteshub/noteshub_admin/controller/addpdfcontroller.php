<?php
class addpdfcontroller extends controller
{
	function __construct()
	{
		$this->uni = $this->loadmodel('university');
		$this->level = $this->loadmodel('level');
		$this->faculty = $this->loadmodel('faculty');
		$this->semester = $this->loadmodel('semester');
		$this->pdf = $this->loadmodel('pdf');
	}
	function index()
	{
		$this->university= $this->uni->showuniversity();
		$this->loadview('addpdf');
	}
}
?>