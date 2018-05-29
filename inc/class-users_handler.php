<?php 
/* WP_REST_Server::READABLE = ‘GET’

WP_REST_Server::EDITABLE = ‘POST, PUT, PATCH’

WP_REST_Server::DELETABLE = ‘DELETE’

WP_REST_Server::ALLMETHODS = ‘GET, POST, PUT, PATCH, DELETE’
WP_REST_Server::CREATABLE = ‘POST';

 */

class Users extends WP_REST_Controller
{
	var $my_namespace = 'users';
	var $validator;
	var $WPmodify;
  	
	public function __construct()
	{
		$this->validator = new Validator();
			
		$this->WPmodify = new WPmodify();
		add_action( 'rest_api_init', array( $this, 'RegisterRoutes' ) );
	}
	
	public function RegisterRoutes()
	{
	
		
		register_rest_route( $this->my_namespace, '/userRegistration',array(
			'methods'         => WP_REST_Server::CREATABLE,
			'callback'        => array( $this, 'user_Registration' ),	
			'permission_callback'   => array( $this, 'userRegistrationValidate' )		
			) 
		);
	
		register_rest_route( $this->my_namespace, '/login',array(
			'methods'         => WP_REST_Server::CREATABLE,
			'callback'        => array( $this, 'user_SignIn' ),	
			'permission_callback'   => array( $this, 'userSignValidation' )		
			) 
		);	

		register_rest_route( $this->my_namespace, '/sociallogin',array(
			'methods'         => WP_REST_Server::CREATABLE,
			'callback'        => array( $this, 'socialSignUp' ),	
			'permission_callback'   => array( $this, 'SocialSignValidation' )
			) 
		);
	
	
		register_rest_route( $this->my_namespace, '/getNotifications',array(
			'methods'         => WP_REST_Server::READABLE,
			'callback'        => array( $this, 'getNotifications' ),
			'permission_callback'   => array( $this, 'Validate' )		
			) 
		);
	
		register_rest_route( $this->my_namespace, '/getprofile',array(
			'methods'         => WP_REST_Server::READABLE,
			'callback'        => array( $this, 'getprofile' ),
			'permission_callback'   => array( $this, 'getprofileValidate' )		
			) 
		);
		
		register_rest_route( $this->my_namespace, '/updateProfile',array(
			'methods'         => WP_REST_Server::EDITABLE,
			'callback'        => array( $this, 'UpdateProfile' ),
			'permission_callback'   => array( $this, 'UpdateProfileValidation' )		
			) 
		);
	
	
		register_rest_route( $this->my_namespace, '/sendMessage',array(
			'methods'         => WP_REST_Server::CREATABLE,
			'callback'        => array( $this, 'sendMessage' ),
			'permission_callback'   => array( $this, 'Validate' )		
			) 
		);
		register_rest_route( $this->my_namespace, '/getMessages',array(
			'methods'         => WP_REST_Server::READABLE,
			'callback'        => array( $this, 'getMessages' )	
			) 
		);

		register_rest_route( $this->my_namespace, '/getCuisineList',array(
			'methods'         => WP_REST_Server::READABLE,
			'callback'        => array( $this, 'getCuisineList' )	
			) 
		);
		register_rest_route( $this->my_namespace, '/getPopularDishes',array(
			'methods'         => WP_REST_Server::READABLE,
			'callback'        => array( $this, 'getPopularDishes' )	
			) 
		);
		
		register_rest_route( $this->my_namespace, '/getBusinessDetails',array(
			'methods'         => WP_REST_Server::READABLE,
			'callback'        => array( $this, 'getBusinessDetails' ),
			'permission_callback'   => array( $this, 'getBusinessDetailsValidation' )		
			) 
		);

		register_rest_route( $this->my_namespace, '/getServiceProviderList',array(
			'methods'         => WP_REST_Server::READABLE,
			'callback'        => array( $this, 'getServiceProvider' ),
			'permission_callback'   => array( $this, 'getServiceProviderListValidation' )		
			) 
		);
		register_rest_route( $this->my_namespace, '/updateBusinessDetails',array(
			'methods'         => WP_REST_Server::EDITABLE,
			'callback'        => array( $this, 'updateBusinessDetails' ),
			'permission_callback'   => array( $this, 'updateBusinessDetailsValidate' )		
			) 
		);
		
		register_rest_route( $this->my_namespace, '/forgotPassword',array(
			'methods'         => WP_REST_Server::EDITABLE,
			'callback'        => array( $this, 'forgotPassword' ),
			'permission_callback'   => array( $this, 'forgotPasswordValidate' )		
			) 
		);
		
		register_rest_route( $this->my_namespace, '/ResetPassword',array(
			'methods'         => WP_REST_Server::CREATABLE,
			'callback'        => array( $this, 'ResetPassword' )	
			) 
		);
	
	}
	
