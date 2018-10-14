<?php
session_start();
if(isset($_SESSION['admin']))
{
	unset($_SESSION['admin']);
	echo "<script>window.location='".base_url()."index'</script>";
}
else
{
	echo "<script>window.location='".base_url()."index'</script>";
}