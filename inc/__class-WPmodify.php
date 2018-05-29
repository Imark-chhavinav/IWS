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
	
}
