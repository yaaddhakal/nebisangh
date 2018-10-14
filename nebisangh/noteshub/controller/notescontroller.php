<?php
class notescontroller extends controller
{
	function __construct()
	{
		$this->uni = $this->loadmodel('university');
		$this->pdf = $this->loadmodel('pdf');
	}
	function index($uni,$level,$faculty,$semester,$type)
	{
		$this->showuni= $this->uni->showuni();
		$this->showpdf = $this->pdf->showpdfbysem($uni,$level,$faculty,$semester,$type);
		$this->loadview('home');

	}
}