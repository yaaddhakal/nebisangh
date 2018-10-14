<?php
class newscontroller extends controller
{
	function __construct()
	{
		$this->category = $this->loadmodel('category');
		$this->news = $this->loadmodel('news');
		$this->com = $this->loadmodel('comment');
	}
	function index($id)
	{
		$this->categoryname = $this->category->showallcategory();
		$this->newswithid = $this->news->selectnewsbyid($id);
		$this->news->updateclick($id);
		$this->allcom = $this->com->showallcomid($id);
		$this->latestpost = $this->news->latestpost();
		$this->loadview('singlepage',false,true);
	}
}