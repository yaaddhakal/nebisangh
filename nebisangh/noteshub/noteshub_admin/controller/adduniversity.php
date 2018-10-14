<?php
class adduniversity extends controller
{
	function __construct()
	{
		$this->uni = $this->loadmodel('university');
	}
	function index($universit)
	{
		if($universit=='adduniversity')
		{
		$this->loadview('university');
	}
	elseif($universit=='showuniversity')
	{
		$this->showuni = $this->uni->showuniversity();
		$this->loadview('showuniversity');
	}
	}
}
?>