<?php
class category extends common
{
	function showallcategory()
	{
		$sql="select * from tbl_category";
		return $this->select($sql);
	}
	
}