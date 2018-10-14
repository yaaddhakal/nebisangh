<?php
class admin extends common
{
	public $id,$name,$username,$email,$password,$salt,$phone,$role,$last_login;
	function showadminbyusername()
	{
		$sql="select * from tbl_admin where username='$this->username'";
		return $this->select($sql);
	}
	function updatewithpass($id)
	{
		$sql="update tbl_admin set name='$this->name',email='$this->email',password='$this->password',salt='$this->salt',phone='$this->phone' where id='$id'";
		
		return $this->update($sql);
	}
	function updatewithoutpass($id)
	{
		$sql="update tbl_admin set name='$this->name',email='$this->email',phone='$this->phone' where id='$id'";
		
		return $this->update($sql);
	}
	function insertuser()
	{
		$sql="insert into tbl_admin(name,username,email,password,salt,phone,role) values('
		$this->name','$this->username','$this->email','$this->password','$this->salt','$this->phone','$this->role')";
		return $this->insert($sql);
	}
	function updatelastlogin()
	{
		
		$sql="update tbl_admin set last_login='$this->last_login' where username='$this->username'";

		return $this->update($sql);
	}
	function showadmin()
	{
		$sql="select * from tbl_admin";
		return $this->select($sql);
	}
	function showadminbyid($id)
	{
		$sql="select * from tbl_admin where id='$id'";
		return $this->select($sql);
	}
	function deleteadminbyid($id)
	{
		$sql="delete from tbl_admin where id='$id'";
		return $this->delete($sql);
	}

}