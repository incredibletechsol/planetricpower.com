<?php
$pageName = basename($_SERVER['PHP_SELF']);
if($pageName == "index.php")
	{
	echo "Admin : Planetric Power LLP";
	}
if($pageName == "enquiries.php")
	{
	echo "Enquiries";
	}	
if($pageName == "gallery.php")
	{
	echo "Gallery";
	}	
?>