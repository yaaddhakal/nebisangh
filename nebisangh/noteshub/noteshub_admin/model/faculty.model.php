<?php
class faculty extends common
{
	public $name,$universities,$level,$created_by,$created_at;
	function insertfaculty()
	{
		$sql="insert into tbl_faculty(faculty_name,university_id,created_by,created_at,level_id) values('$this->name','$this->universities','$this->created_by','$this->created_at','$this->level')";
		
		return $this->insert($sql);
	}
	function showfaculty()
	{
		$sql= "select * from tbl_faculty";
		return $this->select($sql);
	}
	function showfacultybyid($id)
	{
		$sql="select * from tbl_faculty where id='$id'";
		return $this->select($sql);
	}
	function deletefacultybyid($id)
	{
		$sql="delete from tbl_faculty where id='$id'";
		return $this->delete($sql);
	}
	function updatefaculty($id)
	{
		$sql="update tbl_faculty set faculty_name='$this->name',university_id='$this->universities',level_id='$this->level' where id='$id'";
		return $this->update($sql);
	}
	function selectsemesterfac($id)
	{
		$sql="select * from tbl_faculty where id='$id'";
		return $this->select($sql);
	}
	function showsemesterbyid($idf)
	{
		$sql="select * from tbl_faculty where id='$idf'";
		return $this->select($sql);
	}
}
?>