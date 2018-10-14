<?php

class common{

	function __construct(){
		$this->con=new mysqli('localhost','root','','db_notehub');
		if ($this->con->connect_error) {
			die("Database Connection Error");
		}
	}

	function insert($sql)
	{
		$this->con->query($sql);
		if($this->con->affected_rows>0)
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}

	function select($sql){
		$res=$this->con->query($sql);
		$data=[];
		if ($res->num_rows>0) {
			while ($row=$res->fetch_object()) {
				$data[]=$row;
			}
		}
		return $data;
	}

	function update($sql)
	{
		if($this->con->query($sql))
			{
				if ($this->con->affected_rows>0)
				{
					return true;
				}
				else
				{
					return "Duplicate";
				}
			
			}
			else
			{
				return false;
			}

	}

	function delete($sql){
		$res = $this->con->query($sql);
		if($this->con->affected_rows>0)
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}

	function escapestring($data)
	{
		return $this->con->real_escape_string($data);
	}
}




?>