	public function user_Registration( WP_REST_Request $request )
	{
		global $wpdb;
		$parameters = $request->get_params();
		$more_img = NULL;
		if( isset($_FILES) )
		{
			$more_img = $this->WPmodify->UploadImg( $_FILES );			
		}
		

		$role = '';
		if( isset($parameters['user_type']) && $parameters['user_type'] == 1 )
		{
			$role = 'customer';
		}
		if( isset($parameters['user_type']) && $parameters['user_type'] == 2 )
		{
			$role = 'provider';
		}

		
		$title 					= $parameters['title'];
		$first_name 			= $parameters['first_name'];
		$last_name 				= $parameters['last_name'];
		$password 				= $parameters['password'];
		$email 					= $parameters['email'];
		$username 				= $parameters['username'];
		$phone_number 			= $parameters['phone_number'];
		$unit_apartment_number 	= $parameters['unit_apartment_number'];
		$street_address 		= $parameters['street_address'];
		$suburb 				= $parameters['suburb'];
		$state 					= $parameters['state'];
		$postcode 				= $parameters['postcode'];
		$country 				= $parameters['country'];
		
		$facebook_id 			= $parameters['facebook_id'];
		$google_id 				= $parameters['google_id'];
		$device_type 			= $parameters['device_type'];
		$device_token 			= $parameters['device_token'];
		$user_type 				= $parameters['user_type'];
		$about_me 				= $parameters['about_me'];
		$user_activation_key	= time().base64_encode($email);
	
		if( $parameters['user_type'] == 1 )
		{
			$business_name			= NULL;
			$abn 					= NULL;
		}
		if( $parameters['user_type'] == 2 )
		{
			$business_name			= $parameters['business_name'];
			$abn 					= $parameters['abn'];
		}


		/* Creating Wordpress User  */
		$userdata = array(
		'user_pass'  			=> $password ,	
		'user_login'   			=> $username ,
		'first_name' 			=> $first_name ,  
		'last_name' 			=> $last_name ,  
		'user_email'   			=> $email ,  
		'display_name'  		=> $first_name ,  
		'user_registered' 	 	=> date('Y-m-d H:i:s') ,  
		'role'  				=> $role  		
		);
		$user_id = wp_insert_user( $userdata ) ; 


		wp_set_password( $password, $user_id );
		
		/* Inserting Data into registartion Table of Profile Use */
		$Data = array( 
		'user_id'=>$user_id,
		'user_type'=>$user_type,
		'first_name'=>$first_name,
		'last_name'=>$last_name,
		'username'=>$username,
		'apartment_number'=>$unit_apartment_number,
		'street_address'=>$street_address,
		'suburb'=>$suburb,
		'phone_number'=>$phone_number,
		'state'=>$state,
		'post_code'=>$postcode,
		'country'=>$country,
		'email'=>$email,
		'title'=>$title,
		'business_number'=>$business_name,
		'abn'=>$abn,
		'profile_image'		=>	$more_img,
		'facebook_id'=>$facebook_id,
		'google_id'=>$google_id,
		'device_token'=>$device_token,
		'device_type'=>$device_type,
		'about_me'			=>	$about_me,
		'user_activation_key'=>$user_activation_key,
		'modified_on'=>date( 'd-m-Y h:i:s' ),
		'created_on'=>date( 'd-m-Y h:i:s' )

		);

		if( $parameters['user_type'] == 1 )
		{
			$Data['user_activated'] = 0;
		}
		if( $parameters['user_type'] == 2 )
		{
			$Data['user_activated'] = 0;
		}
		
		
		$wpdb->insert( $wpdb->prefix.'registration', $Data );
		$wpdb->flush();		

		$to 		= $email;
		$subject 	= 'Account Verification';
		$body		= 'The email body content '.site_url().'/?verifyAccount='.$user_activation_key;
		$headers 	= array('Content-Type: text/html; charset=UTF-8');
		$mail 		=  wp_mail( $to, $subject, $body, $headers );
		if( $mail )
		{
			$this->WPmodify->response( 1, 'Please check your email for verification Link' , 'No Error Found' );
		}
		else
		{
			$this->WPmodify->response( 0, 'Please ask Admin to Activate your account as Activation Mail was not sent ' , 'Mail Sent Error' );
		}		
	}
	
	public function user_SignIn ( WP_REST_Request $request )
	{
		$parameters = $request->get_params();
		if(isset($parameters['SignIn_wpnonce']))
			{
				$info = array();
				if (filter_var($parameters['username_email'], FILTER_VALIDATE_EMAIL)) 
				{
					 $user = get_user_by('email', $parameters['username_email']);					
				} 
				else 
				{
					$user = get_user_by('login', $parameters['username_email']);					
				}
				
				if( empty( $user ) )
				{
					$this->WPmodify->web_response( 'error', 'Invalid Credentials ! ',200 );
				}

				$info['user_login'] 	= 	$user->data->user_login;
				$info['user_password'] 	= $parameters['password'] ;
				
				 $user_signon = wp_signon( $info );
				if ( is_wp_error($user_signon) )
				{
					$this->WPmodify->web_response( 'error', 'Invalid Credentials ! ',200 );				
				} 
				else 
				{
					if( $user_signon->roles[0] == 'customer' )
					{
						$this->WPmodify->web_response( 'success', 'User Login Successfully' , site_url("/customer/") );						
					}
					if( $user_signon->roles[0] == 'provider' )
					{
						$this->WPmodify->web_response( 'success', 'User Login Successfully' , site_url("/provider/") );						
					}
				}
				
			}
			else
			{

				if (filter_var($parameters['username_email'], FILTER_VALIDATE_EMAIL)) 
				{
					 $user = get_user_by('email', $parameters['username_email']);					
				} 
				else 
				{
					$user = get_user_by('login', $parameters['username_email']);					
				}

				if ( $user && wp_check_password( $parameters['password'], $user->data->user_pass, $user->ID) )
				{
					$accessToken = $this->WPmodify->createToken( $user->ID , $user->user_login , $parameters['device_token'] , $parameters['device_type'] );

					$request = new WP_REST_Request( 'GET', '/users/getprofile' );
					$request->set_query_params(array(
				  		'user_id' => $user->ID				  
					));
					header("Authenticate-Token: $accessToken");
					$this->getprofile($request);	

				}			
				else
				{
					$this->WPmodify->response( 0, NULL , 'Invalid Credentials ! ' );
				}
				//user_password
				
			}		
	}
	
