
function get_url_parameter_by_name( name ) {
	name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
	var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
		results = regex.exec(location.search);
	return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

function populate_form_fields_value( gclid_id, referrer_id, source_id, medium_id, term_id, content_id, campaign_id, var1_id, var2_id, var3_id, var4_id, var5_id, var6_id, 
									 gclid, referrer, source, medium, term, content, campaign, var1, var2, var3, var4, var5, var6 ){
	
	if( gclid_id ){
		if( jQuery("#" + gclid_id ).length > 0 ){
			jQuery('input[id^="' + gclid_id + '"]').each(function(){
				jQuery(this).val( gclid );
			});
		}
	}
	if( referrer_id ){
		if( jQuery("#" + referrer_id ).length > 0 ){
			jQuery('input[id^="' + referrer_id + '"]').each(function(){
				jQuery(this).val( referrer );
			});
		}
	}
	if( source_id ){
		if( jQuery("#" + source_id ).length > 0 ){
			jQuery('input[id^="' + source_id + '"]').each(function(){
				jQuery(this).val( source );
			});
		}
	}
	if( medium_id ){
		if( jQuery("#" + medium_id ).length > 0 ){
			jQuery('input[id^="' + medium_id + '"]').each(function(){
				jQuery(this).val( medium );
			});
		}
	}
	if( term_id ){
		if( jQuery("#" + term_id ).length > 0 ){
			jQuery('input[id^="' + term_id + '"]').each(function(){
				jQuery(this).val( term );
			});
		}
	}
	if( content_id ){
		if( jQuery("#" + content_id ).length > 0 ){
			jQuery('input[id^="' + content_id + '"]').each(function(){
				jQuery(this).val( content );
			});
		}
	}
	if( campaign_id ){
		if( jQuery("#" + campaign_id ).length > 0 ){
			jQuery('input[id^="' + campaign_id + '"]').each(function(){
				jQuery(this).val( campaign );
			});
		}
	}
	if( var1_id ){
		if( jQuery("#" + var1_id ).length > 0 ){
			jQuery('input[id^="' + var1_id + '"]').each(function(){
				jQuery(this).val( var1 );
			});
		}
	}
	if( var2_id ){
		if( jQuery("#" + var2_id ).length > 0 ){
			jQuery('input[id^="' + var2_id + '"]').each(function(){
				jQuery(this).val( var2 );
			});
		}
	}
	if( var3_id ){
		if( jQuery("#" + var3_id ).length > 0 ){
			jQuery('input[id^="' + var3_id + '"]').each(function(){
				jQuery(this).val( var3 );
			});
		}
	}
	if( var4_id ){
		if( jQuery("#" + var4_id ).length > 0 ){
			jQuery('input[id^="' + var4_id + '"]').each(function(){
				jQuery(this).val( var4 );
			});
		}
	}
	if( var5_id ){
		if( jQuery("#" + var5_id ).length > 0 ){
			jQuery('input[id^="' + var5_id + '"]').each(function(){
				jQuery(this).val( var5 );
			});
		}
	}
	if( var6_id ){
		if( jQuery("#" + var6_id ).length > 0 ){
			jQuery('input[id^="' + var6_id + '"]').each(function(){
				jQuery(this).val( var6 );
			});
		}
	}
}
