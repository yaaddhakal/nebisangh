<?php
class homecontroller extends controller
{
	function __construct()
	{
		$this->news= $this->loadmodel('news');
		$this->category= $this->loadmodel('category');
	}
	function index()
	{
		$this->categoryname = $this->category->showallcategory();
		$this->fullnews = $this->news->shownewsdesc();
		$this->latestpost= $this->news->latestpost();
		$this->loadview('index');
	}
}