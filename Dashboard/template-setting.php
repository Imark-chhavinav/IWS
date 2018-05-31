<?php 
/*
* Template Name: Provider Setting Template
*/
$current_user = wp_get_current_user();

/*if( ! is_user_logged_in() ||  $current_user->roles[0] != 'provider')
{ 
	wp_redirect(site_url());
	exit;
} */
 $results = $Service->getprofile(); 
get_header('dashboard');?>
<div class="main">
        <div class="container-fluid contracts-outer">
           
            <h2>Settings</h2>             
            <div class="contracts-view-cover setting">
                <h2>Account Details</h2>
                 <a href="#" data-toggle="modal" data-target="#UpdateProfileModal" class="white-btn">Edit Details</a>
                 <table>
                        <tr>
                            <td>
                                <h5>First Name</h5>
                                <p><?php echo $results[0]->first_name; ?></p>
                            </td>
                            <td>
                                <h5>Last Name</h5>
                                <p><?php echo $results[0]->last_name; ?></p>
                            </td> 
                            <td>
                                <h5>Email Address</h5>
                                <p><?php echo $results[0]->email; ?></p>
                            </td>
                        </tr>
                     
                     <tr>
                            <td>
                                <h5>Business Name</h5>
                                <p><?php echo $results[0]->business_number; ?></p>
                            </td>
                            <td>
                                <h5>Contact Number</h5>
                                <p><?php echo $results[0]->phone_number; ?></p>
                            </td> 
                            <td>
                                <h5>Address</h5>
                                <p><?php echo $results[0]->street_address; ?>,<?php echo $results[0]->suburb; ?></p>
                            </td>
                        </tr>
                     
                      <tr>
                            <td>
                                <h5>Location</h5>
                                <p><?php echo $results[0]->state; ?></p>
                            </td>
                            <td>
                                <h5>Country</h5>
                                <p><?php echo $results[0]->country; ?></p>
                            </td> 
                            <td>
                               
                            </td>
                        </tr>
                     
                     <tr>
                            <td>
                                <h5>Password</h5>
                                <p>........</p>
                          
                            </td> 
                            <td colspan="2" >
                                <a href="#" data-toggle="modal" data-target="#UpdatePasswordModal" class="white-btn">Change Password</a>
                            </td> 
                            
                        </tr>
                        
                      
                        
                    </table>
                
              
                
            </div>
        
        </div>
    </div>
    

<?php get_footer('dashboard'); ?>
<?php echo do_shortcode('[UpdatePassword]'); ?>
<?php echo do_shortcode('[UpdateProfile]'); ?>


    <script> 
     var placeSearch, autocomplete , autocomplete2;
      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']}); 
        

            
        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
        //autocomplete2.addListener('place_changed', fillInAddress2);
      }

      function fillInAddress() 
      {
        
        var place = autocomplete.getPlace();
       /* $( 'input[name="city"]' ).val("");
        $("#state").val("");
        $( 'input[name="postcode"]' ).val("");
        $( 'input[name="lat"]' ).val("");
        $( 'input[name="longs"]' ).val("");*/

        $( place.address_components ).each(function( item , value )
            {
                
                    /* City */
                if( value.types[0] == 'administrative_area_level_2' )
                {
                    $( 'input[name="suburb"]' ).val(value.long_name);
                }

                    /* State */ 
                 if( value.types[0] == 'administrative_area_level_1' )
                {
                    $("input[name='state']").val(value.short_name);
                }

                /* postcode */  

                if( value.types[0] == 'postal_code' )               
                {
                    $( 'input[name="postcode"]' ).val(value.long_name);
                }               


            });

        $( 'input[name="lat"]' ).val(place.geometry.location.lat());
        $( 'input[name="longs"]' ).val(place.geometry.location.lng());
        
        
      }
      
      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
    </script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZHrvncNkxI08KsBZUrH-9GkIi3WDfzlc&libraries=places&callback=initAutocomplete"></script>