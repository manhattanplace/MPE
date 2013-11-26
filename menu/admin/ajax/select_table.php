<?php require_once '../func/admin.class.php'; $authorizer = new Authorizer; $uid = $authorizer->isLogged(); ?>
<?php
require_once '../func/admin.class.php';
require_once '../inc/vars.php';

function makefile($file,$table) {
	$fh = fopen($file, 'w') or die("Error opening file!");

	fwrite($fh, "<?php define(MT_TABLE,'".$table."'); ?>");
	fclose($fh);
}

if($_POST['_table']) {
	$file = '../inc/vars.php';
	if (!is_writable($file)) {
		if (chmod($file, 0777)) {
			makefile($file,$_POST['_table']);
		} else {
			echo '<div id="error">Your inc/vars.php file is not writable! (hint: chmod 0777)</div>';
		}
	} else {
		makefile($file,$_POST['_table']);
	}
	die("The table: ".$_POST['_table']." has been correctly selected.");
}

$admin = new Table(MT_TABLE);
?>
<div id="form-small">
    <select id="gruppo" name="gruppo" onchange="table = this.options[this.selectedIndex].value; return select_table(table);"><option value="0">Choose one..</option>
    <?php
    $admin -> select();
    ?>
    </select>
</div>