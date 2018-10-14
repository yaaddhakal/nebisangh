<?php
require_once 'config/config.php';
require_once 'libs/controller.php';
require_once 'libs/model.php';
//require_once 'session/session.class.php';
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
		require_once 'controller/homecontroller.php';
		$homecontroller = new homecontroller;
		$homecontroller->index();
	}
	else
	{
		require_once "view/404.php";
	}
}
elseif($count==5)
{
	require_once 'controller/notescontroller.php';
	$notescontroller = new notescontroller;
	$notescontroller->index($url[0],$url[1],$url[2],$url[3],$url[4]);
}
else
	{
		require_once "view/404.php";
	}
?>