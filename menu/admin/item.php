<?php ob_start(); ?>
<?php require_once 'func/admin.class.php'; $authorizer = new Authorizer; $uid = $authorizer->isLogged(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mr. Menu - Add/Modify an item</title>
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
				<h1>Item</h1>
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
                
                if($_GET['id']) {
                    $item = new Item(MT_TABLE);
                    $row = $item->row($_GET['id']);
                }
        
                //print the html form
                ?>
                <div class="table">
        		<img src="img/bg-th-left.gif" width="8" height="7" alt="" class="left" />
            	<img src="img/bg-th-right.gif" width="7" height="7" alt="" class="right" />
                <form method="POST" action="item.php">
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
                        <td class="first">Link (Leave blank for parent menu)</td> 
                        <td class="last"><input type="text" name="link" value="<?php echo $row ['link_url'];?>"></td>
                    </tr>
                </tbody>
                </table>
                <input type="hidden" name="_check" value="1"/>
                <input type="hidden" name="_id" value="<?php echo $_GET['id'];?>"/>
                <input type="submit" value="Go">
                </form>
                
                <?php if($_GET['id']) { ?>
                    <p><a href="sub_item.php?parent_id=<?php echo $_GET['id'];?>" class="button">Add child</a></p>
                              
                    <?php 
                    if($_GET['has_child']) {?>
                        <?php 
                        if ( $array = $item->child($_GET['id']) ) {
							?>
                            <h1>This item has these childs:</h1>
                            <div id="child-list">
								<?php
                                foreach ($array as $k => $v) {
                                    echo '<a href = "sub_item.php?id=' . $v['id'] . '">' . $v['label'] .'</a><br>' ."\n";
                                }
                                ?>
                            </div>
                            <?php 
                        }
                    }
                }
        }?>
<?php

function validate_form() {
	$errors = array();
	if (! strlen(trim($_POST['label']))) {
        $errors[] = 'You must provide a name for the item.';
    }
	return $errors;
}

function process_form() {
	
	echo '<div class="table">';
	$item = new Item(MT_TABLE);
	//Strips html
	$slabel = strip_tags($_POST['label']);
	$slink = strip_tags($_POST['link']);
	
	if (!empty($_POST['_id'])) {
		$query = "UPDATE ".$item->table." 
					SET label = '$slabel',
					link_url = '$slink'
					WHERE id = '" . $_POST['_id'] . "';";}			
	else {
		$query = "INSERT INTO ".$item->table."(label, link_url) 
				  VALUES ('$slabel','$slink');";
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
			<div class="box">
                Here you can add a new item. 
                This is a top item in the menu, if you leave the link empty, the system will treat it as a parent. 
                Otherwise it would be a normal button.
            </div>
	  </div>
	</div>
	<div id="footer"></div>
</div>

</body>
</html>

<?php
/*
include 'inc.db.php';

	if ($_POST['_Modifica_check']) {
		
		if ($form_errors = validate_form()) {
			show_form($form_errors);
		} else  {
			process_form();
		}
	}
elseif (empty ($_GET['id'])) {echo 'Non puoi accedere direttamente a questa pagina';
}
else {
    
    show_form();
}
    
Function show_form($errors = '') {

    if ($errors) {
        $error_text = '<table><tr><td>Please check this errors:';
        $error_text .= '</td><td><ul><font color="#000000"><li>';
        $error_text .= implode('</li><li>',$errors);
        $error_text .= '</li></font></ul></td></tr></table>';
    } else {
        
        $error_text = '';
    }

print $error_text;

include 'inc.db.php';

$id = $_GET['id'];
$query = "SELECT * FROM ". $table . " WHERE id = '" . $id . "' ";
$result = mysql_query($query) or die(mysql_error());
$row = mysql_fetch_array($result);

//print the html form
?>

<form method="post" action="<?php $_SERVER[PHP_SELF]?>">

<p>Editor:<br/>
<table> 
<tr> 
<td>Nome</td> 
<td><input type="text" name="label" value="<?php echo $row ['label']; ?>"></td></tr> 
<tr> 
<?php if (empty($_GET[child])) { echo '<td>Link</td> 
<td><input type="text" name="link" value="' . $row ['link_url'] . '"></td></tr>';
echo '<td>Parent</td> 
<td><input type="text" name="parent" value="' . $row ['parent_id'] . '"></td></tr>';


} else {};?>
</table>
<br/>
<input type="submit" value="Edit">
<input type="hidden" name="_Modifica_check" value="1"/>
<input type="hidden" name="_up" value="1"/>
<br/>
<br/>
</p>
</form>
<p><?php echo '<a href="inc/func/func.delete.php?id='. $_GET['id']. '"><img src="imgs/delete.png" width="16" height="16" alt="cancella" /></a>' ?></p>
<p><strong>Sottomenù:</strong></p>
<p>Aggiungi un sottomenù (ove possibile)</p>

<?php include ('form.additem.php'); ?>

<p>Eventuali sottomenù esistenti:</p>
<p>
  <?php

$query = "SELECT * FROM ". $table . " WHERE parent_id = '" . $id . "' ";
$result = mysql_query($query) or die(mysql_error());
$row = mysql_fetch_array($result);

if (mysql_num_rows($result) != 0) {

$sql = "SELECT id, label, link_url, parent_id FROM " . $table . " WHERE parent_id = " .$id. " ORDER BY parent_id ASC";
$items = mysql_query($sql);
while ($obj = mysql_fetch_object($items)) {
   		$parent_menu[$obj->id]['id'] = $obj->id;
        $parent_menu[$obj->id]['label'] = $obj->label;
        $parent_menu[$obj->id]['link'] = $obj->link_url;
}
mysql_free_result($items);

function makeFORM($array) {
        $return = '<br>';
 
        if (is_array($array) && count($array) > 0) {
                foreach ($array as $k => $v) {
			
							$return .= '<a href = "edit.php?id=' . $v[id] . '">' . $v[label] .'</a><br>' ."\n";
							
                }
        } else {}
         return $return;
}
print_r(makeFORM($parent_menu));
echo '<p><a href="editor.php">indietro<a></p>';
}
}

function validate_form() {
$errors = array();

 //label
	if (! strlen(trim($_POST['label']))) {
        $errors[] = 'Pregasi inserire il nome della voce menu.';
    }
	/*elseif (strlen($_POST['label']) > 40) {
     $errors[] = 'Name field is too long.';
    }*/
	
 //link
 /*
	if (! strlen(trim($_POST['link']))) {
        $errors[] = 'Surname field is required.';
    }
	elseif (strlen($_POST['link']) > 40) {
     $errors[] = 'Surname field is too long.';
    }
*/

/*
return $errors;
}

function process_form() {
include 'inc.db.php';
//Toglie tutti i tag html
$slabel = strip_tags($_POST['label']);
$slink = strip_tags($_POST['link']);
$sparent = strip_tags($_POST['parent']);

if (!empty($_POST[_up])) {echo $query = "UPDATE $table 
				SET label = '$slabel',
				link_url = '$slink',
				parent_id = '$sparent'
				WHERE id = '" . $_GET['id'] . "';";}
				
else {$query = "INSERT INTO $table(label, link_url, parent_id) 
	          VALUES ('$slabel',
			  '$slink',
			  '$sparent');";}
	
$result = mysql_query($query) or die(mysql_error());

include 'inc.result.php';
}
*/
?>