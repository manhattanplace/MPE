<?php require_once '../func/admin.class.php'; $authorizer = new Authorizer; $uid = $authorizer->isLogged(); ?>
<?php
require_once '../func/admin.class.php';
require_once '../inc/vars.php';

$shifter= new Shifter(MT_TABLE);

$shifter->sorter($_POST['_id'],$_POST['_direction']);
?>
