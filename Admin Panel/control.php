<?php

include_once('../FROENT-END/model.php');  // step 1 model load

class control extends model{  //  step 2 model class extends in control for functionalites use
	
	function __construct(){
	
		model::__construct();	  // step 3 call model __construct
		
		$url=$_SERVER['PATH_INFO']; //http://localhost/students/01_Aug_PHP_2025/Project/website/control.php
		
		switch($url)
		{
			case '/index':
				include_once('index.php');
			break;
			
			case '/add_addon':
                
				include_once('add_addon.php');
			break;

			case '/add_booking':
				include_once('add_booking.php');
			break;
			
			case '/add_catalogues':
		if(isset($_REQUEST['submit']))
				{
					$CategoryID=$_REQUEST['CategoryID'];
					$CatalogueName=$_REQUEST['CatalogueName'];
                     	$Description=$_REQUEST['Description'];

					
					$Image=$_FILES['Image']['name'];
					if($_FILES['Image']['size']>0)
					{
						$path="images/catalogues/".$Image;  // path where we upload img
						$dup_file1=$_FILES['Image']['tmp_name']; // get duplicate file
						move_uploaded_file($dup_file1,$path); // move dupl image in path
					}
					$Status=$_REQUEST['Status'];
					$arr=array("CategoryID"=>$CategoryID,"CatalogueName"=>$CatalogueName,"Description"=>$Description,"Image"=>$Image,"Status"=>$Status);
					$run=$this->insert('catalogues',$arr);
					if($run)
					{
						echo "categories Inserted Success";
					}
					else
					{
						echo "nOPT Success";
					}	
					
				}
					
				include_once('add_catalogues.php');
			break;

			case '/add_categories':
				if(isset($_REQUEST['submit']))
				{
					$CategoryName=$_REQUEST['CategoryName'];
					$Description=$_REQUEST['Description'];

					
					$CategoryImage=$_FILES['CategoryImage']['name'];
					if($_FILES['CategoryImage']['size']>0)
					{
						$path="images/categories/".$CategoryImage;  // path where we upload img
						$dup_file1=$_FILES['CategoryImage']['tmp_name']; // get duplicate file
						move_uploaded_file($dup_file1,$path); // move dupl image in path
					}
					$Status=$_REQUEST['Status'];
					$arr=array("CategoryName"=>$CategoryName,"Description"=>$Description,"CategoryImage"=>$CategoryImage,"Status"=>$Status);

					$run=$this->insert('categories',$arr);
					if($run)
					{
						echo "categories Inserted Success";
					}
					else
					{
						echo "nOPT Success";
					}	
					
				}
				include_once('add_categories.php');


				
			break;

			case '/add_feedback':
				include_once('add_feedback.php');
			break;

			case '/add_gallery':
				include_once('add_gallery.php');
			break;

			case '/add_invoice':
				include_once('add_invoice.php');
			break;

			case '/add_notification':
				include_once('add_notification.php');
			break;

			case '/add_packages':
				 if(isset($_REQUEST['submit'])){
				$CategoryID=$_REQUEST['CategoryID'];
				$PackageName=$_REQUEST['PackageName'];
				$Price=$_REQUEST['Price'];
				$Duration=$_REQUEST['Duration'];
				$AddOns=$_REQUEST['AddOns'];
				$Description=$_REQUEST['Description'];
				$Status=$_REQUEST['Status'];
				$arr=array("CategoryID"=>$CategoryID,"PackageName"=>$PackageName,"Price"=>$Price,"Duration"=>$Duration,"AddOns"=>$AddOns,"Description"=>$Description,"Status"=>$Status);
			
					$run=$this->insert('packages',$arr);
					if($run)
					{
						echo "categories Inserted Success";
					}
					else
					{
						echo "nOPT Success";
					}	
				}
				include_once('add_packages.php');
				
			break;

			case '/add_payment':
				include_once('add_payment.php');
			break;

			case '/add_slottime':
				include_once('add_slottime.php');
			break;

			case '/add_user':

            if(isset($_REQUEST['submit'])){
				$FullName=$_REQUEST['FullName'];
				$Email=$_REQUEST['Email'];
				$Phone=$_REQUEST['Phone'];
				$Password=$_REQUEST['Password'];
				$Address=$_REQUEST['Address'];
				$Role=$_REQUEST['Role'];
				$Status=$_REQUEST['Status'];
				$ProfileImage=$_FILES['ProfileImage']['name'];
				if($_FILES['ProfileImage']['size']>0)
					{
						$path="images/users/".$ProfileImage;  // path where we upload img
						$dup_file1=$_FILES['ProfileImage']['tmp_name']; // get duplicate file
						move_uploaded_file($dup_file1,$path); // move dupl image in path
					}
				$CreatedDate=$_REQUEST['CreatedDate'];
			

				$arr=array("FullName"=>$FullName,"Email"=>$Email,"Phone"=>$Phone,"Password"=>$Password,"Address"=>$Address,"Role"=>$Role,"Status"=>$Status,"ProfileImage"=>$ProfileImage,"CreatedDate"=>$CreatedDate);
			
					$run=$this->insert('users',$arr);
					if($run)
					{
						echo "categories Inserted Success";
					}
					else
					{
						echo "nOPT Success";
					}	
				}
				include_once('add_user.php');
			break;

			case '/manage_addons':
							$add_arr=$this->select('bookings');

				include_once('manage_addons.php');
			break;

			case '/manage_booking':
			$book_arr=$this->select('bookings');

				include_once('manage_booking.php');
			break;

			case '/manage_catalogues':
			$cate_arr=$this->select('catalogues');
											

				include_once('manage_catalogues.php');
			break;

			case '/manage_categories':
				$cat_arr=$this->select('categories');

				include_once('manage_categories.php');
			break;

			case '/manage_feedback':
								$feed_arr=$this->select('feedback');

				include_once('manage_feedback.php');
			break;

			case '/manage_gallery':
												$gallery_arr=$this->select('gallery');

				include_once('manage_gallery.php');
			break;

			case '/manage_invoice':
																$invoice_arr=$this->select('invoices');

				include_once('manage_invoice.php');
			break;

			case '/manage_notification':
																$notification_arr=$this->select('notifications');

				include_once('manage_notification.php');
			break;

			case '/manage_packages':
																$package_arr=$this->select('packages');
				include_once('manage_packages.php');
			break;

			case '/manage_payment':
																$payment_arr=$this->select('payments');
				include_once('manage_payment.php');
			break;

			case '/manage_slottime':
																$slottime_arr=$this->select('timeslots');
				include_once('manage_slottime.php');
			break;

			case '/manage_user':
																$user_arr=$this->select('users');
				include_once('manage_user.php');
			break;









			
			
			
			
			
			
		}
	}
	
}

$obj=new control;
?>