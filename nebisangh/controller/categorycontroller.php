<?php
class categorycontroller extends controller
{
	function __construct()
	{
		$this->news=$this->loadmodel('news');
		$this->category=$this->loadmodel('category');
	}
	function index($category)
	{
		$this->categoryname = $this->category->showallcategory();
		$this->categorynews = $this->news->showcatnews($category);
		$this->latestpost = $this->news->latestpost();
		$this->loadview('category');

	}
}
?>