	public function getprofile( WP_REST_Request $request )
	{
		$parameters = $request->get_params();
		$UserID 	= $parameters['user_id'];
		global $wpdb;
		
		$results = $wpdb->get_results( 'SELECT id,user_id,first_name,last_name,username,apartment_number,street_address,suburb,state,post_code,email,title,profile_image,about_me,business_number,abn,user_type,phone_number FROM '.$wpdb->prefix.'registration WHERE user_id ='.$UserID, OBJECT );		
		
		/*if( $results[0]->user_type == 1 )
		{
			unset( $results[0]->business_number );
			unset( $results[0]->abn );
		}*/
		
		if( $results[0]->profile_image != NULL )
		{
			if( $results[0]->user_type == 1 ) //customer
			{
				$results[0]->profile_image = site_url('/').$results[0]->profile_image;
			}
			
			if( $results[0]->user_type == 2 ) // provider
			{
				$results[0]->profile_image = site_url('/').$results[0]->profile_image;
			}			
			
		}			
			
		unset( $results[0]->id );	
		
		$this->WPmodify->response( 1, $results[0] , 'No Error Found' );	
		/* 
		http://iwantservice.imarkclients.com/wp-json/users/getprofile?user_id=4
		{"success":1,"result":{"user_id":"4","first_name":"Chhavinav","last_name":"Sehgal","username":"imrks","apartment_number":"asda","street_address":"asd","suburb":"asd","state":"sdas","post_code":"asd","email":"chhavinav@imarkinfotech.com","title":"Mr","profile_image":null,"about_me":null},"error":"No Error Found"}

		*/

		
	}
		
	public function forgotPassword(  WP_REST_Request $request )
	{
		global $wpdb;
		$parameters = $request->get_params();
				
		if ( ! email_exists( $parameters['email'] ) ) 
		{
			if(isset($parameters['ForgotPassword_wpnonce']))
			{
				$this->WPmodify->web_response( 'error','Email ID does not Exists !');
			}
			else
			{
				$this->WPmodify->response( 0, NULL , 'Email ID does not Exists !' );
			}
		}
		else
		{
		
		/* Generating Reset Tokken */
		$user = get_user_by( 'email', $parameters['email'] );	
		$password = wp_generate_password( 8, false );
		wp_set_password( $password, $user->ID );	
		/*$reset_password_token	= time().base64_encode($parameters['email']).$parameters['ForgotPassword_wpnonce'];	
		
		$Data = array( 		
		'reset_password_token' => $reset_password_token		
		);	
		
		$wpdb->update( $wpdb->prefix.'registration', $Data,array( 'user_id' => $user->ID ));
		$wpdb->flush();*/
		$DirPath = getcwd();	
		$file 			= $DirPath.'/wp-content/themes/iwantservice/email-template/EmailTemplate-ForgotPassword.html';
		$logo 			= $DirPath.'/wp-content/themes/iwantservice/assets/images/logo.png';
		$message 		= 'Your New Password  : '.$password;
		$search 		= array('[logo]','[username]','[message]');
		$replace_emp 	= array( $logo,$user->firstname,$message);
		$mail = $this->WPmodify->SendEmail($parameters['email'],'Reset Password',$file,$search,$message,$replace_emp);
			if( $mail )
			{
				if(isset($parameters['ForgotPassword_wpnonce']))
				{
					$this->WPmodify->web_response( 'success','Password Reset Mail Send');
				}
				else
				{
					$this->WPmodify->response( 1, NULL , 'Password Reset Mail Send' );
				}
			}
			else
			{
				
			}
		
		}
		
	}
	
