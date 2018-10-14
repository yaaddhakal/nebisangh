<?php
class comment extends common
{
	public $name,$email,$comment,$id,$news_id;
	function insertcomment($id)
	{
		$sql="insert into tbl_comments(name,email,comments,news_id)  values('$this->name','$this->email','$this->comment','$id')";
		echo $sql;
		return $this->insert($sql);
	}
	function showallcomid($id)
	{
		$sql="select * from tbl_comments where news_id
		='$id'";
		return $this->select($sql);
	}
}