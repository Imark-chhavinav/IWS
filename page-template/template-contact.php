<?php
/*
*	Template Name: Contact Us Page Template
*/
get_header();?>
<?php while ( have_posts() ) : the_post(); ?>
<?php $fields = get_fields();  //print_R($fields); ?>
<div class="main-mid-section contact-page" data="section">
        <div class="container">
            <h2>Contact</h2>
            <div class="row">
                <div class="col-md-7">
                    <div class="contact-form-cover">
                       <?php the_content(); ?>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-1 col-sm-5 col-xs-12">
                    <div class="contact-details">
                        <ul>					
                            <li><i class="fa fa-mobile" aria-hidden="true"></i> <a href="tel:+<?php echo $fields['contact_us_contact_number']; ?>">+<?php echo $fields['contact_us_contact_number']; ?></a></li>
                            
                            <li><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:<?php echo $fields['contact_us_email_id']; ?>"><?php echo $fields['contact_us_email_id']; ?></a></li>
                            
                            <li><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $fields['contact_us_address']['address']; ?></li>
                            
                        </ul>
                        
                        <div class="map-cover">
                        <?php  if( !empty($fields['contact_us_address']) ):	?>
							<div class="acf-map">
								<div class="marker" data-lat="<?php echo $fields['contact_us_address']['lat']; ?>" data-lng="<?php echo $fields['contact_us_address']['lng']; ?>"></div>
							</div>
						<?php endif; ?>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    
    
    </div>
    
<?php endwhile; ?>
<?php get_footer(); ?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAahT6o0c69st0dS0Z1HtHDgqIN4W0NEOI"></script>
<script type="text/javascript">
(function($) {

/*
*  new_map
*
*  This function will render a Google Map onto the selected jQuery element
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$el (jQuery element)
*  @return	n/a
*/

function new_map( $el ) {
	
	// var
	var $markers = $el.find('.marker');
	
	
	// vars
	var args = {
		zoom		: 16,
		center		: new google.maps.LatLng(0, 0),
		mapTypeId	: google.maps.MapTypeId.ROADMAP
	};
	
	
	// create map	        	
	var map = new google.maps.Map( $el[0], args);
	
	
	// add a markers reference
	map.markers = [];
	
	
	// add markers
	$markers.each(function(){
		
    	add_marker( $(this), map );
		
	});
	
	
	// center map
	center_map( map );
	
	
	// return
	return map;
	
}

/*
*  add_marker
*
*  This function will add a marker to the selected Google Map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$marker (jQuery element)
*  @param	map (Google Map object)
*  @return	n/a
*/

function add_marker( $marker, map ) {

	// var
	var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

	// create marker
	var marker = new google.maps.Marker({
		position	: latlng,
		map			: map
	});

	// add to array
	map.markers.push( marker );

	// if marker contains HTML, add it to an infoWindow
	if( $marker.html() )
	{
		// create info window
		var infowindow = new google.maps.InfoWindow({
			content		: $marker.html()
		});

		// show info window when marker is clicked
		google.maps.event.addListener(marker, 'click', function() {

			infowindow.open( map, marker );

		});
	}

}

/*
*  center_map
*
*  This function will center the map, showing all markers attached to this map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	map (Google Map object)
*  @return	n/a
*/

function center_map( map ) {

	// vars
	var bounds = new google.maps.LatLngBounds();

	// loop through all markers and create bounds
	$.each( map.markers, function( i, marker ){

		var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

		bounds.extend( latlng );

	});

	// only 1 marker?
	if( map.markers.length == 1 )
	{
		// set center of map
	    map.setCenter( bounds.getCenter() );
	    map.setZoom( 16 );
	}
	else
	{
		// fit to bounds
		map.fitBounds( bounds );
	}

}

/*
*  document ready
*
*  This function will render each map when the document is ready (page has loaded)
*
*  @type	function
*  @date	8/11/2013
*  @since	5.0.0
*
*  @param	n/a
*  @return	n/a
*/
// global var
var map = null;

$(document).ready(function(){

	$('.acf-map').each(function(){

		// create map
		map = new_map( $(this) );

	});

});

})(jQuery);
</script>