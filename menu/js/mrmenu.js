function mrquery_dropdown(){
	$('li.parent').hover(
		function() { $('ul', this).show("fast"); },
		function() { $('ul', this).hide("fast"); }
	);
}
$(document).ready(function(){mrquery_dropdown();});