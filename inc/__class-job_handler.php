<?php 
/* WP_REST_Server::READABLE = ‘GET’

WP_REST_Server::EDITABLE = ‘POST, PUT, PATCH’

WP_REST_Server::DELETABLE = ‘DELETE’

WP_REST_Server::ALLMETHODS = ‘GET, POST, PUT, PATCH, DELETE’
WP_REST_Server::CREATABLE

 */
class Jobs extends WP_REST_Controller
{
	var $my_namespace = 'jobs';
	var $validator;
  	var $WPmodify;
  	var $logged_in;
	
	
	public function __construct()
	{
		$this->validator = new Validator();
		$this->WPmodify = new WPmodify();
		$this->logged_in = is_user_logged_in();
		
		add_action( 'rest_api_init', array( $this, 'RegisterRoutes' ) );
	}
	
	public function RegisterRoutes()
	{
			
	register_rest_route( $this->my_namespace, '/getJobListing/',array(
		'methods'         => WP_REST_Server::READABLE,
		'callback'        => array( $this, 'GetJob' )	
		) 
	);
	
	register_rest_route( $this->my_namespace, '/getPendingJob/',array(
		'methods'         => WP_REST_Server::READABLE,
		'callback'        => array( $this, 'PendingJob' ),
		'permission_callback'   => array( $this, 'PendingJobValidation' )		
		) 
	);
	
	register_rest_route( $this->my_namespace, '/createJob',array(
		'methods'         => WP_REST_Server::CREATABLE,
		'callback'        => array( $this, 'CreateJob' ),
		'permission_callback'   => array( $this, 'CreateJobValidation' )		
		) 
	);
	
	register_rest_route( $this->my_namespace, '/getJobDetail',array(
		'methods'         => WP_REST_Server::READABLE,
		'callback'        => array( $this, 'getJobDetail' ),
		'permission_callback'   => array( $this, 'Validate' )		
		) 
	);
	
	register_rest_route( $this->my_namespace, '/getJobInvites',array(
		'methods'         => WP_REST_Server::READABLE,
		'callback'        => array( $this, 'getJobInvites' ),
		'permission_callback'   => array( $this, 'Validate' )		
		) 
	);
	
	register_rest_route( $this->my_namespace, '/getJobApplied',array(
		'methods'         => WP_REST_Server::READABLE,
		'callback'        => array( $this, 'getJobApplied' ),
		'permission_callback'   => array( $this, 'Validate' )		
		) 
	);
	
	register_rest_route( $this->my_namespace, '/getJobInprogress',array(
		'methods'         => WP_REST_Server::READABLE,
		'callback'        => array( $this, 'getJobInprogress' ),
		'permission_callback'   => array( $this, 'Validate' )		
		) 
	);
	
	register_rest_route( $this->my_namespace, '/getJobCompleted',array(
		'methods'         => WP_REST_Server::READABLE,
		'callback'        => array( $this, 'getJobCompleted' ),
		'permission_callback'   => array( $this, 'Validate' )		
		) 
	);
	
		
		
	}
		
	public function CreateJob( WP_REST_Request $request )
	{
		$parameters = $request->get_params();
		
		$user_id				=	$parameters['user_id'];
		$event_name				=	$parameters['event_name'];
		$service_type			=	$parameters['service_type'];
		$event_date				=	$parameters['event_date'];
		$event_time				=	$parameters['event_time'];
		$event_type				=	$parameters['event_type'];
		$venue_location			=	$parameters['venue_location'];
		$proximity_location		=	$parameters['proximity_location'];
		$catering_location		=	$parameters['catering_location'];
		$number_guest			=	$parameters['number_guest'];
		$allergies				=	$parameters['allergies'];
		$catering_requirement	=	$parameters['catering_requirement'];
		$venue_requirement		=	$parameters['venue_requirement'];
		$other_requirement		=	$parameters['other_requirement'];
		$bidding_Enddate		=	$parameters['bidding_Enddate'];
		$other_bidders			=	$parameters['other_bidders'];
		$created_on				=	date('Y-m-d H:i:s');
		$updated_on				=	date('Y-m-d H:i:s');

		
		$Data = array( 
		'user_id'				=>	$user_id,
		'event_name'			=>	$event_name,
		'service_type'			=>	$service_type,
		'event_date'			=>	$event_date,
		'event_time'			=>	$event_time,
		'event_type'			=>	$event_type,
		'venue_location'		=>	$venue_location,
		'proximity_location'	=>	$proximity_location,
		'catering_location'		=>	$catering_location,
		'number_guest'			=>	$number_guest,
		'allergies'				=>	$allergies,
		'catering_requirement'	=>	$catering_requirement,
		'venue_requirement'		=>	$venue_requirement,
		'other_requirement'		=>	$other_requirement,
		'bidding_Enddate'		=>	$bidding_Enddate,
		'other_bidders'			=>	$other_bidders,
		'created_on'			=>	$created_on,
		'updated_on'			=>	$updated_on		
		);		
		
		
		global $wpdb;		
		
		$InsertedID = $wpdb->insert( $wpdb->prefix.'events', $Data );	 
		$wpdb->flush();
		
		if( $InsertedID  )
		{			
			if(isset($parameters['nonce']))
			{
				$this->WPmodify->web_response( 'success', $message = 'Event Created Succesfully');
			}
			else
			{
				$this->WPmodify->response( 1, NULL );
			}
		}
		else
		{
			if(isset($parameters['nonce']))
			{
				$this->WPmodify->web_response( 'error', $message = 'Please try again Event Not Inserted');
			}
			else
			{
				$this->WPmodify->response( 0, False, 'No Data was inserted !' );
			}
		}		
		
	}
	
