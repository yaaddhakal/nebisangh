<?php
class gallery extends common
{
	public $image,$title,$id;
	function insertgallery()
	{
		$sql="insert into tbl_gallery(title,image) values('$this->title','$this->image')";
		return $this->insert($sql);
	}
	function deletegal()
	{
		$sql="delete from tbl_gallery where id='$this->id'";
		return $this->delete($sql);
	}
	function selectgal()
	{
		$sql="select * from tbl_gallery";
		return $this->select($sql);
	}

}