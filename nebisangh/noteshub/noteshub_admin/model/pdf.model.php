<?php
class pdf extends common
{
	public $title,$subject,$university,$level,$semester,$faculty,$created_by,$created_at,$pdflocation,$provider,$type;
	function insertpdf()
	{
		$sql="insert into tbl_notes(title,pdf_notes,sub_name,faculty_id,level_id,university_id,semester_id,created_by,created_at,provider,type) values('$this->title','$this->pdflocation','$this->subject','$this->faculty','$this->level','$this->university','$this->semester','$this->created_by','$this->created_at','$this->provider','$this->type')";
		
		return $this->insert($sql);
	}
	function showpdf()
	{
		$sql="select * from tbl_notes";
		return $this->select($sql);
	}
	function showpdfid($id)
	{

		$sql="select * from tbl_notes where id='$id'";
		return $this->select($sql);
	}
	function updatepdf($id)
	{
		$sql="update tbl_notes set title='$this->title',pdf_notes='$this->pdflocation',sub_name='$this->subject',faculty_id='$this->faculty',level_id='$this->level',university_id='$this->university',semester_id='$this->semester',provider='$this->provider',type='$this->type' where id='$id'";
		
		return $this->update($sql);
	}
	function updatepdfwo($id)
	{
		$sql="update tbl_notes set title='$this->title',sub_name='$this->subject',faculty_id='$this->faculty',level_id='$this->level',university_id='$this->university',semester_id='$this->semester',provider='$this->provider',type='$this->type' where id='$id'";

		return $this->update($sql);
	}
	function deletepdfbyid($id)
	{
		$sql="delete from tbl_notes where id='$id'";
		return $this->delete($sql);
	}
}
?>