	public function ResetPassword( WP_REST_Request $request )
	{
		global $wpdb;
		$parameters = $request->get_params();
			
		if( isset( $parameters["ResetPassword_wpnonce"] ) )
		{	
			$results = $wpdb->get_results( 'SELECT user_id FROM '.$wpdb->prefix.'registration WHERE reset_password_token ="'.$parameters["token"].'"', OBJECT );
			if(!empty( $results ))
			{
				if( $parameters['password'] == $parameters['confirmpassword'] )
					{
						$hash = wp_hash_password( $parameters['password'] );
						$update = $wpdb->update($wpdb->users, array('user_pass' => $hash), array('ID' => $results[0]->user_id) );				 
						$wpdb->flush();
						
						$wpdb->update($wpdb->prefix.'registration', array('reset_password_token' => ''), array('user_id' => $results[0]->user_id) );
						$wpdb->flush();
						if( $update )
						{
							
							if(isset($parameters['ResetPassword_wpnonce']))
							{
								$this->WPmodify->web_response( 'success','Password Reset Successfully ',site_url());
							}
							else
							{
								$this->WPmodify->response( 1, NULL , 'Password Reset Successfully ' );
							}
						}
						else
						{							
							if(isset($parameters['ResetPassword_wpnonce']))
							{
								$this->WPmodify->web_response( 'error','Password Reset Failed. Please Try Again');
							}
							else
							{
								$this->WPmodify->response( 0, NULL , 'Password Reset Failed. Please Try Again' );
							}					
						}
					}	
				else
					{
						if(isset($parameters['ResetPassword_wpnonce']))
						{
							$this->WPmodify->web_response( 'error','Confirm Password does\'nt match with password ! ');
						}
						else
						{
							$this->WPmodify->response( 0, NULL , 'Confirm Password does\'nt match with password !' );
						}
					}
			}
			else
			{
				if(isset($parameters['ResetPassword_wpnonce']))
				{
					$this->WPmodify->web_response( 'error','Invalid Token ! ');
				}
				else
				{
					$this->WPmodify->response( 0, NULL , 'Invalid Token !' );
				}
			}
		}
		else
		{
				$this->validator->validation_rules(array(
				'previous_pass'     => 'required',
				'new_pass'   		=> 'required',					
				'confirm_pass'   	=> 'required',					
				'user_id'   		=> 'required'					
				));		
		
				$this->validator->filter_rules(array(
				'previous_pass'     => 'trim',
				'new_pass'   		=> 'trim',					
				'confirm_pass'   	=> 'trim',					
				'user_id'   		=> 'trim'	
				));

				$validated_data = $this->validator->run($parameters);

				if($validated_data === false) 
				{
					if( isset( $parameters["UpdatePassword_wpnonce"] ) )
					{
						return new WP_Error( 'error',$this->validator->get_errors_array(),array( 'status' => 200) );	
					}
					else
					{
						$Error = $this->validator->get_errors_array();	
						$this->WPmodify->response( 0, reset($Error) , 'Some Fields were Not Valid !' );
					}
						
				}
				else
				{

					$user = get_user_by( 'id', $parameters['user_id'] );
					if ( $user && wp_check_password( $parameters['previous_pass'], $user->data->user_pass, $user->ID) )
					{
						if( $parameters['new_pass'] == $parameters['confirm_pass'] )
						 {
						 	 wp_set_password( $parameters['new_pass'], $parameters['user_id'] );
						 	
					 		if( isset( $parameters["UpdatePassword_wpnonce"] ) )
								{
									$this->WPmodify->web_response( 'success', 'Password Updated Successfully');	
								}
							else
								{
									$this->WPmodify->response( 1, NULL , 'Password Updated Successfully' );
								}								
						 	
						 	
						 }
						 else
						 {
						 	if( isset( $parameters["UpdatePassword_wpnonce"] ) )
								{
									$this->WPmodify->web_response( 'error', 'New and Confirm Password not matched !' , 'Password Not Updated' );	
								}
								else
								{
									$this->WPmodify->response( 0, NULL , 'New and Confirm Password not matched !' );
								}	
						 }
					}
					else
					{
						if( isset( $parameters["UpdatePassword_wpnonce"] ) )
						{
							$this->WPmodify->web_response( 'error', 'Previous Password Does\'nt match' );	
						}
						else
						{
							$this->WPmodify->response( 0, NULL , 'Previous Password Does\'nt match' );
						}

					}
				} 
				//previous_pass , new_pass ,confirm_pass , user_id 
		}
	}
	
	public function UpdateProfile( WP_REST_Request $request )
	{
		global $wpdb;
		$parameters = $request->get_params();
		$more_img = NULL;
		if( isset($_FILES) )
		{
			$more_img = $this->WPmodify->UploadImg( $_FILES );			
		}
		
		$user_id 				= $parameters['user_id'];
		$title 					= $parameters['title'];
		$first_name 			= $parameters['first_name'];
		$last_name 				= $parameters['last_name'];		
		$phone_number 			= $parameters['phone_number'];
		$unit_apartment_number 	= $parameters['unit_apartment_number'];
		$street_address 		= $parameters['street_address'];
		$suburb 				= $parameters['suburb'];
		$state 					= $parameters['state'];
		$postcode 				= $parameters['postcode'];
		$country 				= $parameters['country'];
		$business_name			= $parameters['business_name'];
		$abn 					= $parameters['abn'];		
		$about_me 				= $parameters['about_me'];		
		$lat 					= $parameters['lat'];		
		$longs 					= $parameters['longs'];		
	
		
		/* Updating Data into registartion Table of Profile Use */
		$Data = array( 		
		'first_name'		=>	$first_name,
		'last_name'			=>	$last_name,		
		'apartment_number'	=>	$unit_apartment_number,
		'street_address'	=>	$street_address,
		'suburb'			=>	$suburb,
		'state'				=>	$state,
		'post_code'			=>	$postcode,
		'phone_number'		=>	$phone_number,
		//'country'			=>	$country,		
		'title'				=>	$title,		
		'business_number'	=>	$business_name,
		'about_me'			=>	$about_me,
		'lat'				=>	$lat,
		'longs'				=>	$longs,
		'abn'				=>	$abn		
		);
		
		if( isset($_FILES) && $more_img != NULL )
		{
			$Data['profile_image'] = $more_img;
		}

		
		update_user_meta($user_id, 'first_name', $first_name);
		update_user_meta($user_id, 'last_name', $last_name);		
		$wpdb->update( $wpdb->prefix.'registration', $Data,	array( 'user_id' => $user_id ));
		$wpdb->flush();

		
		if(isset($parameters['UpdateProfile_wpnonce']))
		{
			$this->WPmodify->web_response( 'success', 'Details Updated Successfully' , 'No Error Found' );
		}
		else
		{
			$this->WPmodify->response( 1, 'Details Updated Successfully' , 'No Error Found' );			
		}	
		
	}

