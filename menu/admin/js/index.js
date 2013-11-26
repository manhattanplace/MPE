$(document).ready(function(){
	lista_refresh();
});
//this function refreshes the list
function lista_refresh(){
	$.ajax({  
        type: "POST", url: "ajax/lista.php",
		beforeSend: function(){$("#lista").html('<p><img src="css/ajax-loader.gif" width="16" height="16" alt="loading" /><p>');},
		success: function(html){$("#lista").html(html);}  
     });
	return true;
}
//Shift.php
function shifter(id,direction) {
	$.ajax({ 
		type: "POST",url: "ajax/shifter.php",data: "_id="+id+"&_direction="+direction, 
		beforeSend: function(){$("#lista").html('<p><img src="css/ajax-loader.gif" width="16" height="16" alt="loading" /><p>');},
		success: function(html){lista_refresh();}
	});
    return false;
}
//inc/menu.php
function s_select_table() {
	$.ajax({ 
		type: "POST",url: "ajax/select_table.php", 
		beforeSend: function(){$("#select_table").html('<p><img src="css/ajax-loader.gif" width="16" height="16" alt="loading" /><p>');},
		success: function(html){$("#select_table").html(html).toggle();}
	});
    return false;
}
function select_table(table) {
	$.ajax({ 
		type: "POST",url: "ajax/select_table.php",data:"_table="+table,
		beforeSend: function(){$("#select_table").html('<p><img src="css/ajax-loader.gif" width="16" height="16" alt="loading" /><p>');},
		success: function(html){$("#select_table").html(html).show("fast");window.location.reload();}
	});
    return false;
}
function s_new_table() {
	$.ajax({ 
		type: "POST",url: "ajax/new_table.php",
		beforeSend: function(){$("#new_table").html('<p><img src="css/ajax-loader.gif" width="16" height="16" alt="loading" /><p>');},
		success: function(html){$("#new_table").html(html).toggle();}
	});
	return false;
}
function new_table(){
	var str = $("form").serialize();
	$.ajax({ 
		type: "POST",url: "ajax/new_table.php",data:str,
		beforeSend: function(){$("#new_table").html('<p><img src="css/ajax-loader.gif" width="16" height="16" alt="loading" /><p>');},
		success: function(html){$("#new_table").html(html).show("fast");}
	});
	return false;
}
function c_new_table() {
	$("#select_table").html("").hide("fast");
	$("#new_table").html("").hide("fast");
	return false;
}
function s_delete(id){
	var answer = confirm("Are you sure you wanna delete the item? (deleting a parent will delete every child it may have)")
	if (answer){
		$.ajax({ 
			type: "POST",url: "ajax/delete.php",data:"_id="+id,
			beforeSend: function(){$("#delete").html('<p><img src="css/ajax-loader.gif" width="16" height="16" alt="loading" /><p>');},
			success: function(html){$("#delete").html(html).show("fast");}
		});
		return false;
	}
}
function c_delete() {
	$("#delete").html("").hide("fast");
	lista_refresh();
	return false;
}