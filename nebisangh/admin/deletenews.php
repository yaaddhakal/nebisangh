<?php
    require_once 'class/common.class.php';
    require_once 'class/news.class.php';
    require_once 'class/session.class.php';
    sessionhelper::checklogin();
    require_once 'layout/header.php';
    $news = new news;
    if(isset($_GET['id']))
    {
    	$id = $_GET['id'];
    	$news->id = $id;
    	$ask = $news->deletenews();
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