<?php
class level extends common
{
public $id,$name,$universities,$created_by,$created_at;
function insertlevel()
{
	$sql="insert into tbl_level(level_name,university_id,created_by,created_at) values('$this->name','$this->universities','$this->created_by','$this->created_at')";
	
	return $this->insert($sql);
}
function updatelevel($id)
{
	$sql="update tbl_level set level_name='$this->name',university_id='$this->universities' where id='$id'";
	
	return $this->update($sql);
}
function showlevel()
{
	$sql="select * from tbl_level";
	return $this->select($sql);
}
function selectlevelbyid($id)
{
	$sql="select * from tbl_level where id='$id'";
	return $this->select($sql);
}
function deletelevelbyid($id)
{
	$sql="delete from tbl_level where id='$id'";
	return $this->delete($sql);
}
function selectfacultyuni($id)
{
	$sql="select * from tbl_level where id='$id'";
	return $this->select($sql);
}
}
?>