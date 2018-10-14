<?php
class deleteusercontroller extends controller
{
	function __construct()
	{
		$this->admin= $this->loadmodel('admin');
	}
	function index($id)
	{
		$this->session = $this->admin->showadminbyid($id);
		if($this->session==NULL)
{
   echo "<script>window.location='".base_url()."showadmin'</script>";
}
session_start();
if($this->session[0]->username != $_SESSION['admin'] && $_SESSION['role'] != 'SuperAdmin' ){
  //echo $_SESSION['role'];
  echo "<script>window.location='".base_url()."showadmin'</script>";
     }
     else{
		$ret=$this->admin->deleteadminbyid($id);
		if($ret)
		{
			echo "<script>alert('deleted successfully')</script>";
		}
		else
		{
			echo "<script>alert('deletion unsuccessfull')</script>";
		}
		echo "<script> window.location='".base_url()."showadmin'</script>";
	}
	}
}