<?php

class WPmodify {
	
	
	/* Custom Response For Mobile Apis */
	
	
	public function response( $success = '', $result = '' , $error = 'No Error Found !' )
	{
		echo json_encode(array( 'success' => $success, 'result'=> $result, 'error' => $error ));
		exit;
	}
	
	public function web_response( $status = '', $message = '' , $extra = 'No Error Found !' )
	{
		echo json_encode(array( 'status' => $status, 'message'=> $message, 'extra' => $extra ));
		exit;
	}
	
	public function SendEmail($to,$subject,$file,$search,$message,$replace_emp)
	{
		$admin_email = get_option( 'admin_email' ); 
		$headers 	= array();
		$headers[] 	= 'Content-Type: text/html; charset=UTF-8';
		$headers[] 	= 'From: Admin <'.$admin_email.'>';
		
		$emailBody = file_get_contents($file);
		$emailBodyemp  = str_replace($search, $replace_emp, $emailBody);	
		$mail = wp_mail( $to, $subject, $emailBodyemp, $headers);
		if( $mail )
		{
			return true;
		}
		else
		{
			return false;
		}
	}


	public function UploadImg( $FileData )
	{
		if( isset($FileData) )
		{
			foreach( $FileData as $file):
				if ( ! function_exists( 'wp_handle_upload' ) ) 
				{
				    require_once( ABSPATH . 'wp-admin/includes/file.php' );
				}
					
				if( $file['size'] > 2097152 )
				{

					if(isset($parameters['UpdateProfile_wpnonce']))
					{
						$this->WPmodify->web_response( 'error','Only 2MB Allowed '  ,'File size to large !' );
					}
					else
					{
						$this->WPmodify->response( 0, 'Only 2MB Allowed ' , 'File size to large' );		
					}		
				}



				$types = array('image/jpeg', 'image/gif','image/jpg','image/png','image/*');
				//$types = array(IMAGETYPE_GIF , IMAGETYPE_JPEG ,IMAGETYPE_PNG , IMAGETYPE_BMP);

				if (in_array($file['type'], $types)) 
				{
					$uploadedfile = $file;

					$upload_overrides = array( 'test_form' => false );

					$movefile = wp_handle_upload( $uploadedfile, $upload_overrides );

					if ( $movefile && ! isset( $movefile['error'] ) ) 
					{
					   return $more_img = strstr ($movefile['file'], 'wp-content');
					} 
					else 
					{
					    /**
					     * Error generated by _wp_handle_upload()
					     * @see _wp_handle_upload() in wp-admin/includes/file.php
					     */
					    if(isset($parameters['UpdateProfile_wpnonce']))
						{
							$this->WPmodify->web_response( 'error', $movefile['error'] ,'File not uploaded !' );
						}
						else
						{
							$this->WPmodify->response( 0, $movefile['error'] , 'File not uploaded' );			
						}					    
					}
				} 
				else 
				{
					if(isset($parameters['UpdateProfile_wpnonce']))
					{
						$this->WPmodify->web_response( 'error', 'Only JPEG,PNG,JPG Allowed' , 'InValid File Format' );
					}
					else
					{
						$this->response( 0, 'Only JPEG,PNG,JPG Allowed' , 'InValid File Format' );			
					}
				}

				
			endforeach;
		}
	}

	public function UploadFile( $FileData )
	{
		if( isset($FileData) )
		{
			foreach( $FileData as $file):
				if ( ! function_exists( 'wp_handle_upload' ) ) 
				{
				    require_once( ABSPATH . 'wp-admin/includes/file.php' );
				}
					
				if( $file['size'] > 2097152 )
				{

					if(isset($parameters['UpdateProfile_wpnonce']))
					{
						$this->WPmodify->web_response( 'error','Only 2MB Allowed '  ,'File size to large !' );
					}
					else
					{
						$this->WPmodify->response( 0, 'Only 2MB Allowed ' , 'File size to large' );		
					}		
				}



				$types = array('image/jpeg', 'image/gif','image/jpg','image/png','application/msword','application/rtf','application/vnd.ms-excel','application/pdf');

				if (in_array($file['type'], $types)) 
				{
					$uploadedfile = $file;

					$upload_overrides = array( 'test_form' => false );

					$movefile = wp_handle_upload( $uploadedfile, $upload_overrides );

					if ( $movefile && ! isset( $movefile['error'] ) ) 
					{
					   return $more_img = strstr ($movefile['file'], 'wp-content');
					} 
					else 
					{
					    /**
					     * Error generated by _wp_handle_upload()
					     * @see _wp_handle_upload() in wp-admin/includes/file.php
					     */
					    if(isset($parameters['UpdateProfile_wpnonce']))
						{
							$this->WPmodify->web_response( 'error', $movefile['error'] ,'File not uploaded !' );
						}
						else
						{
							$this->WPmodify->response( 0, $movefile['error'] , 'File not uploaded' );			
						}					    
					}
				} 
				else 
				{
					if(isset($parameters['UpdateProfile_wpnonce']))
					{
						$this->WPmodify->web_response( 'error', 'Only JPEG,PNG,JPG Allowed' , 'InValid File Format' );
					}
					else
					{
						$this->WPmodify->response( 0, 'Only JPEG,PNG,JPG Allowed' , 'InValid File Format' );			
					}
				}

				
			endforeach;
		}
	}

