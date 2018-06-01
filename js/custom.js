$('.owl-testi-carousel').owlCarousel({
    loop: true,
    margin: 0,
    nav: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
});


jQuery(document).ready(function() {	
	
    var scntDiv = $('#accReq');
    var i = $('#accReq .form-group').size() + 1;

    $('#addScnt').on('click', function() {
        $('<div class="form-group"><input type="text" class="form-control" id="' + i + '"> <a href="#" id="remScnt"></a></div> ').appendTo(scntDiv);
        i++;
        return false;
    });

    jQuery(document).on('click', '#remScnt', function() {
        if (i > 2) {
            $(this).parent().remove();
            i--;
        }
        return false;
    });


    $(function() {
        $(".datepicker").datepicker();
    });




    $(".customer-about-me .view-more-link").click(function() {
        $(".more-content").slideToggle();

        $(".customer-about-me .view-more-link").toggleClass("clicked");
        jQuery(".customer-about-me .view-more-link").html(jQuery(".view-more-link").text() == 'View less' ? 'View more' : 'View less');

        jQuery("html, body").animate({
                scrollTop: jQuery(".customer-about-me").offset().top - 20
            },
            'slow');
        return false;


    });
	
	
	/* Sign Up Form Show hide Fields on user_type */
	
	$("input[name='user_type']").on('change', function(){
       
		if($(this).val() == 2)
		{
			$('.service_select').show();
			$('input[name="business_name"]').prop('disabled',false);
			$('input[name="abn"]').prop('disabled',false);
			
		}
		else
		{
			$('.service_select').hide();
			$('input[name="business_name"]').prop('disabled',true);
			$('input[name="abn"]').prop('disabled',true);
		}
      });
     /* Form Validations */
	
	/* SignUp Form */	
	if($("#SignUp").length > 0)
	{
		function getRole() 
		{
			return $("#SignUp").find("input[name=user_type]:checked").val();
		}
		
		
		
		$("#SignUp").validate({
		   rules: {
			title:			{  required:true },
			user_type:		{  required:true },
			term_conditions:		{  required:true },
			first_name:		{  required:true },
			last_name:		{  required:true },
			email:			{  required:true },
			emailConfirm: 	{  required:true, equalTo :"input[name='email']" },       
			password: 	 	{  required:true },       
			passwordConfirm: {  required:true, equalTo :"input[name='password']" },        
			username:		{  required:true },
			phone_number:	{  required:true, minlength: 10, maxlength: 15 },
			street_address:	{  required:true },
			suburb:			{  required:true },
			state:			{  required:true },
			postcode:		{  required:true },
			country:		{  required:true },
			business_name: 	{
								required: function(element) 
								{
									return (getRole() == 2);
								}
							}
		   },
		   messages: {
			passwordConfirm: { equalTo: 'Confirm Password Does not Match !' }
				 
		   },
		 submitHandler: function() {
					 $.ajax({
						type:"POST",
						url:cs_user.url+'userRegistration',
						dataType : 'json',
						data:$("#SignUp").serialize(),
						success:function(res)
						{
							 if( res.success == 0 )
							{
								/*$.each(res.result, function(key, value) 
								{
									toastr.error( res.result, 'Error!');
								}); */
								toastr.error( res.result, 'Error!');
							} 

							if( res.code == 'error' )
							{
								$.each(res.message, function(key, value) 
								{
									toastr.error( value, 'Error!');
								}); 								
							} 
							
						}			
					})
					
			}	
		});
	}
	
	/* End SignUp Form Validation */
	
	/* SignIn Form */
	if( $("#SignIn").length > 0 )
	{
		$("#SignIn").validate({
		   rules: {
			username_email:	{  required:true },
			password:		{  required:true }			
		   },		   
		 submitHandler: function() {
					 $.ajax({
						type:"POST",
						url:cs_user.url+'login',
						dataType : 'json',
						data:$("#SignIn").serialize(),
						success:function(res)
						{
							if( res.status == 'error' )
							{
								toastr.error( res.message, 'Error!'); 
							}
							if( res.status == 'success' )
							{
								toastr.success( res.message, 'Success'); 
								window.location = res.extra;
							}
							
							
						}			
					})
					
			}	
		});
	}
	/* End SignIn Form Validation */
	
	
	/* Creating a Job */

	$( '#service_type' ).change(function()
	{
		var Id = $(this).val();
		if( Id == 1 )
		{
			// Catering
			$('.cat_req').removeClass( 'hidden' );
			$('.venue_req').addClass( 'hidden' );
		}
		else if( Id == 2 )
		{
			//Venue
			$('.venue_req').removeClass( 'hidden' );
			$('.cat_req').addClass( 'hidden' );
		}
		else if( Id == 3 )
		{
			//Venue and catering
			$('.cat_req').removeClass( 'hidden' );
			$('.venue_req').removeClass( 'hidden' );
		}

	});

	if( $("#CreateJob").length > 0 )
	{     
		$("#CreateJob").validate({
		   rules: {
			event_name:		{  required:true },
			service_type:	{  required:true },			
			event_date:		{  required:true , date: true },			
			event_time:		{  required:true , time:true },			
			number_guest:	{  required:true },			
			bidding_Enddate:{  required:true , date: true },					
			proximity_location:{  required:true ,  number: true },
			venue_location: {
								required: function(element) 
								{
									return ( $( '#service_type' ).val() == 2 || $( '#service_type' ).val() == 3);
								}
							},
			proximity_location: {
								required: function(element) 
								{
									return ( $( '#service_type' ).val() == 2 || $( '#service_type' ).val() == 3);
								}
							},
			catering_location: {
								required: function(element) 
								{
									return ( $( '#service_type' ).val() == 1 || $( '#service_type' ).val() == 3);
								}
							},
			catering_requirement: {
								required: function(element) 
								{
									return ( $( '#service_type' ).val() == 1 || $( '#service_type' ).val() == 3);
								}
							},
			venue_requirement: {
								required: function(element) 
								{
									return ( $( '#service_type' ).val() == 2 || $( '#service_type' ).val() == 3);
								}
							},			
		   },		   
		 submitHandler: function() {
					 $.ajax({
						type:"POST",
						url:cs_jobs.url+'createJob',
						dataType : 'json',
						data:$("#CreateJob").serialize(),
						success:function(res)
						{							
							if( res.status == 'error' )
							{
								toastr.error( res.message, 'Error!'); 
							}
							if( res.status == 'success' )
							{
								toastr.success( res.message, 'Success'); 
							}							
						}			
					})
					
			}	
		});
	}


	/* Update Password */

	if( $("#UpdatePassword").length > 0 )
	{
		$("#UpdatePassword").validate({
		   rules: {
			previous_pass:	{  required:true },
			new_pass:		{  required:true , min: 6 },
			confirm_pass:	{  required:true , equalTo: "#new_pass" },
			user_id:		{  required:true }			
		   },		   
		 submitHandler: function() {
					 $.ajax({
						type:"POST",
						url:cs_user.url+'ResetPassword',
						dataType : 'json',
						data:$("#UpdatePassword").serialize(),
						success:function(res)
						{
							if( res.status == 'error' )
							{
								toastr.error( res.message, 'Error!'); 
							}
							if( res.status == 'success' )
							{
								toastr.success( res.message, 'Success'); 
								location.reload();
							}
							
							
						}			
					})
					
			}	
		});
	}


	/*Update Profile*/

	if($("#UpdateProfile").length > 0)
	{
		function getRole() 
		{
			return $("#UpdateProfile").find("input[name=user_type]").val();
		}
		
			
		$("#UpdateProfile").validate({
		   rules: {
			user_id:		{  required:true },
			title:			{  required:true },
			first_name:		{  required:true },
			last_name:		{  required:true },			
			phone_number:	{  required:true, minlength: 10, maxlength: 15 },
			street_address:	{  required:true },
			suburb:			{  required:true },
			state:			{  required:true },
			postcode:		{  required:true },
			country:		{  required:true },
			business_name: 	{
								required: function(element) 
								{
									return (getRole() == 2);
								}
							}
		   },		  
		 submitHandler: function() {

		 		var fd = new FormData();			
					$.each($("#UpdateProfile").serializeArray(), function (i, field) 
					{
						fd.append(field.name, field.value);				
					});	
					
					fd.append('profilePic', $('#profilePic')[0].files[0]);

					 $.ajax({
						type:"POST",
						url:cs_user.url+'UpdateProfile',
						dataType : 'json',
						data:fd,
						processData: false,
						contentType: false,
						//data:$("#UpdateProfile").serialize(),
						success:function(res)
						{
							 if( res.code == 'error' )
							{
								$.each(res.message, function(key, value) 
								{
									toastr.error( value, 'Error!');
								}); 
							} 
							if( res.status == 'success' )
							{
								toastr.success( res.message, 'Success'); 
								location.reload();
							}
							
						}			
					})
					
			}	
		});
	}


	/* Service Provider Dashboard Profile*/

	/* About Me Edit */
	$( '.desc-edit' ).click(function()
	{
		$(this).addClass( 'hidden' );
		$( '#desc-edit' ).removeClass( 'hidden' );
	})

	/* Cuisine Type */
	$( '.cusin-type' ).click(function()
	{
		$this = $(this);
		$this.addClass( 'hidden' );
		$( '.cuisine-save').removeClass( 'hidden' );
		$( '#cusin-type' ).addClass( 'hidden' );
		$("input[name='cuisine_type']").prop("type", "text");		
		//event.stopImmediatePropagation();
	});

	$( '.cuisine-save' ).on( 'click', function()
		{
			$this = $(this);
			console.log( 'Hello' );
			$.ajax({
				'type':'POST',
				'url':'http://localhost/iwant/provider/profile/',
				//'data':{ 'hello':'hello' },
				success:function(res)
				{
					$( '.cusin-type' ).removeClass( 'hidden' );
					$( '#cusin-type' ).removeClass( 'hidden' );
					$this.addClass( 'hidden' );					
					$("input[name='cuisine_type']").prop("type", "hidden");		
				}
			});
		})

});

/* Google AutoComplete  */	 

     var placeSearch, autocomplete; 

      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});
        autocomplete.addListener('place_changed', fillInAddress);        
      }

      function fillInAddress() 
	  {
        
        var place = autocomplete.getPlace();
       	$( 'input[name="suburb"]' ).val("");
		$( 'input[name="state"]').val("");
		$( 'input[name="postcode"]' ).val("");
		$( 'input[name="lat"]' ).val("");
		$( 'input[name="longs"]' ).val("");
		console.log( place.address_components );
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
        			$('input[name="state"]').val(value.long_name);
        		}

        		/* postcode */
        		if( value.types[0] == 'postal_code' )        		
        		{
        			$( 'input[name="postcode"]' ).val(value.long_name);
        		}  

        		/* Country */
        		if( value.types[0] == 'country' )        		
        		{
        			$( '#country' ).val(value.short_name);
        		}        		


        	});

		$( 'input[name="lat"]' ).val(place.geometry.location.lat());
		$( 'input[name="longs"]' ).val(place.geometry.location.lng());
		console.log( place.geometry.location.lat() );
		console.log( place.geometry.location.lng() );
		
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