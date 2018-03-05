/*Site core*/
jQuery(document).ready(function(){
    jQuery('.elegant_list_properties').DataTable( {
    	 aLengthMenu: [
	        [25, 50, 100, 200, -1],
	        [25, 50, 100, 200, "All"]
	    ],
	    iDisplayLength: -1	
	});


    //For the primary filters
    jQuery('.elegant_filters li').on('click', function(e){

    	jQuery(this).toggleClass('selected');

    	var filters = [];
    	jQuery('.elegant_filters li.selected').each(function(){
    		var val = jQuery(this).attr('data-id');
    		filters.push('.'+val);    		
    	});
    	

    	if (jQuery(filters).length < 1) {
    		jQuery('.elegant_list_properties tr.propertyrow').show();
    	} else {
    		jQuery('.elegant_list_properties tr.propertyrow').hide();
	    	jQuery(filters.join('')).show();
	    	console.log(filters);
    	}   	
    	
    })

    //For the feature filters. 
    jQuery('.features_toggle span.button').on('click',function(){
		
	    jQuery(this).toggleClass('buttonSelected');
	    
	    var allFeature = [];
	    jQuery(".features_toggle span.button.buttonSelected").each(function(){
	    	var id = this.id;
	      	allFeature.push('.'+this.id);
	    });

	   	jQuery('.elegant_list_properties tr').show();
	    jQuery(allFeature.join(", ")).hide();
	    
	});


	//Click the proerty row to make it selected. Add it to the list of properties at the top of the list. 
	// On click again, remove it from the list and move back down to the bottom. 
	jQuery('tr.propertyrow').on('click',function() {
		jQuery(this).toggleClass('rowselected');		

		var allRows = [];
		jQuery(".rowselected").each(function(){
	    	var id = this.id;
	      	allRows.push(this.id);
	    });
	    jQuery(allRows).each(function(){
	    	var row = jQuery('#'+this).detach();
	    	jQuery(row).insertBefore('tr.propertyrow:first');
	    })

	});

	//Stop the property row from toggling when clicking on the inputs. 
	jQuery('.message-container').on('click', function(e){
		e.stopPropagation();  
	})


	//Ajax to send the ids and form data over to the email program
	jQuery('#emailSubmit').on('click', function(){

		//Get the email form content and creat an array [email/s, title, body]
		tinyMCE.triggerSave();
		var newEmailForm = [];
			var email = jQuery('input.email').val();
			var title = jQuery('input.title').val();
			var emailMessage = jQuery('textarea#emailMessage').val();
		newEmailForm.push([email,title,emailMessage]);
		//console.log(newEmailForm);
		
		//Get each selected row and create an array [id,message,price];
		var properties = [];
		jQuery('tr.rowselected').each(function(){
			var id = this.id;
			var message = jQuery(this).find('textarea').val();		
			var price = jQuery(this).find('input.price').val();
			properties.push([this.id,message,price]);
		});
		
		var datastring = {
			newEmailForm: newEmailForm,
			properties: properties
		};

		//got the data, make the ajax request
		jQuery(function(){
			jQuery.ajax({
				type:'POST',
				data:{
					action: 'elegantSendEmail',
					datastring: datastring
				},
				url: ajaxurl,
				success: function(data){
					alert(data);
				}
			})
		})
	
	});

	jQuery('.backtotop').click(function(){
    	jQuery("html, body").animate({ scrollTop: 0 }, 600);
    	return false;
	});

});
