<?php
class pdf extends common
{
	function showpdfbysem($uni,$level,$faculty,$semester,$type)
	{
		$sql="select * from tbl_notes where university_id='$uni' and level_id='$level' and faculty_id='$faculty' and semester_id='$semester' and type='$type' ORDER BY id desc";

		return $this->select($sql);
	}
	function showpdf()
	{
		$sql="select * from tbl_notes ORDER BY id desc";
		
		return $this->select($sql);
	}
}
