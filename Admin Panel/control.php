<?php

include_once('../FROENT-END/model.php');  // step 1 model load

class control extends model{  //  step 2 model class extends in control for functionalites use
	
	function __construct(){
	
		model::__construct();	  // step 3 call model __construct
		
		$url=$_SERVER['PATH_INFO']; //http://localhost/students/01_Aug_PHP_2025/Project/website/control.php
		
		switch($url)
		{
			case '/admin-login':
				include_once('index.php');
			break;
			
			case '/dashboard':
				include_once('dashboard.php');
			break;
			case '/add_booking':
				include_once('add_booking.php');
			break
			
			case '/add_catalogues':
				include_once('add_catalogues.php');
			break;
			case '/add_categories':
				include_once('add_categories.php');
			break;
			case '/add_feedback':
				include_once('add_feedback.php');
			break;












			case '/manage_booking':
				include_once('manage_booking.php');
			break;
			
			
			
			
			
			
		}
	}
	
}

$obj=new control;
?>