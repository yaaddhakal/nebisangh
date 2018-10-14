<?php
class updatedelpdfcontroller extends controller
{
	function __construct()
	{
		$this->uni = $this->loadmodel('university');
		$this->level = $this->loadmodel('level');
		$this->faculty = $this->loadmodel('faculty');
		$this->semester = $this->loadmodel('semester');
		$this->pdf = $this->loadmodel('pdf');
	}
	function index($url,$id)
	{
		$this->showpdfid= $this->pdf->showpdfid($id);
		if($url=='updatepdf')
		{
			$this->idu = $this->showpdfid[0]->university_id;
		$this->uniname = $this->uni->showunibyid($this->idu);


		$this->university = $this->uni->showuniversity();
		$idl= $this->showpdfid[0]->level_id;

		$this->levelname = $this->level->selectlevelbyid($idl);


		$idf= $this->showpdfid[0]->faculty_id;
		$this->facultyname = $this->faculty->showsemesterbyid($idf);
		$idse= $this->showpdfid[0]->semester_id;

		$this->semname = $this->semester->selectsemesterbyid($idse);

		
		
		$this->loadview('updatepdf');
		}
		elseif($url=='deletepdf')
		{

			if($this->showpdfid==NULL)
{
   echo "<script>window.location='".base_url()."showpdf'</script>";
}
session_start();
if($this->showpdfid[0]->created_by != $_SESSION['admin'] && $_SESSION['role'] != 'SuperAdmin' ){
  //echo $_SESSION['role'];
  echo "<script>window.location='".base_url()."showpdf'</script>";
     }
     else{
		$ret=$this->pdf->deletepdfbyid($id);
		if($ret)
		{
			echo "<script>alert('deleted successfully')</script>";
		}
		else
		{
			echo "<script>alert('deletion unsuccessfull')</script>";
		}
		echo "<script> window.location='".base_url()."showpdf'</script>";
	}
		}

		}
	}
