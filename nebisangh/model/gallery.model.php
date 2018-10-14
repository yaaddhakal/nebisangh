<?php
class gallery extends common
{
	function showgal()
	{
		$sql="select * from tbl_gallery";
		return $this->select($sql);
	}
}