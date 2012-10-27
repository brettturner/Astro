jQuery(function() {
	//Sets the lecture overview tabs
	var  children = jQuery('.views-field-field-lecture-location .field-content').children().length;
	if ( children == 0 ) {
		jQuery('#quicktabs-tab-lecture_details_in_quicktabs-1').parent().hide()
	}


	var  children = jQuery('.views-field-field-lecture-forum .field-content').children().length;
	if ( children == 0 ) {
		jQuery('#quicktabs-tab-lecture_details_in_quicktabs-2').parent().hide()
	}

    // Set outreach menu to active 
		jQuery('.node-type-outreach ul li.collapsed a[href="/outreach"]').parent().addClass('outreach');

	// Clear out newsletter field on click
	jQuery('#qklul-qklul').click(function(){
		this.value="";
	});
});
