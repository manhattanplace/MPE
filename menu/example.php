<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/mrmenu.css" media="screen">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/mrmenu.js"></script>
<title>Mr.Menu Example</title>

<?php
//This is the file to be included:
include 'menu.class.php';
//This is the class initialization (with the table name as a parameter)
$menu = new Menu("menu");
//I don't need any class to display my menu, I disable it like so
$menu->css_class ="0";
$menu->css_id ="0";
//With this option I set a special menu item
$menu->special ="Special";
?>
<style>
.div_border {
	border:1px solid;
	display:block;
	margin: 10px auto;
	padding:50px;
	width:800px;
}
</style>
</head>

<body>
<div class="div_border">

	<div class="mrmenu_hor">
	<?php 
	//This is the actual menu, can be placed anywhere you like!
	$menu->makeMenu(); 
	?>
    </div>
    
</div>

<div class="div_border">
	<p>This is a vertical menu example, the css is pasted directly from <a href="http://www.dynamicdrive.com/style/csslibrary/item/nested_side_bar_menu/">dynamicdrive</a>:</p>
	<p>&nbsp;</p>
    <style type="text/css">
		/*Credits: Dynamic Drive CSS Library */
		/*URL: http://www.dynamicdrive.com/style/ */
		
		.sidebarmenu ul{
		margin: 0;
		padding: 0;
		list-style-type: none;
		font: bold 13px Verdana;
		width: 180px; /* Main Menu Item widths */
		border-bottom: 1px solid #ccc;
		}
		 
		.sidebarmenu ul li{
		position: relative;
		}
		
		/* Top level menu links style */
		.sidebarmenu ul li a{
		display: block;
		overflow: auto; /*force hasLayout in IE7 */
		color: white;
		text-decoration: none;
		padding: 6px;
		border-bottom: 1px solid #778;
		border-right: 1px solid #778;
		}
		
		.sidebarmenu ul li a:link, .sidebarmenu ul li a:visited, .sidebarmenu ul li a:active{
		background-color: #012D58; /*background of tabs (default state)*/
		}
		
		.sidebarmenu ul li a:visited{
		color: white;
		}
		
		.sidebarmenu ul li a:hover{
		background-color: black;
		}
		
		/*Sub level menu items */
		.sidebarmenu ul li ul{
		position: absolute;
		width: 170px; /*Sub Menu Items width */
		top: 0;
		/*--------*/
		left: 180px;
		display: none;
		/*--------*/
		}
		
		.sidebarmenu a.parent {
			background: url(css/img/right.gif) no-repeat 97% 50%;
		}
		
		/* Holly Hack for IE \*/
		* html .sidebarmenu ul li { float: left; height: 1%; }
		* html .sidebarmenu ul li a { height: 1%; }
		/* End */
	</style>
    
	<div class="sidebarmenu">
    <?php
	//I will now create another menu with different options!
	
	//With this option I appended the url http://www.themeforest.net before each link
	$menu->url ="http://www.themeforest.net/";
	//I don't need the class so I disable it
	$menu->css_class="0";
	//I don't need the id so I disable it
	$menu->css_id="0";
	//This is the actual menu, can be called how many time you like!
	$menu->makeMenu();
	?>
    </div>
</div>
<div class="div_border">
	<?php
    //this is the footer, can be placed anywhere you like!
    $menu->makeFooter();
    ?>
</div>
</body>
</html>