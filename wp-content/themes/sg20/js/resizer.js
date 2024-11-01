/**
 * resizer.js
 * Font resizer on html element
 */
jQuery(document).ready(function()
{
// check for existing resize var
    var resized = localStorage['resized'];
    if (resized) {
		jQuery('html').css('fontSize',resized)
		az_set_active_class(resized);	
    }

	jQuery('.resizer').click(function(){
		newsize = jQuery(this).data('size');
		localStorage.setItem('resized', newsize);
		az_set_active_class(newsize);
	});
});
	
	function az_set_active_class(newsize){
		var all = jQuery('.resizer');
		all.each(function(){
			jQuery(this).removeClass('active');
			if (jQuery(this).data('size') == newsize)
			   jQuery(this).addClass('active');  
			jQuery('html').css('fontSize',newsize);
		});
	}