<?php
class university extends common
{
	function showuni()
	{
		$sql="select * from tbl_universities";
		
		return $this->select($sql);
	}
	function showunibyid($id)
	{
		$sql="select * from tbl_universitites where id='$id'";
		return $this->select($sql);
	}
}
?>