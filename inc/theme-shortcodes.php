<?php

/* Sign up Form */
function Cs_SignUp()
{
	$form = '';
	
	/* Customer Form Fields */
	$form .= '<div id="customer" class="row">
				<div class="col-md-6">
					<div class="form-group">
						<input type="text" name="first_name" class="form-control" placeholder="First Name*"> </div>
				</div>
				
				<div class="col-md-6">
					<div class="form-group">
						<input type="text" name="last_name" class="form-control" placeholder="Last Name*"> </div>
				</div>
				
				<div class="col-md-6">
					<div class="form-group">
						<input type="email" name="email" class="form-control" placeholder="Email Address*"> </div>
				</div>
				
				 <div class="col-md-6">
					<div class="form-group">
						<input type="email" name="emailConfirm" class="form-control" placeholder="Confirm Email Address*"> </div>
				</div>
				
				 <div class="col-md-6">
					<div class="form-group">
						<input type="password" name="password" class="form-control" placeholder="Password*"> </div>
				</div>
				
				<div class="col-md-6">
					<div class="form-group">
						<input type="password" name="passwordConfirm" class="form-control" placeholder="Confirm Password*"> </div>
				</div>
				
				 <div class="col-md-6">
					<div class="form-group">
						<input type="text" name="username" class="form-control" placeholder="User Name*"> </div>
				</div>
				
				<div class="col-md-6">
					<div class="form-group">
						<input type="number" name="phone_number" class="form-control" placeholder="Phone Number*"> </div>
				</div>
				
				<div class="col-md-6">
					<div class="form-group">
						<input type="text" name="unit_apartment_number" class="form-control" placeholder="Unit or Apartment Number"> </div>
				</div>
				
				<div class="col-md-6">
					<div class="form-group">
						<input type="text" name="street_address" class="form-control" id="autocomplete" placeholder="Street Address*"> </div>
				</div>
				
				<div class="col-md-6">
					<div class="form-group">
						<input type="text" name="suburb" class="form-control" placeholder="Suburb*"> </div>
				</div>
				
				<div class="col-md-6">
					<div class="form-group">
						<input type="text" name="state" class="form-control" placeholder="State*"> </div>
				</div>
				
				<div class="col-md-6">
					<div class="form-group">
						<input type="text" name="postcode" class="form-control" placeholder="Post Code*"> </div>
				</div>
				
				<div class="col-md-6">
					<div class="form-group">
						<select id="country" class="form-control" name="country">
									<option value="AF">Afghanistan</option>
										<option value="AX">Åland Islands</option>
										<option value="AL">Albania</option>
										<option value="DZ">Algeria</option>
										<option value="AS">American Samoa</option>
										<option value="AD">Andorra</option>
										<option value="AO">Angola</option>
										<option value="AI">Anguilla</option>
										<option value="AQ">Antarctica</option>
										<option value="AG">Antigua and Barbuda</option>
										<option value="AR">Argentina</option>
										<option value="AM">Armenia</option>
										<option value="AW">Aruba</option>
										<option  selected value="AU">Australia</option>
										<option value="AT">Austria</option>
										<option value="AZ">Azerbaijan</option>
										<option value="BS">Bahamas</option>
										<option value="BH">Bahrain</option>
										<option value="BD">Bangladesh</option>
										<option value="BB">Barbados</option>
										<option value="BY">Belarus</option>
										<option value="BE">Belgium</option>
										<option value="BZ">Belize</option>
										<option value="BJ">Benin</option>
										<option value="BM">Bermuda</option>
										<option value="BT">Bhutan</option>
										<option value="BO">Bolivia, Plurinational State of</option>
										<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
										<option value="BA">Bosnia and Herzegovina</option>
										<option value="BW">Botswana</option>
										<option value="BV">Bouvet Island</option>
										<option value="BR">Brazil</option>
										<option value="IO">British Indian Ocean Territory</option>
										<option value="BN">Brunei Darussalam</option>
										<option value="BG">Bulgaria</option>
										<option value="BF">Burkina Faso</option>
										<option value="BI">Burundi</option>
										<option value="KH">Cambodia</option>
										<option value="CM">Cameroon</option>
										<option value="CA">Canada</option>
										<option value="CV">Cape Verde</option>
										<option value="KY">Cayman Islands</option>
										<option value="CF">Central African Republic</option>
										<option value="TD">Chad</option>
										<option value="CL">Chile</option>
										<option value="CN">China</option>
										<option value="CX">Christmas Island</option>
										<option value="CC">Cocos (Keeling) Islands</option>
										<option value="CO">Colombia</option>
										<option value="KM">Comoros</option>
										<option value="CG">Congo</option>
										<option value="CD">Congo, the Democratic Republic of the</option>
										<option value="CK">Cook Islands</option>
										<option value="CR">Costa Rica</option>
										<option value="CI">Côte d\'Ivoire</option>
										<option value="HR">Croatia</option>
										<option value="CU">Cuba</option>
										<option value="CW">Curaçao</option>
										<option value="CY">Cyprus</option>
										<option value="CZ">Czech Republic</option>
										<option value="DK">Denmark</option>
										<option value="DJ">Djibouti</option>
										<option value="DM">Dominica</option>
										<option value="DO">Dominican Republic</option>
										<option value="EC">Ecuador</option>
										<option value="EG">Egypt</option>
										<option value="SV">El Salvador</option>
										<option value="GQ">Equatorial Guinea</option>
										<option value="ER">Eritrea</option>
										<option value="EE">Estonia</option>
										<option value="ET">Ethiopia</option>
										<option value="FK">Falkland Islands (Malvinas)</option>
										<option value="FO">Faroe Islands</option>
										<option value="FJ">Fiji</option>
										<option value="FI">Finland</option>
										<option value="FR">France</option>
										<option value="GF">French Guiana</option>
										<option value="PF">French Polynesia</option>
										<option value="TF">French Southern Territories</option>
										<option value="GA">Gabon</option>
										<option value="GM">Gambia</option>
										<option value="GE">Georgia</option>
										<option value="DE">Germany</option>
										<option value="GH">Ghana</option>
										<option value="GI">Gibraltar</option>
										<option value="GR">Greece</option>
										<option value="GL">Greenland</option>
										<option value="GD">Grenada</option>
										<option value="GP">Guadeloupe</option>
										<option value="GU">Guam</option>
										<option value="GT">Guatemala</option>
										<option value="GG">Guernsey</option>
										<option value="GN">Guinea</option>
										<option value="GW">Guinea-Bissau</option>
										<option value="GY">Guyana</option>
										<option value="HT">Haiti</option>
										<option value="HM">Heard Island and McDonald Islands</option>
										<option value="VA">Holy See (Vatican City State)</option>
										<option value="HN">Honduras</option>
										<option value="HK">Hong Kong</option>
										<option value="HU">Hungary</option>
										<option value="IS">Iceland</option>
										<option value="IN">India</option>
										<option value="ID">Indonesia</option>
										<option value="IR">Iran, Islamic Republic of</option>
										<option value="IQ">Iraq</option>
										<option value="IE">Ireland</option>
										<option value="IM">Isle of Man</option>
										<option value="IL">Israel</option>
										<option value="IT">Italy</option>
										<option value="JM">Jamaica</option>
										<option value="JP">Japan</option>
										<option value="JE">Jersey</option>
										<option value="JO">Jordan</option>
										<option value="KZ">Kazakhstan</option>
										<option value="KE">Kenya</option>
										<option value="KI">Kiribati</option>
										<option value="KP">Korea, Democratic People\'s Republic of</option>
										<option value="KR">Korea, Republic of</option>
										<option value="KW">Kuwait</option>
										<option value="KG">Kyrgyzstan</option>
										<option value="LA">Lao People\'s Democratic Republic</option>
										<option value="LV">Latvia</option>
										<option value="LB">Lebanon</option>
										<option value="LS">Lesotho</option>
										<option value="LR">Liberia</option>
										<option value="LY">Libya</option>
										<option value="LI">Liechtenstein</option>
										<option value="LT">Lithuania</option>
										<option value="LU">Luxembourg</option>
										<option value="MO">Macao</option>
										<option value="MK">Macedonia, the former Yugoslav Republic of</option>
										<option value="MG">Madagascar</option>
										<option value="MW">Malawi</option>
										<option value="MY">Malaysia</option>
										<option value="MV">Maldives</option>
										<option value="ML">Mali</option>
										<option value="MT">Malta</option>
										<option value="MH">Marshall Islands</option>
										<option value="MQ">Martinique</option>
										<option value="MR">Mauritania</option>
										<option value="MU">Mauritius</option>
										<option value="YT">Mayotte</option>
										<option value="MX">Mexico</option>
										<option value="FM">Micronesia, Federated States of</option>
										<option value="MD">Moldova, Republic of</option>
										<option value="MC">Monaco</option>
										<option value="MN">Mongolia</option>
										<option value="ME">Montenegro</option>
										<option value="MS">Montserrat</option>
										<option value="MA">Morocco</option>
										<option value="MZ">Mozambique</option>
										<option value="MM">Myanmar</option>
										<option value="NA">Namibia</option>
										<option value="NR">Nauru</option>
										<option value="NP">Nepal</option>
										<option value="NL">Netherlands</option>
										<option value="NC">New Caledonia</option>
										<option value="NZ">New Zealand</option>
										<option value="NI">Nicaragua</option>
										<option value="NE">Niger</option>
										<option value="NG">Nigeria</option>
										<option value="NU">Niue</option>
										<option value="NF">Norfolk Island</option>
										<option value="MP">Northern Mariana Islands</option>
										<option value="NO">Norway</option>
										<option value="OM">Oman</option>
										<option value="PK">Pakistan</option>
										<option value="PW">Palau</option>
										<option value="PS">Palestinian Territory, Occupied</option>
										<option value="PA">Panama</option>
										<option value="PG">Papua New Guinea</option>
										<option value="PY">Paraguay</option>
										<option value="PE">Peru</option>
										<option value="PH">Philippines</option>
										<option value="PN">Pitcairn</option>
										<option value="PL">Poland</option>
										<option value="PT">Portugal</option>
										<option value="PR">Puerto Rico</option>
										<option value="QA">Qatar</option>
										<option value="RE">Réunion</option>
										<option value="RO">Romania</option>
										<option value="RU">Russian Federation</option>
										<option value="RW">Rwanda</option>
										<option value="BL">Saint Barthélemy</option>
										<option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
										<option value="KN">Saint Kitts and Nevis</option>
										<option value="LC">Saint Lucia</option>
										<option value="MF">Saint Martin (French part)</option>
										<option value="PM">Saint Pierre and Miquelon</option>
										<option value="VC">Saint Vincent and the Grenadines</option>
										<option value="WS">Samoa</option>
										<option value="SM">San Marino</option>
										<option value="ST">Sao Tome and Principe</option>
										<option value="SA">Saudi Arabia</option>
										<option value="SN">Senegal</option>
										<option value="RS">Serbia</option>
										<option value="SC">Seychelles</option>
										<option value="SL">Sierra Leone</option>
										<option value="SG">Singapore</option>
										<option value="SX">Sint Maarten (Dutch part)</option>
										<option value="SK">Slovakia</option>
										<option value="SI">Slovenia</option>
										<option value="SB">Solomon Islands</option>
										<option value="SO">Somalia</option>
										<option value="ZA">South Africa</option>
										<option value="GS">South Georgia and the South Sandwich Islands</option>
										<option value="SS">South Sudan</option>
										<option value="ES">Spain</option>
										<option value="LK">Sri Lanka</option>
										<option value="SD">Sudan</option>
										<option value="SR">Suriname</option>
										<option value="SJ">Svalbard and Jan Mayen</option>
										<option value="SZ">Swaziland</option>
										<option value="SE">Sweden</option>
										<option value="CH">Switzerland</option>
										<option value="SY">Syrian Arab Republic</option>
										<option value="TW">Taiwan, Province of China</option>
										<option value="TJ">Tajikistan</option>
										<option value="TZ">Tanzania, United Republic of</option>
										<option value="TH">Thailand</option>
										<option value="TL">Timor-Leste</option>
										<option value="TG">Togo</option>
										<option value="TK">Tokelau</option>
										<option value="TO">Tonga</option>
										<option value="TT">Trinidad and Tobago</option>
										<option value="TN">Tunisia</option>
										<option value="TR">Turkey</option>
										<option value="TM">Turkmenistan</option>
										<option value="TC">Turks and Caicos Islands</option>
										<option value="TV">Tuvalu</option>
										<option value="UG">Uganda</option>
										<option value="UA">Ukraine</option>
										<option value="AE">United Arab Emirates</option>
										<option value="GB">United Kingdom</option>
										<option value="US">United States</option>
										<option value="UM">United States Minor Outlying Islands</option>
										<option value="UY">Uruguay</option>
										<option value="UZ">Uzbekistan</option>
										<option value="VU">Vanuatu</option>
										<option value="VE">Venezuela, Bolivarian Republic of</option>
										<option value="VN">Viet Nam</option>
										<option value="VG">Virgin Islands, British</option>
										<option value="VI">Virgin Islands, U.S.</option>
										<option value="WF">Wallis and Futuna</option>
										<option value="EH">Western Sahara</option>
										<option value="YE">Yemen</option>
										<option value="ZM">Zambia</option>
										<option value="ZW">Zimbabwe</option>
								</select> 
		</div>
				</div>
				
			<div class="col-md-6 service_select" style="display: none;">
					<div class="form-group">
						<input type="text" name="business_name" class="form-control" placeholder="Business Name*"> 
					</div>
				</div>
				
			<div class="col-md-6 service_select" style="display: none;">
					<div class="form-group">
						<input type="text" name="abn" class="form-control" placeholder="ABN"> 
					</div>
			</div>
                                
			</div>';	
	
	echo $form;
}
add_shortcode('SignUp_Cs','Cs_SignUp');

