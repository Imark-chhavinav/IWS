<?php 
/* WP_REST_Server::READABLE = ‘GET’

WP_REST_Server::EDITABLE = ‘POST, PUT, PATCH’

WP_REST_Server::DELETABLE = ‘DELETE’

WP_REST_Server::ALLMETHODS = ‘GET, POST, PUT, PATCH, DELETE’
WP_REST_Server::CREATABLE

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
	
	
	register_rest_route( $this->my_namespace, '/getNotifications',array(
		'methods'         => WP_REST_Server::READABLE,
		'callback'        => array( $this, 'getNotifications' ),
		'permission_callback'   => array( $this, 'Validate' )		
		) 
	);
	
	register_rest_route( $this->my_namespace, '/getprofile',array(
		'methods'         => WP_REST_Server::READABLE,
		'callback'        => array( $this, 'getprofile' ),
		//'permission_callback'   => array( $this, 'Validate' )		
		) 
	);
	register_rest_route( $this->my_namespace, '/updateProfile',array(
		'methods'         => WP_REST_Server::EDITABLE,
		'callback'        => array( $this, 'updateProfile' ),
		'permission_callback'   => array( $this, 'Validate' )		
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
	
	register_rest_route( $this->my_namespace, '/getBusinessDetails',array(
		'methods'         => WP_REST_Server::READABLE,
		'callback'        => array( $this, 'getBusinessDetails' ),
		'permission_callback'   => array( $this, 'Validate' )		
		) 
	);
	register_rest_route( $this->my_namespace, '/updateBusinessDetails',array(
		'methods'         => WP_REST_Server::EDITABLE,
		'callback'        => array( $this, 'updateBusinessDetails' ),
		'permission_callback'   => array( $this, 'Validate' )		
		) 
	);
	
	}
	
	public function user_Registration( WP_REST_Request $request )
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
		$password 				= md5($parameters['password']);
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
		$user_activation_key	= time().base64_encode($email);
	
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
		'device_type'=>$device_type,
		'user_activation_key'=>$user_activation_key		
		);
		
		
		$wpdb->insert( $wpdb->prefix.'registration', $Data );
		$wpdb->flush();
		
		$to = $email;
		$subject = 'Account Verification';
		$body = 'The email body content '.$user_activation_key;
		$headers = array('Content-Type: text/html; charset=UTF-8');
		$mail =  wp_mail( $to, $subject, $body, $headers );
		if( $mail )
		{
			$this->WPmodify->response( 1, 'PLease check your email for verification Link' , 'No Error Found' );
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
					$info['user_email'] = $parameters['username_email'] ;
				} 
				else 
				{
					$info['user_login'] = $parameters['username_email'] ;
				}
				
				$info['user_password'] = $parameters['password'] ;
				
				 $user_signon = wp_signon( $info );
				if ( is_wp_error($user_signon) )
				{
					//return new WP_Error( 'error','Invalid Credentials ! ',array( 'status' => 200) );
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
						echo json_encode( array( 'status'=>'success', 'message'=>'User Login Successfully','redirect'=>site_url("/provider/") ) );
					}
				}
				
			}
			else
			{
				$info = array();
				if (filter_var($parameters['username_email'], FILTER_VALIDATE_EMAIL)) 
				{
					$info['user_email'] = $parameters['username_email'] ;
				} 
				else 
				{
					$info['user_login'] = $parameters['username_email'] ;
				}
				
				$info['user_password'] = $parameters['password'] ;
				
				 $user_signon = wp_signon( $info );
				if ( is_wp_error($user_signon) )
				{
					//return new WP_Error( 'error','Invalid Credentials ! ',array( 'status' => 200) );
					$this->WPmodify->response( 0, NULL ,'Invalid Credentials ! ' );
				} 
			}		
	}
	
	public function getprofile( WP_REST_Request $request )
	{
		$parameters = $request->get_params();
		$UserID 	= $parameters['user_id'];
		global $wpdb;
		
		$results = $wpdb->get_results( 'SELECT id,user_id,first_name,last_name,username,apartment_number,street_address,suburb,state,post_code,email,title,profile_image,about_me,business_number,abn,user_type FROM '.$wpdb->prefix.'registration WHERE user_id ='.$UserID, OBJECT );		
		
		if( $results[0]->user_type == 1 )
		{
			unset( $results[0]->business_number );
			unset( $results[0]->abn );
		}
		
		if( $results[0]->profile_image != NULL )
		{
			if( $results[0]->user_type == 1 ) //customer
			{
				$results[0]->profile_image = site_url('/wp-content/uploads/profile/customer').$results[0]->profile_image;
			}
			
			if( $results[0]->user_type == 2 ) // provider
			{
				$results[0]->profile_image = site_url('/wp-content/uploads/profile/provider').$results[0]->profile_image;
			}			
			
		}			
		unset( $results[0]->user_type );	
		unset( $results[0]->id );	
		
		$this->WPmodify->response( 1, $results[0] , 'No Error Found' );	
		/* 
		http://iwantservice.imarkclients.com/wp-json/users/getprofile?user_id=4
		{"success":1,"result":{"user_id":"4","first_name":"Chhavinav","last_name":"Sehgal","username":"imrks","apartment_number":"asda","street_address":"asd","suburb":"asd","state":"sdas","post_code":"asd","email":"chhavinav@imarkinfotech.com","title":"Mr","profile_image":null,"about_me":null},"error":"No Error Found"}

		*/

		
	}
		
	
	
	/* Validtion Starts */
	public function userRegistrationValidate( WP_REST_Request $request )
	{
		$parameters = $request->get_params();
				
		$parameters = $this->validator->sanitize($parameters); // You don't have to sanitize, but it's safest to do so.

		$this->validator->validation_rules(array(
			'title'    			=> 'required|alpha_numeric',
			'first_name'   		=> 'required|alpha_numeric',
			'last_name'    		=> 'required|alpha_numeric',
			'username'   		=> 'required|alpha_numeric|wp_usernameExists',			
			'password'    		=> 'required|min_len,6',
			'email'      		=> 'required|valid_email|wp_EmailExists',			
			'street_address'    => 'required',			
			'suburb'      		=> 'required',			
			'state'       		=> 'required',			
			'postcode'    		=> 'required',			
			'phone_number'      => 'required',			
			//'provider'      	=> 'required',			
			'user_type'       	=> "required|contains,1 2|exact_len,1",			
		));
		
		if( $parameters['user_type'] == 2 )
		{
			$this->validator->validation_rules(array(					
			'business_name'  	=> 'required'
			));
		}
		
		$this->validator->filter_rules(array(
			'username' => 'trim|sanitize_string',
			'password' => 'trim',
			'email'    => 'trim|sanitize_email'
			
		));

		$validated_data = $this->validator->run($parameters);

		if($validated_data === false) 
		{
			
			 if(isset($parameters['SignUp_wpnonce']))
			{
				return new WP_Error( 'error',$this->validator->get_errors_array(),array( 'status' => 200) );	
			}
			else
			{
				$this->WPmodify->response( 0, NULL , 'Some Fields were Not Valid !' );
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

		$this->validator->validation_rules(array(
			'username_email'    => 'required',
			'password'   		=> 'required',					
		));		
		
		$this->validator->filter_rules(array(
			'username_email' => 'trim',
			'password' => 'trim'			
		));

		$validated_data = $this->validator->run($parameters);

		if($validated_data === false) 
		{
			
			 if(isset($parameters['SignIn_wpnonce']))
			{
				return new WP_Error( 'error',$this->validator->get_errors_array(),array( 'status' => 200) );	
			}
			else
			{
				$this->WPmodify->response( 0, NULL , 'Some Fields were Not Valid !' );
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
}
new Users();