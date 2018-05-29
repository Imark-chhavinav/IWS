<?php
/* 
* Template Name: Create Job Template
*/
$current_user = wp_get_current_user();

if( ! is_user_logged_in() ||  $current_user->roles[0] != 'customer')
{ 
	wp_redirect(site_url());
	exit;
} 
get_header()
?>
<div class="main-mid-section event-req-page" data="section">
        <div class="container">
            <div class="text-center">
                <h2>Create Job</h2> 
            </div>
            <form id="CreateJob" method="POST">			
			<input type="hidden" name="nonce" value="<?php wp_create_nonce( 'create_job'); ?>">
			<input type="hidden" name="user_id" value="<?php echo get_current_user_id(); ?>">
            <div class="event-req-form-cover">
                <div class="row">
                   
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="event_name" placeholder="Event Name">
                        </div>
                    </div>
                    
                    
                    <div class="col-md-6">
                        <div class="form-group">
                       
                             <select name="service_type" class="form-control">
                                <option value="" >Service Type</option>
                                <option value="1">Catering</option>
                                <option value="2">Venue</option>
                                <option value="3">Venue with Catering</option>
                               
                            </select>
                        </div>
                    </div>  
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                <input type="text" name="event_date" class="form-control datepicker" placeholder="Event Date">
                                </div>
                            </div>
							<div class="col-md-6">
                                <div class="form-group">
                                <input type="text" name="event_time" class="form-control" placeholder="Event Time">
                                </div>
                            </div>
                            
                             
                        </div>
                      
                    </div>
					 <div class="col-md-6">
						<div class="form-group">
							   <select name="event_type" class="form-control">
									<option>Event Type</option>
									<option>Birthday</option>
								</select>
							</div>
                        </div>
                    
                      <div class="col-md-6">
                                <div class="form-group">
                                <input type="text" class="form-control" name="venue_location" placeholder="Venue Location">
                                </div>
                            </div>
                            
                             <div class="col-md-6">
                                 <div class="form-group">
                                <input type="text" class="form-control" name="proximity_location" placeholder="Proximity to Location">
                                 </div>
                            </div>       
                    
                   
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Description of Event Requirement"></textarea>
                        </div>
                    </div>
                    
                     <div class="col-md-6">
                        <div class="form-group">
                           <input type="text" class="form-control" name="catering_location" placeholder="Catering Location ">
                        </div>
                    </div> 	
					
					
					<div class="col-md-6">
                        <div class="form-group">
                           <input type="number" class="form-control" name="number_guest" placeholder="Number of People Attending">
                        </div>
                    </div>
					
					 
                            
                       
					<div class="col-md-12">
                        <div class="form-group">
                            <textarea class="form-control short-height" name="allergies" placeholder="Food Allergies (Add Multiple)"></textarea>
                        </div>
                    </div>
					 <div class="col-md-12">
                        <div class="form-group">
                            <textarea class="form-control short-height" name="catering_requirement" placeholder="Catering Requirements"></textarea>
                        </div>
                    </div> 
					
					<div class="col-md-12">
                        <div class="form-group">
                            <textarea class="form-control short-height" name="venue_requirement" placeholder="Venue Requirements "></textarea>
                        </div>
                    </div>
					<div class="col-md-12">
                        <div class="form-group">
                            <textarea class="form-control short-height" name="other_requirement" placeholder="Other Requirements"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                                 <div class="form-group">
                                <input type="text" name="bidding_Enddate" class="form-control datepicker" placeholder="Bidding End Date">
                                 </div>
                            </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <select name="other_bidders" class="form-control">
                                <option>Open to other bidders</option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <input type="submit" class="blue-btn" value="Submit">
                    </div>
                    
                    
                </div>
            </div>
            </form>
            
        </div>
    </div>
<?php get_footer(); ?>