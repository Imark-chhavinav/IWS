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
			$UserID = $this->current_user->ID;
		}
		
		global $wpdb;
		/* SELECT id,user_id,first_name,last_name,username,apartment_number,street_address,suburb,state,post_code,email,title,profile_image,about_me,business_number,abn,user_type,phone_number FROM '.$wpdb->prefix.'registration INNER JOIN '.$wpdb->prefix.'businessdetail ON '.$wpdb->prefix.'registration.user_id = '.$wpdb->prefix.'businessdetail.user_id WHERE  */

		if( $this->current_user->roles[0] == 'customer' )
		{
			$results = $wpdb->get_results( 'SELECT * FROM '.$wpdb->prefix.'registration WHERE '.$wpdb->prefix.'registration.user_id ='.$UserID, OBJECT );	
		}	

		if(  $this->current_user->roles[0] == 'provider' )	
		{
			$results = $wpdb->get_results( 'SELECT * FROM '.$wpdb->prefix.'registration INNER JOIN '.$wpdb->prefix.'businessdetail ON '.$wpdb->prefix.'registration.user_id = '.$wpdb->prefix.'businessdetail.user_id WHERE '.$wpdb->prefix.'registration.user_id ='.$UserID, OBJECT );	
		}
		
		
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


	public function getProviders( $type = null)
	{		
		$curl = curl_init();
		curl_setopt_array($curl, array(
		  CURLOPT_URL => site_url( "wp-json/users/getServiceProviderList" ),
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "GET",		  
		));

		$response = json_decode( curl_exec($curl));
		$err = curl_error($curl);

		curl_close($curl);

		if( empty( $type ) )
		{
			return $response->result;
		}
		else
		{
			
			$ReturnData = '';
			if( !empty( $response->result ) )
			{
				$i = 0;
				foreach( $response->result as $keys ):
					$RatingValue = rand( 1,6 );
					$Rating = '';
						for( $x = 1; $x < 6; $x++ )
						{
							if( $x <= $RatingValue )
							{
								$Rating .= '<span class="fa fa-star checked"></span>';
							}
							else
							{
								$Rating .= '<span class="fa fa-star"></span>';
							}
							
						}

					if( ( $keys->service_type == 1 || $keys->service_type == 3 ) && $type == 1  )
					{

						$ReturnData .='<div class="col-md-3">
	               		<div class="provider-profile-post">
		                        <figure style="background-image:url('.$keys->profile_image.');">
		                            <div class="figure-inner">
		                            	<figcaption><a href="#">View Profile</a></figcaption>	                          
		                            </div>
		                        </figure>                        
		                        <div class="provider-profile-info">
		                            <h4>'.$keys->user_name.'</h4>
		                            <div class="location">
		                                <p>'.$keys->state.'</p>
		                            </div>
		                            <div class="rating">
		                                '.$Rating.'
		                            </div>
		                        </div>
	                   		</div>
	                   	</div>';
	                   	$i++;
					}
					elseif( ( $keys->service_type == 2 || $keys->service_type == 3 ) && $type == 2 )
					{
						$ReturnData .='<div class="col-md-3">
	               		<div class="provider-profile-post">
		                        <figure style="background-image:url('.$keys->profile_image.');">
		                            <div class="figure-inner">
		                            	<figcaption><a href="#">View Profile</a></figcaption>	                          
		                            </div>
		                        </figure>                        
		                        <div class="provider-profile-info">
		                            <h4>'.$keys->user_name.'</h4>
		                            <div class="location">
		                                <p>'.$keys->state.'</p>
		                            </div>
		                            <div class="rating">
		                                '.$Rating.'
		                            </div>
		                        </div>
	                   		</div>
	                   	</div>';
	                   	$i++;
					}
				if ($i == 4)
    				break;
				endforeach;

				return $ReturnData;	
			}
			else
			{
				return $response->result;
			}
		}
		
	}

	public function getRating()
	{

	}

	public function getCounts()
	{
		
	}
}
$Service = new ServiceProvider();