/* Verify Account */

function Cs_VerifyAccount()
{
	if( isset( $_GET['verifyAccount'] ) && $_GET['verifyAccount'] != '' )
	{
		
		$key = $_GET['verifyAccount'];
		global $wpdb;
		$results = $wpdb->get_results(" Select * from ".$wpdb->prefix."registration Where user_activation_key = '".$key."' ");
		
		if( !empty($results) )
		{
			$ID = $results[0]->id;
			$update = $wpdb->update( $wpdb->prefix.'registration',array( 'user_activation_key' => NULL ),array( 'id' => $ID ) );
			if( $update )
			{
				echo "User Verification Completed Successfully";
			}
			else
			{
				echo "Sorry ! Please try again after some time as verfification can't be completed .";
			}
		}
		else
		{
			 wp_redirect( site_url() ); exit;			
		}
	}
}
add_shortcode('VerifyAccount','Cs_VerifyAccount');

/* Sign In PopUp */
function Cs_SignIn()
{
	if( !is_user_logged_in() ){
	
	echo '<div id="signInModal" class="modal fade custom-popup custom-popup-small" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      
      <div class="modal-body">
        <h2>Sign in</h2>
          
          <form id="SignIn">
            <div class="form-group">
			'.wp_nonce_field( 'SignIn', 'SignIn_wpnonce').'
                <input type="text" class="form-control" name="username_email" placeholder="User Name or Email">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password">
              </div>
              
              <div class="text-left">
                <ul class="inline-group">
                    <li><a href="#ForgotPasswordModal" data-toggle="modal" data-dismiss="modal">Forgot Password ?</a></li>  
                    <li><input type="submit" value="sign in" class="sign-btn"></li>
                </ul>
              </div>
              
          </form>
          
          <a class="popup-close" data-dismiss="modal" href="#"> </a>
          
      </div>
      
    </div>

  </div>
</div>';
	}
}
add_shortcode( 'SignIn','Cs_SignIn' );

