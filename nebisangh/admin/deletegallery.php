<?php
    require_once 'class/common.class.php';
    require_once 'class/gallery.class.php';
    require_once 'class/session.class.php';
    sessionhelper::checklogin();
    require_once 'layout/header.php';
    $news = new gallery;
    if(isset($_GET['id']))
    {
    	$id = $_GET['id'];
    	$news->id = $id;
    	$ask = $news->deletegal();
    	if($ask == 1)
    	{
    		 echo "<script>alert('Deleted successfully')</script>";
    	}
    	else
    	{
    		 echo "<script>alert('Delete unsuccessfully')</script>";
    	}
    }
?>
<script> window.location="newslist.php" </script>