	public function socialSignUp( WP_REST_Request $request )
	{
		global $wpdb;
		$parameters = $request->get_params();
		
		$role = '';
		if( $parameters['user_type'] == 1 )
		{
			$role = 'customer';
		}
		if( $parameters['user_type'] == 2 )
		{
			$role = 'provider';
		}


		$title 					= $parameters['title'];
		$first_name 			= $parameters['first_name'];
		$last_name 				= $parameters['last_name'];
		$password 				= wp_generate_password();
		$email 					= $parameters['email'];
		$username 				= $parameters['username'];
		$phone_number 			= $parameters['phone_number'];
		$unit_apartment_number 	= $parameters['unit_apartment_number'];
		$street_address 		= $parameters['street_address'];
		$suburb 				= $parameters['suburb'];
		$state 					= $parameters['state'];
		$postcode 				= $parameters['postcode'];
		$country 				= $parameters['country'];
		$business_name			= $parameters['business_name'];
		$abn 					= $parameters['abn'];
		$facebook_id 			= $parameters['facebook_id'];
		$google_id 				= $parameters['google_id'];
		$device_type 			= $parameters['device_type'];
		$device_token 			= $parameters['device_token'];
		$user_type 				= $parameters['user_type'];
		
	
		/* Creating Wordpress User  */
		$userdata = array(
		'user_pass'  			=> $password ,	
		'user_login'   			=> $username ,
		'first_name' 			=> $first_name ,  
		'last_name' 			=> $last_name ,  
		'user_email'   			=> $email ,  
		'display_name'  		=> $first_name ,  
		'user_registered' 	 	=> date('Y-m-d H:i:s') ,  
		'role'  				=> $role  		
		);
		//$user_id = wp_insert_user( $userdata ) ; 
		
		/* Inserting Data into registartion Table of Profile Use */
		$Data = array( 
		'user_id'=>$user_id,
		'user_type'=>$user_type,
		'first_name'=>$first_name,
		'last_name'=>$last_name,
		'username'=>$username,
		'apartment_number'=>$unit_apartment_number,
		'street_address'=>$street_address,
		'suburb'=>$suburb,
		'phone_number'=>$phone_number,
		'state'=>$state,
		'post_code'=>$postcode,
		'country'=>$country,
		'email'=>$email,
		'title'=>$title,
		'business_number'=>$business_name,
		'abn'=>$abn,
		'facebook_id'=>$facebook_id,
		'google_id'=>$google_id,
		'device_token'=>$device_token,
		'device_type'=>$device_type			
		);
			print_R( $Data );
		
		//$wpdb->insert( $wpdb->prefix.'registration', $Data );
		//$wpdb->flush();
		/*$accessToken = $this->WPmodify->createToken( $user_id , $user->user_login , $parameters['device_token'] , $parameters['device_type'] );

		$request = new WP_REST_Request( 'GET', '/users/getprofile' );
		$request->set_query_params(array(
	  		'user_id' => $user->ID				  
		));
		header("Authenticate-Token: $accessToken");
		$this->getprofile($request);*/
	}