/* Forgot Password Popup */
function Cs_ForgotPassword()
{
	if( !is_user_logged_in() ){
	echo '<div id="ForgotPasswordModal" class="modal fade custom-popup custom-popup-small" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      
      <div class="modal-body">
        <h2>Reset Password</h2>
          
          <form id="ForgotPassword" method="POST">
		  '.wp_nonce_field( 'ForgotPassword', 'ForgotPassword_wpnonce').'
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Email">
              </div>            
              <div class="text-left">
                <ul class="inline-group">
					<li><a href="#signInModal" data-toggle="modal" data-dismiss="modal">Sign In?</a></li> 
                    <li><input type="submit" value="Reset Password" class="sign-btn"></li>
                </ul>
              </div>
              
          </form>
          
          <a class="popup-close" data-dismiss="modal" href="#"> </a>
          
      </div>
      
    </div>

  </div>
</div>';
}
}
add_shortcode( 'ForgotPassword','Cs_ForgotPassword' );

/* Verify Forgot password */

function Cs_ResetPassword()
{
		if( !is_user_logged_in() && isset($_GET['resetPassword']) && $_GET['resetPassword'] != '' )
		{
	echo '<div id="ResetPasswordModal" class="modal fade custom-popup custom-popup-small" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      
      <div class="modal-body">
        <h2>Reset Password</h2>
          
          <form id="ResetPassword" method="POST">
		  '.wp_nonce_field( 'ResetPassword', 'ResetPassword_wpnonce').'
            <div class="form-group">
                <input type="hidden" name="token" class="form-control" value="'.$_GET["resetPassword"].'" >
                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
              </div> 
			  <div class="form-group">
                <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password">
              </div>            
              <div class="text-left">
                <ul class="inline-group">
					<li><a href="#signInModal" data-toggle="modal" data-dismiss="modal">Sign In?</a></li> 
                    <li><input type="submit" value="Reset Password" class="sign-btn"></li>
                </ul>
              </div>
              
          </form>
          
          <a class="popup-close" data-dismiss="modal" href="#"> </a>
          
      </div>
      
    </div>

  </div>
	</div>';
	echo '<script> jQuery(document).ready(function(){ jQuery("#ResetPasswordModal").modal("show");	}) </script>';	
	}


	
}
add_shortcode('ResetPassword','Cs_ResetPassword');

