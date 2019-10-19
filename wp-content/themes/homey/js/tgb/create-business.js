jQuery(document).ready(function(){
	//alert(tgb.ajaxURL);

	/*jQuery Snippet to check email address exists for the user or not*/
	jQuery("input#email_address_for_registration").blur(function(){

		//Empty HTML and Show Loader Before Ajax Call
		jQuery('#email_address_validation_message').html(' ');	
		jQuery('#email_address_validation_loader').show();
		
		var email_address = jQuery(this).val();

	    // This does the ajax request
	    jQuery.ajax({
	        url: tgb.ajaxURL,
	        data: {
	            'action': 'tgb_validate_email_address',
	            'email_address' : email_address
	        },
	        success:function(email_data) {
	            // This outputs the result of the ajax request
	            //console.log(email_data);
	            if(email_data == 'exists'){
	            	jQuery('#email_address_validation_message').html('Already Exists. Please use another email address');
	            }else if(email_data == 'not_exists'){
	            	jQuery('#email_address_validation_message').html('Available');
	            }else{
	            	jQuery('#email_address_validation_message').html(' ');	
	            }
	            //Hide Loader on Success
	            jQuery('#email_address_validation_loader').hide();
	        },
	        error: function(errorThrown){
	            //console.log(errorThrown);
	            //Hide Loader on Error
	            jQuery('#email_address_validation_loader').hide();
	        }
	    });  
	});
	
	/*jQuery Snippet to show Guides User as a Autocomplete Option*/
	jQuery( ".select_guides" ).autocomplete({

      source: function( request, response ) {
        jQuery.ajax({
          url: tgb.ajaxURL,
          dataType: "json",
          data: {
            q: request.term,
            action: 'tgb_autocomplete_guides',
          },
          success: function( data ) {
            //console.log(data);
            response(data);
          }
        });
      },
      minLength: 3,
      select: function( event, ui ) {
      	var id = jQuery( this ).attr('data-id');
      	jQuery('#'+id).val(ui.item.id);
      	//console.log(jQuery( this ).attr('data-id'));
        //console.log( ui.item ?  "Selected: " + ui.item.label : "Nothing selected, input was " + this.value);
      },
      open: function() {
        jQuery( this ).removeClass( "ui-corner-all" ).addClass( "ui-corner-top" );
      },
      close: function() {
        jQuery( this ).removeClass( "ui-corner-top" ).addClass( "ui-corner-all" );
      }
      
    });


	/*jQuery Snippet to create business account and do payment using ajax*/
	/*
	jQuery("form#business-payment-form").submit(function(e){

		e.preventDefault();
		alert('Success');
		// This does the ajax request
	    jQuery.ajax({
	        url: tgb.ajaxURL,
	        data: {
	            'action': 'tgb_create_business_do_payment',
	            'form_data' : jQuery('form#business-payment-form').serialize()
	        },
	        success:function(data) {
	            // This outputs the result of the ajax request
	            console.log(data);
	        },    
	        error: function(errorThrown){
	            console.log(errorThrown);
	        }
	    });  
	});
	*/
	/*jQuery Snippet to Mount Stripe Payment Form (Inline)*/
	   	// Create a Stripe client.
		var stripe = Stripe('pk_test_RTKw7N4nNG0Twz8rqzTniShu');
		// Create an instance of Elements.
		var elements = stripe.elements();

		// Custom styling can be passed to options when creating an Element.
		// (Note that this demo uses a wider set of styles than the guide below.)
		var style = {
		  base: {
		    color: '#32325d',
		    fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
		    fontSmoothing: 'antialiased',
		    fontSize: '16px',
		    '::placeholder': {
		      color: '#aab7c4'
		    }
		  },
		  invalid: {
		    color: '#fa755a',
		    iconColor: '#fa755a'
		  }
		};

		// Create an instance of the card Element.
		var card = elements.create('card', {style: style});

		// Add an instance of the card Element into the `stripe-card-element` <div>.
		card.mount('#stripe-card-element');

		// Handle real-time validation errors from the card Element.
		card.addEventListener('change', function(event) {
		  var displayError = document.getElementById('card-errors');
		  if (event.error) {
		    displayError.textContent = event.error.message;
		  } else {
		    displayError.textContent = '';
		  }
		});

		// Handle form submission.
		var form = document.getElementById('business-payment-form');
		form.addEventListener('submit', function(event) {
		  event.preventDefault();

		  stripe.createToken(card).then(function(result) {
		    if (result.error) {
		      // Inform the user if there was an error.
		      var errorElement = document.getElementById('card-errors');
		      errorElement.textContent = result.error.message;
		    } else {
		      // Send the token to your server.
		      stripeTokenHandler(result.token);
		    }
		  });
		});

		// Submit the form with the token ID.
		function stripeTokenHandler(token) {
		  // Insert the token ID into the form so it gets submitted to the server
		  var form = document.getElementById('business-payment-form');
		  var hiddenInput = document.createElement('input');
		  hiddenInput.setAttribute('type', 'hidden');
		  hiddenInput.setAttribute('name', 'stripeToken');
		  hiddenInput.setAttribute('value', token.id);
		  form.appendChild(hiddenInput);

		  // Submit the form
		  form.submit();
		}
	/*jQuery Snippet to Mount Stripe Payment Form (Inline) End*/	

});