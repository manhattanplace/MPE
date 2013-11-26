jQuery.noConflict();
function mrquery_dropdown(){
	jQuery('li.parent').hover(
		function() { jQuery('ul', this).show("fast"); },
		function() { jQuery('ul', this).hide("fast");; }
	);
}
jQuery(document).ready(function(){mrquery_dropdown();});