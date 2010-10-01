jQuery(function(){
	if(jQuery.browser.mobile)
		jQuery('#comments').hide();
	
	if(jQuery.browser.msie)
		jQuery('.lu:first-child').addClass('first-child')
});


