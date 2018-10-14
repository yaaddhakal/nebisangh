<?php
class semester extends common
{
	public $semester_name,$level,$university,$faculty,$created_by,$created_at;
	function insertsemester()
	{
		$sql="insert into tbl_semesteroryear(sem_name,faculty_id,university_id,level_id,created_by,created_at) values('$this->semester_name','$this->faculty','$this->university','$this->level','$this->created_by','$this->created_at')";
		
		return $this->insert($sql);
	}
	function showsemester()
	{
		$sql="select * from tbl_semesteroryear";
		return $this->select($sql);
	}
	function selectsemesterbyid($id)
	{
		$sql="select * from tbl_semesteroryear where id='$id'";
		return $this->select($sql);
	}
	function deletesemesterbyid($id)
	{
		$sql="delete from tbl_semesteroryear where id='$id'";
		return $this->delete($sql);
	}
	function updatesemester($id)
	{
		$sql="update tbl_semesteroryear set sem_name='$this->semester_name',faculty_id='$this->faculty',university_id='$this->university',level_id='$this->level' where id='$id'";
		return $this->update($sql);
	}
	function deletepdfbyid($id)
	{
		$sql="delete from tbl_semesteroryear where id='$id'";
		return $this->delete($sql);
	}
	
}
?>