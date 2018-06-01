<?php
/* 
* Template Name: Sign Up Template
*/
if(is_user_logged_in())
	{
		wp_redirect( site_url('wp-admin') );
		exit;
	}

 
get_header()
?>

 <div class="main-mid-section sign-up-page" data="section">
        <div class="container">
            <h2>Sign Up</h2>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="sign-up-cover">
                        <form id="SignUp" method="POST">
                        	<input type="hidden" name="lat">
                        	<input type="hidden" name="longs">
						<?php wp_nonce_field( 'Signup', 'SignUp_wpnonce',true,true ); ?>
                            <ul>
                                <li>
                                    <label>
                                        <input type="radio" checked name="user_type" value="1" ><span class="custom-radio"></span> Customer <img src="<?php echo get_template_directory_uri(); ?>/images/customer-icon.png"></label>
                                </li>
                                <li>
                                    <label>
                                        <input type="radio" name="user_type" value="2" ><span class="custom-radio"></span> Service Provider <img src="<?php echo get_template_directory_uri(); ?>/images/service-provider-icon.png"></label>
                                </li>
                            </ul>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
									<select class="form-control" name="title">
										<option value="">Select Title*</option>
										<option value="Mr">Mr</option>
										<option value="Mrs">Mrs</option>
										<option value="Ms">Ms</option>
										<option value="Miss">Miss</option>
										<option value="Dr">Dr</option>
									</select>
                                    </div>
                                </div>
                            </div>
                            
                          <?php echo do_shortcode('[SignUp_Cs]'); ?>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="submit" class="blue-btn" value="Sign Up">
                                </div>
                                
                                <div class="col-md-6 accept-checkbox">
                                    <label>
                                        <input name="term_conditions" type="checkbox" value="I_agreed">
                                        <span class="custom-checkbox"></span>
                                        
                                        I accept Lorem Ipsum is simply dummy <a href="#">terms and Condition</a> and typesetting industry. 
                                        
                                    </label>
                                </div>
                                
                            </div>
                               
                        </form>
                        
                        <div class="or-divider"> 
                            <div class="divider-cover">
                            <p>Or</p>
                            </div>
							<?php //do_action( 'wordpress_social_login' ); ?> 
                            <ul>
                                <li><a href="#" class="google-link"> <i class="fa fa-google" aria-hidden="true"></i> Sign up with Google </a></li>
                                
                                <li><a href="#" class="facebook-link"> <i class="fa fa-facebook" aria-hidden="true"></i> Sign up with Facebook </a></li>
                            </ul>
                            
                        </div>
                            
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>
 <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZHrvncNkxI08KsBZUrH-9GkIi3WDfzlc&libraries=places&callback=initAutocomplete"></script> -->