	public function updateBusinessDetails( WP_REST_Request $request )
	{
		$parameters = $request->get_params();
		global $wpdb;
		
		$results = $wpdb->get_results( "SELECT * FROM ".$wpdb->prefix."businessdetail WHERE user_id =".$parameters['user_id'], OBJECT  );
		if( empty( $results ) )	//Inserting new Details
		{
			$Data = array( 
			'user_id'						=>$parameters['user_id'],
			'service_type'					=>$parameters['service_type'],
			'catering_capacity'				=>$parameters['catering_capacity'],
			'venue_capacity'				=>$parameters['venue_capacity'],
			'venue_description'				=>$parameters['venue_description'],
			'Accessibility_feature_venue'	=>$parameters['Accessibility_feature_venue'],
			'cuisine_type'					=>$parameters['cuisine_type'],
			'cuisine_type_other'			=>$parameters['cuisine_type_other'],
			'popular_dishes'				=>$parameters['popular_dishes'],
			'created_on'					=>date( 'd-m-Y h:i:s' ),
			'updated_on'					=>date( 'd-m-Y h:i:s' )		
		);
			
			$resp = $wpdb->insert( $wpdb->prefix.'businessdetail', $Data );
			$wpdb->flush();	
		}
		else 			//Updating Existing BD Details
		{
			$Data = array( 			
			'service_type'					=>$parameters['service_type'],
			'catering_capacity'				=>$parameters['catering_capacity'],
			'venue_capacity'				=>$parameters['venue_capacity'],
			'venue_description'				=>$parameters['venue_description'],
			'Accessibility_feature_venue'	=>$parameters['Accessibility_feature_venue'],
			'cuisine_type'					=>$parameters['cuisine_type'],
			'cuisine_type_other'			=>$parameters['cuisine_type_other'],
			'popular_dishes'				=>$parameters['popular_dishes'],			
			'updated_on'					=>date( 'd-m-Y h:i:s' )		
		);

			$resp = $wpdb->update( $wpdb->prefix.'businessdetail', $Data,array( 'id' => $results[0]->id ));
			$wpdb->flush();
		}

		if(isset($resp))
		{
			if(isset($parameters['UpdateDB_wpnonce']))
			{
				$this->WPmodify->web_response( 1, 'Business Information updated !' );	
			}
			else
			{	
				$this->WPmodify->response( 1, 'Business Information updated !' );
			}		
		}
		else
		{

			if(isset($parameters['UpdateDB_wpnonce']))
			{
				$this->WPmodify->web_response( 0,NULL,'No Information is updated' );	
			}
			else
			{	
				$this->WPmodify->response( 0,NULL,'No Information is updated' );
			}	
		}
		
	}

	public function getBusinessDetails( WP_REST_Request $request)
	{
		$parameters = $request->get_params();
		$UserID 	= $parameters['user_id'];
		global $wpdb;		
		$results = $wpdb->get_results( 'SELECT * FROM '.$wpdb->prefix.'businessdetail WHERE user_id ='.$UserID, OBJECT );
		if( empty( $results ) )
		{
			$this->WPmodify->response( 0,NULL , 'No Detail Found' );	
		}
		else
		{
			unset($results[0]->id);
			$this->WPmodify->response( 1,$results[0] );	
		}
	}

	public function getCuisineList( WP_REST_Request $request )
	{
		$fields = get_fields('option');
		$list = array();

		foreach( $fields['create_cuisine_list'] as $keys ):			
			$list[] = $keys['cuisine_name'];	
		endforeach;
		if( !empty($fields['create_cuisine_list']) )
		{
			$this->WPmodify->response( 1, $list );			
		}
		else
		{
			$this->WPmodify->response( 0,array(),'No List Found'  );
		}
	}

	public function getPopularDishes( WP_REST_Request $request )
		{
			$fields = get_fields('option');	
			$list = array();

			foreach( $fields['create_popular_dishes'] as $keys ):
				$list[] = $keys['dish_name'];	
			endforeach;

			if( !empty($fields['create_popular_dishes']) )
			{
				$this->WPmodify->response( 1, $list );			
			}
			else
			{
				$this->WPmodify->response( 0,array(),'No List Found'  );
			}
		}

	public function getServiceProvider( WP_REST_Request $request )
	{
		$parameters = $request->get_params();
		
		$default = 10;

			if(isset($parameters['page']) && $parameters['page'] >= 1)
			{
				$count = $parameters['page'].'0';
				$limit = $count;
				$Offset = $count - $default; 
			}
			else
			{
				$Offset = 0;
			}


		global $wpdb;		
		$results = $wpdb->get_results( 'SELECT * FROM '.$wpdb->prefix.'registration INNER JOIN '.$wpdb->prefix.'businessdetail on '.$wpdb->prefix.'registration.user_id = '.$wpdb->prefix.'businessdetail.user_id WHERE user_type = "2" LIMIT '.$Offset.' , '.$default, OBJECT );		
		
		$Data = array();
		foreach( $results as $keys ):

			if( empty($keys->profile_image) )
			{
				$profile_image = "";
			}
			else
			{
				$profile_image = site_url( $keys->profile_image );
			}
		$Data[] =	array(
			'user_id'=>$keys->user_id,
			'user_name'=>$keys->first_name,
			'profile_image'=>$profile_image,
			'rating'=>"",
			'service_type'=>$keys->service_type,
			'location'=>$keys->street_address,
			'cuisine_type'=>$keys->cuisine_type,
			'popular_dishes'=>$keys->popular_dishes,
			'cuisine_type_other'=>$keys->cuisine_type_other,
		);
		endforeach;
		
		$this->WPmodify->response( 1, $Data);
	}	



