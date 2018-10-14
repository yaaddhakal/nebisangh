<?php
class updatedellevelcontroller extends controller
{
	function __construct()
	{
		$this->uni= $this->loadmodel('university');
		$this->level = $this->loadmodel('level');
	}
	function index($url,$id)
	{
		$this->selectlevelbyid = $this->level->selectlevelbyid($id);
		if($url=='updatelevel')
		{
			$this->showuni= $this->uni->showuniversity();
			
			$this->loadview('updatelevel');
		}
		elseif($url=='deletelevel'){
			if($this->selectlevelbyid==NULL)
{
   echo "<script>window.location='".base_url()."showlevel'</script>";
}
session_start();
if($this->selectlevelbyid[0]->created_by != $_SESSION['admin'] && $_SESSION['role'] != 'SuperAdmin' ){
  //echo $_SESSION['role'];
  echo "<script>window.location='".base_url()."showlevel'</script>";
     }
     else{
		$ret=$this->level->deletelevelbyid($id);
		if($ret)
		{
			echo "<script>alert('deleted successfully')</script>";
		}
		else
		{
			echo "<script>alert('deletion unsuccessfull')</script>";
		}
		echo "<script> window.location='".base_url()."showlevel'</script>";
	}
		}
	}
}
?>