<?php
	
	/*Snippet to validate email address while creating business*/
	function tgb_validate_email_address_init(){
	 	$email_address = $_REQUEST['email_address'];
	    if ( email_exists($email_address) ) {
	        echo 'exists'; 
	    } else {
	        echo 'not_exists'; 
	    }
	    die();
	}
	add_action('wp_ajax_tgb_validate_email_address', 'tgb_validate_email_address_init');
	add_action('wp_ajax_nopriv_tgb_validate_email_address', 'tgb_validate_email_address_init' );


	/*Snippet to get autocomplete guides names*/
	function tgb_autocomplete_guides_init(){
		
		$guideusers_array = array();
		$args = array(
                      'blog_id'      => $GLOBALS['blog_id'],
                      'role'         => 'lodges',
                      'role__in'     => array(),
                      'role__not_in' => array(),
                      'meta_key'     => '',
                      'meta_value'   => '',
                      'meta_compare' => '',
                      'meta_query'   => array(),
                      'date_query'   => array(),        
                      'include'      => array(),
                      'exclude'      => array(),
                      'orderby'      => 'login',
                      'order'        => 'ASC',
                      'offset'       => '',
                      'search'       => '',
                      'number'       => '',
                      'count_total'  => false,
                      'fields'       => 'all',
                      'who'          => '',
                  ); 
        $guideusers = get_users( $args ); 
		if(!empty($guideusers)){
		  foreach ( $guideusers as $user ) {
		    $guideusers_array[] = array(	
		    								'id' => $user->ID,
		    								'label' =>  $user->display_name,
		    								'value' => $user->display_name,
		    							);
		  }  
		}

		# echo the json data back to the html web page
		echo json_encode($guideusers_array);
	    die();
	}
	add_action('wp_ajax_tgb_autocomplete_guides', 'tgb_autocomplete_guides_init');
	add_action('wp_ajax_nopriv_tgb_autocomplete_guides', 'tgb_autocomplete_guides_init' );

	
	/*Snippet to create user and do payment for the create a business module*/
	function tgb_create_business_do_payment_init(){
		$errors = false;
		if(isset($_POST['stripeToken'])){
			
		    $token = $_POST['stripeToken'];
		    $create_business_data = $_POST['create_business'];
			$email_address = $create_business_data['email_address'];

			if ( email_exists($email_address) ) {
		        $_SESSION['tgb_error']['business_email_registered'] = 'email address already registered. Please try another email address';
		        $errors = true;
		    }
			
			if(isset($create_business_data['business_plan']) && !empty($create_business_data['business_plan'])){
				$plan_id = $create_business_data['business_plan'];	
			}else{
				$_SESSION['tgb_error']['business_no_plan'] = 'You must select at least one plan to proceed.';
		        $errors = true;	
			}

			/*Stripe Test Payment Option Start Here*/
			if(!$errors){
				require_once( HOMEY_PLUGIN_PATH . '/includes/stripe-php/init.php' );
				$stripe_secret_key = 'sk_test_Q6rco170pNOY1UBsqmiHYZUB';
			  	$stripe_publishable_key = 'pk_test_RTKw7N4nNG0Twz8rqzTniShu';
			  	
			  	\Stripe\Stripe::setApiKey($stripe_secret_key);
			  	
			  	$customer = \Stripe\Customer::create([
			      'email' => $email_address,
			      'source'  => $token,
			  	]);

			   	$subscription = \Stripe\Subscription::create(array(
				      "customer" => $customer->id,
				      "items" => array(
				          array(
				              "plan" => $plan_id,
				          ),
				      ),
				));
				$_SESSION['tgb_success']['business_success'] = 'Payment done successfully';
			   // echo "<pre>";
			   // print_r($subscription);
			   // echo "</pre>";	
			}else{
				$_SESSION['tgb_error']['something_wrong'] = 'Something went wrong with your form submission';
				$errors = true;	
			}
			
		}
		/*Stripe Test Payment Option End Here*/
	}
	add_action('init', 'tgb_create_business_do_payment_init');
?>