	/* Validtion Starts */
	public function userRegistrationValidate( WP_REST_Request $request )
	{
		$parameters = $request->get_params();
				
		//$parameters = $this->validator->sanitize($parameters); // You don't have to sanitize, but it's safest to do so.
		$ArrayRules = array();

		$ArrayRules = array(
			'title'    			=> 'required|alpha_numeric',
			'first_name'   		=> 'required|alpha_numeric',
			'last_name'    		=> 'required|alpha_numeric',
			'username'   		=> 'required|alpha_numeric|wp_usernameExists',			
			'password'    		=> 'required',
			'email'      		=> 'required|valid_email|wp_EmailExists',			
			'street_address'    => 'required',			
			'suburb'      		=> 'required',			
			'state'       		=> 'required',			
			'postcode'    		=> 'required',			
			'phone_number'      => 'required',			
			'country'      		=> 'required',			
			//'provider'      	=> 'required',			
			'user_type'       	=> "required|contains,1 2|exact_len,1"			
		);
		
		if( isset($parameters['user_type']) && $parameters['user_type'] == 2 )
		{
			$ArrayRules['business_name'] = 'required';
		}



	  if(!isset($parameters['SignUp_wpnonce']))
		{
			$ArrayRules['device_token'] = 'required' ;
			$ArrayRules['device_type'] = 'required' ;			
		}

		//print_r( $ArrayRules );
		$this->validator->validation_rules( $ArrayRules );


		$this->validator->filter_rules(array(
			'username' => 'trim|sanitize_string',
			'password' => 'trim',
			'email'    => 'trim|sanitize_email'
			
		));

		$validated_data = $this->validator->run( $parameters);

		if($validated_data === false) 
		{
			
			 if(isset($parameters['SignUp_wpnonce']))
			{
				return new WP_Error( 'error',$this->validator->get_errors_array(),array( 'status' => 200) );	
			}
			else
			{	
				$Error = $this->validator->get_errors_array();				
				$this->WPmodify->response( 0, "" , reset($Error));
			}		
		} 
		else 
		{
			return true;
		}
	}		
	
	public function userSignValidation( WP_REST_Request $request )
	{
		$parameters = $request->get_params();


		$parameters = $this->validator->sanitize($parameters); // You don't have to sanitize, but it's safest to do so.
		$ArrayRules = array();

		$ArrayRules = array(
			'username_email'    => 'required',
			'password'   		=> 'required',					
		);		

		if( !isset($parameters['SignIn_wpnonce']) )
		{
			$ArrayRules['device_type']='required';
			$ArrayRules['device_token']='required';
		}
		
		$this->validator->filter_rules(array(
			'username_email' => 'trim',
			'password' => 'trim'			
		));

		$this->validator->validation_rules( $ArrayRules );

		$validated_data = $this->validator->run($parameters);

		if($validated_data === false) 
		{
			
			 if(isset($parameters['SignIn_wpnonce']))
			{
				return new WP_Error( 'error',$this->validator->get_errors_array(),array( 'status' => 200) );	
			}
			else
			{
				$Error = $this->validator->get_errors_array();				
				$this->WPmodify->response( 0, "" , reset($Error));
			}		
		} 
		else 
		{
			 if(isset($parameters['SignIn_wpnonce']))
			{
				if ( ! wp_verify_nonce( $parameters['SignIn_wpnonce'], 'SignIn' ) )				{
					
					return new WP_Error( 'error','Invalid Request',array( 'status' => 200) ); 
				} 
				else 
				{
					return true;
				}	
			}
			else
			{
				return true;
			}
		}
	}

	public function forgotPasswordValidate( WP_REST_Request $request )
	{
		$parameters = $request->get_params();
		
		$parameters = $this->validator->sanitize($parameters); // You don't have to sanitize, but it's safest to do so.

		$this->validator->validation_rules(array(
			'email'    => 'required|valid_email'						
		));		
		
		$this->validator->filter_rules(array(
			'email' => 'trim'				
		));

		$validated_data = $this->validator->run($parameters);

		if($validated_data === false) 
		{
			
			 if(isset($parameters['ForgotPassword_wpnonce']))
			{
				return new WP_Error( 'error',$this->validator->get_errors_array(),array( 'status' => 200) );	
			}
			else
			{
				$this->WPmodify->response( 0, "" , 'Email is not Valid !' );
			}		
		} 
		else 
		{
			 if(isset($parameters['ForgotPassword_wpnonce']))
			{
				if ( ! wp_verify_nonce( $parameters['ForgotPassword_wpnonce'], 'ForgotPassword' ) )	
				{
					return new WP_Error( 'error','Invalid Request',array( 'status' => 200) ); 
				} 
				else 
				{
					return true;
				}	
			}
			else
			{
				return true;
			}
		}
	}
	
	public function UpdateProfileValidation( WP_REST_Request $request )
	{
		$parameters = $request->get_params();
				
		//$parameters = $this->validator->sanitize($parameters); // You don't have to sanitize, but it's safest to do so.


		$ArrayRules = array();


		$ArrayRules = array(
			'user_id'    		=> 'required',
			'title'    			=> 'required|alpha_numeric',
			'first_name'   		=> 'required|alpha_numeric',
			'last_name'    		=> 'required|alpha_numeric',						
			'street_address'    => 'required',			
			'suburb'      		=> 'required',			
			'state'       		=> 'required',			
			'postcode'    		=> 'required',			
			'phone_number'      => 'required',			
			'country'      		=> 'required',			
			//'provider'      	=> 'required',			
			'user_type'       	=> "required|contains,1 2|exact_len,1",			
		);
		
		if( $parameters['user_type'] == 2 )
		{
			$ArrayRules['business_name'] = 'required';
		}
		

		$validated_data = $this->validator->validation_rules( $ArrayRules );

		if($validated_data === false) 
		{			
			 if(isset($parameters['UpdateProfile_wpnonce']))
			{
				return new WP_Error( 'error',$this->validator->get_errors_array(),array( 'status' => 200) );	
			}
			else
			{
				$Error = $this->validator->get_errors_array();				
				$this->WPmodify->response( 0, "" , reset($Error));
			}		
		} 
		else 
		{
			return true;
		}
	}