function Cs_UpdatePassword()
{
		
	echo '<div id="UpdatePasswordModal" class="modal fade custom-popup custom-popup-small" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      
      <div class="modal-body">
        <h2>Reset Password</h2>
          
          <form id="UpdatePassword" method="POST">
		  '.wp_nonce_field( 'UpdatePassword', 'UpdatePassword_wpnonce').'
			  <div class="form-group">
                <input type="password" name="previous_pass" class="form-control" placeholder="Current Password">
              </div>  
            <div class="form-group">
                <input type="hidden" name="user_id" class="form-control" value="'.get_current_user_id().'" >
                <input type="password" name="new_pass" id="new_pass" class="form-control" placeholder="New Password">
              </div> 
              <div class="form-group">
                <input type="password" name="confirm_pass" class="form-control" placeholder="Confirm Password">
              </div>            
              <div class="text-left">
                <ul class="inline-group">					
                    <li><input type="submit" value="Update Password" class="sign-btn"></li>
                </ul>
              </div>
              
          </form>         
      </div>
      
    </div>

  </div>
	</div>';
	
}
add_shortcode('UpdatePassword','Cs_UpdatePassword');

function Cs_UpdateProfile()
{
	/*global $wpdb;
	$userID = get_current_user_id();
 	$results = $wpdb->get_results( 'SELECT * FROM '.$wpdb->prefix.'registration WHERE user_id ='.$userID, OBJECT );*/
 	$Service = new ServiceProvider();
 	$results = $Service->getprofile(); 
 	$ti = array( 'Mr','Mrs','Ms','Miss','Dr' );
 	$title = '';
	foreach( $ti as $keys ):

		if( $keys == $results[0]->title ):
			$title .='<option selected value="'.$keys.'">'.$keys.'</option>'; 
		else:
			$title .='<option value="'.$keys.'">'.$keys.'</option>'; 
		endif;	

	endforeach;	
 	

	echo '<div id="UpdateProfileModal" class="modal fade custom-popup custom-popup-small" role="dialog">
  <div class="modal-dialog">
  <form id="UpdateProfile" method="POST">
  	<input type="hidden" name="lat" value="'.$results[0]->lat.'">
  	<input type="hidden" name="longs" value="'.$results[0]->longs.'">
    <input type="hidden" id="user_type" name="user_type" value = "'.$results[0]->user_type.'" class="form-control" >
    <input type="hidden" id="user_id" name="user_id" value = "'.$results[0]->user_id.'" class="form-control" >
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">x</button>
        <h2 class="modal-title">Update Profile</h2>
      </div>
      <div class="modal-body">
		  '.wp_nonce_field( 'UpdateProfile', 'UpdateProfile_wpnonce').'
		  	<div class="col-lg-6 form-group">
			  		<label>Title</label>                	
					<select class="form-control" name="title">
						'.$title.'
					</select>
                                   
     	 	</div>
     	 	<div class="col-lg-6 form-group">
			  		<label>Profile Pic</label>
			  		<input type="file" name="profilePic" id="profilePic">
     	 	</div>
     	 	<div class="clearfix"></div>
     	 	<div class="col-lg-6 form-group">
			  	<label>First Name</label>
                <input type="text" name="first_name" value = "'.$results[0]->first_name.'" class="form-control" >
     	 	</div>
     	 	<div class="col-lg-6 form-group">
			  		<label>Last Name</label>
                	<input type="text" name="last_name" value = "'.$results[0]->last_name.'" class="form-control" >
     	 	</div> 
     	 	<div class="col-lg-6 form-group">
			  		<label>Phone Number</label>
                	<input type="text" name="phone_number" value = "'.$results[0]->phone_number.'" class="form-control" >
     	 	</div>
     	 	<div class="col-lg-6 form-group">
			  		<label>Street Address</label>
                	<input type="text" name="street_address" id="autocomplete" value = "'.$results[0]->street_address.'" class="form-control" >
     	 	</div>
     	 	<div class="col-lg-6 form-group">
			  		<label>Unit or Apartment Number</label>
                	<input type="text" name="apartment_number" value = "'.$results[0]->apartment_number.'" class="form-control" >
     	 	</div>
     	 	<div class="col-lg-6 form-group">
			  		<label>Suburb</label>
                	<input type="text" name="suburb" value = "'.$results[0]->suburb.'" class="form-control" >
     	 	</div>  
     	 	<div class="col-lg-6 form-group">
			  		<label>State</label>
                	<input type="text" name="state" value = "'.$results[0]->state.'" class="form-control" >
     	 	</div>
     	 	<div class="col-lg-6 form-group">
			  		<label>Postcode</label>
                	<input type="text" name="postcode" value = "'.$results[0]->post_code.'" class="form-control" >
     	 	</div> 
     	 	<div class="col-lg-6 form-group">
			  		<label>Business Name</label>
                	<input type="text" name="business_name" value = "'.$results[0]->business_number.'" class="form-control" >
     	 	</div>  
     	 	<div class="col-lg-6 form-group">
			  		<label>ABN Number</label>
                	<input type="text" name="abn" value = "'.$results[0]->abn.'" class="form-control" >
     	 	</div> 
                
      </div>
      
      <div class="modal-footer">
        <input type="submit" value="Update Details" class="sign-btn btn btn-default">
      </div>

    </div>
		</form>   
  </div>
	</div>';
}
add_shortcode('UpdateProfile','Cs_UpdateProfile');


