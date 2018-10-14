<?php
require_once 'config/config.php';
require_once 'libs/controller.php';
require_once 'libs/model.php';
$url=[];
if(isset($_GET['p'])){
$url=explode('/',$_GET['p']);
}
else
{
	$url[0]='home';
}
$count=count($url);
if ($count==1) {
	if ($url[0]=='home') {
		require_once 'controller/homecontroller.php';
		$obj= new homecontroller;
		$obj->index();
	}
	elseif($url[0]=='gallery')
	{
		require_once 'controller/gallerycontroller.php';
		$obj = new gallerycontroller;
		$obj->index();
	}

	else{
		require_once 'controller/categorycontroller.php';
		$category=$url[0];
		$obj= new categorycontroller;
		$obj->index($category);
	}
}elseif($count==2){
	require_once 'controller/newscontroller.php';
	$category=$url[0];
	$id=$url[1];
	$obj= new newscontroller();
	$obj->index($id);
}
?>