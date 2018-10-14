<?php
require_once 'config/config.php';
require_once 'libs/controller.php';
require_once 'libs/model.php';
require_once 'session/session.class.php';
$url=[];
if(isset($_GET['p'])){
$url=explode('/',$_GET['p']);
}
else
{
	$url[0]='index';
}
$count=count($url);
if ($count==1) {
	if($url[0]=='index')
	{
		require_once "controller/logincontroller.php";
		$logincontroller= new logincontroller;
		$logincontroller->index();
	}
	elseif($url[0]=='logout')
	{
		require_once "view/logout.php";
	}
	elseif($url[0]=='dashboard')
	{
		require_once "controller/dashboardcontroller.php";
		$dashboardcontroller= new dashboardcontroller;
		$dashboardcontroller->index();
	}
	elseif($url[0]=='adduser' || $url[0]=='showadmin')
	{
		require_once "controller/addusercontroller.php";
		$addusercontroller= new addusercontroller;
		$addusercontroller->index($url[0]);
	}
	elseif($url[0]=='addfaculty'){
		require_once "controller/addfacultycontroller.php";
		$addfacultycontroller= new addfacultycontroller;
		$addfacultycontroller->index();
	}
	elseif($url[0]=='adduniversity' || $url[0]=='showuniversity')
	{
	require_once "controller/adduniversity.php";
		$adduniversity= new adduniversity;
		$adduniversity->index($url[0]);	
	}
	elseif($url[0]=='addlevel')
	{
		require_once "controller/addlevelcontroller.php";
		$addlevelcontroller= new addlevelcontroller;
		$addlevelcontroller->index($url[0]);
	}
	elseif($url[0]=='showlevel')
	{
		require_once "controller/showlevelcontroller.php";
		$showlevelcontroller = new showlevelcontroller;
		$showlevelcontroller->index();
	}
	elseif($url[0]=='showfaculty')
	{
		require_once "controller/showfacultycontroller.php";
		$showfacultycontroller = new showfacultycontroller;
		$showfacultycontroller->index();
	}
	elseif($url[0]=='addsemester')
	{
		require_once "controller/addsemestercontroller.php";
		$addsemestercontroller = new addsemestercontroller;
		$addsemestercontroller->index();
	}
	elseif($url[0]=='showsemester')
	{
		require_once "controller/showsemestercontroller.php";
		$showsemestercontroller = new showsemestercontroller;
		$showsemestercontroller->index();
	}
	elseif($url[0]=='addpdf')
	{
		require_once "controller/addpdfcontroller.php";
		$addpdfcontroller = new addpdfcontroller;
		$addpdfcontroller->index();
	}
	elseif($url[0]=='showpdf')
	{
		require_once "controller/showpdfcontroller.php";
		$showpdfcontroller = new showpdfcontroller;
		$showpdfcontroller->index();
	}



	
}
elseif ($count==2) {
	if($url[0]=='update')
	{
		require_once "controller/updateusercontroller.php";
		$updateusercontroller= new updateusercontroller;
		$updateusercontroller->index($url[1]);
	}
	elseif($url[0]=='delete')
	{
		require_once "controller/deleteusercontroller.php";
		$deleteusercontroller= new deleteusercontroller;
		$deleteusercontroller->index($url[1]);
	}
	elseif($url[0]=='updateuni' || $url[0]=='deleteuni')
	{
		require_once "controller/updateunicontroller.php";
		$updateunicontroller= new updateunicontroller;
		$updateunicontroller->index($url[1],$url[0]);
	}
	elseif($url[0]=='updatelevel' || $url[0]=='deletelevel')
	{
		require_once "controller/updatedellevelcontroller.php";
		$updatedellevelcontroller= new updatedellevelcontroller;
		$updatedellevelcontroller->index($url[0],$url[1]);
	}
	elseif($url[0]=='updatefaculty' || $url[0]=='deletefaculty')
	{
		require_once "controller/updatedelfacultycontroller.php";
		$updatedelfacultycontroller = new updatedelfacultycontroller;
		$updatedelfacultycontroller->index($url[0],$url[1]);

	}
	elseif($url[0]=='updatesemester' || $url[0]=='deletesemester')
	{
		require_once "controller/updatedelsemestercontroller.php";
		$updatedelsemestercontroller = new updatedelsemestercontroller;
		$updatedelsemestercontroller->index($url[0],$url[1]);
	}
	elseif($url[0]=='updatepdf' || $url[0]=='deletepdf')
	{
		require_once "controller/updatedelpdfcontroller.php";
		$updatedelpdfcontroller = new updatedelpdfcontroller;
		$updatedelpdfcontroller->index($url[0],$url[1]);
	}
}
?>