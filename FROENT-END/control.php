
<?php

include_once('model.php');  // step 1 model load

class control extends model{  //  step 2 model class extends in control for functionalites use
	
	function __construct(){
	
		model::__construct();	  // step 3 call model __construct
		
		$url=$_SERVER['PATH_INFO']; 

    switch($url){
        case '/':
            include_once('index.php');
            break;

         case '/about':
            include_once('about.php');
            break;
        
         case '/blog':
            include_once('blog.php');
            break;

         case '/contact':
            include_once('contact.php');
            break;

        case '/galley':
            include_once('gallery.php');
            break;

         case '/index':
            include_once('index.php');
            break;
        
         case '/login':
            include_once ('login.php');
            break;

         case '/price':
            include_once('price.php');
            break;

        case '/registration':
            include_once('regestration.php');
            break;

         case '/service':
            include_once('service.php');
            break;
        
         case '/team':
            include_once('team.php');
            break;

         case '/testimonial':
            include_once('testiminal.php');
            break;

    }

}
}
$obj=new control;

?>