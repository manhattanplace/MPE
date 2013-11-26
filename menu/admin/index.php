<?php require_once 'func/admin.class.php'; $authorizer = new Authorizer; $uid = $authorizer->isLogged(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mr. Menu - Main</title>
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/index.js" type="text/javascript"></script>

<link href="css/stile.css" rel="stylesheet" type="text/css" />

</head>

<body>

<div id="main">

	<div id="header"><?php include 'inc/header.php';?></div>

    <div id="middle">
    
        <div id="left-column"><?php include 'inc/menu.php';?></div>
        
        <div id="center-column">
            <div class="top-bar">
                    <h1>Menu List (<?php include 'inc/vars.php'; echo MT_TABLE;?>)</h1>
            </div><br />
            <div id="lista"></div>		  
        </div>
        
        <div id="right-column">
            <strong class="h">INFO</strong>
            <div class="box">Here you can edit, add and remove menu items. You can select or create a new table with a simple click on the left menu.</div>
        </div>
        
    </div>

<div id="footer"></div>

</div>

</body>
</html>