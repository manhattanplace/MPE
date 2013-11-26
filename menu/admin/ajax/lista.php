<?php require_once '../func/admin.class.php'; $authorizer = new Authorizer; $uid = $authorizer->isLogged(); ?>
<?php
require_once '../func/admin.class.php';
require_once '../inc/vars.php';

$admin = new Admin(MT_TABLE);
?>
<div class="table">
    <img src="img/bg-th-left.gif" width="8" height="7" alt="" class="left" />
    <img src="img/bg-th-right.gif" width="7" height="7" alt="" class="right" />
	<table class="listing" cellpadding="0" cellspacing="0">
		<tr>
			<th class="first" width="177">Label</th>
			<th>Up</th>
			<th>Down</th>
			<th class="last">Delete</th>
		</tr>

<?php
$admin->lista();
?>

</table>
</div>
<div id="delete" class="popup"></div>