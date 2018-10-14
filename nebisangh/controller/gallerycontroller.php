<?php
class gallerycontroller extends controller
{
	function __construct()
	{
		$this->category=$this->loadmodel('category');
		$this->gallery = $this->loadmodel('gallery');
	}
	function index()
	{
		$this->categoryname = $this->category->showallcategory();
		$this->showgal = $this->gallery->showgal();
		$this->loadview('gallary',false,true);
	}
}
?>