	public function UpdateJob()
	{
		
	}
	
	public function GetJob( WP_REST_Request $request )
	{
		//$data = 'sss';
		
		
		$data = array('success'=>'chhavi','error'=>'nhjj');
		return new WP_REST_Response( $data, 200 );
	}
	
	public function PendingJob( WP_REST_Request $request )
	{
		$parameters = $request->get_params();
		print_R($parameters);
	}
	
	/* Validation  */
	
	public function CreateJobValidation( WP_REST_Request $request )
	{
		$parameters = $request->get_params();
			
		$parameters = $this->validator->sanitize($parameters); // You don't have to sanitize, but it's safest to do so.

		$this->validator->validation_rules(array(
			'user_id'    	=> 'required',
			'event_name'    	=> 'required',
			'service_type'   	=> 'required',					
			'event_date'   		=> 'required|date',					
			'event_time'   		=> 'required',					
			'number_guest'   	=> 'required|numeric',					
			'bidding_Enddate'   => 'required|date',					
		));		
		
		
		if( $parameters['service_type'] == 2 )	// Venue
		{
			$this->validator->validation_rules(array(					
			'venue_location'  		=> 'required',
			'proximity_location'  	=> 'required',
			'venue_requirement'  	=> 'required'
			));
			
			$this->validator->filter_rules(array(
			'venue_location'  		=> 'trim',
			'proximity_location'  	=> 'trim',
			'venue_requirement'  	=> 'trim'			
			));
			
		}
		
		if( $parameters['service_type'] == 1 ) 	// Catering
		{
			$this->validator->validation_rules(array(					
			'catering_location'  	=> 'required',			
			'catering_requirement'  => 'required',
			'allergies'  			=> 'required'
			));
			
			$this->validator->filter_rules(array(
			'catering_location'  	=> 'trim',			
			'catering_requirement'  => 'trim',
			'allergies'  			=> 'trim'			
			));
			
		}
		
		if( $parameters['service_type'] == 3 ) // Both Venue and Catering
		{
			$this->validator->validation_rules(array(					
			'catering_location'  	=> 'required',			
			'catering_requirement'  => 'required',
			'allergies'  			=> 'required',
			'venue_location'  		=> 'required',
			'proximity_location'  	=> 'required',
			'venue_requirement'  	=> 'required'
			));
			
			$this->validator->filter_rules(array(
			'catering_location'  	=> 'trim',			
			'catering_requirement'  => 'trim',
			'allergies'  			=> 'trim',
			'venue_location'  		=> 'trim',
			'proximity_location'  	=> 'trim',
			'venue_requirement'  	=> 'trim'			
		));
			
		}
		
		$this->validator->filter_rules(array(
			'event_name'    	=> 'trim',
			'service_type'   	=> 'trim',					
			'event_date'   		=> 'trim',					
			'event_time'   		=> 'trim',					
			'number_guest'   	=> 'trim',					
			'bidding_Enddate'   => 'trim'			
		));

		$validated_data = $this->validator->run($parameters);

		if($validated_data === false) 
		{
			
			 if(isset($parameters['nonce']))
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
	
	public function PendingJobValidation( WP_REST_Request $request )
	{
		$parameters = $request->get_params();
				
		$parameters = $this->validator->sanitize($parameters); // You don't have to sanitize, but it's safest to do so.

		$this->validator->validation_rules(array(
			'user_id'    	=> 'required|wp_userExists',
			//'access_token'    	=> 'required'							
		));	
		
		$validated_data = $this->validator->run($parameters);

		if($validated_data === false) 
		{
			$this->WPmodify->response( 0, NULL , 'Request Rejected !' );			
		} 
		else 
		{
			return true;			
		}
		
	}	
	
	
}
new Jobs();