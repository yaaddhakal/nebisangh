<?php
    require_once 'class/common.class.php';
    require_once 'class/news.class.php';
    require_once 'class/session.class.php';
    sessionhelper::checklogin();
   $new=  $_GET['news_id'];
    $news = new news;
    if(isset($_GET['id']))
    {
    	$id = $_GET['id'];
    	$news->id = $id;
        
    	$ask = $news->deletecomments();
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
<script> window.location="viewcomment.php?id=<?php echo $new; ?>" </script>