<?php require_once '../func/admin.class.php'; $authorizer = new Authorizer; $uid = $authorizer->isLogged(); ?>
<?php
require_once '../func/admin.class.php';
require_once '../inc/vars.php';

if($_POST['_check']) {
	if($_POST['_name']) {
		$table = new Table(MT_TABLE);
		$table -> create($_POST['_name']);
		die('<p>Table created succesfully</p><p><a href="#" onclick="return c_new_table()">Close</a></p>');
	}
	else {echo '<span class="error">Please provide a table name</span>';}
}
?>
<div id="form-small">	
    <form id="new_table" method="post" action="">
	
    <div class="form-row">
	<div class="field-label">Table Name</div>
	<div class="field-widget"><input type="text" name="_name" class="required" size="20"></div>
    </div>
	
    <input type="hidden" name ="_check" value="1"/>
	<input type="submit" value="Create" onclick="return new_table()"/>
	</form>
</div>