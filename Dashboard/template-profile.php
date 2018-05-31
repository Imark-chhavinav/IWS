<?php 
/*
* Template Name: Provider Profile Template
*/
$current_user = wp_get_current_user();

/*if( ! is_user_logged_in() ||  $current_user->roles[0] != 'provider')
{ 
	wp_redirect(site_url());
	exit;
} */
$results = $Service->getprofile(); pre($results);
$AboutMe = trim( $results[0]->about_me );
$CuisineType = explode( ',' ,trim( $results[0]->cuisine_type ));
get_header('dashboard');?>
<div class="main">
        <div class="container-fluid contracts-outer profile-edit-page">
           <h2>Profile</h2>            
             <a href="#" class="white-btn top-edit-btn">Edit</a>           
            <div class="customer-profile-cover">
                
                <div class="customer-about-me">
                    <?php if( empty( $AboutMe ) ): ?>
                        <a href="javascript:void(0)" class="white-btn top-edit-btn desc-edit">Add Description</a>
                    <?php endif; ?>

                    <?php 
                        if( !empty( $AboutMe ) ):
                            echo  $AboutMe;
                        endif;
                    ?>
                    <?php if( !empty( $AboutMe ) ): ?>
                        <a href="javascript:void(0)" class="white-btn desc-edit">Edit</a>
                    <?php endif; ?>
                    <div id="desc-edit" class="hidden">
                        <textarea name="about_me" class="form-control"> 
                            <?php if( !empty( $AboutMe ) ): echo  trim($AboutMe); endif; ?>
                        </textarea>
                        <a href="javascript:void(0)" class="btn desc-save">Save </a>       
                    </div>             
                </div>
                
                <div class="provider-list">
                    <ul>
                        <li>
                            <h4>Cuisine Types Provided</h4>
                            <div id="cusin-type" class="provider-list-cloud">
                                <?php 
                                foreach( $CuisineType as $Type ):
                                    echo ' <a href="javascript:void(0)">'.$Type.'</a>';
                                endforeach;
                                ?>
                            </div>
                            <input type="hidden" name="cuisine_type" class="form-control" value="<?php echo $results[0]->cuisine_type;  ?>">
                            <a href="javascript:void(0)" class="white-btn cusin-type">Edit</a>
                            <a href="javascript:void(0)" class="white-btn cuisine-save hidden">Save</a>
                        </li>
                        
                        <li>
                            <h4>Popular Dishes</h4>
                            <div class="provider-list-cloud">
                                <a href="#">Lorem ipsume</a>
                                <a href="#">Lorem ipsume</a>
                                <a href="#">Lorem ipsume</a>
                                <a href="#">Lorem ipsume</a>
                                
                            </div>  
                            
                             <a href="#" class="white-btn">Edit</a>
                        
                        </li>
                        
                        <li>
                            <h4>Catering Capacity</h4>
                            <p>200  Maximum</p>
                            
                             <a href="#" class="white-btn">Edit</a>
                        </li>
                        
                        <li>
                            <h4>Size of Venue</h4>
                            <p>2000</p>
                            
                             <a href="#" class="white-btn">Edit</a>
                        </li>
                        
                        
                    </ul>
                </div>
                
                
                <div class="customer-about-me">
                    <h4>Venue Description</h4>
                    <p>Hello There</p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took when an unknown printer too. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took when an unknown been the industry's standard dummy text ever since the 1500s, when an unknown printer took when an unknown.</p>
                    
                     <a href="#" class="white-btn">Edit</a>
                    
                </div>
                
                <div class="accessibility-venue">
                    <h4>Accessibility of Venue</h4>
                    <ul>
                        <li><img src="../images/wheelchair-icon.png"></li>
                        <li><img src="../images/fire-extinguisher-icon.png"></li>
                        <li><img src="../images/lift-icon.png"></li>
                    </ul>
                
                     <a href="#" class="white-btn">Edit</a>
                </div>
                
                <div class="provider-gallery">
                    <h4>Gallery</h4>
                    
                    <div class="row">
                        <div class="col-md-3">
                            <div class="provider-gallery-cover">
                                <div>
                                <figure style="background-image:url('../images/event-img.jpg');">
                                </figure>
                                    <a href="#" class="white-btn">Edit</a>
                                </div>
                                <p><a href="#">Birthday</a></p>
                            </div>
                        </div>
                        
                        <div class="col-md-3">
                            <div class="provider-gallery-cover">
                                <div>
                                <figure style="background-image:url('../images/event-img.jpg');">
                                </figure>
                                    <a href="#" class="white-btn">Edit</a>
                                </div>
                                <p><a href="#">Birthday</a></p>
                            </div>
                        </div>
                        
                        <div class="col-md-3">
                            <div class="provider-gallery-cover">
                                <div>
                                <figure style="background-image:url('../images/event-img.jpg');">
                                </figure>
                                    <a href="#" class="white-btn">Edit</a>
                                </div>
                                <p><a href="#">Birthday</a></p>
                            </div>
                        </div>
                        
                        <div class="col-md-3">
                            <div class="provider-gallery-cover">
                                <div>
                                <figure style="background-image:url('../images/event-img.jpg');">
                                </figure>
                                    <a href="#" class="white-btn">Edit</a>
                                </div>
                                <p><a href="#">Birthday</a></p>
                            </div>
                        </div>
                        
                        <div class="col-md-3">
                            <div class="provider-gallery-cover">
                                <div>
                                <figure style="background-image:url('../images/event-img.jpg');">
                                </figure>
                                    <a href="#" class="white-btn">Edit</a>
                                </div>
                                <p><a href="#">Birthday</a></p>
                            </div>
                        </div>
                        
                        <div class="col-md-3">
                            <div class="provider-gallery-cover">
                                <div>
                                <figure style="background-image:url('../images/event-img.jpg');">
                                </figure>
                                    <a href="#" class="white-btn">Edit</a>
                                </div>
                                <p><a href="#">Birthday</a></p>
                            </div>
                        </div>
                        
                        <div class="col-md-3">
                            <div class="provider-gallery-cover">
                                <div>
                                <figure style="background-image:url('../images/event-img.jpg');">
                                </figure>
                                    <a href="#" class="white-btn">Edit</a>
                                </div>
                                <p><a href="#">Birthday</a></p>
                            </div>
                        </div>
                        
                        <div class="col-md-3">
                            <div class="provider-gallery-cover">
                                <div>
                                <figure style="background-image:url('../images/event-img.jpg');">
                                </figure>
                                    <a href="#" class="white-btn">Edit</a>
                                </div>
                                <p><a href="#">Birthday</a></p>
                            </div>
                        </div>
                        
                    </div>
                    
                     <a href="#" class="white-btn"><i class="fa fa-upload" aria-hidden="true"></i> Upload</a>
                    
                </div>
                
                
                
            <div class="review-list">
                                <h4>Reviews</h4>
                                <article>
                                    <div class="review-name">
                                        <h5>James Andrew</h5>
                                        <p>20/12/2016 (12:00 PM)</p>
                                        <ul>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        </ul>
                                    </div>
                                    <div class="review-text">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took when an unknown printer too. Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </div>
                                </article>
                                <article>
                                    <div class="review-name">
                                        <h5>James Andrew</h5>
                                        <p>20/12/2016 (12:00 PM)</p>
                                        <ul>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        </ul>
                                    </div>
                                    <div class="review-text">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took when an unknown printer too. Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </div>
                                </article>
                                <article>
                                    <div class="review-name">
                                        <h5>James Andrew</h5>
                                        <p>20/12/2016 (12:00 PM)</p>
                                        <ul>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        </ul>
                                    </div>
                                    <div class="review-text">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took when an unknown printer too. Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </div>
                                </article>
                            </div>
                        
            
            </div>
      
    
        </div>
    </div>
<?php get_footer('dashboard'); ?>

