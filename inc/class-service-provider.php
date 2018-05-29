<?php
class ServiceProvider 
{
	var $validator;
	var $WPmodify;
	var $current_user;

	public function __construct()
	{
		$this->current_user = wp_get_current_user();			
		$this->validator = new Validator();			
		$this->WPmodify = new WPmodify();
	}

	public function getDashobard()
	{

	}

	public function getprofile( $UserID = NULL )
	{	
		if( empty( $UserID ) )
		{
			echo $UserID = $this->current_user->ID;
		}
		
		global $wpdb;
		/* SELECT id,user_id,first_name,last_name,username,apartment_number,street_address,suburb,state,post_code,email,title,profile_image,about_me,business_number,abn,user_type,phone_number FROM '.$wpdb->prefix.'registration INNER JOIN '.$wpdb->prefix.'businessdetail ON '.$wpdb->prefix.'registration.user_id = '.$wpdb->prefix.'businessdetail.user_id WHERE  */		
		$results = $wpdb->get_results( 'SELECT * FROM '.$wpdb->prefix.'registration INNER JOIN '.$wpdb->prefix.'businessdetail ON '.$wpdb->prefix.'registration.user_id = '.$wpdb->prefix.'businessdetail.user_id WHERE '.$wpdb->prefix.'registration.user_id ='.$UserID, OBJECT );	
		
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
		return $results;

	}
}
$Service = new ServiceProvider();