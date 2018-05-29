<?php
/* 
* Template Name: Customer Profile Template
*/
$current_user = wp_get_current_user();

if( ! is_user_logged_in() ||  $current_user->roles[0] != 'customer')
{ 
	wp_redirect(site_url());
	exit;
} 
get_header()
?> 
<?php 

global $wpdb;
$results = $wpdb->get_results( 'SELECT id,user_id,first_name,last_name,username,phone_number,apartment_number,street_address,suburb,state,post_code,email,title,profile_image,country,about_me,business_number,abn,user_type FROM '.$wpdb->prefix.'registration WHERE user_id ='.$current_user->ID, OBJECT );

//print_R($results);
?>
 <div class="main-mid-section customer-profile-page" data="section">
        <div class="container">
            <div class="text-center">
                <h2>Customer Profile</h2> </div>
            <div class="customer-profile-cover">
                <div class="customer-profile-pic">
                    <figure style="background-image: url(../images/user-profile-pic-large.jpg);"></figure>
                    <h3><?php echo $results[0]->first_name.' '.$results[0]->last_name; ?></h3>
                    <p>Marketing Manager</p>
                    <ul class="customer-contact-details">
                        <li><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:<?php echo trim($results[0]->phone_number); ?>"><?php echo $results[0]->phone_number; ?></a></li>
                        <li><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:<?php echo trim($results[0]->email); ?>"><?php echo trim($results[0]->email); ?></a></li>
                    </ul>
                    <div class="location">
                        <p><?php echo trim($results[0]->state); ?>, <?php echo trim($results[0]->country); ?></p>
                    </div>
                </div>
                <div class="customer-about-me">
                    <h4>About Me</h4>                   
                   <?php echo wpautop($results[0]->about_me); ?>
                    <!--<div class="more-content" style="display:none;">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took when an unknown printer too. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took when an unknown been the industry's standard dummy text ever since the 1500s, when an unknown printer took when an unknown.</p>
                    </div><div class="text-right"> <a href="javascript:void(0)" class="view-more-link">View more </a> </div>-->
                    
                </div>
                <div class="bids-events-tab">
                    <ul class="nav nav-tabs">
                        
                        <li class="active"><a data-toggle="tab" href="#events">Events</a></li>
                    </ul>
                    <div class="tab-content">
                         <div id="events" class="tab-pane fade in active">
                            <h4>Upcoming Events</h4>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="event-post">
                                        <figure style="background-image:url('../images/event-img.jpg');"></figure>
                                        <h5><a href="#">Birthday</a></h5>
                                        <div class="location">
                                            <p>Sydney, Australia</p>
                                        </div>
                                        <div class="date">
                                            <p>12-5-2017</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="event-post">
                                        <figure style="background-image:url('../images/event-img.jpg');"></figure>
                                        <h5><a href="#">Birthday</a></h5>
                                        <div class="location">
                                            <p>Sydney, Australia</p>
                                        </div>
                                        <div class="date">
                                            <p>12-5-2017</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="event-post">
                                        <figure style="background-image:url('../images/event-img.jpg');"></figure>
                                        <h5><a href="#">Birthday</a></h5>
                                        <div class="location">
                                            <p>Sydney, Australia</p>
                                        </div>
                                        <div class="date">
                                            <p>12-5-2017</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="event-post">
                                        <figure style="background-image:url('../images/event-img.jpg');"></figure>
                                        <h5><a href="#">Birthday</a></h5>
                                        <div class="location">
                                            <p>Sydney, Australia</p>
                                        </div>
                                        <div class="date">
                                            <p>12-5-2017</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="event-divider"></div>
                            <h4>Past Events</h4>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="event-post">
                                        <figure style="background-image:url('../images/event-img.jpg');"></figure>
                                        <h5><a href="#">Birthday</a></h5>
                                        <div class="location">
                                            <p>Sydney, Australia</p>
                                        </div>
                                        <div class="date">
                                            <p>12-5-2017</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="event-post">
                                        <figure style="background-image:url('../images/event-img.jpg');"></figure>
                                        <h5><a href="#">Birthday</a></h5>
                                        <div class="location">
                                            <p>Sydney, Australia</p>
                                        </div>
                                        <div class="date">
                                            <p>12-5-2017</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="event-post">
                                        <figure style="background-image:url('../images/event-img.jpg');"></figure>
                                        <h5><a href="#">Birthday</a></h5>
                                        <div class="location">
                                            <p>Sydney, Australia</p>
                                        </div>
                                        <div class="date">
                                            <p>12-5-2017</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="event-post">
                                        <figure style="background-image:url('../images/event-img.jpg');"></figure>
                                        <h5><a href="#">Birthday</a></h5>
                                        <div class="location">
                                            <p>Sydney, Australia</p>
                                        </div>
                                        <div class="date">
                                            <p>12-5-2017</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>