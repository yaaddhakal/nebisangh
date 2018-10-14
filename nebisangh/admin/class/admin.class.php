<?php 
class admin extends common
{
	public $id,$name,$username,$email,$salt,$password,$status,$last_login,$phone;
	public function selectadminbyusername()
	{
		$sql="select * from tbl_admin where username='$this->username'";
		return $this->select($sql);
	}
	public function selectadminbyid()
	{
		$sql="select * from tbl_admin where id='$this->id'";
		return $this->select($sql);
	}
	public function insertuser()
	{
		$sql ="insert into tbl_admin(name,username,email,salt,password,status,phone)value('$this->name','$this->username','$this->email','$this->salt','$this->password','$this->status','$this->phone')";
		return $this->insert($sql);
	}
	public function selectuser()
	{
		$sql= "select * from tbl_admin";
		return $this->select($sql);
	}
	public function deleteadmin()
		{
			$sql = "delete from tbl_admin where id = '$this->id'";
			return $this->delete($sql);
		}
			public function updateadmin()
		{
			$sql = "update tbl_admin set name= '$this->name',username = '$this->username', email = '$this->email' where id = '$this->id'";
			return $this->update($sql);
		}
		public function updatelastlogin()
		{
			$sql = "update tbl_admin set last_login = '$this->last_login' where username = '$this->username'";
			$this->update($sql);
		}
		public function updateadminwithpassword()
		{
			$sql = "update tbl_admin set name= '$this->name',username = '$this->username', email = '$this->email', password = '$this->password' where id = '$this->id'";
			return $this->update($sql);
		}
} 
?>