function getProvider( $Arguments )
{
	$Service = new ServiceProvider();
	if( !empty( $Arguments ) )
	{
		$Data = $Service->getProviders($Arguments['type']);
	}
	else
	{
		$Data = json_decode($Service->getProviders());
	}	
	return $Data;
}
add_shortcode( 'GETSP' , 'getProvider' );


function Cs_Cust_UpdateProfile()
{
	
	/*global $wpdb;
	$userID = get_current_user_id();
 	$results = $wpdb->get_results( 'SELECT * FROM '.$wpdb->prefix.'registration WHERE user_id ='.$userID, OBJECT );*/
 	$Service = new ServiceProvider();
 	$results = $Service->getprofile(); 
 	
 	$ti = array( 'Mr','Mrs','Ms','Miss','Dr' );
 	$title = '';
	foreach( $ti as $keys ):

		if( $keys == $results[0]->title ):
			$title .='<option selected value="'.$keys.'">'.$keys.'</option>'; 
		else:
			$title .='<option value="'.$keys.'">'.$keys.'</option>'; 
		endif;	

	endforeach;	
 	

	echo '<div id="Cust_UpdateProfileModal" class="modal fade custom-popup custom-popup-small" role="dialog">
  <div class="modal-dialog">
  <form id="UpdateProfile" method="POST">
  	<input type="hidden" name="lat" value="'.$results[0]->lat.'">
  	<input type="hidden" name="longs" value="'.$results[0]->longs.'">
    <input type="hidden" id="user_type" name="user_type" value = "'.$results[0]->user_type.'" class="form-control" >
    <input type="hidden" id="user_id" name="user_id" value = "'.$results[0]->user_id.'" class="form-control" >
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">x</button>
        <h2 class="modal-title">Update Profile</h2>
      </div>
      <div class="modal-body">
		  '.wp_nonce_field( 'UpdateProfile', 'UpdateProfile_wpnonce').'
		  	<div class="col-lg-6 form-group">
			  		<label>Title</label>                	
					<select class="form-control" name="title">
						'.$title.'
					</select>
                                   
     	 	</div>
     	 	<div class="col-lg-6 form-group">
			  		<label>Profile Pic</label>
			  		<input type="file" name="profilePic" id="profilePic">
     	 	</div>
     	 	<div class="clearfix"></div>
     	 	<div class="col-lg-6 form-group">
			  	<label>First Name</label>
                <input type="text" name="first_name" value = "'.$results[0]->first_name.'" class="form-control" >
     	 	</div>
     	 	<div class="col-lg-6 form-group">
			  		<label>Last Name</label>
                	<input type="text" name="last_name" value = "'.$results[0]->last_name.'" class="form-control" >
     	 	</div> 
     	 	<div class="col-lg-6 form-group">
			  		<label>Phone Number</label>
                	<input type="text" name="phone_number" value = "'.$results[0]->phone_number.'" class="form-control" >
     	 	</div>
     	 	<div class="col-lg-6 form-group">
			  		<label>Street Address</label>
                	<input type="text" name="street_address" id="autocomplete" value = "'.$results[0]->street_address.'" class="form-control" >
     	 	</div>
     	 	<div class="col-lg-6 form-group">
			  		<label>Unit or Apartment Number</label>
                	<input type="text" name="apartment_number" value = "'.$results[0]->apartment_number.'" class="form-control" >
     	 	</div>
     	 	<div class="col-lg-6 form-group">
			  		<label>Suburb</label>
                	<input type="text" name="suburb" value = "'.$results[0]->suburb.'" class="form-control" >
     	 	</div>  
     	 	<div class="col-lg-6 form-group">
			  		<label>State</label>
                	<input type="text" name="state" value = "'.$results[0]->state.'" class="form-control" >
     	 	</div>
     	 	<div class="col-lg-6 form-group">
			  		<label>Postcode</label>
                	<input type="text" name="postcode" value = "'.$results[0]->post_code.'" class="form-control" >
     	 	</div> 
     	 	<div class="col-lg-12 form-group">
			  		<label>About Me</label>
			  		<textarea name="about_me" class="form-control" >'.$results[0]->about_me.'</textarea>                	
     	 	</div>   	 	
                
      </div>
      
      <div class="modal-footer">
        <input type="submit" value="Update Details" class="btn btn-default">
      </div>

    </div>
		</form>   
  </div>
	</div>';
}
add_shortcode('CS_CustUP','Cs_Cust_UpdateProfile');
