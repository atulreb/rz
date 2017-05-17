jQuery(document).ready(function(){
	if(jQuery(".group1")[0]){
		jQuery('.group1').start(function(cur){
			console.log(cur);
			 jQuery('#info').val(cur);
		});
	}
})