	public function createToken( $userID , $userlogin , $deviceToken , $deviceType)
	{
		// device_token, device_type , access_token , created_on , updated_on , user_id

		global $wpdb;

		$query = "SELECT * FROM ".$wpdb->prefix."accesstoken WHERE user_id = ".$userID." AND device_token = '".$deviceToken."' ";
		$results = $wpdb->get_row( $query , OBJECT );
		
		$key = time().$userID.$userlogin.$deviceToken.$deviceType;
		$access_token = base64_encode( $key );

		if( empty( $results ) )
		{
			$Data = array(
			'user_id'		=> $userID,
			'device_token' 	=> $deviceToken,
			'device_type' 	=> $deviceType,
			'access_token' 	=> $access_token,
			'created_on'	=> date('d-m-Y H:i:s'),
			'updated_on' 	=> date('d-m-Y H:i:s'),
			);

			$wpdb->insert( $wpdb->prefix.'accesstoken', $Data );
			$wpdb->flush();		
		}
		else
		{
			$Data = array(			
			'device_token' 	=> $deviceToken,
			'device_type' 	=> $deviceType,
			'access_token' 	=> $access_token,			
			'updated_on' 	=> date('d-m-Y H:i:s'),
			);
			$wpdb->update( $wpdb->prefix.'accesstoken', $Data,array( 'id' => $results->id ));
			$wpdb->flush();
		}
		return $access_token;
	}
	
	public function verifyToken()
	{
		global $wpdb;		
		$headers = getallheaders();
		$accesstoken = $headers['authenticate-token'];
		$query = "SELECT * FROM ".$wpdb->prefix."accesstoken WHERE access_token = '$accesstoken' ";
		$results = $wpdb->get_row( $query , OBJECT );		
		if( empty($results) )
		{
			$this->response( 0, NULL , 'Invalid Token' );
		}
				
	}

	public function checkUserType( $userID ,$userType )
	{
		global $wpdb;
		$result = $wpdb->get_results( 'SELECT * FROM '.$wpdb->prefix.'registration WHERE user_id = "'.$userID.'" AND user_type = "'.$userType.'" ' );

		if( empty( $result ) )
		{
			$this->response( 0, NULL, 'Access Denied' );
		}		
	}

	public function checkJobStatus( $userID = NULL , $JobID )
	{
		global $wpdb;
		$results = $wpdb->get_results("SELECT * FROM ".$wpdb->prefix."events WHERE id = '$JobID' ",OBJECT);
		if( !empty( $results ) )
		{
			if( $results[0]->status == '2' || $results[0]->status == '3' )
			{
				$this->response( 0 , NULL , 'Job can\'t be Edit ' );
			}
		}
		else
		{
			$this->response( 0 , NULL , 'Invalid Job ID' );
		}
	}

	public function checkBidStatus( $BidID )
	{
		global $wpdb;
		$results = $wpdb->get_results("SELECT * FROM ".$wpdb->prefix."bids WHERE id = '$BidID' ",OBJECT);
		if( !empty( $results ) )
		{
			if( $results[0]->status == '1' || $results[0]->status == '2' )
			{
				$this->response( 0 , NULL , 'Bid can\'t be Edit ' );
			}
		}
		else
		{
			$this->response( 0 , NULL , 'Invalid BID ' );
		}
	}

	public function checkBidEndDate( $JobID )
	{
		global $wpdb;
		$results = $wpdb->get_results("SELECT * FROM ".$wpdb->prefix."events WHERE id = '$JobID' ",OBJECT);
		if( !empty( $results ) )
		{
			if( $results[0]->bidding_Enddate < date( 'd-m-Y' ) )
			{
				$this->response( 0 , NULL , ' Not Allowed Bidding Last Date gone ' );
			}
		}
		else
		{
			$this->response( 0 , NULL , 'Invalid Job ID' );
		}
	}

}
