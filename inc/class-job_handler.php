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
			
	register_rest_route( $this->my_namespace, '/getAllJobListing/',array(
		'methods'         => WP_REST_Server::READABLE,
		'callback'        => array( $this, 'getJobListing' ),
		'permission_callback'   => array( $this, 'getJobListingValidation' )	
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
		'callback'        => array( $this, 'CreateJob' )
		//'permission_callback'   => array( $this, 'CreateJobValidation' )		
		) 
	);

	register_rest_route( $this->my_namespace, '/editJob',array(
		'methods'         => WP_REST_Server::EDITABLE,
		'callback'        => array( $this, 'EditJob' ),
		'permission_callback'   => array( $this, 'EditJobValidation' )		
		) 
	);
	
	register_rest_route( $this->my_namespace, '/getJobDetail',array(
		'methods'         => WP_REST_Server::READABLE,
		'callback'        => array( $this, 'getJobDetail' ),
		'permission_callback'   => array( $this, 'getJobDetailValidation' )		
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

	register_rest_route( $this->my_namespace, '/applyForJob',array(
		'methods'         => WP_REST_Server::CREATABLE,
		'callback'        => array( $this, 'applyForJob' ),
		'permission_callback'   => array( $this, 'applyJobValidation' )		
		) 
	);
	
	register_rest_route( $this->my_namespace, '/UpdateBid',array(
		'methods'         => WP_REST_Server::EDITABLE,
		'callback'        => array( $this, 'UpdateBid' ),
		'permission_callback'   => array( $this, 'UpdateBidValidation' )		
		) 
	);

	register_rest_route( $this->my_namespace, '/inviteUser',array(
		'methods'         => WP_REST_Server::CREATABLE,
		'callback'        => array( $this, 'inviteUser' ),
		'permission_callback'   => array( $this, 'inviteUserValidation' )		
		) 
	);
		
	}
		
	public function CreateJob( WP_REST_Request $request )
	{
		$parameters = $request->get_params();
		
		$Now = date('d-m-Y');

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
		$est_budget				=	$parameters['est_budget'];


		// Event Date Check
		if( strtotime($event_date) < strtotime($Now) )
		{
			$this->WPmodify->web_response( 'error', 'Invalid Event Date !');			
		}

		// Biding Date Check
		if( (strtotime($bidding_Enddate) < strtotime($Now)) )
		{
			$this->WPmodify->web_response( 'error', $message = 'Invalid Bidding End Date !');			
		}

		


		$venue_lat				=	(isset($parameters['venue_lat']) && !empty($parameters['venue_lat'])) ? $parameters['venue_lat'] : NULL;
		$venue_long				=	(isset($parameters['venue_long']) && !empty($parameters['venue_long'])) ? $parameters['venue_long'] : NULL;
		$cater_lat				=	(isset($parameters['cater_lat']) && !empty($parameters['cater_lat'])) ? $parameters['cater_lat'] : NULL;
		$cater_long				=	(isset($parameters['cater_long']) && !empty($parameters['cater_long'])) ? $parameters['cater_long'] : NULL;

		$created_on				=	date('d-m-Y H:i:s');
		$updated_on				=	date('d-m-Y H:i:s');

		
		$Data = array( 
		'user_id'				=>	$user_id,
		'event_name'			=>	$event_name,
		'service_type'			=>	$service_type,
		'event_date'			=>	$event_date,
		'event_time'			=>	$event_time,
		'event_type'			=>	$event_type,
		'est_budget'			=>	$est_budget,
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
		'updated_on'			=>	$updated_on,		
		'venue_lat'				=>	$venue_lat,		
		'venue_long'			=>	$venue_long,		
		'cater_lat'				=>	$cater_lat,		
		'cater_long'			=>	$cater_long,		
		'status'				=>	1	
		);		
		
		
		global $wpdb;		
		
		$InsertedID = $wpdb->insert( $wpdb->prefix.'events', $Data );	 
		$wpdb->flush();
		// Print last SQL query string
		/*$wpdb->queries;
		$wpdb->last_query;		
		$wpdb->last_result;		
		$wpdb->last_error;*/
		
		if( $InsertedID  )
		{			
			if(isset($parameters['nonce']))
			{
				$this->WPmodify->web_response( 'success', $message = 'Event Created Succesfully');
			}
			else
			{
				$this->WPmodify->response( 1, 'Job created successfully ' );
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

	public function EditJob( WP_REST_Request $request )
	{
		$parameters = $request->get_params();
		$JobID = $parameters['job_id'];
		unset($parameters['job_id']);
		unset($parameters['user_id']);
		global $wpdb;
		$wpdb->update( $wpdb->prefix.'events', $parameters,array( 'id' => $JobID ));
		$wpdb->flush();

		$this->WPmodify->response( 1, 'Job Details Updated Successfully' , 'No Error Found' );

	}	
	
	
	public function getJobListing( WP_REST_Request $request )
	{	
		// Get All the Jobs in website
		global $wpdb;
		$parameters = $request->get_params();
		if( isset($parameters['count']) && $parameters['count'] >= 10  )
		{
				$default = 10;
				$limit = $_GET['count'];
				$Offset = $_GET['count'] - $default; 
		}
		else
		{
				$default = $_GET['count'];
				$Offset = 0;
		}
		$current = date( 'd-m-Y' );		
		$results = $wpdb->get_results("Select ".$wpdb->prefix."events.*,".$wpdb->prefix."registration.profile_image,".$wpdb->prefix."registration.photo_url from ".$wpdb->prefix."events INNER JOIN ".$wpdb->prefix."registration  ON ".$wpdb->prefix."registration.user_id = ".$wpdb->prefix."events.user_id WHERE other_bidders = 'yes' AND status = '1' AND '$current' <= ".$wpdb->prefix."events.bidding_Enddate LIMIT $Offset,$default",OBJECT);

		if( empty( $results ) )
		{
			$this->WPmodify->response( 0,NULL , 'No Job Found' );	
		}
		else
		{
			$Data = array();
			foreach( $results as $keys ):
									
				unset( $keys->venue_location );
				unset( $keys->proximity_location );
				unset( $keys->venue_requirement );				
				unset( $keys->catering_location );
				unset( $keys->catering_requirement );
				unset( $keys->allergies );
				unset( $keys->updated_on );	
				unset( $keys->number_guest );	
				unset( $keys->other_requirement );	
				unset( $keys->status );	
				unset( $keys->event_time );	
				unset( $keys->event_type );	
				unset( $keys->service_type );	
				unset( $keys->other_bidders );	
				//unset( $keys->bidding_Enddate );	

				$keys->job_id = $keys->id;

				if( empty( $keys->profile_image ) && empty( $keys->photo_url ) )
				{
					$keys->profile_image = site_url('/wp-content/themes/iwantservice/images/')."customer-icon.png";
				}	
				elseif( empty( $keys->profile_image )  )
				{
					$keys->profile_image = $keys->photo_url;
						
				}
				else
				{
					$keys->profile_image;
				}	
				unset( $keys->photo_url );
				unset( $keys->id );
				$keys->review = '3.5';	


				$Data[] = $keys;
			endforeach;
			
			$this->WPmodify->response( 1,$Data );	
		}		
	}
	
	public function PendingJob( WP_REST_Request $request )
	{
		$parameters = $request->get_params();
		print_R($parameters);
	}
	
	public function getJobDetail ( WP_REST_Request $request )
	{
		global $wpdb;
		$parameters = $request->get_params();
		
		$results = $wpdb->get_results("Select * from ".$wpdb->prefix."events WHERE id = '".$parameters['job_id']."' ",OBJECT);
		if( empty( $results ) )
		{
			$this->WPmodify->response( 0,NULL , 'No Job Found !' );	
		}
		else
		{
			if( $results[0]->service_type == 1 ) 	// Doing this to send venu fields empty when service type is 1
			{
				$results[0]->venue_location = NULL;
				$results[0]->proximity_location = NULL;
				$results[0]->venue_requirement = NULL;
			}

			if( $results[0]->service_type == 2 ) 	// Doing this to send catering fields empty when service type is 2
			{
				$results[0]->catering_location = NULL;
				$results[0]->catering_requirement = NULL;
				$results[0]->allergies = NULL;
			}
			$results[0]->job_id = $results[0]->id;
			unset( $results[0]->id );
			unset( $results[0]->user_id );
			unset( $results[0]->status );			


			$this->WPmodify->response( 1,$results[0] );	
		}
		
	}
	
	public function applyForJob( WP_REST_Request $request )
	{
		global $wpdb;
		$parameters = $request->get_params();
		
		$user_id 			= $parameters['user_id'];
		$job_id 			= $parameters['job_id'];
		$actual_price 		= $parameters['actual_price'];
		$quote_price 		= $parameters['quote_price'];
		$questions 			= $parameters['questions'];
		$additional_info 	= $parameters['additional_info'];
		$add_gst 			= $parameters['add_gst'];
		$bidStatus		 	= 0;	// 0 initated, 1 rejected, 2 accepted 
		
		$created_on			=	date('d-m-Y H:i:s');
		$updated_on			=	date('d-m-Y H:i:s');
		
		if( isset($_FILES) )
		{
			$more_img = $this->WPmodify->UploadFile( $_FILES );			
		}
		
		$Data = array
		(
			'user_id'			=>	$user_id,
			'job_id'			=>	$job_id,
			'actual_price'		=>	$actual_price,
			'quote_price'		=>	$quote_price,
			'questions'			=>	$questions,
			'bidStatus'			=>	$bidStatus,
			'add_gst'			=>	$add_gst,
			'created_on'		=>	$created_on,
			'updated_on'		=>	$updated_on
		);
		
		if( isset($_FILES) && $more_img != NULL )
		{
			$Data['attachment'] = $more_img;
		}
		
		$InsertedID = $wpdb->insert( $wpdb->prefix.'bids', $Data );	 
		$wpdb->flush();
		
		if( $InsertedID  )
		{			
			$this->WPmodify->response( 1, 'Bid Submit successfully ' );			
		}
		else
		{
			$this->WPmodify->response( 0, False, 'No Data was inserted !' );			
		}		
	}
	
	public function UpdateBid( WP_REST_Request $request )
	{
		global $wpdb;
		$parameters = $request->get_params();
		
		$user_id 			= $parameters['user_id'];
		$job_id 			= $parameters['job_id'];
		$actual_price 		= $parameters['actual_price'];
		$quote_price 		= $parameters['quote_price'];
		$questions 			= $parameters['questions'];
		$additional_info 	= $parameters['additional_info'];
		$add_gst 			= $parameters['add_gst'];
		//$bidStatus		 	= 0;	// 0 initated, 1 rejected, 2 accepted 
		
		//$created_on			=	date('d-m-Y H:i:s');
		$updated_on			=	date('d-m-Y H:i:s');
		
		if( isset($_FILES) )
		{
			$more_img = $this->WPmodify->UploadFile( $_FILES );			
		}
		
		$Data = array
		(
			'user_id'			=>	$user_id,			
			'actual_price'		=>	$actual_price,
			'quote_price'		=>	$quote_price,
			'questions'			=>	$questions,
			//'bidStatus'			=>	$bidStatus,
			'add_gst'			=>	$add_gst,
			//'created_on'		=>	$created_on,
			'updated_on'		=>	$updated_on
		);
		
		if( isset($_FILES) && $more_img != NULL )
		{
			$Data['attachment'] = $more_img;
		}
		
		$wpdb->update( $wpdb->prefix.'bids', $Data,array( 'id' => $parameters['job_id'] ));
		$wpdb->flush();
				
		$this->WPmodify->response( 1, 'Bid Updated Submit successfully ' );	
			
	}

	public function inviteUser(  WP_REST_Request $request )
	{
		global $wpdb;
		$parameters = $request->get_params();
		
		$Fromuser_id 		= $parameters['Fromuser_id'];
		$job_id 			= $parameters['job_id'];
		$Touser_id 			= $parameters['Touser_id'];		
		$InviteStatus		= 	0;	// 0 initated, 1 rejected, 2 accepted 		
		$created_on			=	date('d-m-Y H:i:s');
		$updated_on			=	date('d-m-Y H:i:s');		
		
		$Data = array
		(
			'Fromuser_id'			=>	$Fromuser_id,			
			'job_id'				=>	$job_id,
			'Touser_id'				=>	$Touser_id,
			'InviteStatus'			=>	$InviteStatus,			
			'created_on'			=>	$created_on,
			'updated_on'			=>	$updated_on
		);
		
	
		$wpdb->update( $wpdb->prefix.'invites', $Data,array( 'id' => $parameters['job_id'] ));
		$wpdb->flush();
				
		$this->WPmodify->response( 1, 'Invite Send Successfully ' );	
	}
	/* Validation  */
	
	public function CreateJobValidation( WP_REST_Request $request )
	{
		$parameters = $request->get_params();
		//$this->WPmodify->verifyToken();	
		$this->WPmodify->checkUserType( $parameters['user_id'] , 1 );	

		
		$parameters = $this->validator->sanitize($parameters); // You don't have to sanitize, but it's safest to do so.
		$ArrayRules = array();
		$ArrayFilters = array();

		$ArrayRules = array(
			'user_id'    		=> 'required',
			'event_name'    	=> 'required',
			'service_type'   	=> 'required',					
			'event_date'   		=> 'required',					
			'event_time'   		=> 'required',					
			'number_guest'   	=> 'required|numeric',					
			'bidding_Enddate'   => 'required',					
			//'lat'   			=> 'required',					
			//'longi'  			 => 'required',					
			'est_budget'   		=> 'required|numeric',					
			'other_bidders'  	=> 'required|contains,yes no',					
		);		
		
		
		if( $parameters['service_type'] == 2 )	// Venue
		{
			$ArrayRules['venue_location'] = 'required';
			$ArrayRules['proximity_location'] = 'required';
			$ArrayRules['venue_requirement'] = 'required';
			$ArrayRules['venue_lat'] = 'required';
			$ArrayRules['venue_long'] = 'required';
			
			$ArrayFilters = array(
			'venue_location'  		=> 'trim',
			'proximity_location'  	=> 'trim',
			'venue_requirement'  	=> 'trim'			
			);	
			$ArrayRules['venue_requirement']		= 'required';
			$ArrayRules['venue_lat']				= 'required';		
		}
		
		if( $parameters['service_type'] == 1 ) 	// Catering
		{
			$ArrayRules['catering_location'] = 'required';
			$ArrayRules['catering_requirement'] = 'required';
			$ArrayRules['allergies'] = 'required';
			$ArrayRules['cater_lat'] = 'required';
			$ArrayRules['cater_long'] = 'required';


			$ArrayFilters['catering_location'] = 'trim'; 
			$ArrayFilters['catering_requirement'] = 'trim'; 
			$ArrayFilters['allergies'] = 'trim'; 		
			$ArrayFilters['cater_lat'] 				= 'trim';
			$ArrayFilters['cater_long']				= 'trim';	
		}
		
		if( $parameters['service_type'] == 3 ) // Both Venue and Catering
		{
			$ArrayRules['catering_location']		= 'required';
			$ArrayRules['catering_requirement']		= 'required';
			$ArrayRules['allergies']				= 'required';
			$ArrayRules['venue_location']			= 'required';
			$ArrayRules['proximity_location']		= 'required';
			$ArrayRules['venue_requirement']		= 'required';
			$ArrayRules['venue_lat']				= 'required';
			$ArrayRules['venue_long']				= 'required';
			$ArrayRules['cater_lat']			 	= 'required';
			$ArrayRules['cater_long']			 	= 'required';

			$ArrayFilters['venue_lat'] 				= 'trim';
			$ArrayFilters['venue_long'] 			= 'trim';
			$ArrayFilters['cater_lat'] 				= 'trim';
			$ArrayFilters['cater_long']				= 'trim';			
			$ArrayFilters['catering_location'] 		= 'trim'; 
			$ArrayFilters['catering_requirement'] 	= 'trim'; 
			$ArrayFilters['allergies'] 				= 'trim'; 
			$ArrayFilters['venue_location'] 		= 'trim'; 
			$ArrayFilters['proximity_location'] 	= 'trim'; 
			$ArrayFilters['venue_requirement'] 		= 'trim'; 
			
			
		}

		$ArrayFilters['event_name'] = 'trim';
		$ArrayFilters['service_type'] = 'trim';
		$ArrayFilters['event_date'] = 'trim';
		$ArrayFilters['event_time'] = 'trim';
		$ArrayFilters['number_guest'] = 'trim';
		$ArrayFilters['bidding_Enddate'] = 'trim';		
		$ArrayFilters['other_bidders'] = 'trim';		
		
		$this->validator->validation_rules( $ArrayRules );
		$validated_data = $this->validator->run($parameters);	

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

	public function EditJobValidation( WP_REST_Request $request )
	{
		$parameters = $request->get_params();

		//$this->WPmodify->verifyToken();	
		$this->WPmodify->checkUserType( $parameters['user_id'] , 1 );	
		$this->WPmodify->checkJobStatus( $parameters['user_id'] , $parameters['job_id'] );	

		
		$parameters = $this->validator->sanitize($parameters); // You don't have to sanitize, but it's safest to do so.
		$ArrayRules = array();
		$ArrayFilters = array();

		$ArrayRules = array(
			'job_id'    		=> 'required',
			'user_id'    		=> 'required',
			'event_name'    	=> 'required',
			'service_type'   	=> 'required',					
			'event_date'   		=> 'required',					
			'event_time'   		=> 'required',					
			'number_guest'   	=> 'required|numeric',					
			'bidding_Enddate'   => 'required',					
			'lat'   => 'required',					
			'longi'   => 'required',					
			'est_budget'   		=> 'required|numeric',					
			'other_bidders'  	=> 'required|contains,yes no',					
		);		
		
		
		if( $parameters['service_type'] == 2 )	// Venue
		{
			$ArrayRules['venue_location'] = 'required';
			$ArrayRules['proximity_location'] = 'required';
			$ArrayRules['venue_requirement'] = 'required';
			$ArrayRules['venue_lat'] = 'required';
			$ArrayRules['venue_long'] = 'required';
			
			$ArrayFilters = array(
			'venue_location'  		=> 'trim',
			'proximity_location'  	=> 'trim',
			'venue_requirement'  	=> 'trim'			
			);
			$ArrayRules['venue_requirement']		= 'required';
			$ArrayRules['venue_lat']				= 'required';				
		}
		
		if( $parameters['service_type'] == 1 ) 	// Catering
		{
			$ArrayRules['catering_location'] = 'required';
			$ArrayRules['catering_requirement'] = 'required';
			$ArrayRules['allergies'] = 'required';
			$ArrayRules['cater_lat'] = 'required';
			$ArrayRules['cater_long'] = 'required';


			$ArrayFilters['catering_location'] = 'trim'; 
			$ArrayFilters['catering_requirement'] = 'trim'; 

			$ArrayFilters['catering_location'] = 'trim'; 
			$ArrayFilters['catering_requirement'] = 'trim'; 
			$ArrayFilters['allergies'] = 'trim'; 		
		}
		
		if( $parameters['service_type'] == 3 ) // Both Venue and Catering
		{
			$ArrayRules['catering_location'] 		= 'required';
			$ArrayRules['catering_requirement'] 	= 'required';
			$ArrayRules['allergies'] 				= 'required';
			$ArrayRules['venue_location'] 			= 'required';
			$ArrayRules['proximity_location']		= 'required';
			$ArrayRules['venue_requirement'] 		= 'required';
			$ArrayRules['venue_requirement']		= 'required';
			$ArrayRules['venue_lat']				= 'required';
			$ArrayRules['venue_long']				= 'required';
			$ArrayRules['cater_lat']			 	= 'required';
			$ArrayRules['cater_long']			 	= 'required';

			$ArrayFilters['venue_lat'] 				= 'trim';
			$ArrayFilters['venue_long'] 			= 'trim';
			$ArrayFilters['cater_lat'] 				= 'trim';
			$ArrayFilters['cater_long']				= 'trim';
			$ArrayFilters['catering_location'] 		= 'trim'; 
			$ArrayFilters['catering_requirement'] 	= 'trim'; 
			$ArrayFilters['allergies'] 				= 'trim'; 
			$ArrayFilters['venue_location'] 		= 'trim'; 
			$ArrayFilters['proximity_location'] 	= 'trim'; 
			$ArrayFilters['venue_requirement'] 		= 'trim'; 
			
			
		}

		$ArrayFilters['event_name'] = 'trim';
		$ArrayFilters['service_type'] = 'trim';
		$ArrayFilters['event_date'] = 'trim';
		$ArrayFilters['event_time'] = 'trim';
		$ArrayFilters['number_guest'] = 'trim';
		$ArrayFilters['bidding_Enddate'] = 'trim';		
		$ArrayFilters['other_bidders'] = 'trim';		
		
		$this->validator->validation_rules( $ArrayRules );
		$validated_data = $this->validator->run($parameters);	

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
			$this->WPmodify->response( 0, "" , reset($Error));	
		} 
		else 
		{
			return true;			
		}		
	}

	public function getJobListingValidation( WP_REST_Request $request)
	{
		$parameters = $request->get_params();
		
		//$this->WPmodify->verifyToken();

		$parameters = $this->validator->sanitize($parameters); // You don't have to sanitize, but it's safest to do so.

		$this->validator->validation_rules(array(
			'user_id'    	=> 'required|wp_userExists',
			'count'    	=> 'required|numeric'							
		));	
		
		$validated_data = $this->validator->run($parameters);

		if($validated_data === false) 
		{
			$Error = $this->validator->get_errors_array();				
			$this->WPmodify->response( 0, "" , reset($Error));
		} 
		else 
		{
			return true;			
		}		
	}

	public function getJobDetailValidation( WP_REST_Request $request )
	{
		$parameters = $request->get_params();
		
		//$this->WPmodify->verifyToken();

		$parameters = $this->validator->sanitize($parameters); // You don't have to sanitize, but it's safest to do so.

		$this->validator->validation_rules(array(
			'user_id'    	=> 'required|wp_userExists|numeric',
			'job_id'    	=> 'required|numeric'							
		));	
		
		$validated_data = $this->validator->run($parameters);

		if($validated_data === false) 
		{
			$Error = $this->validator->get_errors_array();	
			$this->WPmodify->response( 0, "" , reset($Error));
		} 
		else 
		{
			return true;			
		}		
	}

	public function applyJobValidation( WP_REST_Request $request )
	{
		$parameters = $request->get_params();
		
		//$this->WPmodify->verifyToken();
		$this->WPmodify->checkUserType($parameters['user_id'], 2);
		$this->WPmodify->checkBidEndDate($parameters['job_id']);
		die();
		$parameters = $this->validator->sanitize($parameters);
		$this->validator->validation_rules(array(
			'user_id'    		=> 'required|wp_userExists|numeric',
			'job_id'    		=> 'required|numeric',							
			'actual_price'    	=> 'required',							
			'quote_price'    	=> 'required',							
			'questions'    		=> 'required',							
			'additional_info'   => 'required',							
			'add_gst'   		=> 'required|contains,yes no'							
			//'attachment'   		=> 'required'							
		));	
		$validated_data = $this->validator->run($parameters);

		if($validated_data === false) 
		{
			$Error = $this->validator->get_errors_array();	
			$this->WPmodify->response( 0, "" , reset($Error));
		} 
		else 
		{
			return true;			
		}	
	}
	
	public function UpdateBidValidation( WP_REST_Request $request )
	{
		$parameters = $request->get_params();
		
		//$this->WPmodify->verifyToken();
		$this->WPmodify->checkUserType( $parameters['user_id'], 2);
		//$this->WPmodify->checkBidStatus( $parameters['bid_id'] );

		$parameters = $this->validator->sanitize($parameters);
		$this->validator->validation_rules(array(
			'bid_id'    		=> 'required|numeric',
			'user_id'    		=> 'required|wp_userExists|numeric',
			//'job_id'    		=> 'required|numeric',							
			//'actual_price'    	=> 'required',							
			'quote_price'    	=> 'required',							
			'questions'    		=> 'required',							
			'additional_info'   => 'required',							
			'add_gst'   		=> 'required|contains,yes no'							
			//'attachment'   		=> 'required'							
		));	
		$validated_data = $this->validator->run($parameters);

		if($validated_data === false) 
		{
			$Error = $this->validator->get_errors_array();	
			$this->WPmodify->response( 0, "" , reset($Error));
		} 
		else 
		{
			return true;			
		}	
	}

	public function inviteUserValidation( WP_REST_Request $request )
	{
		$parameters = $request->get_params();
		
		//$this->WPmodify->verifyToken();
		$this->WPmodify->checkUserType( $parameters['Fromuser_id'], 1);
		$this->WPmodify->checkJobStatus( NULL,$parameters['job_id'] );

		$this->validator->validation_rules(array(
			'Fromuser_id'    	=> 'required|numeric|wp_userExists',
			'Touser_id'    		=> 'required',						
			'job_id'    		=> 'required'							
		));	
		$validated_data = $this->validator->run($parameters);

		if($validated_data === false) 
		{
			$Error = $this->validator->get_errors_array();	
			$this->WPmodify->response( 0, "" , reset($Error));
		} 
		else 
		{
			return true;			
		}	
	}
}
new Jobs();



/*
http://www.fakeaddressgenerator.com/World/au_address_generator

 function distance($lat1, $lon1, $lat2, $lon2, $unit) {

  $theta = $lon1 - $lon2;
  $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
  $dist = acos($dist);
  $dist = rad2deg($dist);
  $miles = $dist * 60 * 1.1515;
  $unit = strtoupper($unit);

  if ($unit == "K") {
    return ($miles * 1.609344);
  } else if ($unit == "N") {
      return ($miles * 0.8684);
    } else {
        return $miles;
      }
}

echo distance(32.9697, -96.80322, 29.46786, -98.53506, "M") . " Miles<br>";
echo distance(32.9697, -96.80322, 29.46786, -98.53506, "K") . " Kilometers<br>";
echo distance(32.9697, -96.80322, 29.46786, -98.53506, "N") . " Nautical Miles<br>"; */