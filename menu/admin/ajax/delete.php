<?php require_once '../func/admin.class.php'; $authorizer = new Authorizer; $uid = $authorizer->isLogged(); ?>
<?php
require_once '../func/admin.class.php';
require_once '../inc/vars.php';

$delete = new Delete(MT_TABLE);
if($_POST['_id']) {
	$delete -> del($_POST['_id']);
	echo '<p><a href="#" onclick="return c_delete()">Close</a></p>';
}
?>