<?php
class university extends common
{
	public $id,$name,$headquater_city,$created_by,$created_at;
	function insertuniversity()
	{
		$sql="insert into tbl_universities(name,headquater_city,created_by,created_at) values('$this->name','$this->headquater_city','$this->created_by','$this->created_at')";
		return $this->insert($sql);
	}
	function showuniversity()
	{
		$sql="select * from tbl_universities";
		return $this->select($sql);
	}
	function showunibyid($id)
	{
		$sql="select * from tbl_universities where id='$id'";
		return $this->select($sql);

	}
	function updateuniversity($id)
	{
		$sql="update tbl_universities set name='$this->name',headquater_city='$this->headquater_city' where id='$id' ";
		return $this->update($sql);
	}
	function deleteunibyid($id)
	{
		$sql= "delete from tbl_universities where id='$id'";
		return $this->delete($sql);
	}
	function selectleveluni($id)
	{
		$sql="select * from tbl_universities where id='$id'";
		return $this->select($sql);
	}
}
?>