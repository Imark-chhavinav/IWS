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
						<input type="text" name="street_address" class="form-control" placeholder="Street Address*"> </div>
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
						<select class="form-control" name="country">
	<option value="AFG">Afghanistan</option>
	<option value="ALA">Åland Islands</option>
	<option value="ALB">Albania</option>
	<option value="DZA">Algeria</option>
	<option value="ASM">American Samoa</option>
	<option value="AND">Andorra</option>
	<option value="AGO">Angola</option>
	<option value="AIA">Anguilla</option>
	<option value="ATA">Antarctica</option>
	<option value="ATG">Antigua and Barbuda</option>
	<option value="ARG">Argentina</option>
	<option value="ARM">Armenia</option>
	<option value="ABW">Aruba</option>
	<option value="AUS" selected >Australia</option>
	<option value="AUT">Austria</option>
	<option value="AZE">Azerbaijan</option>
	<option value="BHS">Bahamas</option>
	<option value="BHR">Bahrain</option>
	<option value="BGD">Bangladesh</option>
	<option value="BRB">Barbados</option>
	<option value="BLR">Belarus</option>
	<option value="BEL">Belgium</option>
	<option value="BLZ">Belize</option>
	<option value="BEN">Benin</option>
	<option value="BMU">Bermuda</option>
	<option value="BTN">Bhutan</option>
	<option value="BOL">Bolivia, Plurinational State of</option>
	<option value="BES">Bonaire, Sint Eustatius and Saba</option>
	<option value="BIH">Bosnia and Herzegovina</option>
	<option value="BWA">Botswana</option>
	<option value="BVT">Bouvet Island</option>
	<option value="BRA">Brazil</option>
	<option value="IOT">British Indian Ocean Territory</option>
	<option value="BRN">Brunei Darussalam</option>
	<option value="BGR">Bulgaria</option>
	<option value="BFA">Burkina Faso</option>
	<option value="BDI">Burundi</option>
	<option value="KHM">Cambodia</option>
	<option value="CMR">Cameroon</option>
	<option value="CAN">Canada</option>
	<option value="CPV">Cape Verde</option>
	<option value="CYM">Cayman Islands</option>
	<option value="CAF">Central African Republic</option>
	<option value="TCD">Chad</option>
	<option value="CHL">Chile</option>
	<option value="CHN">China</option>
	<option value="CXR">Christmas Island</option>
	<option value="CCK">Cocos (Keeling) Islands</option>
	<option value="COL">Colombia</option>
	<option value="COM">Comoros</option>
	<option value="COG">Congo</option>
	<option value="COD">Congo, the Democratic Republic of the</option>
	<option value="COK">Cook Islands</option>
	<option value="CRI">Costa Rica</option>
	<option value="CIV">Côte d\'Ivoire</option>
	<option value="HRV">Croatia</option>
	<option value="CUB">Cuba</option>
	<option value="CUW">Curaçao</option>
	<option value="CYP">Cyprus</option>
	<option value="CZE">Czech Republic</option>
	<option value="DNK">Denmark</option>
	<option value="DJI">Djibouti</option>
	<option value="DMA">Dominica</option>
	<option value="DOM">Dominican Republic</option>
	<option value="ECU">Ecuador</option>
	<option value="EGY">Egypt</option>
	<option value="SLV">El Salvador</option>
	<option value="GNQ">Equatorial Guinea</option>
	<option value="ERI">Eritrea</option>
	<option value="EST">Estonia</option>
	<option value="ETH">Ethiopia</option>
	<option value="FLK">Falkland Islands (Malvinas)</option>
	<option value="FRO">Faroe Islands</option>
	<option value="FJI">Fiji</option>
	<option value="FIN">Finland</option>
	<option value="FRA">France</option>
	<option value="GUF">French Guiana</option>
	<option value="PYF">French Polynesia</option>
	<option value="ATF">French Southern Territories</option>
	<option value="GAB">Gabon</option>
	<option value="GMB">Gambia</option>
	<option value="GEO">Georgia</option>
	<option value="DEU">Germany</option>
	<option value="GHA">Ghana</option>
	<option value="GIB">Gibraltar</option>
	<option value="GRC">Greece</option>
	<option value="GRL">Greenland</option>
	<option value="GRD">Grenada</option>
	<option value="GLP">Guadeloupe</option>
	<option value="GUM">Guam</option>
	<option value="GTM">Guatemala</option>
	<option value="GGY">Guernsey</option>
	<option value="GIN">Guinea</option>
	<option value="GNB">Guinea-Bissau</option>
	<option value="GUY">Guyana</option>
	<option value="HTI">Haiti</option>
	<option value="HMD">Heard Island and McDonald Islands</option>
	<option value="VAT">Holy See (Vatican City State)</option>
	<option value="HND">Honduras</option>
	<option value="HKG">Hong Kong</option>
	<option value="HUN">Hungary</option>
	<option value="ISL">Iceland</option>
	<option value="IND">India</option>
	<option value="IDN">Indonesia</option>
	<option value="IRN">Iran, Islamic Republic of</option>
	<option value="IRQ">Iraq</option>
	<option value="IRL">Ireland</option>
	<option value="IMN">Isle of Man</option>
	<option value="ISR">Israel</option>
	<option value="ITA">Italy</option>
	<option value="JAM">Jamaica</option>
	<option value="JPN">Japan</option>
	<option value="JEY">Jersey</option>
	<option value="JOR">Jordan</option>
	<option value="KAZ">Kazakhstan</option>
	<option value="KEN">Kenya</option>
	<option value="KIR">Kiribati</option>
	<option value="PRK">Korea</option>	
	<option value="KWT">Kuwait</option>
	<option value="KGZ">Kyrgyzstan</option>	
	<option value="LVA">Latvia</option>
	<option value="LBN">Lebanon</option>
	<option value="LSO">Lesotho</option>
	<option value="LBR">Liberia</option>
	<option value="LBY">Libya</option>
	<option value="LIE">Liechtenstein</option>
	<option value="LTU">Lithuania</option>
	<option value="LUX">Luxembourg</option>
	<option value="MAC">Macao</option>
	<option value="MKD">Macedonia, the former Yugoslav Republic of</option>
	<option value="MDG">Madagascar</option>
	<option value="MWI">Malawi</option>
	<option value="MYS">Malaysia</option>
	<option value="MDV">Maldives</option>
	<option value="MLI">Mali</option>
	<option value="MLT">Malta</option>
	<option value="MHL">Marshall Islands</option>
	<option value="MTQ">Martinique</option>
	<option value="MRT">Mauritania</option>
	<option value="MUS">Mauritius</option>
	<option value="MYT">Mayotte</option>
	<option value="MEX">Mexico</option>
	<option value="FSM">Micronesia, Federated States of</option>
	<option value="MDA">Moldova, Republic of</option>
	<option value="MCO">Monaco</option>
	<option value="MNG">Mongolia</option>
	<option value="MNE">Montenegro</option>
	<option value="MSR">Montserrat</option>
	<option value="MAR">Morocco</option>
	<option value="MOZ">Mozambique</option>
	<option value="MMR">Myanmar</option>
	<option value="NAM">Namibia</option>
	<option value="NRU">Nauru</option>
	<option value="NPL">Nepal</option>
	<option value="NLD">Netherlands</option>
	<option value="NCL">New Caledonia</option>
	<option value="NZL">New Zealand</option>
	<option value="NIC">Nicaragua</option>
	<option value="NER">Niger</option>
	<option value="NGA">Nigeria</option>
	<option value="NIU">Niue</option>
	<option value="NFK">Norfolk Island</option>
	<option value="MNP">Northern Mariana Islands</option>
	<option value="NOR">Norway</option>
	<option value="OMN">Oman</option>
	<option value="PAK">Pakistan</option>
	<option value="PLW">Palau</option>
	<option value="PSE">Palestinian Territory, Occupied</option>
	<option value="PAN">Panama</option>
	<option value="PNG">Papua New Guinea</option>
	<option value="PRY">Paraguay</option>
	<option value="PER">Peru</option>
	<option value="PHL">Philippines</option>
	<option value="PCN">Pitcairn</option>
	<option value="POL">Poland</option>
	<option value="PRT">Portugal</option>
	<option value="PRI">Puerto Rico</option>
	<option value="QAT">Qatar</option>
	<option value="REU">Reunion</option>
	<option value="ROU">Romania</option>
	<option value="RUS">Russian Federation</option>
	<option value="RWA">Rwanda</option>
	<option value="BLM">Saint Barthélemy</option>
	<option value="SHN">Saint Helena, Ascension and Tristan da Cunha</option>
	<option value="KNA">Saint Kitts and Nevis</option>
	<option value="LCA">Saint Lucia</option>
	<option value="MAF">Saint Martin (French part)</option>
	<option value="SPM">Saint Pierre and Miquelon</option>
	<option value="VCT">Saint Vincent and the Grenadines</option>
	<option value="WSM">Samoa</option>
	<option value="SMR">San Marino</option>
	<option value="STP">Sao Tome and Principe</option>
	<option value="SAU">Saudi Arabia</option>
	<option value="SEN">Senegal</option>
	<option value="SRB">Serbia</option>
	<option value="SYC">Seychelles</option>
	<option value="SLE">Sierra Leone</option>
	<option value="SGP">Singapore</option>
	<option value="SXM">Sint Maarten (Dutch part)</option>
	<option value="SVK">Slovakia</option>
	<option value="SVN">Slovenia</option>
	<option value="SLB">Solomon Islands</option>
	<option value="SOM">Somalia</option>
	<option value="ZAF">South Africa</option>
	<option value="SGS">South Georgia and the South Sandwich Islands</option>
	<option value="SSD">South Sudan</option>
	<option value="ESP">Spain</option>
	<option value="LKA">Sri Lanka</option>
	<option value="SDN">Sudan</option>
	<option value="SUR">Suriname</option>
	<option value="SJM">Svalbard and Jan Mayen</option>
	<option value="SWZ">Swaziland</option>
	<option value="SWE">Sweden</option>
	<option value="CHE">Switzerland</option>
	<option value="SYR">Syrian Arab Republic</option>
	<option value="TWN">Taiwan, Province of China</option>
	<option value="TJK">Tajikistan</option>
	<option value="TZA">Tanzania, United Republic of</option>
	<option value="THA">Thailand</option>
	<option value="TLS">Timor-Leste</option>
	<option value="TGO">Togo</option>
	<option value="TKL">Tokelau</option>
	<option value="TON">Tonga</option>
	<option value="TTO">Trinidad and Tobago</option>
	<option value="TUN">Tunisia</option>
	<option value="TUR">Turkey</option>
	<option value="TKM">Turkmenistan</option>
	<option value="TCA">Turks and Caicos Islands</option>
	<option value="TUV">Tuvalu</option>
	<option value="UGA">Uganda</option>
	<option value="UKR">Ukraine</option>
	<option value="ARE">United Arab Emirates</option>
	<option value="GBR">United Kingdom</option>
	<option value="USA">United States</option>
	<option value="UMI">United States Minor Outlying Islands</option>
	<option value="URY">Uruguay</option>
	<option value="UZB">Uzbekistan</option>
	<option value="VUT">Vanuatu</option>
	<option value="VEN">Venezuela, Bolivarian Republic of</option>
	<option value="VNM">Viet Nam</option>
	<option value="VGB">Virgin Islands, British</option>
	<option value="VIR">Virgin Islands, U.S.</option>
	<option value="WLF">Wallis and Futuna</option>
	<option value="ESH">Western Sahara</option>
	<option value="YEM">Yemen</option>
	<option value="ZMB">Zambia</option>
	<option value="ZWE">Zimbabwe</option>
</select> </div>
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