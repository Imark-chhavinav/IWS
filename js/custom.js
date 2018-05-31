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
	if( $("#CreateJob").length > 0 )
	{     
		$("#CreateJob").validate({
		   rules: {
			event_name:		{  required:true },
			service_type:	{  required:true },			
			event_date:		{  required:true },			
			event_time:		{  required:true },			
			number_guest:	{  required:true },			
			bidding_Enddate:{  required:true }		
		   },		   
		 submitHandler: function() {
					 $.ajax({
						type:"POST",
						url:'http://iwantservice.imarkclients.com/wp-json/jobs/createJob',
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
								//location.reload();
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