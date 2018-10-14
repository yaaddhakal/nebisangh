<?php
class news extends common
{
	function shownewsdesc()
	{
		$sql="select * from tbl_news ORDER BY id desc";
		return $this->select($sql);
	}
	function latestpost()
	{
		$sql="select * from tbl_news ORDER BY click desc limit 5";
		return $this->select($sql);
	}
	function showcatnews($category)
	{
		$sql="select * from tbl_news where category_name='$category'";
		return $this->select($sql);

	}
	function selectnewsbyid($id)
	{
		$sql="select * from tbl_news where id='$id'";
		return $this->select($sql);
	}
	function updateclick($id)
	{
		$sql="update tbl_news set click=click+1 where id='$id'";
		return $this->update($sql);
	}
}