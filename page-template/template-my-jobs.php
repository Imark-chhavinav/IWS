<?php
/* 
* Template Name: Customer My Jobs Template
*/
$current_user = wp_get_current_user();

if( ! is_user_logged_in() ||  $current_user->roles[0] != 'customer')
{ 
	wp_redirect(site_url());
	exit;
} 
get_header()
?> 
  <div class="main-mid-section customer-profile-page" data="section">
        <div class="container">
            <div class="text-center">
                <h2>My Jobs</h2> </div>
				<?php	global $wpdb; ?>
				<?php
				
				$pending  	='Select * from '.$wpdb->prefix.'events WHERE status = 1 ORDER BY updated_on';
				$progress 	='Select * from '.$wpdb->prefix.'events WHERE status = 2 ORDER BY updated_on';
				$completed 	='Select * from '.$wpdb->prefix.'events WHERE status = 3 ORDER BY updated_on';				
					
				?>	
            <div class="customer-profile-cover my-jobs-page">
                <div class="bids-events-tab">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#pending">Pending</a></li>
                        <li><a data-toggle="tab" href="#progress">In Progress</a></li>
                        <li><a data-toggle="tab" href="#completed">Completed</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="pending" class="tab-pane fade in active">
                            <div class="job-listing-cover">
							<?php 
							$results = $wpdb->get_results( $pending , OBJECT);
							$wpdb->flush();
							$pendingArticle = '';
							
							if( !empty($results) ):
							foreach( $results as $keys ):
								$Description = '';
							if( $keys->service_type == 3 )	//both
							{
								$Description .= wpautop($keys->catering_requirement);
								$Description .= wpautop($keys->venue_requirement);
								//$Description .= wpautop($keys->other_requirement);
							}
							elseif( $keys->service_type == 2  ) //venue
							{
								$Description .= wpautop($keys->venue_requirement);
								//$Description .= wpautop($keys->other_requirement);
							}
							elseif( $keys->service_type == 1  )	//Catering
							{
								$Description .= wpautop($keys->catering_requirement);				
								//$Description .= wpautop($keys->other_requirement);
							}
							$stringCut = substr($Description, 0, 200);
							
							$pendingArticle .= '<article>
                                    <h3>'.$keys->event_name.'</h3>
                                    <ul class="time-details">
                                        <li><i cla	ss="fa fa-calendar-o" aria-hidden="true"></i>'.$keys->event_date.'</li>
                                        <li><i class="fa fa-clock-o" aria-hidden="true"></i>'.$keys->event_time.'</li>
                                    </ul> 
									'.$stringCut.'		
                                    <ul class="pd-btn-group">                                        
                                        <li><a href="#" class="pd-btn pd-white-btn">View job</a></li>
                                        <li><a href="#" class="pd-btn pd-white-btn">View Bids</a></li>
                                    </ul>
                                </article>';
							endforeach;
							echo $pendingArticle;
							else:
							echo "<article><p>No Job Till Now</p></article>";
							endif;
							?>
							</div>
                        </div>
                    
                        <div id="progress" class="tab-pane fade">
                            <div class="job-listing-cover">
							<?php 
							$results = $wpdb->get_results( $progress , OBJECT);
							$wpdb->flush();	
							$progressArticle = '';
							
							if( !empty($results) ):
							foreach( $results as $keys ):
								$Description = '';
							if( $keys->service_type == 3 )	//both
							{
								$Description .= wpautop($keys->catering_requirement);
								$Description .= wpautop($keys->venue_requirement);
								//$Description .= wpautop($keys->other_requirement);
							}
							elseif( $keys->service_type == 2  ) //venue
							{
								$Description .= wpautop($keys->venue_requirement);
								//$Description .= wpautop($keys->other_requirement);
							}
							elseif( $keys->service_type == 1  )	//Catering
							{
								$Description .= wpautop($keys->catering_requirement);				
								//$Description .= wpautop($keys->other_requirement);
							}
							$stringCut = substr($Description, 0, 200);
							
							$progressArticle .= '<article>
                                    <h3>'.$keys->event_name.'</h3>
                                    <ul class="time-details">
                                        <li><i cla	ss="fa fa-calendar-o" aria-hidden="true"></i>'.$keys->event_date.'</li>
                                        <li><i class="fa fa-clock-o" aria-hidden="true"></i>'.$keys->event_time.'</li>
                                    </ul> 
									'.$stringCut.'		
                                    <ul class="pd-btn-group">                                        
                                        <li><form method="POST" action="'.site_url("/customer/").'"><a href="#" class="pd-btn pd-white-btn">View job</a></li>
                                        <li><a href="#" class="pd-btn pd-white-btn">View Contract</a></li>
                                    </ul>
                                </article>';
							endforeach;
							echo $progressArticle;
							else:
							echo "<article><p>No Job Till Now</p></article>";
							endif;	
							?>
                            </div>
                        </div>

                         <div id="completed" class="tab-pane fade">
                            <div class="job-listing-cover">
							<?php 
							$results = $wpdb->get_results( $completed , OBJECT);
							$wpdb->flush();		
							$completedArticle = '';
							
							if( !empty($results) ):
							foreach( $results as $keys ):
								$Description = '';
							if( $keys->service_type == 3 )	//both
							{
								$Description .= wpautop($keys->catering_requirement);
								$Description .= wpautop($keys->venue_requirement);
								//$Description .= wpautop($keys->other_requirement);
							}
							elseif( $keys->service_type == 2  ) //venue
							{
								$Description .= wpautop($keys->venue_requirement);
								//$Description .= wpautop($keys->other_requirement);
							}
							elseif( $keys->service_type == 1  )	//Catering
							{
								$Description .= wpautop($keys->catering_requirement);				
								//$Description .= wpautop($keys->other_requirement);
							}
							$stringCut = substr($Description, 0, 200);
							
							$completedArticle .= '<article>
                                    <h3>'.$keys->event_name.'</h3>
                                    <ul class="time-details">
                                        <li><i cla	ss="fa fa-calendar-o" aria-hidden="true"></i>'.$keys->event_date.'</li>
                                        <li><i class="fa fa-clock-o" aria-hidden="true"></i>'.$keys->event_time.'</li>
                                    </ul> 
									'.$stringCut.'		
                                    <ul class="pd-btn-group">                                        
                                        <li><a href="#" class="pd-btn pd-white-btn">View job</a></li>
                                        <li><a href="#" class="pd-btn pd-white-btn">View Contract</a></li>
                                    </ul>
                                </article>';
							endforeach;
							echo $completedArticle;
							else:
							echo "<article><p>No Job Till Now</p></article>";
							endif;	
							?>
                               
                            </div>
                        </div>
                       
                    
                    </div>
                </div>
            </div>
        </div>
    </div>




<?php get_footer(); ?>