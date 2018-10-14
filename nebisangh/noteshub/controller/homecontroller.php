<?php
class homecontroller extends controller
{
	function __construct()
	{
		$this->uni = $this->loadmodel('university');
		$this->pdf = $this->loadmodel('pdf');
	}
	function index()
	{
		$this->showuni= $this->uni->showuni();
		$this->showpdf = $this->pdf->showpdf();
		$this->loadview('home');
	}
}