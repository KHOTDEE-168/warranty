<?php

	session_start();
	include("service/config_service.php");


	$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$position = strpos($actual_link,"web");
	$uri =  substr($actual_link, 0, $position);

	
	$site_skin = "skin-blue" ;
	$site_ico= $uri."assets/img/warranty.png" ;
	$site_logo= $uri."assets/img/warranty.png" ;
	$site_name = "Warranty System";
	$site_name_short = "WARRANTY";

	$url_ext = "";
	//$url_ext = ".php";

	$service_host = 'http://localhost/survey/'; // TEST
	// $service_host = 'http://localhost/survey/'; // TEST
 
	$site_user_id = "admin";
	$site_user_nane = "ADMIN";
	$site_user = "ADMIN";
	$site_role = "Admin";

 
	 if(isset($_SESSION['user_info'])) {

		$site_user_id = $_SESSION['user_ID'];
		$site_user_nane = $_SESSION['user_ID'];
		$site_user = $_SESSION['full_name'];
		$site_role = $_SESSION['role'];
			 
	 }
	 
	 
	 if($_SESSION["lang"] == "en")
	 {
		include("lang/en.php");
	}
	else
	{
		include("lang/th.php");
	}


?> 
