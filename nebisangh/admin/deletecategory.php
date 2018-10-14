<?php
    require_once 'class/common.class.php';
    require_once 'class/category.class.php';
    require_once 'class/session.class.php';
    sessionhelper::checklogin();
    require_once 'layout/header.php';
    $category = new category;
    if(isset($_GET['id']))
    {
    	$id = $_GET['id'];
    	$category->id = $id;
    	$ask = $category->deletecategory();
    	if($ask == 1)
    	{
    		 echo "<script>alert('Deleted Successfully')</script>";
    	}
    	else
    	{
    		 echo "<script>alert('Failed to delete')</script>";
    	}
    }
?>
<script> window.location="categorylist.php" </script>