	public function SocialSignValidation( WP_REST_Request $request )
	{
		$parameters = $request->get_params();
		
		$parameters = $this->validator->sanitize($parameters); // You don't have to sanitize, but it's safest to do so.
		
		if( empty($parameters['facebook_id']) && empty ( $parameters['google_id'] ) )			
		{
			$this->WPmodify->response( 0, NULL , 'Social ID required !' );
		}

		$this->validator->validation_rules(array(			
			'first_name'   		=> 'required|alpha_numeric',
			'last_name'    		=> 'required|alpha_numeric',
			'device_token'  	=> 'required',
			'device_type'  		=> 'required',
			'username'   		=> 'required|alpha_numeric|wp_usernameExists',
			'email'      		=> 'required|valid_email|wp_EmailExists',
			'user_type'       	=> "required|contains,1 2|exact_len,1"			
		));
		
		if(isset($parameters['user_type']) && $parameters['user_type'] == 2 )
		{
			$this->validator->validation_rules(array(					
			'business_name'  	=> 'required'
			));
		}
		

		$validated_data = $this->validator->run($parameters);

		if($validated_data === false) 
		{
			
			if(isset($parameters['SocialLogin_wpnonce']))
			{
		return new WP_Error( 'error',$this->validator->get_errors_array(),array( 'status' => 200) );	
			}
			else
			{
				$Error = $this->validator->get_errors_array();				
				$this->WPmodify->response( 0, "" , reset($Error));
			}		
		} 
		else 
		{
			return true;
		}
	}

	public function getprofileValidate( WP_REST_Request $request )
	{
		
		$parameters = $request->get_params();
		$userID 	= $parameters['user_id'];

		$this->WPmodify->verifyToken();
		return true;
	} 
	public function getBusinessDetailsValidation( WP_REST_Request $request )
	{
		
		$parameters = $request->get_params();
		$userID 	= $parameters['user_id'];

		$this->WPmodify->verifyToken();
		return true;
	} 

	public function updateBusinessDetailsValidate( WP_REST_Request $request)
	{
		
		$parameters = $request->get_params();
		$this->WPmodify->verifyToken();
			
		$parameters = $this->validator->sanitize($parameters); // You don't have to sanitize, but it's safest to do so.
		$ArrayFilters = array();

		$ArrayRules = array(
			'user_id'    		=> 'required',		
			'service_type'   	=> 'required|contains,1 2 3|exact_len,1'
		);		
		
		
		if(isset($parameters['service_type']) && $parameters['service_type'] == 2 )	// Venue
		{
			$ArrayRules['venue_capacity'] = 'required|numeric';
			$ArrayRules['venue_description'] = 'required';
			$ArrayRules['Accessibility_feature_venue'] = 'required';
			
			
			$ArrayFilters['venue_capacity'] = 'trim'; 		
			$ArrayFilters['venue_description'] = 'trim'; 		
			$ArrayFilters['Accessibility_feature_venue'] = 'trim'; 		
		}
		
		if(isset($parameters['service_type']) && $parameters['service_type'] == 1 ) 	// Catering
		{
			$ArrayRules['catering_capacity'] = 'required|numeric';
			$ArrayRules['cuisine_type'] = 'required';
			


			$ArrayFilters['catering_capacity'] = 'trim'; 
			$ArrayFilters['cuisine_type'] = 'trim'; 
			 		
		}
		
		if(isset($parameters['service_type']) && $parameters['service_type'] == 3 ) // Both Venue and Catering
		{
			$ArrayRules['catering_capacity'] = 'required|numeric';
			$ArrayRules['venue_capacity'] = 'required|numeric';
			$ArrayRules['venue_description'] = 'required';
			$ArrayRules['Accessibility_feature_venue'] = 'required';
			$ArrayRules['cuisine_type'] = 'required';
			
			
			$ArrayFilters['venue_capacity'] = 'trim'; 		
			$ArrayFilters['venue_description'] = 'trim'; 		
			$ArrayFilters['Accessibility_feature_venue'] = 'trim'; 			
			$ArrayFilters['catering_capacity'] = 'trim'; 		
			$ArrayFilters['cuisine_type'] = 'trim'; 		
			
		}

		$ArrayFilters['service_type'] = 'trim';				
		
		$this->validator->validation_rules( $ArrayRules );

		$validated_data = 	$this->validator->run($parameters);

		if($validated_data === false) 
		{
			
			 if(isset($parameters['nonce']))
			{
				return new WP_Error( 'error',$this->validator->get_errors_array(),array( 'status' => 200) );	
			}
			else
			{
				$Error = $this->validator->get_errors_array();				
				$this->WPmodify->response( 0, "" , reset($Error));
			}		
		} 
		else 
		{
			 if(isset($parameters['nonce']))
			{
				if ( ! $this->logged_in ) 
				{					
					return new WP_Error( 'error','Invalid Request',array( 'status' => 200) ); 
				} 
				else 
				{
					return true;
				}	
			}
			else
			{
				return true;
			}
		}
	}

	public function getServiceProviderListValidation( WP_REST_Request $request )
	{
		$this->WPmodify->verifyToken();
		return true;
	}
}
new Users();