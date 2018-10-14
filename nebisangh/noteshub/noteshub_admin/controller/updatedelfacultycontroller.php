<?php
class updatedelfacultycontroller extends controller
{
	function __construct()
	{
		$this->uni = $this->loadmodel('university');
		$this->level = $this->loadmodel('level');
		$this->faculty = $this->loadmodel('faculty');
	}
	function index($url,$id)
	{
		$this->facultybyid = $this->faculty->showfacultybyid($id);
	
		if($url=='updatefaculty'){
		$this->idu = $this->facultybyid[0]->university_id;
		$this->uniname = $this->uni->showunibyid($this->idu);


		$this->university = $this->uni->showuniversity();
		$idl= $this->facultybyid[0]->level_id;

		$this->levelname = $this->level->selectlevelbyid($idl);
		
		$this->levels = $this->level->showlevel();
		$this->loadview('updatefaculty');
	}
	else
	{

		if($this->facultybyid==NULL)
{
   echo "<script>window.location='".base_url()."showfaculty'</script>";
}
session_start();
if($this->facultybyid[0]->created_by != $_SESSION['admin'] && $_SESSION['role'] != 'SuperAdmin' ){
  //echo $_SESSION['role'];
  echo "<script>window.location='".base_url()."showfaculty'</script>";
     }
     else{
		$ret=$this->faculty->deletefacultybyid($id);
		if($ret)
		{
			echo "<script>alert('deleted successfully')</script>";
		}
		else
		{
			echo "<script>alert('deletion unsuccessfull')</script>";
		}
		echo "<script> window.location='".base_url()."showfaculty'</script>";
	}
		}

	}
}
?>