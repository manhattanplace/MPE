<?php ob_start(); ?>
<?php require_once 'func/admin.class.php'; $authorizer = new Authorizer; $uid = $authorizer->isLogged(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mr. Menu - Add/Modify a sub-item</title>
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/index.js" type="text/javascript"></script>

<link href="css/stile.css" rel="stylesheet" type="text/css" />

</head>

<body>


<body>

<div id="main">
	<div id="header"><?php include 'inc/header.php';?></div>

<div id="middle">
	<div id="left-column"><?php include 'inc/menu.php';?></div>
    
    <div id="center-column">
		<div class="top-bar">
				<h1>Sub-Item</h1>
	  	</div><br />
            <?php 
            require_once 'func/admin.class.php';
            require_once 'inc/vars.php';
                
            if ($_POST['_check']) {
                if ($form_errors = validate_form()) {
                    show_form($form_errors);
                } else  {
                    process_form();
                }
            } else { show_form(); }
            
            function show_form($errors = '') {
        
                if ($errors) {
                    $error_text .= '<p class="error">';
                    $error_text .= implode('</p><p class="error">',$errors);
                    $error_text .= '</p>';
                } else {
                    
                    $error_text = '';
                }
            
                echo $error_text;
                
				$item = new Item(MT_TABLE);
                if($_GET['id']) { 
                    $row = $item->row($_GET['id']);
                }
                //print the html form
                ?>
                <div class="table">
        		<img src="img/bg-th-left.gif" width="8" height="7" alt="" class="left" />
            	<img src="img/bg-th-right.gif" width="7" height="7" alt="" class="right" />
                <form method="POST" action="sub_item.php">
                <table class="listing" cellpadding="0" cellspacing="0" id="tabella">
                <thead>
                    <tr>
                        <th class="first" width="177">Name</th>
                        <th class="last">Field</th>
                    </tr>
                </thead>
                <tbody>
                    <tr> 
                        <td class="first">Label</td> 
                        <td class="last"><input type="text" name="label" value="<?php echo $row['label']; ?>"></td>
                    </tr>
                    <tr>
                        <td class="first">Link</td> 
                        <td class="last"><input type="text" name="link" value="<?php echo $row ['link_url'];?>"></td>
                    </tr>
                    <tr>
                    	<td class="first">Parent</td> 
                        <td class="last">
                            <select id="parent_id" name="parent_id"><option value="">Choose one..</option>
                            <?php $item->select($_GET['parent_id']); ?>
                            </select>
                        </td>
                    </tr>
                </tbody>
                </table>
                <input type="hidden" name="_check" value="1"/>
                <input type="hidden" name="_id" value="<?php echo $_GET['id'];?>"/>
                <input type="submit" value="Go">
                </form>
                
<?php
			}

function validate_form() {
	$errors = array();
	if (! strlen(trim($_POST['label']))) {
        $errors[] = 'You must provide a name for the item.';
    }
	if (! strlen(trim($_POST['link']))) {
        $errors[] = 'You must provide a link for the item.';
    }
	if (! strlen(trim($_POST['parent_id']))) {
        $errors[] = 'You must provide the parent of the item.';
    }
	return $errors;
}

function process_form() {
	
	echo '<div class="table">';
	$item = new Item(MT_TABLE);
	//Strips html
	$slabel = strip_tags($_POST['label']);
	$slink = strip_tags($_POST['link']);
	$sparent_id = strip_tags($_POST['parent_id']);
	
	if (!empty($_POST['_id'])) {
		$query = "UPDATE ".$item->table." 
					SET label = '$slabel',
					link_url = '$slink',
					parent_id='$sparent_id'
					WHERE id = '" . $_POST['_id'] . "';";}			
	else {
		//Kills all the link that the main menu may have
		$query = "UPDATE ".$item->table." SET link_url = '',parent_id = '' WHERE id = '$sparent_id';";
		$result = mysql_query($query) or die(mysql_error());
		//Set insert query
		$query = "INSERT INTO ".$item->table."(label, link_url, parent_id) VALUES ('$slabel','$slink','$sparent_id');";
	}
	
	$result = mysql_query($query) or die(mysql_error());
	
	//retrieve the last inserted id
	$id = mysql_insert_id();
	//make it the value of order from the same table
	
	$item->order($id);
	
	echo '<p>Item correctly handled</p>';
	echo '<p>You are being automatically redirected.</p>';
	
	header('refresh: 1;url=index.php');
}
?>	

		</div>
	</div>
		<div id="right-column">
			<strong class="h">INFO</strong>
			<div class="box">Here you can add a new sub-item. This is a child item in the menu, you must provide a parent and a link. Please note that if the parent already has a link will appear in red, selecting this one as a parent will delete the link!</div>
	  </div>
	</div>
	<div id="footer"></div>
</div>

</body>
</html>