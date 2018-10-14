<?php
class updatedelsemestercontroller extends controller
{
	function __construct()
	{
		$this->uni = $this->loadmodel('university');
		$this->level = $this->loadmodel('level');
		$this->faculty = $this->loadmodel('faculty');
		$this->semester = $this->loadmodel('semester');
	}
	function index($url,$id)
	{
		$this->selectsemesterbyid = $this->semester->selectsemesterbyid($id);

		if($url=='updatesemester'){
			$this->idu = $this->selectsemesterbyid[0]->university_id;
		$this->uniname = $this->uni->showunibyid($this->idu);


		$this->university = $this->uni->showuniversity();
		$idl= $this->selectsemesterbyid[0]->level_id;

		$this->levelname = $this->level->selectlevelbyid($idl);

		$this->levels = $this->level->showlevel();
		$idf= $this->selectsemesterbyid[0]->faculty_id;
		$this->facultyname = $this->faculty->showsemesterbyid($idf);
		$this->faculty = $this->faculty->showfaculty();
		$this->loadview('updatesemester');
	}
	else
	{

		if($this->selectsemesterbyid==NULL)
{
   echo "<script>window.location='".base_url()."showsemester'</script>";
}
session_start();
if($this->selectsemesterbyid[0]->created_by != $_SESSION['admin'] && $_SESSION['role'] != 'SuperAdmin' ){
  //echo $_SESSION['role'];
  echo "<script>window.location='".base_url()."showsemester'</script>";
     }
     else{
		$ret=$this->semester->deletesemesterbyid($id);
		if($ret)
		{
			echo "<script>alert('deleted successfully')</script>";
		}
		else
		{
			echo "<script>alert('deletion unsuccessfull')</script>";
		}
		echo "<script> window.location='".base_url()."showsemester'</script>";
	}
		}

	}
}