<?php
class updateunicontroller extends controller
{
	function __construct()
	{
		$this->uni=$this->loadmodel('university');
	}
	function index($id,$url)
	{
		$this->showunibyid = $this->uni->showunibyid($id);
		if($url=='updateuni'){
		
		$this->loadview('updateuni');
	}
	elseif($url=='deleteuni')
	{

		if($this->showunibyid==NULL)
{
   echo "<script>window.location='".base_url()."showuniversity'</script>";
}
session_start();
if($this->showunibyid[0]->created_by != $_SESSION['admin'] && $_SESSION['role'] != 'SuperAdmin' ){
  //echo $_SESSION['role'];
  echo "<script>window.location='".base_url()."showuniversity'</script>";
     }
     else{
		$ret=$this->uni->deleteunibyid($id);
		if($ret)
		{
			echo "<script>alert('deleted successfully')</script>";
		}
		else
		{
			echo "<script>alert('deletion unsuccessfull')</script>";
		}
		echo "<script> window.location='".base_url()."showuniversity'</script>";
	}
	}
	}
}